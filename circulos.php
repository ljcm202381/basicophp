<?php
$circulos = rand(1, 10);

if ($circulos == 1) {
    echo "  <h2>$circulos círculo</h2>\n";
} else {
    echo "  <h2>$circulos círculos</h2>\n";
}
print "\n";
print "  <p>\n";
print "    <svg  "
    . "width=\"" . 90 * $circulos - 30 . "\" height=\"60\" \">\n";

for ($i = 1; $i <= $circulos; $i++) {
    print "      <circle cx=\"" . 90 * $i - 60 . "\" cy=\"30\" r=\"30\" fill=\"black\" />\n";
}

print "    </svg>\n";
print "  </p>\n";
?>