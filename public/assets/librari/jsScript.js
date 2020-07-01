function countdown(yr,m,d,hr,min){
	theyear=yr;themonth=m;theday=d;thehour=hr;theminute=min;
	var today=new Date();
	var todayy=today.getYear();
	if (todayy < 1000) {
	todayy+=1900; }
	var todaym=today.getMonth();
	var todayd=today.getDate();
	var todayh=today.getHours();
	var todaymin=today.getMinutes();
	var todaysec=today.getSeconds();
	var todaystring1=montharray[todaym]+" "+todayd+", "+todayy+" "+todayh+":"+todaymin+":"+todaysec;
	var todaystring=Date.parse(todaystring1)+(tz*1000*60*60);
	var futurestring1=(montharray[m-1]+" "+d+", "+yr+" "+hr+":"+min);
	var futurestring=Date.parse(futurestring1)-(today.getTimezoneOffset()*(1000*60));
	var dd=futurestring-todaystring;
	var dday=Math.floor(dd/(60*60*1000*24)*1);
	var dhour=Math.floor((dd%(60*60*1000*24))/(60*60*1000)*1);
	var dmin=Math.floor(((dd%(60*60*1000*24))%(60*60*1000))/(60*1000)*1);
	var dsec=Math.floor((((dd%(60*60*1000*24))%(60*60*1000))%(60*1000))/1000*1);
	if(dday<=0&&dhour<=0&&dmin<=0&&dsec<=0){
		document.getElementById('count2').innerHTML=current;
		document.getElementById('count2').style.display="block";
		document.getElementById('count2').style.width="390px";
		document.getElementById('dday').style.display="none";
		document.getElementById('dhour').style.display="none";
		document.getElementById('dmin').style.display="none";
		document.getElementById('dsec').style.display="none";
		document.getElementById('days').style.display="none";
		document.getElementById('hours').style.display="none";
		document.getElementById('minutes').style.display="none";
		document.getElementById('seconds').style.display="none";
		document.getElementById('spacer1').style.display="none";
		document.getElementById('spacer2').style.display="none";
		return;
	}
	else {
		document.getElementById('count2').style.display="none";
//		document.getElementById('dday').style.display="none";
		document.getElementById('dday').innerHTML=dday;
		document.getElementById('dhour').innerHTML=dhour;
		document.getElementById('dmin').innerHTML=dmin;
		document.getElementById('dsec').innerHTML=dsec;
		setTimeout("countdown(theyear,themonth,theday,thehour,theminute)",1000);
	}
}

function ubahKelas(aksi,jenis,page){
	var rbsoal_statis = document.form1.rbsoal_statis;
	if (rbsoal_statis==undefined) {rbsoal_statis='';}else{rbsoal_statis = rbsoal_statis.value;}

	var rbPelajaran = document.form1.rbPelajaran;
	if (rbPelajaran==undefined) {rbPelajaran='';}else{rbPelajaran = rbPelajaran.value;}

	var rbJenis = document.form1.rbJenis;

	if (rbJenis==undefined) {rbJenis='';}else{rbJenis = rbJenis;}

	var radioObj = document.form1.rbKelas;
   if (radioObj==undefined) {radioObj='';}else{radioObj = radioObj;}

	var radioSel = '';
	if(radioObj != ''){
		var radioLength = radioObj.length;
		if(radioLength == undefined)
			if(radioObj.checked)
				return radioObj.value;
			else
				return "";
		for(var i = 0; i < radioLength; i++) {
			if(radioObj[i].checked) {
				radioSel = radioObj[i].value;
			}
		}
	}

	var radioJenis = '';
	if(rbJenis != ''){
		var radioJenisLength = rbJenis.length;
		if(radioJenisLength == undefined)
			if(rbJenis.checked)
				return rbJenis.value;
			else
				return "";
		for(var i = 0; i < radioJenisLength; i++) {
			if(rbJenis[i].checked) {
				radioJenis = rbJenis[i].value;
			}
		}
	}
//alert(document.getElementById('rbKelas1').value);
	window.location = "?page="+page+"&aksi="+aksi+"&kelas="+radioSel+"&rbPelajaran="+rbPelajaran+"&rbJenis="+radioJenis+"&rbsoal_statis="+rbsoal_statis+"&jenis="+jenis;
}

function opendiplay(iD,i){
	if($('#'+iD+'_'+i).is(":visible")){
		$('#'+iD+'_'+i).hide('500');
	}else{
		$('#'+iD+'_'+i).show('500');
	}
}

function showhide(i){
	if($('#sol_'+i).is(":visible")){
		$('#sol_'+i).hide('500');
		$('#sol_jwb_'+i).hide('500');
	}else{
		$('#sol_'+i).show('500');
		$('#sol_jwb_'+i).show('500');
	}
}




