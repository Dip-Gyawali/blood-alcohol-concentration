<?php  
//  echo "Hello";

 $weight= $_POST['weight'];
 $wightUnit= $_POST['unit'];
//  echo $wightUnit;
 $gender = $_POST['gender'];
 $drinkNo= $_POST['drinks'];
 $consumption =$_POST['alcohol_content'];
 $timeElapsed =$_POST['time_elapsed'];

if($wightUnit=="kg"){
    $weight*=2.20;
    // echo "$weight";
}
if($gender=="male"){
    $genderConstand = 0.73;
}
else{
    $genderConstand = 0.66;
}
// echo "$genderConstand";

$alcoholConsump = ($consumption * $drinkNo *5.14)/($weight * $genderConstand)-0.015 * $timeElapsed;

header("Location:/?data=$alcoholConsump");
?>