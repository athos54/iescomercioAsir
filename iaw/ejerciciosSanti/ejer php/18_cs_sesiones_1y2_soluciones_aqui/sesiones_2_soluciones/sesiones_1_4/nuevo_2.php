<?php 
/**
 * Sesiones (1) 4 - nombre_2.php
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

session_name("sesiones_1_4"); 
session_start();

function recoge($var)
{
    $tmp = (isset($_REQUEST[$var]))
    ? trim(htmlspecialchars($_REQUEST[$var], ENT_QUOTES, "UTF-8"))
    : "";
    return $tmp;
}

$nombre   = recoge("nombre");
$valor    = recoge("valor");
$nombreOk = false;
$valorOk  = false;

if ($nombre != "") {
	$nombreOk = true;
}

if ($valor != "") {
	$valorOk = true;
}

if ($nombreOk && $valorOk) {
    $_SESSION[$nombre] = $valor;
    header("location:index.php");
    exit;
} 

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <title>Nuevo dato (2). Sesiones 4. Sesiones. 
    Ejercicios. PHP. Bartolomé Sintes Marco</title>
  <link href="mclibre_php_soluciones.css" rel="stylesheet" type="text/css" title="Color" />
</head> 
  
<body>
<h1>Nombre (Formulario 2)</h1>

<p class="aviso">No ha escrito el nombre o el valor.</p>

<p><a href="nuevo_1.php">Volver al formulario.</a></p>
    
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