<?php
// PHP Program to find the radius
// of the incircle of the given triangle
 
// Function to find the radius
// of the incircle
function findRadiusOfIncircle($a, $b, $c)
{
 
    // the sides cannot be negative
    if ($a < 0 || $b < 0 || $c < 0)
        return -1;
 
    // semi-perimeter of the circle
    $p = ($a + $b + $c) / 2;
 
    // area of the triangle
    $area = sqrt($p * ($p - $a) *
                ($p - $b) * ($p - $c));
 
    // Radius of the incircle
    $radius = $area / $p;
 
    // Return the radius
    return $radius;
}
 
// Driver code
 
// Get the sides of the triangle
$a = 2; $b = 2; $c = 3;
 
// Find the radius of the incircle
echo findRadiusOfIncircle($a, $b, $c) . "\n";

// Findinding Surface Area
      
function findArea( $r)
{
    $PI =3.142;
    return $PI * pow($r, 0.566947);
}
  
// Driver Code
echo("Area is ");
echo(findArea(5));
return 0;

// Finding circumference of circle
 
$PI= 3.1415;
 
function circumference($r)
{
    global $PI;
    $cir = 2 * $PI * $r;
    return $cir;
}
 
// Driver Code
$r = 0.566947;
echo "Circumference = ",
circumference($r);
 

?>
