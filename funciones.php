<?php

function createSelect($array, $name, $mes){
    $html = "<select name='$name'>";
    $html .= "<option value=\"$mes\">$mes</option>";
    foreach($array as $value){
        if ($value !== $mes) {
            $html .= "<option value=\"$value\">$value</option>";
        }
    }
    $html .= '</select>';
    return $html;
}
function createPrediction($name, $horoscopos){
    $html = '<div class="prediccion">'
        . showImg($name)
        . '<p>'.$name.':  '.$horoscopos['Escorpio'].'</p>'
        . '</div>';
    return $html;
}

function showAll($horoscopos){
    $html = '';
    foreach($horoscopos as $key => $value){
        $html .= createPrediction($key,$horoscopos);
    }
    return $html;
}


function showOneHoroscope($horoscopos){
    $result = '<p>Error</p>';
    $mes = $_POST['meses'];
    $dia = $_POST['dia'];
    if (rightDay($mes,$dia)) {
        switch ($mes) {
            case ($mes == 'Febrero' && ($dia <= 19)):
            case ($mes == 'Enero' && ($dia >= 20)):
                $result = createPrediction('Acuario',$horoscopos);
                break;
            case ($mes == 'Octubre' && ($dia >= 23)):
            case ($mes == 'Noviembre' && ($dia <= 22)):
            $result = createPrediction('Escorpio',$horoscopos);
                break;
            case ($mes == 'Noviembre' && ($dia >= 23)):
            case ($mes == 'Diciembre' && ($dia <= 20)):
            $result = createPrediction('Sagitario',$horoscopos);
                break;
            case ($mes == 'Enero' && ($dia <= 19)):
            case ($mes == 'Diciembre' && ($dia >= 21)):
            $result = createPrediction('Capricornio',$horoscopos);
                break;
            case ($mes == 'Febrero' && ($dia >= 20)):
            case ($mes == 'Marzo' && ($dia <= 20)):
            $result = createPrediction('Piscis',$horoscopos);
                break;
            case ($mes == 'Marzo' && ($dia >= 21)):
            case ($mes == 'Abril' && ($dia <= 20)):
            $result = createPrediction('Aries',$horoscopos);
                break;
            case ($mes == 'Abril' && ($dia >= 21)):
            case ($mes == 'Mayo' && ($dia <= 20)):
            $result = createPrediction('Tauro',$horoscopos);
                break;
            case ($mes == 'Mayo' && ($dia >= 21)):
            case ($mes == 'Junio' && ($dia <= 21)):
            $result = createPrediction('Geminis',$horoscopos);
                break;
            case ($mes == 'Junio' && ($dia >= 22)):
            case ($mes == 'Julio' && ($dia <= 22)):
            $result = createPrediction('Cancer',$horoscopos);
                break;
            case ($mes == 'Agosto' && ($dia >= 24)):
            case ($mes == 'Septiembre' && ($dia <= 23)):
            $result = createPrediction('Virgo',$horoscopos);
                break;
            case ($mes == 'Julio' && ($dia >= 23)):
            case ($mes == 'Agosto' && ($dia <= 23)):
                $result = createPrediction('Leo',$horoscopos);
                break;
            case ($mes == 'Septiembre' && ($dia >= 23)):
            case ($mes == 'Octubre' && ($dia <= 22)):
                $result = createPrediction('Libra',$horoscopos);
                break;
        }
    } else {
        $result = '<p>El día es incorrecto</p>';
    }
    return $result;
}

function rightDay($mes, $dia){
    $result = true;
    switch($mes){
        case 'Abril' && $dia > 30:
        case 'Junio' && $dia > 30:
        case 'Septiembre' && $dia > 30:
        case 'Noviembre' && $dia > 30:
        case 'Febrero' && $dia > 28:
            $result = false;
            break;
    }
    return $result;
}

/**
 * Obtener imágenes
 */

function showImg($name){
    $ruta = "./img/signos/*.webp";
    // Obtener las imagenes de una carpeta
    $imagenes = glob($ruta);

    $html = '';
    foreach ($imagenes as $imagen) {
        $search = explode("/",$imagen);
        $search = explode(".",$search[3]);
        $search = $search[0];
        if ($search == $name) {
            $html .= "<img src=\" $imagen \" title=\"Imagen\">";
        }
    }
    return $html;
}
