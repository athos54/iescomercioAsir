	<?php
$ancho = rand(3,10);
$alto  = rand(3,10);

print "    <p>Ancho: $ancho</p>\n";
    print "\n";
    print "    <p>Alto: $alto</p>\n";
    print "\n";

    print "<pre>\n";
    for ($i = 1; $i <= $alto; $i++) {
        print "* ";
		for ($j = 1; $j <= $ancho-2; $j++) {
			if ($i==1 or $i==$alto ){
			   print "* ";}
			else {
			  print "  ";}
        }
		print "* ";
        print "\n";
    }
    print "\n";
    print "</pre>\n";
    print "\n";

?>
