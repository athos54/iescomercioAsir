<?php
/**
 * if ... elseif ... else ... 5-2 - if_else_5_2.php
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
    <title>Calculadora de años bisiestos (Resultado). if ... elseif ... else ...
      Ejercicios. PHP. Bartolomé Sintes Marco</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="mclibre_php_soluciones.css" rel="stylesheet" type="text/css" title="Color" />
  </head>

  <body>
    <h1>Calculadora de años bisiestos (Resultado)</h1>

<?php
function recoge($var)
{
    $tmp = (isset($_REQUEST[$var]))
        ? trim(htmlspecialchars($_REQUEST[$var], ENT_QUOTES, "UTF-8"))
        : "";
    return $tmp;
}

$anyo = recoge("anyo");

$anyoOk = false;

if ($anyo == "") {
    print "    <p class=\"aviso\">No ha escrito el año.</p>\n\n";
} elseif (!is_numeric($anyo)) {
    print "    <p class=\"aviso\">No ha escrito el año como número.</p>\n\n";
} elseif (!ctype_digit($anyo)) {
    print "    <p class=\"aviso\">No ha escrito el año como número "
        ."entero positivo (sin parte decimal).</p>\n\n";
} elseif ($anyo >= 10000) {
    print "    <p class=\"aviso\">El año no es inferior a 10.000.</p>\n\n";
} else {
    $anyoOk = true;
}

if ($anyoOk) {
    if ($anyo % 400 == 0) {
        print "    <p>El año $anyo es bisiesto porque es múltiplo de 400.</p>\n";
    } elseif ($anyo % 100 == 0) {
        print "    <p>El año $anyo no es bisiesto porque es múltiplo de 100, "
            ."pero no es múltiplo de 400.</p>\n";
    } elseif ($anyo % 4 == 0) {
        print "    <p>El año $anyo es bisiesto porque es múltiplo de 4, "
            ."pero no es múltiplo de 100.</p>\n";
    } else {
        print "    <p>El año $anyo no es bisiesto porque no es múltiplo de 4.</p>\n";
    }
    print "\n";
}
?>
    <p><a href="if_else_5_1.php">Volver al formulario.</a></p>

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