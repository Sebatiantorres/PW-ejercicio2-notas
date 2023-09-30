<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CalcularNotas</title>
    <link rel="stylesheet" href="index.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>

<form action="CalculoNotas.php" method="post">


<div class="container-sm bg-dark">

<h2 id="titulo" class="text-white text-center">Registro de Notas</h2><br>


</div>

<?php

session_start();

//session_destroy();

if(!isset($_SESSION['data'])){

 $_SESSION['data']= array();

}

if(!isset($_SESSION['data1'])){

    $_SESSION['data1']= array();
   
   }

   if(!isset($_SESSION['data2'])){

    $_SESSION['data2']= array();
   
   }


   if(!isset($_SESSION['data3'])){

    $_SESSION['data3']= array();
   
   }

   if(!isset($_SESSION['data4'])){

    $_SESSION['data4']= array();
   
   }



   if(!isset($_SESSION['data5'])){

    $_SESSION['data5']= array();
   
   }


   if(!isset($_SESSION['data6'])){

    $_SESSION['data6']= array();
   
   }

   if(!isset($_SESSION['data7'])){

    $_SESSION['data7']= array();
   
   }



   if(!isset($_SESSION['data8'])){

    $_SESSION['data8']= array();
   
   }


   
   if(!isset($_SESSION['data9'])){

    $_SESSION['data9']= array();
   
   }

   if(!isset($_SESSION['data10'])){

    $_SESSION['data10']= array();
   
   }

   if(!isset($_SESSION['data11'])){

    $_SESSION['data11']= array();
   
   }





?>

<div class="container-in">

  <h2 class="text-center">Ingresa tus Datos</h2>

</div>

<div class="container">
<div id="formu-div" class="regitrosDatos row justify-content-center form-group rounded-3">

    <label class="idNombre col-md-6" for="idNombre">Número de Cédula de identidad de alumno</label>

    <input class="txtNombre col-md-6 form-control" type="text" name="txtCedula" id="" required>

    <label  class="idApellido col-md-6" for="idApellido">Nombre Alumno </label>

    <input class="txtApellido col-md-6 form-control"" type="text" name="txtNombre" id="" required>

    <label  class="idEdad col-md-6" for="idEdad">Nota de Matematicas</label>

    <input class="txtEdad col-md-6 form-control" type="number" name="txtMatematicas" id="" required>

  </div>

  </div>
<div class="container">

  

<div class="registroEstado row justify-content-center form-group">

    <label class="idSoltero col-md-6" for="idSoltero">Nota de Fisíca </label>

    <input  class="estadoSoltero col-md-6 form-control"" type="number" name="txtFisica" id="" value="" required>

    <label class="idCasado col-md-6" for="notaProg">Nota programación </label>

    <input  class="estadoCasado col-md-6 form-control"" type="number" name="txtProgramacion" id="" value="" required>

    <input class="btn btn-primary text-center"  type="submit" value="Calcular" name="btnAñadir" >

</div>


<input type="hidden" name="valores" value="<?php echo implode(",", $_SESSION['data'])?>">

<input type="hidden" name="valores1" value="<?php echo implode(",", $_SESSION['data1'])?>">

<input type="hidden" name="valores2" value="<?php echo implode(",", $_SESSION['data2'])?>">

<input type="hidden" name="valores3" value="<?php echo implode(",", $_SESSION['data3'])?>">

<input type="hidden" name="valores4" value="<?php echo implode(",", $_SESSION['data4'])?>">

<input type="hidden" name="valores5" value="<?php echo implode(",", $_SESSION['data5'])?>">

<input type="hidden" name="valores6" value="<?php echo implode(",", $_SESSION['data6'])?>">

<input type="hidden" name="valores7" value="<?php echo implode(",", $_SESSION['data7'])?>">

<input type="hidden" name="valores8" value="<?php echo implode(",", $_SESSION['data8'])?>">

<input type="hidden" name="valores9" value="<?php echo implode(",", $_SESSION['data9'])?>">

<input type="hidden" name="valores10" value="<?php echo implode(",", $_SESSION['data10'])?>">

<input type="hidden" name="valores11" value="<?php echo implode(",", $_SESSION['data11'])?>">


</div>


</div>










</form>
    
</body>
</html>