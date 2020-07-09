<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Test Ranfery Alvarez</title>
  <!-- CSS only -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>


<body>

  <!-- EJECICIO 1 -->
  <div class="container pt-4">
    <h1>1.- Cuál es el mayor de dos enteros?</h1>
    <form action="" method="post">
      <div class="form-group">
        <label for="">Numero 1</label>
        <input type="text" class="form-control" id="numOne">
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput2">Numero 2</label>
        <input type="text" class="form-control" id="numTwo">
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput2">Respuesta:</label>
        <span id="result" style="color: red;"></span>
      </div>
      <div type="button" class="btn btn-primary" id="calcular">Calcular</div>
    </form>
  </div>

  <!-- EJECICIO 2 -->
  <div class="container pt-4">
    <h1>2.- Meses del año</h1>
    <div class="listMonths" id="listMonths">
      <ul class="listMonths">
        <!-- AQUI SE MUESTRA EL ARRAY -->
      </ul>
    </div>
    <div type="button" class="btn btn-success" id="mostrar">Mostrar</div>
    <div type="button" class="btn btn-danger" id="limpiar">Limpiar</div>
  </div>

  <!-- EJECICIO 3 -->
  <div class="container pt-4">
    <h1>3.- Conexion MySql</h1>
    <?php
    require_once('./connection.php');
    ?>
  </div>


  <!-- JS, Popper.js, and jQuery -->
  <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script> -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
  </script>
  <script src="./funciones.js"></script>
</body>

</html>