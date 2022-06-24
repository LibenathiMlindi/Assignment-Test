// Java Program to find the radius
// of the incircle of the given triangle
import java.io.*;
 
class GFG {
   
// Function to find the radius
// of the incircle
static float findRadiusOfIncircle(float a, float b, float c)
{
 
    // the sides cannot be negative
    if (a < 0 || b < 0 || c < 0)
        return -1;
 
    // semi-perimeter of the circle
    float p = (a + b + c) / 2;
 
    // area of the triangle
    float area = (float)Math.sqrt(p * (p - a) * (p - b) * (p - c));
 
    // Radius of the incircle
    float radius = area / p;
 
    // Return the radius
    return radius;
}
 
// Driver code
 
    public static void main (String[] args) {
         
    // Get the sides of the triangle
    float a = 2, b = 2, c = 3;
 
    // Find the radius of the incircle
    System.out.println( findRadiusOfIncircle(a, b, c));
         
    }
}
 // This code is contributed by ajit

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
 
