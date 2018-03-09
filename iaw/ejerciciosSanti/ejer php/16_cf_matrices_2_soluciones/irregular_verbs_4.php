<?php
/**
 * Irregular verbs 4 - irregular_verbs_4.php
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
  <title>Irregular verbs 4. Matrices (2). 
    Ejercicios. Programación web en PHP. Bartolomé Sintes Marco</title>
  <link href="mclibre_php_soluciones.css" rel="stylesheet" type="text/css" title="Color" />
</head>

<body>
<h1>Irregular verbs 4</h1>
<form action="irregular_verbs_4.php" method="get">
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
if (isset($_REQUEST["respuesta"])) {    
$respuesta   = recoge("respuesta");
$verbo       = recoge("verbo");
$formaVerbal = recoge("formaVerbal");
    if ($respuesta == $irregularVerbs[$verbo][$formaVerbal]) {
        print "<p>¡Respuesta correcta!</p>\n\n";
    } else {
        print "<p>¡Respuesta incorrecta!</p>\n\n";
        print "<p>El <strong>$formaVerbalNombre[$formaVerbal]</strong> de ";
        print "<strong>{$irregularVerbs[$verbo][3]}</strong> es ";
        print "<strong>{$irregularVerbs[$verbo][$formaVerbal]}</strong>.\n\n";
    }
}    
$formaVerbal = rand(0, 2);
$verbo       = rand(0, $numeroVerbos - 1);
$respuestas = array($irregularVerbs[$verbo][0], $irregularVerbs[$verbo][1], $irregularVerbs[$verbo][2]);
shuffle($respuestas);

print "  <table>\n";
print "    <tbody>\n";
print "      <tr>\n";
print "        <td>¿Cuál es el <strong>$formaVerbalNombre[$formaVerbal]</strong> de <strong>{$irregularVerbs[$verbo][3]}</strong>?</td>\n";
print "        <td><p><label><input type=\"radio\" name=\"respuesta\" value=\"$respuestas[0]\" />$respuestas[0]</label></p>\n";
print "          <p><label><input type=\"radio\" name=\"respuesta\" value=\"$respuestas[1]\" />$respuestas[1]</label></p>\n";
print "          <p><label><input type=\"radio\" name=\"respuesta\" value=\"$respuestas[2]\" />$respuestas[2]</label></p></td>\n";
print "      </tr>\n";
print "    </tbody>\n";
print "  </table>\n\n";

print "  <p><input type=\"hidden\" name=\"verbo\" value=\"$verbo\" />\n";
print "    <input type=\"hidden\" name=\"formaVerbal\" value=\"$formaVerbal\" /></p>\n";
?>
        
  <p><input type="submit" value="Corregir" /> 
    <input type="reset" value="Borrar" name="Reset" /></p>
</form>

<p><a href="irregular_verbs_4.php"><button>Reiniciar</button></a></p>

<footer>
  <p class="ultmod">
    Última modificación de esta página: 
    <time datetime="2015-11-12">12 de noviembre de 2015</time></p>

  <p class="licencia">
    Esta página forma parte del curso <a href="http://www.mclibre.org/consultar/php/">
    <cite>Programación web en PHP</cite></a> por <cite>Bartolomé Sintes Marco</cite>.<br />
    y se distribuye bajo una <a rel="license" href="https://creativecommons.org/licenses/by-sa/4.0/deed.es_ES">
    Licencia Creative Commons Reconocimiento-CompartirIgual 4.0 Internacional (CC BY-SA 4.0)</a>.</p>
</footer>
</body>
</html>