<?php
/**
 * Sesiones (1) 2 - ver.php
 * 
 * @author    Bartolomé Sintes Marco <bartolome.sintes+mclibre@gmail.com>
 * @copyright 2015 Bartolomé Sintes Marco
 * @license   http://www.gnu.org/licenses/agpl.txt AGPL 3 or later
 * @version   2015-11-15
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

session_name("sesiones_1_2");
session_start();

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <title>Ver datos. Sesiones. 
    Ejercicios. PHP. Bartolomé Sintes Marco</title>
  <link href="mclibre_php_soluciones.css" rel="stylesheet" type="text/css" title="Color" />
</head>

<body>
<h1>Ver datos</h1>

<?php
if (!isset($_SESSION["nombre"]) and !isset($_SESSION["apellidos"])) {
    print "<p>Usted no ha escrito todavía ni su nombre ni sus apellidos</p>\n";
} elseif (isset($_SESSION["nombre"]) and !isset($_SESSION["apellidos"])) {
    print "<p>Usted sólo ha escrito que su nombre es: <strong>$_SESSION[nombre]</strong></p>\n";
} elseif (!isset($_SESSION["nombre"]) and isset($_SESSION["apellidos"])) {
    print "<p>Usted sólo ha escrito que sus apellidos son: <strong>$_SESSION[apellidos]</strong></p>\n";
} else {
    print "<p>Usted ha escrito que su nombre es: <strong>$_SESSION[nombre]</strong></p>\n\n";
    print "<p>Usted ha escrito que sus apellidos son: <strong>$_SESSION[apellidos]</strong></p>\n";
}
?>

<p><a href="index.html">Volver al inicio.</a></p>

<footer>
  <p class="ultmod">
    Última modificación de esta página: 
    <time datetime="2015-11-15">15 de noviembre de 2015</time></p>

  <p class="licencia">
    Este programa forma parte del curso <a href="http://www.mclibre.org/consultar/php/">
    <cite>Programación web en PHP</cite></a> por <cite>Bartolomé Sintes Marco</cite>.<br />
    El programa PHP que genera esta página está bajo
    <a rel="license" href="http://www.gnu.org/licenses/agpl.txt">licencia AGPL 3 o posterior</a></p>
</footer>
</body>
</html>
