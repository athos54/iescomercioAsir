<?php
/**
 * Controles en formularios (2) 12-2 - controles_formularios_2_12_2.php
 *
 * @author    Bartolomé Sintes Marco <bartolome.sintes+mclibre@gmail.com>
 * @copyright 2016 Bartolomé Sintes Marco
 * @license   http://www.gnu.org/licenses/agpl.txt AGPL 3 or later
 * @version   2016-10-24
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
    <title>Círculo o cuadrado Cuadrado  (Resultado). Controles en formularios (2).
      Ejercicios. Programación web en PHP. Bartolomé Sintes Marco</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="mclibre_php_soluciones.css" rel="stylesheet" type="text/css" title="Color" />
  </head>

  <body>
    <h1>Círculo o cuadrado (Resultado)</h1>

<?php
function recoge($var)
{
    $tmp = (isset($_REQUEST[$var]))
        ? trim(htmlspecialchars($_REQUEST[$var], ENT_QUOTES, "UTF-8"))
        : "";
    return $tmp;
}

$lado  = recoge("lado");
$forma = recoge("forma");

$ladoOk  = false;
$formaOk = false;

if ($lado == "") {
    print "    <p class=\"aviso\">No ha escrito el tamaño del lado.</p>\n\n";
} elseif (!is_numeric($lado)) {
    print "    <p class=\"aviso\">No ha escrito el tamaño del lado como número.</p>\n\n";
} elseif (!ctype_digit($lado)) {
    print "    <p class=\"aviso\">No ha escrito el tamaño del lado como número entero.</p>\n\n";
} elseif ($lado < 20 || $lado > 500) {
    print "    <p class=\"aviso\">El tamaño del lado no está entre 20 y 500 px.</p>\n\n";
} else {
    $ladoOk = true;
}

if ($forma == "") {
    print "    <p class=\"aviso\">No ha elegido ninguna forma.</p>\n\n";
} elseif ($forma != "circulo" && $forma != "cuadrado") {
    print "    <p class=\"aviso\">Por favor, utilice el formulario.</p>\n\n";
} else {
    $formaOk = true;
}

if ($ladoOk && $formaOk) {
    print "    <svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" \n"
        . "      width=\"" . ($lado + 10) . "px\" height=\"" . ($lado + 10) . "px\">\n";
    if ($forma == "cuadrado") {
        print "      <rect fill=\"white\" stroke=\"black\" stroke-width=\"10\" "
        . "x=\"5\" y=\"5\" width=\"$lado\" height=\"$lado\" />\n";
    } else {
        print "      <circle cx=\"" . ($lado + 10) / 2 . "\" cy=\"" . ($lado + 10) / 2
            . "\" r=\"" . $lado / 2 . "\" stroke=\"black\" stroke-width=\"10\" fill=\"white\" />\n";
    }
    print "    </svg>\n";
    print "\n";
}
?>
    <p><a href="controles_formularios_2_12_1.php">Volver al formulario.</a></p>

    <footer>
      <p class="ultmod">
        Última modificación de esta página:
        <time datetime="2016-10-24">24 de octubre de 2016</time></p>

      <p class="licencia">
        Este programa forma parte del curso <a href="http://www.mclibre.org/consultar/php/">
        Programación web en PHP</a> por <a href="http://www.mclibre.org/">Bartolomé
        Sintes Marco</a>.<br />
        El programa PHP que genera esta página está bajo
        <a rel="license" href="http://www.gnu.org/licenses/agpl.txt">licencia AGPL 3 o posterior</a>.</p>
    </footer>
  </body>
</html>