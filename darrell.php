<?php
echo '<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>PHP Exercises</title>
<style>
  body {
    background-color: #808080; /* gray background */
    color: white;
    font-family: Arial, sans-serif;
    text-align: center; /* center all text */
    padding: 30px;
  }
  b {
    font-size: 1.2em;
  }
</style>
</head>
<body>
';

$br = "<br><br>";

// 1. Introduce Yourself
echo "<b>1. Introduce Yourself</b><br>";
$name = "Darrell Rhodney Pagalan";
$age = 22;
$fav_color = "Gray";
echo "Hi, I'm $name, I am $age years old, and my favorite color is $fav_color.$br";

// 2. Simple Math
echo "<b>2. Simple Math</b><br>";
$a = 10;
$b = 5;
echo "Sum: " . ($a + $b) . "<br>";
echo "Difference: " . ($a - $b) . "<br>";
echo "Product: " . ($a * $b) . "<br>";
echo "Quotient: " . ($a / $b) . $br;

// 3. Area and Perimeter of a Rectangle
echo "<b>3. Area and Perimeter of a Rectangle</b><br>";
$length = 8;
$width = 4;
$area = $length * $width;
$perimeter = 2 * ($length + $width);
echo "Area = $area, Perimeter = $perimeter$br";

// 4. Temperature Converter
echo "<b>4. Temperature Converter</b><br>";
$celsius = 30;
$fahrenheit = ($celsius * 9 / 5) + 32;
echo "$celsius °C = $fahrenheit °F$br";

// 5. Swapping Variables
echo "<b>5. Swapping Variables</b><br>";
$x = 10;
$y = 20;
$temp = $x;
$x = $y;
$y = $temp;
echo "After swapping → x = $x, y = $y$br";

// 6. Salary Calculator
echo "<b>6. Salary Calculator</b><br>";
$basic = 20000;
$allowance = 5000;
$deduction = 2000;
$net_salary = $basic + $allowance - $deduction;
echo "Net Salary = ₱$net_salary$br";

// 7. BMI Calculator
echo "<b>7. BMI Calculator</b><br>";
$weight = 65;
$height = 1.75;
$bmi = $weight / ($height * $height);
echo "BMI = " . round($bmi, 2) . $br;

// 8. String Manipulation
echo "<b>8. String Manipulation</b><br>";
$sentence = "PHP programming is fun!";
echo "Sentence: $sentence<br>";
echo "Number of characters: " . strlen($sentence) . "<br>";
echo "Number of words: " . str_word_count($sentence) . "<br>";
echo "Uppercase: " . strtoupper($sentence) . "<br>";
echo "Lowercase: " . strtolower($sentence) . $br;

// 9. Bank Account Simulation
echo "<b>9. Bank Account Simulation</b><br>";
$balance = 10000;
$deposit = 3000;
$withdraw = 2000;
$final_balance = $balance + $deposit - $withdraw;
echo "Final Balance = ₱$final_balance$br";

// 10. Simple Grading System
echo "<b>10. Simple Grading System</b><br>";
$math = 85;
$english = 90;
$science = 88;
$average = ($math + $english + $science) / 3;

if ($average >= 90) {
    $grade = "A";
} elseif ($average >= 80) {
    $grade = "B";
} elseif ($average >= 70) {
    $grade = "C";
} elseif ($average >= 60) {
    $grade = "D";
} else {
    $grade = "F";
}

echo "Average = " . round($average, 2) . " | Grade = $grade$br";

// 11. Currency Converter
echo "<b>11. Currency Converter</b><br>";
$php = 1000;
$usd_rate = 0.017;
$eur_rate = 0.016;
$jpy_rate = 2.7;
echo "₱$php = $" . ($php * $usd_rate) . " USD<br>";
echo "₱$php = €" . ($php * $eur_rate) . " EUR<br>";
echo "₱$php = ¥" . ($php * $jpy_rate) . " JPY$br";

// 12. Travel Cost Estimator
echo "<b>12. Travel Cost Estimator</b><br>";
$distance = 250;
$fuel_efficiency = 12; // km per liter
$price_per_liter = 70;
$fuel_needed = $distance / $fuel_efficiency;
$total_cost = $fuel_needed * $price_per_liter;
echo "Estimated Travel Cost = ₱" . round($total_cost, 2) . $br;

echo "<b>=== Code Execution Successful ===</b>";

echo '
</body>
</html>';
?>
