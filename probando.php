<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
.modal { width: 100%; height: 100%; position: absolute; top: 0; left: 0; display: none; z-index: 999; background: rgba(0,0,0,0.5); -webkit-animation-duration: 1s; -webkit-animation-name: fade; -webkit-animation-iteration-count: 1; -webkit-animation-direction: normal; }
.modal a { display: block; vertical-align: right; text-align: center; }
 .modal img { padding: 5px 5px 45px 5px; background: #ffffff; -webkit-box-shadow: 0px 0px 15px #444; -moz-box-shadow: 0px 0px 15px #444;	-webkit-animation-duration: 0.50s; -webkit-animation-name: grow; -webkit-animation-iteration-count: 1; -webkit-animation-direction: normal; -webkit-animation-timing-function: ease-in;	}
 .modal:target { display: table; height:100% }



 </style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<div id="container"> <header>hola jorge</header>
<section id="gallery"> <article class="description"> Haz clic en cada miniatura para verla en versión ampliada. </article>
<div id="gallery_thumbs"> <img src="intento de twitter/images/twitter_logo.png" alt="1"/> <img src="intento de twitter/images/twitter_logo.png" alt="2"/> <img src="intento de twitter/images/twitter_logo.png" alt="3"/> </div> </section> </div>

<div id="img1" class="modal"> <a href="#close"><img src="intento de twitter/images/twitter_logo.png" alt="1"/></a> </div> <div id="img2" class="modal"> <a href="#close"><img src="intento de twitter/images/twitter_logo.png" alt="2"/></a> </div> <div id="img3" class="modal"> <a href="#close"><img src="intento de twitter/images/twitter_logo.png" alt="3"/></a> </div>

<div id="gallery_thumbs"> <a href="#img1"><img src="intento de twitter/images/twitter_logo.png" alt="1"/></a> <a href="#img2"><img src="intento de twitter/images/twitter_logo.png" alt="2"/></a> <a href="#img3"><img src="intento de twitter/images/twitter_logo.png" alt="3"/></a> </div>



</body>
</html>