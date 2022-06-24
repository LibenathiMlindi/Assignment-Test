<?php
// PHP program to find area
// of circle
      
function findArea( $r)
{
    $PI =3.142;
    return $PI * pow($r, 2);
}
  
// Driver Code
echo("Area is ");
echo(findArea(5));
return 0;

// circumference of circle
 
$PI= 3.1415;
 
function circumference($r)
{
    global $PI;
    $cir = 2 * $PI * $r;
    return $cir;
}
 
// Driver Code
$r = 2;
echo "Circumference = ",
circumference($r);

?>
