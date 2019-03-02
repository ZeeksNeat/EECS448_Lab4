<?php

echo '<link href = "style.css" rel="stylesheet" type="text/css"/>';

error_reporting(E_ALL);
ini_set("display_errors", 1);

$gokuPrice = 10;
$seasonPrice = 30;
$gamePrice = 60;

$goku = $_GET['gokuQuantity'];
$season = $_GET['seasonQuantity'];
$steam = $_GET['steamQuantity'];
$xbox = $_GET['xboxQuantity'];
$ps4 = $_GET['ps4Quantity'];

$username = $_GET['username'];
$password = $_GET['password'];

$shipping = $_GET['shipping'];

$shippingCost = 0;

if ($shipping == 'free') {
    $shippingCost = 0;
    $shippingType = "Free Delivery";
}
if ($shipping == '3day') {
    $shippingCost = 5;
    $shippingType = '3 Day Delivery';
}
if ($shipping == 'overnight') {
    $shippingCost = 50;
    $shippingType = 'Overnight Delivery';
}

$totalPrice = $goku*$gokuPrice + $season*$seasonPrice + $steam*$gamePrice + $xbox*$gamePrice + $ps4*$gamePrice + $shippingCost;

echo "<div class='backend'>";
echo "<h1>Thank you for your purchase, " . $username . "!</h1>";
echo "<h2>Your password for your account is " . $password . ".</h2>";
echo "<br><br><h3>Here is your receipt:</h3>";

echo "<body>";
echo "<table>";

echo "<tr>
        <td> </td>
        <td> Quantity </td>
        <td> Cost Per Item </td>
        <td> Subtotal </td>
    </tr>";

echo "<tr>
        <td> Goku Figurine </td>
        <td> $goku </td>
        <td> $10.00 </td>
        <td>$" .$goku*$gokuPrice. "</td>
    </tr>";

echo "<tr>
        <td> Season Collection </td>
        <td> $season </td>
        <td> $30.00 </td>
        <td>$" .$season*$seasonPrice. "</td>
    </tr>";

    echo "<tr>
        <td> Dragonball Fighter Z - Steam </td>
        <td> $steam </td>
        <td> $60.00 </td>
        <td>$" .$steam*$gamePrice. "</td>
    </tr>";

    echo "<tr>
        <td> Dragonball Fighter Z - Xbox </td>
        <td> $xbox </td>
        <td> $60.00 </td>
        <td>$" .$xbox*$gamePrice. "</td>
    </tr>";

echo "<tr>
        <td> Dragonball Fighter Z - PS4 </td>
        <td> $ps4 </td>
        <td> $60.00 </td>
        <td>$" .$ps4*$gamePrice. "</td>
    </tr>";

echo "<tr>
        <td> Shipping </td>
        <td> $shippingType </td>
        <td></td>
        <td>$" .$shippingCost. "</td>
    </tr>";

echo "<tr>
        <td> Total Cost </td>
        <td>$ $totalPrice </td>
    </tr>";
    
echo "</table>";

echo "</div>";

echo "</body>";

?>