<link href="../style/pagination.css" rel="stylesheet" type="text/css">
<?php
	/*
		Place code to connect to your DB here.
	*/
function pagination($tbl_name, $tbl_where, $limit,$targetpage){

	// How many adjacent pages should be shown on each side?
	$adjacents = 3;

	/*
	   First get total number of rows in data table.
	   If you have a WHERE clause in your query, make sure you mirror it here.
	*/
	if ($tbl_where != ''){
		if (preg_match("/\bWHERE\b/i", strtoupper($tbl_where))) {
			$tbl_where = "$tbl_where";
		} else {
		   $tbl_where = "WHERE $tbl_where";
		}

	}
	$query = "SELECT COUNT(*) as num FROM $tbl_name $tbl_where";
	$total_pages = mysql_fetch_array(mysql_query($query));
	$total_pages = $total_pages[num];


	/* Setup vars for query. */
//	$targetpage = "filename.php"; 	//your file name  (the name of this file)
//	$limit = 2; 								//how many items to show per page
						//if no page var is given, set start to 0

	/* Get data. */
	/* Setup page vars for display. */
	$page = $_GET['page'];
	if ($page == 0) $page = 1;					//if no page var is given, default to 1.
	$prev = $page - 1;							//previous page is page - 1
	$next = $page + 1;							//next page is page + 1
	$lastpage = ceil($total_pages/$limit);		//lastpage is = total pages / items per page, rounded up.
	$lpm1 = $lastpage - 1;						//last page minus 1

	/*
		Now we apply our rules and draw the pagination object.
		We're actually saving the code to a variable in case we want to draw it more than once.
	*/
	$pagination = "";
	if($lastpage > 1)
	{
		$pagination .= "<div class=\"pagination\">";
		//previous button
		if ($page > 1)
			$pagination.= "<a href=\"$targetpage&page=$prev\">&laquo prev</a> ";
		else
			$pagination.= "<span class=\"disabled\">&laquo prev</span> ";

		//pages
		if ($lastpage < 7 + ($adjacents * 2))	//not enough pages to bother breaking it up
		{
			for ($counter = 1; $counter <= $lastpage; $counter++)
			{
				if ($counter == $page)
					$pagination.= "<span class=\"current\">$counter</span> ";
				else
					$pagination.= "<a href=\"$targetpage&page=$counter\">$counter</a> ";
			}
		}
		elseif($lastpage > 5 + ($adjacents * 2))	//enough pages to hide some
		{
			//close to beginning; only hide later pages
			if($page < 1 + ($adjacents * 2))
			{
				for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
				{
					if ($counter == $page)
						$pagination.= "<span class=\"current\">$counter</span> ";
					else
						$pagination.= "<a href=\"$targetpage&page=$counter\">$counter</a> ";
				}
				$pagination.= "...";
				$pagination.= "<a href=\"$targetpage&page=$lpm1\">$lpm1</a> ";
				$pagination.= "<a href=\"$targetpage&page=$lastpage\">$lastpage</a> ";
			}
			//in middle; hide some front and some back
			elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
			{
				$pagination.= "<a href=\"$targetpage&page=1\">1</a> ";
				$pagination.= "<a href=\"$targetpage&page=2\">2</a> ";
				$pagination.= "...";
				for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
				{
					if ($counter == $page)
						$pagination.= "<span class=\"current\">$counter</span> ";
					else
						$pagination.= "<a href=\"$targetpage&page=$counter\">$counter</a> ";
				}
				$pagination.= "...";
				$pagination.= "<a href=\"$targetpage&page=$lpm1\">$lpm1</a> ";
				$pagination.= "<a href=\"$targetpage&page=$lastpage\">$lastpage</a> ";
			}
			//close to end; only hide early pages
			else
			{
				$pagination.= "<a href=\"$targetpage&page=1\">1</a> ";
				$pagination.= "<a href=\"$targetpage&page=2\">2</a> ";
				$pagination.= "...";
				for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++)
				{
					if ($counter == $page)
						$pagination.= "<span class=\"current\">$counter</span> ";
					else
						$pagination.= "<a href=\"$targetpage&page=$counter\">$counter</a> ";
				}
			}
		}

		//next button
		if ($page < $counter - 1)
			$pagination.= "<a href=\"$targetpage&page=$next\">next  &raquo</a> ";
		else
			$pagination.= "<span class=\"disabled\">next &raquo</span> ";
		$pagination.= "</div>\n";
	}
	return $pagination;
}
?>
