    <?php 
    session_start();
    if (!isset($_SESSION["kullaniciAdi"])) {
        header("Location: index.php");
        exit();
    }
    // Veritabanına bağlan
    $eskiSifre = $_POST["eskiSifre"];
    $yeniSifre = $_POST["yeniSifre"];
    $yeniSifreTekrar = $_POST["yeniSifreTekrar"];

    $servername = "localhost";
    $username = "akillig1_bugra";
    $password = "Fb232001";
    $dbname = "akillig1_web_project";
    $conn = new mysqli($servername, $username, $password, $dbname);

// Hata kontrolü
    if ($conn->connect_error) {
        die("Bağlantı hatası: " . $conn->connect_error);
    }

// Eski şifre doğrulama
    $sql = "SELECT girilen_sifre FROM sifre";    
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    if ($row["girilen_sifre"] != $eskiSifre) {
        echo "Eski şifreniz yanlış!";
        exit();
    }

// Yeni şifre kontrolü
    if ($yeniSifre != $yeniSifreTekrar) {
        echo "Yeni şifreler eşleşmiyor!";
        exit();
    }

// Yeni şifre kaydetme
    $sql = "UPDATE sifre SET girilen_sifre='$yeniSifre'";
    if ($conn->query($sql) === TRUE) {
        echo "Garaj Şifresi başarıyla değiştirildi!";
    } 
?>