//Ejecicio numero 1
$("#calcular").click(function () {
  let numUno = $('#numOne').val();
  let numDos = $('#numTwo').val();
  var parametros = {
    "numOne": numUno,
    "numTwo": numDos
  };
  $.ajax({
    url: "./numMayor.php",
    method: "POST",
    data: parametros,
    success: function (respuesta) {
      console.log(respuesta)
      $('#result').text(respuesta)
    }
  });
});

//Ejecicio numero 2
$("#mostrar").click(function () {
  $.ajax({
    url: "./meses.php",
    method: "POST",
    dataType: 'json',
    success: function (respuesta) {
      $(".listMonths .listMonths").empty()
      $.each(respuesta, (key, value) => {
        $(".listMonths .listMonths").append(
          `
              <li>${value}</li>
          `
        )
      })
    }
  });
});

$("#limpiar").click(function () {
  $(".listMonths .listMonths").empty()
})