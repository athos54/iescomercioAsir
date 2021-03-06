<?php
/**
 * if ... elseif ... else ... 1-2 - if_else_1_2.php
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
    <title>Calculadora de divisiones (Resultado). if ... elseif ... else ...
      Ejercicios. PHP. Bartolomé Sintes Marco</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="mclibre_php_soluciones.css" rel="stylesheet" type="text/css" title="Color" />
  </head>

  <body>
    <h1>Calculadora de divisiones (Resultado)</h1>

<?php
/**
* funcion para convertir un numero a decimal con X digitos
* @param String $number
* @param Int $digitos cantidad de digitos a mostrar
* @return Float
*/
function truncateFloat($number, $digitos)
{
    $raiz = 10;
    $multiplicador = pow ($raiz,$digitos);
    $resultado = ((int)($number * $multiplicador)) / $multiplicador;
    return number_format($resultado, $digitos);
 
}
function recoge($var)
{
    $tmp = (isset($_REQUEST[$var]))
        ? trim(htmlspecialchars($_REQUEST[$var], ENT_QUOTES, "UTF-8"))
        : "";
    return $tmp;
}

$dividendo = recoge("dividendo");
$divisor   = recoge("divisor");

$dividendoOk = false;
$divisorOk   = false;

if ($dividendo == "") {
    print "    <p class=\"aviso\">No ha escrito el dividendo.</p>\n\n";
} elseif (!is_numeric($dividendo)) {
    print "    <p class=\"aviso\">No ha escrito el dividendo como número.</p>\n\n";
} elseif ($dividendo < 0 || $dividendo >= 1000) {
    print "    <p class=\"aviso\">El dividendo no está entre 0 y 1000.</p>\n\n";
} else {
    $dividendoOk = true;
}

if ($divisor == "") {
    print "    <p class=\"aviso\">No ha escrito el divisor.</p>\n\n";
} elseif (!is_numeric($divisor)) {
    print "    <p class=\"aviso\">No ha escrito el divisor como número.</p>\n\n";
} elseif ($divisor == 0) {
    print "    <p class=\"aviso\">En una división el divisor no puede ser cero.</p>\n\n";
} elseif ($divisor < 0 || $divisor >= 1000) {
    print "    <p class=\"aviso\">El divisor no está entre 0 y 1000.</p>\n\n";
} else {
    $divisorOk = true;
}

if ($dividendoOk && $divisorOk) {
	
	
	#$cociente = round(($dividendo / $divisor),2,PHP_ROUND_HALF_DOWN);
	#$cociente = number_format(($dividendo / $divisor),2);
	$cociente = truncateFloat(($dividendo / $divisor),2);
	    
	$resto = round($dividendo - $cociente * $divisor,10);
    print "    <p>Dividendo: <strong>$dividendo</strong></p>\n";
    print "\n";
    print "    <p>Divisor: <strong>$divisor</strong></p>\n";
    print "\n";
    print "    <p>Cociente: <strong>$cociente</strong></p>\n";
    print "\n";
    print "    <p>Resto: <strong>$resto</strong></p>\n";
    print "\n";
    if ($resto<>0) {
        print "    <p>La división <strong>no</strong> es exacta.</p>\n";
    } else {
        print "    <p>La división es exacta.</p>\n";
    }
    print "\n";
}
?>
    <p><a href="if_else_1_1.php">Volver al formulario.</a></p>

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