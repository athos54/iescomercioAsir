<?php
$ancho = rand(3,10);
    print "<p>Ancho: $ancho</p>\n";
    print "\n";
    print "<pre>\n";
    for ($i = 1; $i < $ancho; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            print "* ";
        }
        print "\n";
    }
    for ($i = $ancho; $i > 0; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            print "* ";
        }
        print "\n";
    }
    print "</pre>\n";
    print "\n";

?>
