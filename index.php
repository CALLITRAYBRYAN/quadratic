<?php
    // echo phpinfo();
    // Quadratic formula function
    function quadratic($a, $b, $c) {
        $discriminant = $b**2 - 4*$a*$c;

        if ($discriminant < 0) {
            return "No real roots";

        } elseif ($discriminant == 0) {
            $root = -$b / (2*$a);
            return "One real root: " . $root;

        } else {
            $root1 = (-$b + sqrt($discriminant)) / (2*$a);
            $root2 = (-$b - sqrt($discriminant)) / (2*$a);
            return "Two real roots: " . $root1 . " and " . $root2;
        }
    }
    // Example usage
    $a = 10;
    $b = -5;
    $c = 6;
    echo "quadratic equation solutions: " . quadratic($a, $b, $c) . PHP_EOL;

?>