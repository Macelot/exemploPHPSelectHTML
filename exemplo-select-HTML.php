<html>

<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
</head>

<body>
<?php

$dia="";
if(isset($_POST['dia'])){
	$dia=$_POST['dia'];
}
?>
<form id="form1" name="form1" method="post" action="exemplo-select-HTML.php">
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<select class="form-control form-control-lg" name="dia">
			  	<option value="2" <?php echo  ($dia==2) ? "selected" : "" ?> >Segunda-feira</option>
				<option value="3" <?php echo  ($dia==3) ? "selected" : "" ?>>Terça-feira</option>
				<option value="4" <?php echo  ($dia==4) ? "selected" : "" ?>>Quarta-feira</option>
				<option value="5" <?php echo  ($dia==5) ? "selected" : "" ?>>Quinta-feira</option>
				<option value="6" <?php echo  ($dia==6) ? "selected" : "" ?>>Sexta-feira</option>
				<option value="7" <?php echo  ($dia==7) ? "selected" : "" ?>>Sábado</option>
				<option value="1" <?php echo  ($dia==1) ? "selected" : "" ?>>Domingo</option>
			</select>
		</div>
	</div>
</div>
  </label>
  <p>
    <label>
    <input type="submit" name="button" id="button" value="Submit" />
    </label>
  </p>
</form>
<?php
$valor = isset($_POST['dia']) ? $valor=$_POST['dia'] : 0 ;
switch($valor){
	case "1":
	echo "você escolheu Domingo";
	break;
	
	case "2":
	echo "você escolheu Segunda-feira";
	break;
	
	case "3":
	echo "você escolheu Terça-feira";
	break;
	
	case "4":
	echo "você escolheu Quarta-feira";
	break;
	
	case "5":
	echo "você escolheu Quinta-feira";
	break;
	
	case "6":
	echo "você escolheu Sexta-feira";
	break;
	
	case "7":
	echo "você escolheu Sábado";
	break;
}
?>


</body>

</html>