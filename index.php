<?php
    // echo phpinfo();
    // Assign values
    $a = 10;
    $b = 20;
    $c = $a + $b;
    echo "The sum of $a and $b is $c";

    // calculate the sum of two numbers
    $d = $a + $b;
    echo "The sum of $a and $b is $d";

    // calculate the discriminant
    $e = $b * $b - 4 * $a * $c;
    echo "The discriminant is $e";
    $discriminant = $b * $b - 4 * $a * $c;
    echo "The discriminant is $discriminant";

    // check the roots
    if ($discriminant > 0) {
        $root1 = (-$b + sqrt($discriminant)) / (2 * $a);
        $root2 = (-$b - sqrt($discriminant)) / (2 * $a);
        echo "The roots are $root1 and $root2";
    } elseif ($discriminant == 0) 
        {
        $root = -$b / (2 * $a);
        echo "The root is $root";
    } 
    else {
        echo "There are no real roots";
    }

    // calculate the area of a circle
    $radius = 5;
    $area = pi() * $radius * $radius;
    echo "The area of the circle is $area";

    // calculate the area of a rectangle
    $length = 10;
    $width = 5;
    $area = $length * $width;
    echo "The area of the rectangle is $area";

    // calculate the area of a triangle
    $base = 10;
    $height = 5;
    $area = 0.5 * $base * $height;
    echo "The area of the triangle is $area";
    
    // calculate the area of a square
    $side = 5;
    $area = $side * $side;
    echo "The area of the square is $area";

?>