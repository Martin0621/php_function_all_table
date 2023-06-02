<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>自訂函式</title>
</head>
<body>
<?php
$name1="kiki";
$name2="bar";

/* $sum=sum(15,21);
echo $sum;

echo sum(15,21); */

//echo sum(10,15,25,80,60);
g();
echo "<br>";
echo circle(10);
echo "<br>";
echo circle(10,6.18);
?>
</body>
</html>
<?php
/* function sum($a,$b){

//return $a+$b;

$sum=$a+$b;

return $sum;

} */

function sum(...$yuan){
    $sum=0;

    foreach($yuan as $num){
        $sum = $sum + $num;

    }

    return $sum;
    //return $a+$b;

   // print_r($arg);

}


function g(){
 global $name1;
 global $name2;

    echo "1234".$name1;
    echo "1234".$name2;

}

function circle($r,$p=3.1415){
    return $r*$r*$p;
}
?>