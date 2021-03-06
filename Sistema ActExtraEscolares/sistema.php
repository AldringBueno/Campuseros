<?php
session_start();
?>
<html >
	<head>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title>Bienvenido</title>
		<link rel="stylesheet" href="css/materialize.min.css">
		<link rel="stylesheet" href="css/estilo-btn-input-field.css">
		<style>
			body{
				background: url(images/body.jpg) no-repeat center center fixed;
				-webkit-background-size: cover;
				-moz-background-size: cover;
				-o-background-size: cover;
				background-size: cover;
				}
				img{

				    -webkit-animation: fadein 2s; /* Safari, Chrome and Opera > 12.1 */
				       -moz-animation: fadein 2s; /* Firefox < 16 */
				        -ms-animation: fadein 2s; /* Internet Explorer */
				         -o-animation: fadein 2s; /* Opera < 12.1 */
				            animation: fadein 2s;
				}
				h1 {

				    -webkit-animation: fadein 5s; /* Safari, Chrome and Opera > 12.1 */
				       -moz-animation: fadein 5s; /* Firefox < 16 */
				        -ms-animation: fadein 5s; /* Internet Explorer */
				         -o-animation: fadein 5s; /* Opera < 12.1 */
				            animation: fadein 5s;
				}
				button {

				    -webkit-animation: fadein 8s; /* Safari, Chrome and Opera > 12.1 */
				       -moz-animation: fadein 8s; /* Firefox < 16 */
				        -ms-animation: fadein 8s; /* Internet Explorer */
				         -o-animation: fadein 8s; /* Opera < 12.1 */
				            animation: fadein 8s;
				}
				a {

				    -webkit-animation: fadein 2s; /* Safari, Chrome and Opera > 12.1 */
				       -moz-animation: fadein 2s; /* Firefox < 16 */
				        -ms-animation: fadein 2s; /* Internet Explorer */
				         -o-animation: fadein 2s; /* Opera < 12.1 */
				            animation: fadein 2s;
				}
				@keyframes fadein {
				    from { opacity: 0; }
				    to   { opacity: 1; }
				}

				/* Firefox < 16 */
				@-moz-keyframes fadein {
				    from { opacity: 0; }
				    to   { opacity: 1; }
				}

				/* Safari, Chrome and Opera > 12.1 */
				@-webkit-keyframes fadein {
				    from { opacity: 0; }
				    to   { opacity: 1; }
				}

				/* Internet Explorer */
				@-ms-keyframes fadein {
				    from { opacity: 0; }
				    to   { opacity: 1; }
				}

				/* Opera < 12.1 */
				@-o-keyframes fadein {
				    from { opacity: 0; }
				    to   { opacity: 1; }
				}
		</style>
  	</head>
	<body>

		<br>
		<a href="index.html"><img style="float:left; margin:2em" src="images/logo.png" height="100px"></a><br><br><br>
		<button onClick=" window.location.href='agregar_alumno.php'" class="btn green darken-4 darken-4">AGREGAR ALUMNO</button>
		<button onClick=" window.location.href='buscar_alumno.php'" class="btn green darken-4 darken-4">BUSCAR ALUMNO</button>
		<button onClick=" window.location.href='listas.php'" class="btn green darken-4 darken-4">LISTAS</button>

		<!--BOTON INFERIOR DERECHA-->
		<div class="fixed-action-btn horizontal" style="bottom: 45px; right: 24px;">
			<a class="btn-floating btn-large green darken-4">
		      <i class="large material-icons">add</i>
		    </a>
		    <ul>
		      <li><a href="https://www.facebook.com/profile.php?id=100011229072579" class="btn-floating green darken-4"><img src="icons/facebook.png" height="36px"></a></li>
		      <li><a class="btn-floating green darken-4"><img src="icons/twitter.png" height="36px"></a></li>
		      <li><a class="btn-floating green darken-4"><img src="icons/youtube.png" height="36px"></a></li>
		      <li><a class="btn-floating green darken-4"><img src="icons/instagram.png" height="36	px"></a></li>
		    </ul>
		</div>
		<!--FIN BOTON INFERIOR DERECHA-->

<!--Llamadas a los javascripts-->
		<script src="js/jquery.min.js"></script>
		<script src="js/materialize.min.js"></script>
		<script>
		$(document).ready(function(){
			$('.slider').slider({
				indicators: false
				});
		});
		</script>
	</body>
</html>

