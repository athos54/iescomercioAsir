<?php 
/**
 * Sesiones (2) 1-1 - sesiones_2_11_1.php
 * 
 * @author    Bartolomé Sintes Marco <bartolome.sintes+mclibre@gmail.com>
 * @copyright 2015 Bartolomé Sintes Marco
 * @license   http://www.gnu.org/licenses/agpl.txt AGPL 3 or later
 * @version   2015-11-16
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

session_name("sesiones_2_11"); 
session_start();

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <title>Comprobación en formulario. Sesiones (2). 
    Ejercicios. PHP. Bartolomé Sintes Marco</title>
  <link href="mclibre_php_soluciones.css" rel="stylesheet" type="text/css" title="Color" />
</head>

<body>
<h1>Comprobación en formulario</h1>

<form action="sesiones_2_11_2.php" method="get">
<?php
print "  <table>\n";
print "    <tbody>\n";
print "      <tr>\n";
print "        <td>Escriba su nombre:</td>\n";
print "        <td><input type=\"text\" name=\"nombre\" ";
if (isset($_SESSION["dato"]["nombre"])) {
    print "value=\"{$_SESSION["dato"]["nombre"]}\" ";
}
print "size=\"20\" maxlength=\"20\" />";
if (isset($_SESSION["aviso"]["nombre"])) {
    print " <span class=\"aviso\">{$_SESSION["aviso"]["nombre"]}</span>";
}
print "</td>\n";
print "      </tr>\n";
print "      <tr>\n";
print "        <td>Escriba su edad (entre 18 y 130 años):</td>\n";
print "        <td><input type=\"text\" name=\"edad\" ";
if (isset($_SESSION["dato"]["edad"])) {
    print "value=\"{$_SESSION["dato"]["edad"]}\" ";
}
print "size=\"5\" maxlength=\"3\" />";
if (isset($_SESSION["aviso"]["edad"])) {
    print " <span class=\"aviso\">{$_SESSION["aviso"]["edad"]}</span>";
}
print "</td>\n";
print "      </tr>\n";
print "    </tbody>\n";
print "  </table>\n";

unset($_SESSION["aviso"]);
unset($_SESSION["dato"]);

?>

  <p><input type="submit" value="Comprobar" /> 
    <input type="reset" value="Borrar" name="Reset" /></p>
</form>

<footer>
  <p class="ultmod">
    Última modificación de esta página: 
    <time datetime="2015-11-16">16 de noviembre de 2015</time></p>

  <p class="licencia">
    Este programa forma parte del curso <a href="http://www.mclibre.org/consultar/php/">
    <cite>Programación web en PHP</cite></a> por <cite>Bartolomé Sintes Marco</cite>.<br />
    El programa PHP que genera esta página está bajo
    <a rel="license" href="http://www.gnu.org/licenses/agpl.txt">licencia AGPL 3 o posterior</a></p>
</footer>
</body>
</html>