<?php
/**
 * Sesiones (1) 01 - sesiones_1_01_2.php
 *
 * @author    Bartolomé Sintes Marco <bartolome.sintes+mclibre@gmail.com>
 * @copyright 2016 Bartolomé Sintes Marco
 * @license   http://www.gnu.org/licenses/agpl.txt AGPL 3 or later
 * @version   2016-11-17
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

session_name("sesiones_1_01");
session_start();
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <title>Formulario Nombre 1 (Resultado). Sesiones.
      Ejercicios. PHP. Bartolomé Sintes Marco</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="mclibre_php_soluciones.css" rel="stylesheet" type="text/css" title="Color" />
  </head>
  <body>
    <h1>Formulario Nombre 1 (Resultado)</h1>
<?php
function recoge($var)
{
    $tmp = (isset($_REQUEST[$var]))
    ? trim(htmlspecialchars($_REQUEST[$var], ENT_QUOTES, "UTF-8"))
    : "";
    return $tmp;
}
$nombre   = recoge("nombre");
$nombreOk = false;
if ($nombre == "") {
    print "    <p class=\"aviso\">No ha escrito su nombre.</p>\n";
} else {
    $nombreOk = true;
}
if ($nombreOk) {
    $_SESSION["nombre"] = $nombre;
    print "<p>Su nombre es: <strong>$nombre</strong>.</p>\n";
}
?>
 <p><a href="sesiones_1_01_1.php">Volver a la primera página.</a></p>
   </body>
</html>