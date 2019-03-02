<?php


# Keep track of answers given by user
$a1 = $_GET["protagonist"];
$a2 = $_GET["cell"];
$a3 = $_GET["future"];
$a4 = $_GET["ssj3"];
$a5 = $_GET["fusion"];

# Stores correct answers for questions
$ca1 = "Goku";
$ca2 = "Gohan";
$ca3 = "Trunks";
$ca4 = "Majin Buu";
$ca5 = "Vegito";

# Keeps track of total amount correct
$cTotal = 0;

if ($a1 == $ca1) {
    $cTotal = $cTotal + 1;
}
if ($a2 == $ca2) {
    $cTotal = $cTotal + 1;
}
if ($a3 == $ca3) {
    $cTotal = $cTotal + 1;
}
if ($a4 == $ca4) {
    $cTotal = $cTotal + 1;
}
if ($a5== $ca5) {
    $cTotal = $cTotal + 1;
}

echo '<link rel="stylesheet" type="text/css" href="dbzStyle.css">';

echo "Who is the main protagonist of the show? <br>";
echo "Your choice: " .$a1."<br>";
echo "Correct choice: " .$ca1."<br><br>";

echo "Who is the Z fighter that defeats Cell? <br>";
echo "Your choice: " .$a2."<br>";
echo "Correct choice: " .$ca2."<br><br>";

echo "Which Z fighter is from the future? <br>";
echo "Your choice: " .$a3."<br>";
echo "Correct choice: " .$ca3."<br><br>";

echo "Who is Goku fighting when he attempts Super Saiyan 3 for the first time? <br>";
echo "Your choice: " .$a4."<br>";
echo "Correct choice: " .$ca4."<br><br>";

echo "Who is formed from fusion with the potarra earrings? <br>";
echo "Your choice: " .$a5."<br>";
echo "Correct choice: " .$ca5."<br><br>";

# Calculates % correct
$cPercent = ($cTotal/5) * 100;
echo "You got " .$cTotal. " correct<br><br>";
echo "Your score: " .$cPercent. "%";

?>