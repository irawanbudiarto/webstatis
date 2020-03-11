<!DOCTYPE html>
<html lang="en">
<head>
<title>Page Title</title>
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
    <h1 id="judulhitung">Menghitung Luas Dan Keliling Persegi Panjang</h1>
    <form method="POST" action="persegipanjang.php">
        <h4>Cari Luas Persegi Panjang</h4>
            Panjang :<br> <input type="number" name="Lpanjang" placeholder="Masukkan Angka"><br>
            Lebar :<br> <input type="number" name="Llebar" placeholder="Masukkan Angka"><br>
                    <?php
                if(isset($_POST['luas'])){
                    $panjang = $_POST['Lpanjang'];
                    $lebar = $_POST['Llebar'];
                    echo "Hasil :" . $hasil = $panjang * $lebar;
                    echo "<br>";
                }
            ?> 
        <button type="submit" name="luas">HITUNG</button>
        <h4>Cari Keliling Persegi Panjang</h4>
        Panjang :<br> <input type="number" name="Kpanjang" placeholder="Masukkan Angka"><br>
        Lebar :<br> <input type="number" name="Klebar" placeholder="Masukkan Angka"><br>
                <?php
            if(isset($_POST['keliling'])){
                $panjang = $_POST['Kpanjang'];
                $lebar = $_POST['Klebar'];
                echo "Hasil :" . $hasil = 2 * ($panjang + $lebar);
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
