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
    <h1 id="judulhitung">Menghitung Luas Dan Keliling Segitiga</h1>
    <form method="POST" action="segitiga.php">
    <section class="tengah">
        <h4>Cari Luas Segitiga</h4>
        Alas :<br> <input type="number" name="alas" placeholder="Masukkan Angka"><br>
        Tinggi :<br> <input type="number" name="tinggi" placeholder="Masukkan Angka"><br>
                <?php
            if(isset($_POST['luasseg'])){
                $alas = $_POST['alas'];
                $tinggi = $_POST['tinggi'];
                echo "Hasil :" . $hasil = $alas * $tinggi / 2;
                echo "<br>";
            }
        ?> 
        <button type="submit" name="luasseg">HITUNG</button>
    </section>
    <section class="tengah">    
        <h4>Cari Keliling Segitiga</h4>
        Sisi 1 : <input type="number" name="sisi1" placeholder="Masukkan Angka"><br>
        Sisi 2 : <input type="number" name="sisi2" placeholder="Masukkan Angka"><br>
        Sisi 3 : <input type="number" name="sisi3" placeholder="Masukkan Angka"><br>
        <?php
            if(isset($_POST['kelseg'])){
                $sisi1 = $_POST['sisi1'];
                $sisi2 = $_POST['sisi2'];
                $sisi3 = $_POST['sisi3'];
                echo "Hasil :" . $hasil = $sisi1 + $sisi2 + $sisi3;
                echo "<br>";
            }
        ?>
        <button type="submit" name="kelseg">HITUNG</button>
    </section>
    </form>
    </div>

</div>
</div>

<div class="footer">
  <h2>Web Design @2019, – Peserta JWP Gel 11, Okt 2019 </h2>
</div>

</body>
</html>
