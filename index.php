<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Mali" rel="stylesheet">

    <title>CAM ESTUDIO</title>
</head>
  <body style="font-family: 'Mali', 'arial', cursive;">


<div class="container">

<?echo '<h1>'.$_SERVER[REMOTE_ADDR].'</h1>';
echo '<h1>'.$now.'</h1>';
'<br>';
echo '<h1>'."Si me puedes leer estamos bien...".'</h1>';
echo '<h1>'."Los ejercios van en forma descendente".'</h1>';
?>
</div>
<div class="container">
<?echo "Ejercicio 1"?>
<p>Ecuentre el aera de un triangulo</p>
<?
$base = 100;
$altura = 200;
$resultado =  ($base * $altura /2) ;
echo "La base ingresada es: ".$base . '<br>';
echo "La altura ingresada es: ".$altura .'<br>';

echo "El area del triangulo es : ". $resultado .'<hr>';
'<hr>'
?>
<br>

</div>





<!-- footer -->
<footer class="section footer-classic context-dark bg-image" style="background: #2d3246;">
 <div class="container">
 <div class="footer-copyright text-center py-3"> &copy; <?php echo date("Y"). " ". date("h:i:sa");?><br>
    <?echo "Tu ip es : ".$_SERVER[REMOTE_ADDR]?>
    </div>
 </div>
</footer>
<!-- end footer -->

  </body>
 <script type='text/javascript' src="js/jquery.js"></script>
<script type='text/javascript' src="js/bootstrap.js"></script>
</html>