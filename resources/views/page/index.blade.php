<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">

<title>Investalearning</title>
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta content="tryout, standar profesi, pasar modal, ujian, wmi, wppe, wpee, wakil manager investasi, wakil perantara pedagang efek, wakil penjamin emisi efek, manajer investasi, saham, obligasi, reksa dana, pasar uang, deposito, indeks, latihan, grafik, akuntansi" name="keywords">

<meta content="investalearing" name="description">	

<!-- Logout -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="{{ asset('public/assets/librari/jquery.idle.js') }}"></script>
<!-- Favicons -->
<link href="img/favicon.png" rel="icon">
<link href="img/apple-touch-icon.png" rel="apple-touch-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Ruda:400,900,700" rel="stylesheet">

<!-- Bootstrap CSS File -->
<link rel="stylesheet" href="{{ asset('public/assets/lib/bootstrap/css/bootstrap.min.css') }}">

<!-- modal -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<!-- Libraries CSS Files -->
<link rel="stylesheet" href="{{ asset('public/assets/lib/font-awesome/css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('public/assets/lib/prettyphoto/css/prettyphoto.css') }}">
<link rel="stylesheet" href="{{ asset('public/assets/lib/hover/hoverex-all.css') }}">
<link rel="stylesheet" href="{{ asset('public/assets/lib/jetmenu/jetmenu.css') }}">
<link rel="stylesheet" href="{{ asset('public/assets/lib/owl-carousel/owl-carousel.css') }}">

<link rel="stylesheet" href="{{ asset('public/assets/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('public/assets/css/colors/blue.css') }}">

<!-- JavaScript Libraries -->
<script src="{{ asset('public/assets/lib/jquery/jquery.min.js') }}"></script>
  
<!--script language="JavaScript" src="librari/jquery-1.8.2.js"></script-->
<script src="{{ asset('public/assets/lib/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="//cdn.jsdelivr.net/jquery.marquee/1.3.1/jquery.marquee.min.js"></script>
<script src="{{ asset('public/assets/lib/php-mail-form/validate.js') }}"></script>
<script src="{{ asset('public/assets/lib/prettyphoto/js/prettyphoto.js') }}"></script>
<script src="{{ asset('public/assets/lib/isotope/isotope.min.js') }}"></script>
<script src="{{ asset('public/assets/lib/hover/hoverdir.js') }}"></script>

<script src="{{ asset('public/assets/lib/hover/hoverex.min.js') }}"></script>
<script src="{{ asset('public/assets/lib/unveil-effects/unveil-effects.js') }}"></script>
<script src="{{ asset('public/assets/lib/owl-carousel/owl-carousel.js') }}"></script>
<script src="{{ asset('public/assets/lib/jetmenu/jetmenu.js') }}"></script>
<script src="{{ asset('public/assets/lib/animate-enhanced/animate-enhanced.min.js') }}"></script>
<script src="{{ asset('public/assets/lib/jigowatt/jigowatt.js') }}"></script>
<script src="{{ asset('public/assets/lib/easypiechart/easypiechart.min.js') }}"></script>

<script src="{{ asset('public/assets/librari/jquery-ui.js') }}"></script>
<link rel="stylesheet" href="{{ asset('public/assets/librari/jquery-ui.css') }}">

<!-- Template Main Javascript File -->
<script src="{{ asset('public/assets/js/main.js') }}"></script>
</head>

<body>
  <div class="topbar clearfix">
    <div class="container">
      <div class="col-lg-12 text-left marquee">
        <marquee direction='left' scrollamount=3>
         Peserta Pelatihan Profesi Pasar Modal
        </marquee>
      </div>
    </div>
    <div class="col-lg-6 text-right">
      <div class="social_buttons">
        <!--
        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a>
        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a>
        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Google+"><i class="fa fa-google-plus"></i></a>
        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Dribbble"><i class="fa fa-dribbble"></i></a>
        <a href="#" data-toggle="tooltip" data-placement="bottom" title="RSS"><i class="fa fa-rss"></i></a>
        -->
      </div>
    </div>
  </div> 
  <header class="header">
    <div class="container">
      <div class="site-header clearfix">
        <div class="col-lg-3 col-md-3 col-sm-12 title-area">
          <div class="site-title" id="title">
            <a href="?" title="">
              <h4>INVESTA<span>LEARNING</span></h4>
            </a>
          </div>
        </div>
        <div class="col-lg-9 col-md-12 col-sm-12">
          <div id="nav" class="right">
            <div class="container clearfix">
              <ul id="jetmenu" class="jetmenu blue">
                <li>
                  <a href="?">Home</a><!--class="active"-->
                </li>
                <li>
                  <a href="?page=beritadet&idberita=38">FAQ </a>
                </li>

                <li><a href="#">Glossary</a>
                  <ul class="dropdown">
                    <li><a href="index.php?page=beritadet&idberita=31">Glossary A - E</a></li>
                    <li><a href="index.php?page=beritadet&idberita=32">Glossary F - J</a>
                    <li><a href="index.php?page=beritadet&idberita=33">Glossary K - O</a></li>
                    <li><a href="index.php?page=beritadet&idberita=34">Glossary P - T</a></li>
                    <li><a href="index.php?page=beritadet&idberita=36">Glossary U - Z</a></li>
                  </ul>
                </li>

                <li>
                  <a href="?page=beritadet&idberita=37">Contact Us</a>
                </li>
                @if(Session::get('SES_UIDUSER'))
                <li>
                  <a href="#">Materi</a>
                  <ul class="dropdown">
                    <li><a href="?page=unduhperaturan">Peraturan</a></li>
                    <li><a href="?page=unduhdokumentasi">Dokumentasi</a></li>
                    <li><a href="{{ route('Home.materi') }}">Materi</a></li>
                    <li><a href="?page=video">Video</a></li>
                  </ul>
                </li>
                <li>
                  <a href="{{ route('Login.logout') }}">Logout</a>
                </li>
                @endif
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <section id="intrso">
    <div class="container" style='text-align: center;'>
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <?php $li_str=''; $div_slide=''; ?>
        @foreach($slider as $key => $slider)
          @if($key == 0 )
            <?php $cls1 = 'active'; ?>
          @else
            <?php $cls1 = ''; ?>
          @endif
          <?php
          $li_str .= '<li data-target="#myCarousel" data-slide-to="'.$slider->no_image.'" class="'.$cls1.'"></li>';
          $div_slide .= '<div class="item '.$cls1.'" style="text-align: center;">
            <img src="public/assets/images/imageSlide/'.$slider->link_url.'">
          </div>';
          ?>
        @endforeach
        <ol class="carousel-indicators">
          {!! $li_str !!}
        </ol>
        <div class="carousel-inner" style='text-align: center;'>
          {!! $div_slide !!}
        </div>
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </section>
  <section class="section1">
    <div id="tableSoal" class="col-lg-2 col-md-2 col-sm-2" >
      @if(!Session::get('SES_UIDUSER'))
      <div>
        <h4 class="title">
          <span>Login Form</span>
        </h4>
        <form id="frmLogin" method="get" name="frmLogin" action="{{ route('Login.login') }}">
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-user"></i></span>
              <input type="text" class="form-control" placeholder="Username" name="txtUserID">
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-lock"></i></span>
              <input type="password" class="form-control" placeholder="Password" name="txtPassID" >
            </div>
          </div>
          <div class="form-group">
            <div class="checkbox">
              <label>
                <input type="checkbox"> Remember me
              </label>
            </div>
          </div>
          <div class="form-group">
            <button type="button" value="Login" data-toggle="modal" data-target="#myModal">Sign in</button> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <button type="button" class="button" value="Pendaftaran" onclick="window.open('?page=daftar','_self',false)">Pendaftaran</button>
          </div>

          <!-- modal term condition -->
          <div class="container">
            <div class="modal fade" id="myModal" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Copyright License Agreement</h4>
                  </div>
                  <div class="modal-body">
                    <p class="pagree">
                      Please read the following Terms of Agreement Carefully Before Using This site or Investalearning account.
                    </p>
                    <textarea rows="6" cols="78" readonly class="text" style="margin-bottom: -28px;overflow-y: auto;">
                      {{ strip_tags($text_agreement->agreement) }} 
                    </textarea>
                  </div><hr>
                  <div>
                    <input style="margin-left:22px;" type="radio" class="agreement" id="agree" name="choice" value="1"> I accept the agreement <br>
                    <input style="margin-left:22px;" type="radio" class="agreement" id="disagree" name="choice" value="0"> I don't accept the agreement<br>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"> Back </button>
                    <input type=hidden value="soalujian" name="page">
                    <input type=hidden value="" name="jenis">
                    <input type=submit id="start" class="btn btn-default" value="Login" disabled name="TbLogin">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form> 
      </div>
      @else
      <div>
        <p>Anda Telah login</p>
        <p>Coming Soon</p>
      </div>
      @endif
    </div>
    <div class="container">
      <div class="col-lg-10 col-md-10 col-sm-10" id='DivBukaFile' style="  -webkit-user-select: none; -moz-user-select: none; -ms-user-select: none; user-select: none; ">
        
        @yield('content')

      </div>
    </div> 
  </section>
</body>


<style>
  -webkit-user-select: none;

  .agreement{
    margin-left:22px;
  }
</style>

<script type="text/javascript">
    function setCursor(pos) {
        var el = document.getElementById("dialog");
        var range = document.createRange();
        var sel = window.getSelection();
        range.setStart(el.childNodes[0], pos);
        range.collapse(true);
        sel.removeAllRanges();
        sel.addRange(range);
        el.focus();
    }
    $(function() {

    $(this).bind("contextmenu", function(e) {
        e.preventDefault();
    });

     $(document).keydown(function(event) {
         if (event.ctrlKey==true && (event.which == '118' || event.which == '86' || event.which == '17')) {
             $("#dialog").html('Ctrl disable.');
          $("#dialog").dialog({
            modal: true, // Freeze the background behind the overlay
                 title: "Investalearing.com",
                 buttons: {
                     Ok: function () {
                         $(this).dialog('close');
                     }
                 },
          open: function( event, ui ) {
              //center the dialog within the viewport (i.e. visible area of the screen)
             var top = Math.max(jQuery(window).height() / 2 - jQuery(this)[0].offsetHeight / 2, 0);
             var left = Math.max(jQuery(window).width() / 2 - jQuery(this)[0].offsetWidth / 2, 0);
             jQuery(this).parent().css('top', "200px");
             jQuery(this).parent().css('left', "500px");
             jQuery(this).parent().css('position', 'fixed');
          },
             });

      setCursor(5);
      $('#DivBukaFile').bind("cut copy paste",function(e) {
          return false;
  //        e.preventDefault();
      });

      }
     });
    });

    $('#agree').on('click', function(){
      if($(this).is(':checked')) {
        $('#start').attr('disabled', false)
      } 
    });

    $('#disagree').on('click', function(){
      if($(this).is(':checked')) {
        $('#start').attr('disabled', true)
      } 
    }); 
</script>