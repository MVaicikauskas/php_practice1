<?php echo "TEST" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
// 1 uzduotis
// $name = 'Mindaugas';
// $surname = 'Vaicikauskas';
// $birthDate = 1996;
// $thisYear = date('Y');
// $age = $thisYear - $birthDate;
// echo '<br>';
// echo "Aš esu $name $surname. Man yra $age metu";
// echo '<br>';

// 2 uzduotis
// $firstRandom = rand(0, 4);
// $secondRandom = rand(0, 4);
// echo '<br>';
// if($firstRandom>$secondRandom && $firstRandom != 0 && $secondRandom != 0){
//     echo round(($firstRandom/$secondRandom),2).' pirmas skaicius didesnis';
// } elseif($firstRandom<$secondRandom) {
//     echo round(($secondRandom/$firstRandom),2).' antras skaicius didesnis';
// } elseif($secondRandom===$firstRandom) {
//     echo ($secondRandom/$firstRandom).' skaiciai lygus';
// };
// echo '<br>';

//3 uzduotis

// $randomNumber1 = rand(0, 25);
// $randomNumber2 = rand(0, 25);
// $randomNumber3 = rand(0, 25);

// echo '<br>';

// if($randomNumber1>$randomNumber2 && $randomNumber1<$randomNumber2){
//     echo $randomNumber1;
// } elseif ($randomNumber1>$randomNumber2){
//     echo rand(0, 25);
// } elseif ($randomNumber2>=$randomNumber1){
//     echo rand(0, 25);
// };
// echo '<br>';
// if($randomNumber2>$randomNumber3 && $randomNumber2<$randomNumber3){
//     echo $randomNumber2;
// } elseif ($randomNumber2>$randomNumber3){
//     echo rand(0, 25);
// } elseif ($randomNumber3>=$randomNumber2){
//     echo rand(0, 25);
// };
// echo '<br>';
// if($randomNumber3>$randomNumber1 && $randomNumber3<$randomNumber1){
//     echo $randomNumber3;
// } elseif ($randomNumber3>$randomNumber1){
//     echo rand(0, 25);
// } elseif ($randomNumber1>=$randomNumber3){
//     echo rand(0, 25);
// };

// 4 uzduotis
// echo '<br>';
// $a = rand(0,10);
// $b = rand(0,10);
// $c = rand(0, 10);

//  echo $a.' '.$b.' '.$c;
//  echo '<br>';
// if($a + $b > $c xor $a + $c > $b xor $b + $c > $a){
//     echo 'trikampis su siomis reiksmemis gali egzistuoti';
//     echo '<br>';
//     if(($a**2) + ($b**2) > ($c**2) xor ($a**2) + ($c**2) > ($b**2) xor ($b**2) + ($c**2) > ($a**2) ) {
//         echo 'smailas trikampis';
//     } elseif(($a**2) + ($b**2) < ($c**2) xor ($a**2) + ($c**2) < ($b**2) xor ($b**2) + ($c**2) < ($a**2) ) {
//         echo 'bukas trikampis';
//     } elseif(($a**2) + ($b**2) === ($c**2) xor ($a**2) + ($c**2) === ($b**2) xor ($b**2) + ($c**2) === ($a**2) ) {
//         echo 'status trikampis';
//     } else {
//         echo 'nera tokio trikampio';
//     }
// } else {
//     echo 'trikampis negali egzistuoti turint sias reiksmes';
//     echo '<br>';
// };

//5 uzduotis

// $first = rand(0, 2);
// $second = rand(0, 2);
// $third = rand(0, 2);
// $fourth = rand(0, 2);

// $zero = 0;
// $one = 0;
// $two = 0;

// if($first == 0){
//     $zero++;
// } elseif ($first == 1){
//     $one++;
// } else {
//     $two++;
// };
// if($second == 0){
//     $zero++;
// } elseif ($second == 1){
//     $one++;
// } else {
//     $two++;
// };
// if($third == 0){
//     $zero++;
// } elseif ($third == 1){
//     $one++;
// } else {
//     $two++;
// };
// if($fourth == 0){
//     $zero++;
// } elseif ($fourth == 1){
//     $one++;
// } else {
//     $two++;
// };
// echo "tarp 4 kintamuju reiksmiu lygiu 0 yra $zero, lygiu 1 yra $one, lygiu dviem yra $two ";



//6 uzduotis
// $random = rand(1, 6);

// echo "<h$random>$random</h$random>";

// 7 uzduotis

// $randomOne = rand(-10, 10);
// $randomTwo = rand(-10, 10);
// $randomThree = rand(-10, 10);

// if($randomOne<0){
//     echo "<p style="."color:green".">$randomOne</p>";
// } elseif($randomOne == 0){
//     echo "<p style="."color:red".">$randomOne</p>";
// }elseif ($randomOne > 0){
//     echo "<p style="."color:blue".">$randomOne</p>";
// } else {
//     echo "<p style="."color:black".">$randomOne</p>";
// };
// if($randomTwo<0){
//     echo "<p style="."color:green".">$randomTwo</p>";
// } elseif($randomTwo == 0){
//     echo "<p style="."color:red".">$randomTwo</p>";
// }elseif ($randomTwo > 0){
//     echo "<p style="."color:blue".">$randomTwo</p>";
// } else {
//     echo "<p style="."color:black".">$randomTwo</p>";
// };
// if($randomThree<0){
//     echo "<p style="."color:green".">$randomThree</p>";
// } elseif($randomThree == 0){
//     echo "<p style="."color:red".">$randomThree</p>";
// }elseif ($randomThree > 0){
//     echo "<p style="."color:blue".">$randomThree</p>";
// } else {
//     echo "<p style="."color:black".">$randomThree</p>";
// };

//8 uzduotis

// $candleCount = rand(5,3000);
// $candlesPrice = ($candleCount*1).'Eur';
// $firstDiscount = ($candleCount/100)*3;
// $secondDiscount = ($candleCount/100)*4;

// if($candleCount>1000){
//     echo ($candleCount - $firstDiscount).' EUR uz '.$candleCount.' zvakiu';
// } elseif($candleCount>2000){
//     echo ($candleCount - $secondDiscount).' EUR uz '.$candleCount.' zvakiu';
// };

//9 uzduotis

// $first = rand(0,100);
// $second = rand(0,100);
// $third = rand(0,100);
// $arithmeticMean = ($first + $second + $third)/3;
// echo round($arithmeticMean).' aritmetinis vidurkis';
// echo '<br>';

// if($first<10 || $first>90){
//     $arithmeticMean2 = ($second + $third)/2;
//     echo round($arithmeticMean2).' aritmetinis vidurkis atmetus maziau uz 10 ir daugiu uz 90 reiksmes';
//     echo '<br>';
// } else {
//     // $arithmeticMean2 = ($first + $second + $third)/3;
//     // echo round($arithmeticMean2).' aritmetinis vidurkis atmetus maziau uz 10 ir daugiu uz 90 reiksmes';
//     echo '<br>';
// };
// if($second<10 || $second>90){
//     $arithmeticMean2 = ($first + $third)/2;
//     echo round($arithmeticMean2).' aritmetinis vidurkis atmetus maziau uz 10 ir daugiu uz 90 reiksmes';
//     echo '<br>';
// } else {
//     $arithmeticMean2 = ($first + $second + $third)/3;
//     // echo round($arithmeticMean2).' aritmetinis vidurkis atmetus maziau uz 10 ir daugiu uz 90 reiksmes';
//     echo '<br>';
// };
// if($third<10 || $third>90){
//     $arithmeticMean2 = ($second + $first)/2;
//     echo round($arithmeticMean2).' aritmetinis vidurkis atmetus maziau uz 10 ir daugiu uz 90 reiksmes';
//     echo '<br>';
// } else {
//     $arithmeticMean2 = ($first + $second + $third)/3;
//     // echo round($arithmeticMean2).' aritmetinis vidurkis atmetus maziau uz 10 ir daugiu uz 90 reiksmes';
//     echo '<br>';
// };

//10 uzduotis

$hours = rand(0, 23);
$minutes = rand(0, 59);
$seconds = rand(0, 59);
$additionalSeconds = rand(0, 300);
$secondsAfter = $seconds + (($additionalSeconds%60)*(60/100)); 
$minutesAfter = ($minutes + round(($additionalSeconds/60),0));
$hoursAfter = $hours;
if($secondsAfter>60){
    $minutesAfter = $minutes++;
};
if($minutesAfter>60){
$hoursAfter = $hours++;
};
if($hoursAfter>23){
    $hoursAfter = 00;
};
if($minutesAfter>=60){
    $minutesAfter = $minutesAfter - 60;
};
if($secondsAfter>=60){
    $secondsAfter = $secondsAfter - 60;
};
$digitalWatch = "$hoursAfter:$minutesAfter:".round($secondsAfter);
// echo "<br>";
// echo $hours;
echo "<br>";
echo $digitalWatch;
?>