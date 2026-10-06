<?php
function konversiKeIDR($nominal, $mataUang){
    if ($nominal <= 0) {
        return "Nominal harus lebih dari 0!";
    }
    switch ($mataUang) {
        case "USD":
        $total = $nominal * 17884;
        break;
        case "SGD":
        $total = $nominal * 13500;
        break;
        case "JPY":
        $total = $nominal * 115;
        break;
        default:
        return "Mata uang tidak dikenali!";
    }

    return "Rp " . $total;
}
$usd = 100; 
echo konversiKeIDR($usd, "USD");
echo "<br>";
$jpy = 200;
echo konversiKeIDR($jpy, "JPY");
?>