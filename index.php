<!DOCTYPE html>
<html>
<head>
    <title>PERBANDINGAN ANGKA</title>
</head>
<body>
    <div class="container">
    <link rel="stylesheet" href="styleats.css">
    <link rel="stylesheet" href="responsive.css">
    <h2>Perbandingan Angka</h2><br>
    <form method="post" action="">
        Masukkan Bilangan Pertama: <input type="number" name="bilangan1"><br>
        Masukkan Bilangan Kedua: <input type="number" name="bilangan2"><br>
        <input type="submit" name="submit" value="Bandingkan">
    </form>
        <div class="result">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $bilangan1 = $_POST['bilangan1'];
        $bilangan2 = $_POST['bilangan2'];
        
        if ($bilangan1 > $bilangan2) {
            echo $bilangan1 . " Lebih Besar Dari " . $bilangan2;
        } if ($bilangan2 > $bilangan1) {
            echo $bilangan1 . " Lebih Kecil Dari " . $bilangan2;
        } if ($bilangan1 == $bilangan2) {
            echo " Keduanya Memiliki Nilai Yang Sama Yaitu " . $bilangan1;
        } 
    }
    ?>
        </div>
    </div>
</body>
</html>
