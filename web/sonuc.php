<?php
$servername = "localhost";
$username = "akillig1_bugra";
$password = "Fb232001";
$dbname = "akillig1_web_project";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

	if (isset($_POST["isitici_kapat_btn"])) {
	//$button_value = 1;
		echo "butona basıldı";
	//$sql = "INSERT INTO butonlar (isitici_kapat_btn) VALUES ($button_value)";
		$sql = "UPDATE butonlar SET isitici_kapat_btn = 1,isitici_yavas_btn = 0,isitici_orta_btn = 0,isitici_hizli_btn = 0";
		mysqli_query($conn, $sql);
		echo "Sıcaklık ısıtıcı kapatıldı.";
	// Veritabanı bağlantısını kapatın


	}
	if (isset($_POST["isitici_yavas_btn"])) {
		$button_value = 1;
		echo "butona basıldı";
	//$sql = "INSERT INTO butonlar (isitici_yavas_btn) VALUES ($button_value)";
		$sql = "UPDATE butonlar SET isitici_yavas_btn = 1,isitici_kapat_btn = 0,isitici_hizli_btn = 0,isitici_orta_btn = 0";
		mysqli_query($conn, $sql);
		echo "Sıcaklık ısıtıcı kapatıldı.";
	// Veritabanı bağlantısını kapatın
	}
	if (isset($_POST["isitici_orta_btn"])) {
		$button_value = 1;
		echo "butona basıldı";
	//$sql = "INSERT INTO butonlar (isitici_orta_btn) VALUES ($button_value)";
		$sql = "UPDATE butonlar SET isitici_orta_btn = 1,isitici_yavas_btn = 0,isitici_kapat_btn = 0,isitici_hizli_btn = 0";
		mysqli_query($conn, $sql);
		echo "Sıcaklık ısıtıcı kapatıldı.";
	// Veritabanı bağlantısını kapatın
	}
	if (isset($_POST["isitici_hizli_btn"])) {
		$button_value = 1;
		echo "butona basıldı";
	//$sql = "INSERT INTO butonlar (isitici_hizli_btn) VALUES ($button_value)";
		$sql = "UPDATE butonlar SET isitici_hizli_btn = 1,isitici_yavas_btn = 0,isitici_kapat_btn = 0,isitici_orta_btn = 0";
		mysqli_query($conn, $sql);
		echo "Sıcaklık ısıtıcı kapatıldı.";
	// Veritabanı bağlantısını kapatın
	}
	if (isset($_POST["fan_kapat_btn"])) {
		$button_value = 1;
		echo "butona basıldı";
	//$sql = "INSERT INTO butonlar (fan_kapat_btn) VALUES ($button_value)";
		$sql = "UPDATE butonlar SET fan_kapat_btn = 1,fan_yavas_btn = 0,fan_orta_btn = 0,fan_hizli_btn = 0";
		mysqli_query($conn, $sql);
		echo "Sıcaklık ısıtıcı kapatıldı.";
	// Veritabanı bağlantısını kapatın
	}
	if (isset($_POST["fan_yavas_btn"])) {
		$button_value = 1;
		echo "butona basıldı";
	//$sql = "INSERT INTO butonlar (fan_yavas_btn) VALUES ($button_value)";
		$sql = "UPDATE butonlar SET fan_yavas_btn = 1,fan_kapat_btn = 0,fan_orta_btn = 0,fan_hizli_btn = 0";
		mysqli_query($conn, $sql);
		echo "Sıcaklık ısıtıcı kapatıldı.";
	// Veritabanı bağlantısını kapatın
	}
	if (isset($_POST["fan_orta_btn"])) {
		$button_value = 1;
		echo "butona basıldı";
	//$sql = "INSERT INTO butonlar (fan_orta_btn) VALUES ($button_value)";
		$sql = "UPDATE butonlar SET fan_orta_btn = 1,fan_yavas_btn = 0,fan_kapat_btn = 0,fan_hizli_btn = 0";
		mysqli_query($conn, $sql);
		echo "Sıcaklık ısıtıcı kapatıldı.";
	// Veritabanı bağlantısını kapatın
	}
	if (isset($_POST["fan_hizli_btn"])) {
		$button_value = 1;
		echo "butona basıldı";
	//$sql = "INSERT INTO butonlar (fan_hizli_btn) VALUES ($button_value)";
		$sql = "UPDATE butonlar SET fan_hizli_btn = 1,fan_yavas_btn = 0,fan_kapat_btn = 0,fan_orta_btn = 0";
		mysqli_query($conn, $sql);
		echo "Sıcaklık ısıtıcı kapatıldı.";
	// Veritabanı bağlantısını kapatın
	}
	if (isset($_POST["branda_yavas_ac_btn"])) {
		$button_value = 1;
		echo "butona basıldı";
	//$sql = "INSERT INTO butonlar (branda_yavas_ac_btn) VALUES ($button_value)";
		$sql = "UPDATE butonlar SET branda_yavas_ac_btn = 1,branda_orta_ac_btn = 0,branda_hızlı_ac_btn = 0,branda_yavas_kapat_btn = 0,branda_orta_kapat_btn = 0,branda_hızlı_kapat_btn = 0";
		echo "Sıcaklık ısıtıcı kapatıldı.";
	// Veritabanı bağlantısını kapatın
	}
	if (isset($_POST["branda_orta_ac_btn"])) {
		$button_value = 1;
		echo "butona basıldı";
	//$sql = "INSERT INTO butonlar (branda_orta_ac_btn) VALUES ($button_value)";
		$sql = "UPDATE butonlar SET branda_orta_ac_btn = 1,branda_yavas_ac_btn = 0,branda_hızlı_ac_btn = 0,branda_yavas_kapat_btn = 0,branda_orta_kapat_btn = 0,branda_hızlı_kapat_btn = 0";
		mysqli_query($conn, $sql);
		echo "Sıcaklık ısıtıcı kapatıldı.";
	// Veritabanı bağlantısını kapatın
	}
	if (isset($_POST["branda_hızlı_ac_btn"])) {
		$button_value = 1;
		echo "butona basıldı";
	//$sql = "INSERT INTO butonlar (branda_hızlı_ac_btn) VALUES ($button_value)";
		$sql = "UPDATE butonlar SET branda_hızlı_ac_btn = 1,branda_orta_ac_btn = 0,branda_yavas_ac_btn = 0,branda_yavas_kapat_btn = 0,branda_orta_kapat_btn = 0,branda_hızlı_kapat_btn = 0";
		mysqli_query($conn, $sql);
		echo "Sıcaklık ısıtıcı kapatıldı.";
	// Veritabanı bağlantısını kapatın
	}
	if (isset($_POST["branda_yavas_kapat_btn"])) {
		$button_value = 1;
		echo "butona basıldı";
	//$sql = "INSERT INTO butonlar (branda_yavas_kapat_btn) VALUES ($button_value)";
		$sql = "UPDATE butonlar SET branda_yavas_kapat_btn = 1,branda_hızlı_ac_btn = 0,branda_orta_ac_btn = 0,branda_yavas_ac_btn = 0,branda_orta_kapat_btn = 0,branda_hızlı_kapat_btn = 0";
		mysqli_query($conn, $sql);
		echo "Sıcaklık ısıtıcı kapatıldı.";
	// Veritabanı bağlantısını kapatın
	}
	if (isset($_POST["branda_orta_kapat_btn"])) {
		$button_value = 1;
		echo "butona basıldı";
	//$sql = "INSERT INTO butonlar (branda_orta_kapat_btn) VALUES ($button_value)";
		$sql = "UPDATE butonlar SET branda_orta_kapat_btn = 1,branda_yavas_kapat_btn = 0,branda_hızlı_ac_btn = 0,branda_orta_ac_btn = 0,branda_yavas_ac_btn = 0,branda_hızlı_kapat_btn = 0";
		mysqli_query($conn, $sql);
		echo "Sıcaklık ısıtıcı kapatıldı.";
	// Veritabanı bağlantısını kapatın
	}
	if (isset($_POST["branda_hızlı_kapat_btn"])) {
		$button_value = 1;
		echo "butona basıldı";
	//$sql = "INSERT INTO butonlar (branda_hızlı_kapat_btn) VALUES ($button_value)";
		$sql = "UPDATE butonlar SET branda_hızlı_kapat_btn = 1,branda_orta_kapat_btn = 0,branda_yavas_kapat_btn = 0,branda_hızlı_ac_btn = 0,branda_orta_ac_btn = 0,branda_yavas_ac_btn = 0";
		mysqli_query($conn, $sql);
		echo "Sıcaklık ısıtıcı kapatıldı.";
	// Veritabanı bağlantısını kapatın
	}
	if (isset($_POST["lamba_kapat_btn"])) {
		$button_value = 1;
		echo "butona basıldı";
	//$sql = "INSERT INTO butonlar (lamba_kapat_btn) VALUES ($button_value)";
		$sql = "UPDATE butonlar SET lamba_kapat_btn = 1,lamba_düsük_ac_btn = 0,lamba_orta_ac_btn = 0,lamba_yüksek_ac_btn = 0";
		mysqli_query($conn, $sql);
		echo "Sıcaklık ısıtıcı kapatıldı.";
	// Veritabanı bağlantısını kapatın
	}
	if (isset($_POST["lamba_düsük_ac_btn"])) {
		$button_value = 1;
		echo "butona basıldı";
	//$sql = "INSERT INTO butonlar (lamba_orta_ac_btn) VALUES ($button_value)";
		$sql = "UPDATE butonlar SET lamba_orta_ac_btn = 0,lamba_kapat_btn = 0,lamba_düsük_ac_btn = 1,lamba_yüksek_ac_btn = 0";
		mysqli_query($conn, $sql);
		echo "Sıcaklık ısıtıcı kapatıldı.";
	// Veritabanı bağlantısını kapatın
	}
	if (isset($_POST["lamba_orta_ac_btn"])) {
		$button_value = 1;
		echo "butona basıldı";
	//$sql = "INSERT INTO butonlar (lamba_orta_ac_btn) VALUES ($button_value)";
		$sql = "UPDATE butonlar SET lamba_orta_ac_btn = 1,lamba_kapat_btn = 0,lamba_düsük_ac_btn = 0,lamba_yüksek_ac_btn = 0";
		mysqli_query($conn, $sql);
		echo "Sıcaklık ısıtıcı kapatıldı.";
	// Veritabanı bağlantısını kapatın
	}
	if (isset($_POST["lamba_yüksek_ac_btn"])) {
		$button_value = 1;
		echo "butona basıldı";
	//$sql = "INSERT INTO butonlar (lamba_yuksek_ac_btn) VALUES ($button_value)";
		$sql = "UPDATE butonlar SET lamba_yüksek_ac_btn = 1,lamba_orta_ac_btn = 0,lamba_kapat_btn = 0,lamba_düsük_ac_btn = 0";
		mysqli_query($conn, $sql);
		echo "Sıcaklık ısıtıcı kapatıldı.";
	// Veritabanı bağlantısını kapatın
	}
	if (isset($_POST["fotograf_cek_btn"])) {
		$button_value = 1;
		echo "butona basıldı";
	//$sql = "INSERT INTO butonlar (fotograf_cek_btn) VALUES ($button_value)";
		$sql = "UPDATE butonlar SET fotograf_cek_btn = 1";
		mysqli_query($conn, $sql);
		echo "Sıcaklık ısıtıcı kapatıldı.";
	// Veritabanı bağlantısını kapatın
	}
	if (isset($_POST["garaj_kapak_ac_btn"])) {
		$button_value = 1;
		echo "butona basıldı";
	//$sql = "INSERT INTO butonlar (garaj_kapak_ac_btn) VALUES ($button_value)";
		$sql = "UPDATE butonlar SET garaj_kapak_ac_btn = 1,garaj_kapak_kapat_btn = 0";
		mysqli_query($conn, $sql);
		echo "Sıcaklık ısıtıcı kapatıldı.";
	// Veritabanı bağlantısını kapatın
	}
	if (isset($_POST["garaj_kapak_kapat_btn"])) {
		$button_value = 1;
		echo "butona basıldı";
	//$sql = "INSERT INTO butonlar (garaj_kapak_kapat_btn) VALUES ($button_value)";
		$sql = "UPDATE butonlar SET garaj_kapak_kapat_btn = 1,garaj_kapak_ac_btn = 0";
		mysqli_query($conn, $sql);
		echo "Sıcaklık ısıtıcı kapatıldı.";
	// Veritabanı bağlantısını kapatın
	}

   header("Location:ana_sayfa.php");
	    exit();
	mysqli_close($conn);


	?>
