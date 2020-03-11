<!DOCTYPE html>
<html lang="en">
<head>
<title>Bujur Sangkar</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="header">
  <h1>Selamat Datang Di Website Irawan Budiarto</h1>
</div>

<div class="navbar">
  <a href="#" class="active"></a>
  <a href="#"></a>
  <a href="#"></a>
  <a href="#" class="right"></a>
</div>

<div class="row">
  <div class="side">
    <form action="bujursangkar.php">
        <div>
            <button class="fakeimg" style="height:60px;">Luas dan Keliling Bujursangkar</button>
        </div><br>
    </form>
    <form action="persegipanjang.php">
        <div>
            <button class="fakeimg" style="height:60px;">Luas dan Keliling Persegi Panjang</button>
        </div><br>
    </form>
    <form action="segitiga.php">
        <div>
            <button class="fakeimg" style="height:60px;">Luas dan Keliling Segitiga</button>
        </div><br>
    </form>
    <form action="hubsaya.php">
        <div>
            <button class="fakeimg" style="height:60px;">Hubungi Saya</button>
        </div><br>
    </form>
  </div>
  <div class="main">
    <div class="fakeimg" style="height: 450px;">
    <h1 id="judulhitung">Menghitung Luas Dan Keliling Bujursangkar</h1>
    <form method="POST" action="bujursangkar.php">
        <h4>Cari Luas Bujursangkar</h4>
            Sisi :<br> <input type="number" name="Lsisi" placeholder="Masukkan Angka"><br>
            <?php
                if(isset($_POST['luas'])){
                    $Lsisi = $_POST['Lsisi'];
                    $salah = " ";
                    if ($Lsisi == NULL) {
                        $salah = "nilai sisi belum disi";
                    }else{
                    echo "Hasil :" . $hasil = $Lsisi * $Lsisi;
                    echo "<br>";
                }
                }
            ?> 
            <button type="submit" name="luas">HITUNG</button>
        <h4>Cari Keliling Bujursangkar</h4>
        Sisi :<br> <input type="number" name="Ksisi" placeholder="Masukkan Angka"><br>
        <?php
            if(isset($_POST['keliling'])){
                $Ksisi = $_POST['Ksisi'];
                echo "Hasil :" . $hasil = 4 * $Ksisi;
                echo "<br>";
            }
        ?> 
        <button type="submit" name="keliling">HITUNG</button>
    </form>
    </div>

</div>
</div>

<div class="footer">
  <h2>Web Design @2019, – Peserta JWP Gel 11, Okt 2019 </h2>
</div>

</body>
</html>
