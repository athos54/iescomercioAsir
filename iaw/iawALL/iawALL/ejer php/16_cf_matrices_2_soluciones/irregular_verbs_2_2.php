<?php
/**
 * Irregular verbs 2-2 - irregular_verbs_2_2.php
 *
 * @author    Bartolomé Sintes Marco <bartolome.sintes+mclibre@gmail.com>
 * @copyright 2015 Bartolomé Sintes Marco
 * @license   http://www.gnu.org/licenses/agpl.txt AGPL 3 or later
 * @version   2015-11-11
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
  <title>Irregular verbs 2 (Resultado). Matrices (2). 
    Ejercicios. Programación web en PHP. Bartolomé Sintes Marco</title>
  <link href="mclibre_php_soluciones.css" rel="stylesheet" type="text/css" title="Color" />
</head>

<body>
<h1>Irregular verbs 2 (Resultado)</h1>

<?php
function recoge($var)
{
    $tmp = (isset($_REQUEST[$var]))
        ? trim(htmlspecialchars($_REQUEST[$var], ENT_QUOTES, "UTF-8"))
        : "";
    return $tmp;
}

include "irregular_verbs_list.php";

$numeroVerbos = count($irregularVerbs);

$formaVerbalNombre = array("infinitivo", "pasado", "participio");

$respuesta   = recoge("respuesta");
$verbo       = recoge("verbo");
$formaVerbal = recoge("formaVerbal");

$verboOk       = false;
$formaVerbalOk = false;

if ($verbo == "" || !is_numeric($verbo) || !ctype_digit($verbo) || $verbo < 0 || $verbo >= $numeroVerbos) {
    print "<p class=\"aviso\">Por favor, utilice el formulario.</p>\n";
} else {
    $verboOk = true;
}

if ($formaVerbal != 0 && $formaVerbal != 1 && $formaVerbal != 2) {
    print "<p class=\"aviso\">Por favor, utilice el formulario.</p>\n";
} else {
    $formaVerbalOk = true;
}


if ($verboOk && $formaVerbalOk) {
    if ($respuesta == $irregularVerbs[$verbo][$formaVerbal]) {
        print "<p>¡Respuesta correcta!</p>\n\n";
    } else {
        print "<p>¡Respuesta incorrecta!</p>\n\n";
        print "<p>El <strong>$formaVerbalNombre[$formaVerbal]</strong> de ";
        print "<strong>{$irregularVerbs[$verbo][3]}</strong> es ";
        print "<strong>{$irregularVerbs[$verbo][$formaVerbal]}</strong>.\n\n";      
    }
}
?>

<p><a href="irregular_verbs_2_1.php">Volver al formulario.</a></p>

<footer>
  <p class="ultmod">
    Última modificación de esta página: 
    <time datetime="2015-11-11">11 de noviembre de 2015</time></p>

  <p class="licencia">
    Este programa forma parte del curso <a href="http://www.mclibre.org/consultar/php/">
    <cite>Programación web en PHP</cite></a> por <cite>Bartolomé Sintes Marco</cite>.<br />
    El programa PHP que genera esta página está bajo
    <a rel="license" href="http://www.gnu.org/licenses/agpl.txt">licencia AGPL 3 o posterior</a></p>
</footer>
</body>
</html>