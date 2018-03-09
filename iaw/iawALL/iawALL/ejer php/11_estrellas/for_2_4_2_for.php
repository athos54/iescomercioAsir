<?php
$ancho = rand(3,10);
$alto  = rand(3,10);
    print "    <p>Ancho: $ancho</p>\n";
    print "\n";
    print "    <p>Alto: $alto</p>\n";
    print "\n";

    print "    <pre>\n";
    for ($j = 1; $j <= $ancho; $j++) {
        print "* ";
    }
    print "\n";
    for ($i = 1; $i <= $alto-2; $i++) {
        print "* ";
        for ($j = 1; $j <= $ancho-2; $j++) {
            print "  ";
        }
        print "* ";
        print "\n";
    }
    for ($j = 1; $j <= $ancho; $j++) {
        print "* ";
    }
    print "\n";
    print "</pre>\n";
    print "\n";


?>
  