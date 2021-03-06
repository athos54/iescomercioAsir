<?php
/**
 * if ... elseif ... else ... 7-2 - if_else_7_2.php
 *
 * @author    Bartolomé Sintes Marco <bartolome.sintes+mclibre@gmail.com>
 * @copyright 2015 Bartolomé Sintes Marco
 * @license   http://www.gnu.org/licenses/agpl.txt AGPL 3 or later
 * @version   2016-11-04
 * @link      http://www.mclibre.org
 *
 *  This program is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU Affero General Public License as published by
 *  the Free Software Foundation, either version 3 of the License, or
 *  any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU Affero General Public License for more details.
 *
 *  You should have received a copy of the GNU Affero General Public License
 *  along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <title>Convertidor de centímetros a kilómetros, metros y centímetros (Resultado). if ... elseif ... else ...
      Ejercicios. PHP. Bartolomé Sintes Marco</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="mclibre_php_soluciones.css" rel="stylesheet" type="text/css" title="Color" />
  </head>

  <body>
    <h1>Convertidor de centímetros a kilómetros, metros y centímetros (Resultado)</h1>

<?php
function recoge($var)
{
    $tmp = (isset($_REQUEST[$var]))
        ? trim(htmlspecialchars($_REQUEST[$var], ENT_QUOTES, "UTF-8"))
        : "";
    return $tmp;
}

$distancia = recoge("distancia");

$distanciaOk = false;

if ($distancia == "") {
    print "    <p class=\"aviso\">No ha escrito la distancia.</p>\n\n";
} elseif (!is_numeric($distancia)) {
    print "    <p class=\"aviso\">No ha escrito la distancia como número.</p>\n\n";
} elseif (!ctype_digit($distancia)) {
    print "    <p class=\"aviso\">No ha escrito la distancia como número "
        ."entero positivo (sin parte decimal).</p>\n\n";
} elseif ($distancia >= 1000000000) {
    print "    <p class=\"aviso\">La distancia no es inferior a 1.000.000.000.</p>\n\n";
} else {
    $distanciaOk = true;
}

if ($distanciaOk) {
    $mt = (int)($distancia / 100);
    $cm = $distancia % 100;
    $km = (int)($mt / 1000);
    $m = $mt % 1000;
    print "    <p>$distancia cm son ";
	if ($km>0) 
        print "$km km";
    if ($m>0) {
        if ($km>0 && $cm>0)
			print ", ";
		elseif ($km>0)
		    print " y ";
		print "$m m";	
    }
	if (($km>0 OR $m>0)AND $cm>0)
        print " y ";
	if ($cm>0)
		print "$cm cm";
	if ($distancia==0)
		print "$cm cm";
	print ".</p>\n";
    print "\n";
}
?>
    <p><a href="if_else_7_1.php">Volver al formulario.</a></p>

    <footer>
      <p class="ultmod">
        Última modificación de esta página:
        <time datetime="2016-11-04">4 de noviembre de 2016</time></p>

      <p class="licencia">
        Este programa forma parte del curso <a href="http://www.mclibre.org/consultar/php/">
        Programación web en PHP</a> por <a href="http://www.mclibre.org/">Bartolomé
        Sintes Marco</a>.<br />
        El programa PHP que genera esta página está bajo
        <a rel="license" href="http://www.gnu.org/licenses/agpl.txt">licencia AGPL 3 o posterior</a>.</p>
    </footer>
  </body>
</html>