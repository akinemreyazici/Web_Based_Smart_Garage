<?php
session_start();

	// Veritabanına bağlan
$servername = "localhost";
$username = "akillig1_bugra";
$password = "Fb232001";
$dbname = "akillig1_web_project";


$conn = new mysqli($servername, $username, $password, $dbname);

	// Hata kontrolü
if ($conn->connect_error) {
	die("Bağlantı hatası: " . $conn->connect_error);
}

	// Kullanıcı adı ve şifre al
$kullaniciAdi = $_POST["kullaniciAdi"];
$sifre = $_POST["sifre"];

	// Sorgu oluştur
$sql = "SELECT * FROM kullanicilar WHERE kullaniciAdi='$kullaniciAdi' AND sifre='$sifre'";

	// Sorguyu çalıştır ve sonuçları al
$result = $conn->query($sql);

	// Sonuçları kontrol et
if ($result->num_rows > 0) {
        // Giriş başarılı
	session_start();
	$_SESSION["kullaniciAdi"] = $kullaniciAdi;
	header("Location:ana_sayfa.php");
	exit();
} else  
echo '<script>alert("Kullanıcı adı veya şifre yanlış!")</script>';
header("refresh:0;url=index.php");
exit();
$conn->close();
?>
