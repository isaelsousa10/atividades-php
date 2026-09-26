<?php
$lado1 = 16;
$lado2 = 16;
$lado3 = 16;

if ($lado1 == $lado2 && $lado2 == $lado3 && $lado1 == $lado3) {
    echo "este triangulo é equilatero";
} elseif ($lado1 == $lado2 or $lado2 == $lado3 or $lado1 == $lado3 ) {
    echo "este tringulo é isosceles";
} else {
    echo "este triangulo é escaleno";
}

?>