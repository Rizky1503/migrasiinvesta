//var milidetik=0;
function startTimer(menitawal){

	var milidetik = 0;
	
	var menit_jadi_detik = menitawal * 60;

	var detik = menit_jadi_detik;
	document.getElementById("show_times").value=detik;

	document.getElementById("tableSoal").style.display='';
	document.form1.TbFinish.disabled=false;
	document.form0.TbStart.disabled=true;	
	
	$('#t_menu_top').hide('100');
	$('#t_menu_left').hide('100');	
	$('#td_menu_left').attr("width","100%");
	
TimerNYA(0,detik);

}
function TimerNYA(milidetik,detik){	
	milidetik=milidetik-1;
	if(milidetik<0)
	{
		milidetik=9;
		detik=detik-1;	
	}

	document.getElementById("show_times").value = detik;	//+"."+milidetik
	if (!(detik<=0 && milidetik<=0)) 
	{ 
		if (detik==20 && milidetik<=0){
			alert('20 detik lagi!');
		}	
		setTimeout(function(){ TimerNYA(milidetik,detik); },100); 
	}
	else
	{

	alert("Waktu telah habis !!!");  // DAPAT DIMODIF SESUAI KEBUTUHAN
	document.form1.submit();
	}
}
