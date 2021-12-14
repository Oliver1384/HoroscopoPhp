<?php
//Importa todas las functiones
include "funciones.php";

//conserva los valores de los campos al recargar la página
$mes = $_POST['meses'];
$dia = $_POST['dia'];




/**
 * Variables
 */
$horoscopos = ['Aries' => "El en amor te va ir bien",
               'Tauro' => "Te sentirás muy motivado y te irá muy bien en el trabajo",
               'Geminis' => "Tu sistema dijestivo recibirá el impacto de las tensiones",
               'Cancer' => "Es una etapa de interés para introducir mejoras en tu salud",
               'Leo' => "Tienes buenas posibilidades de enamorarte de una persona extrangera",
               'Virgo' => "Tu creatividad llegará este mes al máximo",
               'Libra' => "El deporte te puede ser de mucha ayuda",
               'Escorpio' => "Atravesarás una etapa de calma despues de una crisis que casi acaba con tu relación",
               'Sagitario' => "Todo lo que hagas en grupo saldrá bien, debes trabajar en equipo",
               'Capricornio' => "Es posible que experimentes algún dolor de cabeza",
               'Acuario' => "Lograrás mejorar tu relación a nivel romántico",
               'Piscis' => "Mantente en contacto con los amigos a los que no has visto en mucho tiempo"];

$meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo',
          'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre',
          'Noviembre', 'Diciembre'];


/**
 * Variables para formulario
 */
$name = 'meses';
$mesesFuncion = createSelect($meses,$name,$mes);



/**
 * Respuesta formulario
 */
$resultado = 'Error';
if(isset($_POST['todo'])){
    $resultado = showAll($horoscopos);
} else if (isset($_POST['calculo'])){
    $resultado = showOneHoroscope($horoscopos);
}


//importa la vista principal
include "vista.php";

