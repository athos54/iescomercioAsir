<?php
	$alto  = rand(3,10);
    print "<p>Alto: $alto</p>\n";
    print "\n";
    print "<pre\n>";
    for ($j = 1; $j <= 2 * $alto - 1; $j++) {
        print "* ";
    }
    print "\n";
    for ($i = 1; $i < $alto; $i++) {
        for ($j = $alto - $i; $j > 0; $j--) {
            print "* ";
        }
        for ($j = 1; $j <= 2 * $i - 1; $j++) {
            print "  ";
        }
        for ($j = $alto - $i; $j > 0; $j--) {
            print "* ";
        }
        print "\n";
    }
    print "</pre>\n";
    print "\n";
?>
