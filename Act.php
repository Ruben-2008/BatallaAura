<?php
/**
 * Proyecto PHP: La Batalla de Aura
 * Archivo base para el alumnado.
 */

// Mapa original del Pabellón Skibidi
// "0" -> Terreno neutro (Pasillos comunes)
// "~" -> Zonas de Chill (Patios)
// "G" -> Zona habitada (Grupos de Gymbros / Sigmas)

$mapaOriginal = [
    ['~', '~', '~', '~', '~', '0', '0', 'G', '0', 'G', '0', '0', 'G', '0', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '0', '0', '0', '0', '0', '0', 'G', '0', '0', '0', '0', 'G', '0', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '0', '0', '0', '0', '0', 'G', 'G', '0', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '0', '0', '0', '0', '0', 'G', '0', '0', 'G', 'G', 'G', '0', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '0', '0', '0', 'G', '0', 'G', 'G', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'G', '0', '0', '~'],
    ['~', '~', '~', '~', '~', '~', '0', '0', 'G', '0', '0', '0', 'G', '0', '0', '0', '0', '0', '0', 'G', '0', '0', '0', '~'],
    ['~', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '0', '0', '0', '0', '0', '0', '0', '0', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '~', '~', '~', '~'],
    ['~', '~', '~', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '~', '~', '~', '~', '~'],
    ['~', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'G', '0', '0', '0', '0', '0', 'G', '0', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '~', '0', '0', '0', '0', 'G', '0', '0', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '~', '0', '0', '0', 'G', 'G', 'G', '0', '0', 'G', '0', '0', '0', '~', '~', '~'],
    ['~', '~', '~', '0', 'G', 'G', '0', '0', 'G', '0', '0', '0', 'G', '0', '0', '0', '0', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '~', '~', '0', '0', '0', 'G', '0', '0', '0', '0', '0', 'G', '0', 'G', '0', '0', '0', '~'],
    ['~', '~', '~', '~', '~', '~', '~', '~', '~', '0', 'G', '0', '0', '0', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '0', 'G', '0', '0', '0', '0', '0', '0', '0', '0', 'G', '0', '0', '0', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '~', '~', '~', '~', '0', '0', '0', 'G', '0', '0', 'G', '0', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '0', '0', '0', '0', 'G', '0', '0', '0', '0', 'G', '0', '~', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '0', '0', '0', '0', '0', '0', '0', '0', '0', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~'],
];

// Coordenadas de los impactos de cringe [fila, columna]
$impactos = [
    [2, 9], [3, 10], [5, 4], [11, 15], [14, 4], [17, 4], [1, 5], [3, 8], [6, 12], [8, 14], 
    [10, 3], [0, 2], [1, 20], [8, 2], [21, 5], [22, 10], [0, 0], [0, 1], [0, 3], [0, 4], 
    [0, 14], [0, 15], [0, 16], [0, 17], [0, 18], [0, 19], [0, 20], [0, 21], [0, 22], [0, 23], 
    [1, 0], [1, 1], [1, 2], [1, 13], [1, 14], [1, 15], [1, 16], [1, 17], [1, 18], [1, 19], 
    [1, 21], [1, 22], [1, 23], [2, 0], [2, 1], [2, 2], [2, 16], [2, 17], [2, 18], [2, 19], 
    [2, 20], [2, 21]
];

// 1. (1 punto) Mostrar el mapa original 

function mostrarMapa($mapa) {
   $totalFilas = count($mapa);

   for ($i = 0; $i < $totalFilas; $i++) {
       $totalColumnas = count($mapa[$i]);
       for ($j = 0; $j < $totalColumnas; $j++) {
           echo $mapa[$i][$j] . " ";
       }
       echo "<br>";
   }
}   
echo "1. Mapa original: <br>";
mostrarMapa($mapaOriginal);


//2. (1 punto) Zonas habitadas afectadas

function mapaGymImpactos ($mapaOriginal, $impactos) {
    $totalImpactos = count($impactos);
    for ($i = 0; $i < $totalImpactos; $i++){
        $fila = $impactos[$i][0];
        $columna = $impactos[$i][1];
       
        if ($mapaOriginal[$fila][$columna] === 'G') {
            $mapaOriginal[$fila][$columna] = 'S';
        }
    }
    return $mapaOriginal;
}
$mapaModificadoGym = mapaGymImpactos($mapaOriginal, $impactos);
echo "<br>2. Mapa modificado con las zonas habitadas afectadas: <br>";
mostrarMapa($mapaModificadoGym);

//3. (1 punto) Población afectada y consumo de bebida energética

function sigmasAfectados ($mapaModificadoGym) {
    $ImpactosSigmas =0;
    $totalFilas = count($mapaModificadoGym);

    for ($i = 0; $i < $totalFilas; $i++) {
        $totalColumnas = count($mapaModificadoGym[$i]);
        
        for ($j = 0; $j < $totalColumnas; $j++) {
            if ($mapaModificadoGym[$i][$j] === 'S') {
                $ImpactosSigmas++;
            }
        }
    }
    $totalSigmasAfectados = $ImpactosSigmas * 3000;
    return $totalSigmasAfectados;
}

$sigmasAfectados = sigmasAfectados($mapaModificadoGym);

$litrosNecesarios = ($sigmasAfectados * 10 ) / 1000; 

echo "<br>3. Han sido afectados: " . $sigmasAfectados . " sigmas <br>";
echo "Se han necesitado: " . $litrosNecesarios . " litros de bebida recuperadora<br>";

//4. (2 puntos) Mapa de daños totales

function mapaDañosTotal ($mapaOriginal, $impactos) {
    $totalImpactos = count($impactos); 
    for ($i = 0; $i < $totalImpactos; $i++){
        $fila = $impactos[$i][0];
        $columna = $impactos[$i][1];

        if ($mapaOriginal[$fila][$columna] === '0') {
            $mapaOriginal[$fila][$columna] = 'X';
        } elseif ($mapaOriginal[$fila][$columna] === '~') {
            $mapaOriginal[$fila][$columna] = 'W';
        } elseif ($mapaOriginal[$fila][$columna] === 'G') {
            $mapaOriginal[$fila][$columna] = 'S';
        }
}
return $mapaOriginal;
}
$mapaModificadoTotal = mapaDañosTotal($mapaOriginal, $impactos);
echo "<br>4. Mapa modificado con todos los nuevos daños: <br>";
mostrarMapa($mapaModificadoTotal);

// 5. (2 puntos) Estimación de costes

function costeDaños ($mapaModificadoTotal) {
    $costeTotal = 0;
   $totalFilas = count($mapaModificadoTotal);

   for ($i = 0; $i < $totalFilas; $i++) {
       $totalColumnas = count($mapaModificadoTotal[$i]);
       
       for ($j = 0; $j < $totalColumnas; $j++) {
           if ($mapaModificadoTotal[$i][$j] === 'X') {
               $costeTotal += 75000;
           } elseif ($mapaModificadoTotal[$i][$j] === 'S') {
               $costeTotal += 250000;
           }
       }
   }
return $costeTotal;
}
$costeTotal = costeDaños($mapaModificadoTotal);
echo "<br>5. El coste para limpiar y restaurar las zonas dañadas es de  " . $costeTotal . " € <br>";

//6. (2 puntos) Recursos aprovechables 

function totalZonasChill ($mapaOriginal) {
    $contadorZonasChill = 0;
    $totalFilas = count($mapaOriginal);

    for ($i = 0; $i < $totalFilas; $i++) {
        $totalColumnas = count($mapaOriginal[$i]);
        
        for ($j = 0; $j < $totalColumnas; $j++) {
            if ($mapaOriginal[$i][$j] === '~') {
                $contadorZonasChill++;
            }
        }
    }
return $contadorZonasChill;
}

function totalZonasChillAfectadas ($mapaModificadoTotal) {
    $contadorChillAfectados = 0;
    $totalFilas = count($mapaModificadoTotal);

    for ($i = 0; $i < $totalFilas; $i++) {
        $totalColumnas = count($mapaModificadoTotal[$i]);
        
        for ($j = 0; $j < $totalColumnas; $j++) {
            if ($mapaModificadoTotal[$i][$j] === 'W') {
                $contadorChillAfectados++;
            }
        }
    }
return $contadorChillAfectados;
}

$chillTotal = totalZonasChill($mapaOriginal);
$chillAfectados = totalZonasChillAfectadas($mapaModificadoTotal);

echo "<br>6. En el mapa hay un total de " . $chillTotal . " zonas de Chill <br>";
echo "Han sido afectadas por los impactos: " . $chillAfectados . "<br>";

//7. (1 punto) Recaudación solidaria 

function recaudacion ($chillTotal, $chillAfectados) {
    $horasTotal = ($chillAfectados * 10000) / $chillTotal;
    $minutosTotal = $horasTotal * 60;
    $recaudacionTotal = $minutosTotal * 20;

    return $recaudacionTotal;}

    $recaudacion = recaudacion($chillTotal, $chillAfectados);
    $diferencia = $recaudacion- $costeTotal;

    echo "<br>7. La recaudación es de: " . $recaudacion . " € <br>";
    echo "La diferencia es de: " . $diferencia . " € <br>";