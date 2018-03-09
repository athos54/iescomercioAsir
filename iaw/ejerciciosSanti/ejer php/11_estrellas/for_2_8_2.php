<?php
$alto  = rand(3,10);
    print "<p>Alto: $alto</p>\n";
    print "\n";

    print "<pre>\n";
    for ($i = 1; $i <= $alto; $i++) {
        for ($j =1 ;$j<= $alto - $i ; $j++) {
            print "  ";
        }
        for ($j = 1; $j <= 2 * $i - 1; $j++) {
            print "* ";
        }
        print "\n";
    }
    print "</pre>\n";
    print "\n";
?>
