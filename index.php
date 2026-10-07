<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Kurs</title>
    <style>
          * {
        box-sizing: border-box;
        margin: 0;
      }
      body {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh; 
      }
    </style>
</head>
<body>
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

    
    if (isset($_POST['submit'])) {
        $nominal = $_POST['nominal'];
        $mataUang = $_POST['mataUang'];
        $hasil = konversiKeIDR($nominal, $mataUang);
    }
    ?>

    <h2>Kalkulator Kurs</h2>
    

    <form action="" method="POST">
        <label for="nominal">Nominal:</label>
        <input type="number" id="nominal" name="nominal" required>
        <br>
        <br>

        <label for="mataUang">Mata Uang:</label>
        <select id="mataUang" name="mataUang">
            <option value="USD">USD - Dollar</option>
            <option value="SGD">SGD - Dollar</option>
            <option value="JPY">JPY - Yen</option>
        </select>
        <br>
        <br>
        <button type="submit" name="submit">Konversi ke IDR</button>

        <label for="">Hasil konversi</label>
        <br>
        <br>
        <input type="text" value="<?php echo $hasil; ?>" disabled>
    </form>

    

  
</body>
</html>