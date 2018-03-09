<?php
/**
 * Irregular verbs 1 - irregular_verbs_1.php
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
  <title>Irregular verbs 1 (Formulario). Matrices (2).  
    Ejercicios. Programación web en PHP. Bartolomé Sintes Marco</title>
  <link href="mclibre_php_soluciones.css" rel="stylesheet" type="text/css" title="Color" />
</head>

<body>
<h1>Irregular verbs 1</h1>

<?php
include "irregular_verbs_list.php";

$numeroVerbos = count($irregularVerbs);

$formaVerbalNombre = array("infinitivo", "pasado", "participio");

$formaVerbal = rand(0, 2);
$verbo       = rand(0, $numeroVerbos - 1);

print "<p>El <strong>$formaVerbalNombre[$formaVerbal]</strong> de ";
print "<strong>{$irregularVerbs[$verbo][3]}</strong> es ";
print "<strong>{$irregularVerbs[$verbo][$formaVerbal]}</strong>.\n\n";

?>

<p><a href="irregular_verbs_1.php"><button>Mostrar otro</button></a></p>
        
<footer>
  <p class="ultmod">
    Última modificación de esta página: 
    <time datetime="2015-11-11">11 de noviembre de 2015</time></p>

  <p class="licencia">
    Esta página forma parte del curso <a href="http://www.mclibre.org/consultar/php/">
    <cite>Programación web en PHP</cite></a> por <cite>Bartolomé Sintes Marco</cite>.<br />
    y se distribuye bajo una <a rel="license" href="https://creativecommons.org/licenses/by-sa/4.0/deed.es_ES">
    Licencia Creative Commons Reconocimiento-CompartirIgual 4.0 Internacional (CC BY-SA 4.0)</a>.</p>
</footer>
</body>
</html>