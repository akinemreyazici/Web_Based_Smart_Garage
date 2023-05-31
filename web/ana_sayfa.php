<html lang="en">
<head>
  <style>
    .header {
      position: relative;
    }

    #logout-btn {
      position: absolute;
      top: 0;
      right: 0;
    }
    .error {
      color: red;
    }
    .table{
      color: white;
      text-shadow: 0 0 10px black, 0 0 10px black, 0 0 10px black;
      backdrop-filter: blur(10px);
    }
    input{
      margin-right: 120px !important;
    }
  </style>
  <meta charset="UTF-8">
  <title>Ev Kontrol Paneli</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
<!-- Include the Paho MQTT JavaScript client library -->

  <?php
    // Kontrol et, kullanıcı giriş yapmış mı?
  session_start();
  if(isset($_SESSION['kullaniciAdi'])){
    echo "<p>Hoşgeldiniz, ".$_SESSION['kullaniciAdi']."</p>";
      // Logout butonu
    echo '<form action="logout.php" method="post"><button type="submit" name="Çıkış Yap" id="logout-btn">Logout</button></form>';
  } else {
    header("Location:index.php");
    exit();
  }
  ?>
  <div class="container mt-5">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Fan Kontrolü <img src="foto\fan.png" width="30" height="30"></th>
          <th>Branda Kontrolü <img src="foto\branda.png" width="30" height="30"></th></th>
          <th>Lamba Kontrolü <img src="foto\lamb.png" width="30" height="30"></th></th>
          <th>Garaj Kontrolü ve Garaj Şifre Kontrolü  <img src="foto\door.png" width="30" height="30">        <img src="foto\security.png" width="30" height="30"></th></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <!--
          <td>
            <div class="btn-group" role="group" aria-label="Isıtıcı Kontrolü">
              <form action="sonuc.php" method="post">
                <input type="submit" name="isitici_kapat_btn" value="Kapat">
                <input type="submit" name="isitici_yavas_btn" value="Yavaş">
                <input type="submit" name="isitici_orta_btn" value="Orta">
                <input type="submit" name="isitici_hizli_btn" value="Hızlı">
              </form>
            </div>
          </td>
        -->
        <td>
          <div class="btn-group" role="group" aria-label="Fan Kontrolü">
           <form action="#" method="post" onsubmit="submitForm(event)">
           <input type="submit" name="fan_kapat_btn" class="btn btn-danger"  value="Kapat" onclick="fankomutgonder(0)"><br><br>
           <input type="submit" name="fan_ac_btn" class="btn btn-primary" value="Yavaş" onclick="fankomutgonder(1)"><br><br>
           <input type="submit" name="fan_ac_btn" class="btn btn-primary" value="Normal" onclick="fankomutgonder(2)"><br><br>
           <input type="submit" name="fan_ac_btn" class="btn btn-primary" value="Hızlı" onclick="fankomutgonder(3)"><br><br>
          </form>
        </div>
          <p id="fan_durum">Veri Yok</p><br>
          <p id="sicaklik_durum">Veri Yok</p>
      </td>
      <br>
      <td>
        <div class="btn-group" role="group" aria-label="Branda Kontrolü">
          <form action="#" method="post" onsubmit="submitForm(event)">
          <input type="submit" name="branda_kapat_btn" class="btn btn-danger" value="Kapat" onclick="brandakomutgonder(0)">  
            <br>
            <br>
           <input type="submit" name="branda_ac_btn" class="btn btn-success" value="Aç" onclick="brandakomutgonder(1)">
          </form>
        </div>
        <div class="form-group mt-2">
          <p id="branda_durum">Veri Yok</p>
        </div>
      </td>
      <td>
        <div class="btn-group" role="group" aria-label="Lamba Kontrolü">
         <form action="#" method="post" onsubmit="submitForm(event)">
          <input type="submit" name="lamba_kapat_btn" class="btn btn-danger" value="Kapat" onclick="lambakomutgonder(0)"><br><br>
          <input type="submit" name="lamba_düsük_ac_btn" class="btn btn-primary" value="Düşük" onclick="lambakomutgonder(1)"><br><br>
          <input type="submit" name="lamba_orta_ac_btn" class="btn btn-primary" value="Orta" onclick="lambakomutgonder(2)"><br><br>
          <input type="submit" name="lamba_yüksek_ac_btn" class="btn btn-primary" value="Yüksek" onclick="lambakomutgonder(3)"><br><br>
        </form>
      </div>
      <div class="form-group mt-2">
       <p id="lamba_durum">Veri Yok</p>
      </div>
    </td>
    <td>
      <div class="btn-group"  role="group" aria-label="Garaj Kontrolü ">
      
       <form action="#" method="post" onsubmit="submitForm(event)">
       <input type="submit" name="garaj_kapak_kapat_btn" class="btn btn-danger" value="Garaj Kapat" onclick="garajkomutgonder(0)">
        <br>
        <br>
        <input type="submit" name="garaj_kapak_ac_btn" class="btn btn-success" value="Garaj Aç" onclick="garajkomutgonder(1)">
      </form>
      <form action="#" method="post" onsubmit="submitForm(event)">
        <label for="eskiSifre">Eski Şifre</label>
        <input type="password" id="oldpass" pattern="\d{4}" name="eskiSifre" oninput="validatePIN(this)"><br>

        <label for="yeniSifre">Yeni Şifre</label>
        <input type="password" id="newpass" pattern="\d{4}" name="yeniSifre" oninput="validatePIN(this)"><br>

        <label for="yeniSifreTekrar">Yeni Şifre Tekrar</label>
        <input type="password" id="newpassagain" pattern="\d{4}" name="yeniSifreTekrar" required oninput="validatePIN(this)"><br>
        <p></p>
        <input type="submit" value="Şifre Değiştir" onclick="sifredegistir()">
      </form>
    </div>
  </td>
</tr>
</tbody>
</table>
</div>
<!-- jQuery and Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/paho-mqtt/1.0.1/mqttws31.min.js"></script>

<script>
  // MQTT server address and port
  function validatePIN(input) {
      if (!input.checkValidity()) {
        input.setCustomValidity("Lütfen 4 Haneli bir pin giriniz.");
      } else {
        input.setCustomValidity("");
      }
    }
  function submitForm(event) {
      event.preventDefault(); // Prevent the default form submission

      // Perform your desired actions here
      // For example, you can send the form data using AJAX

      // Clear the form fields if needed
      event.target.reset();
    }
  const brokerUrl = 'broker.hivemq.com';

  // MQTT topic to send message to
  const topic = 'advancel/test';

  // Create an MQTT client with WebSockets
  const client = new Paho.MQTT.Client(brokerUrl,8000, String("akillig1"+String(parseInt(Math.random() *10000))));
  client.connect({
    useSSL: false,
    onSuccess: onConnect,
    onFailure: onFailure
  });
  client.onConnectionLost = onConnectionLost;
  client.onMessageArrived = onMessageArrived;
  // Set up the callbacks for when the client connects and fails to connect
  function onConnect() {
    console.log('Connected to MQTT broker');
    client.subscribe("akillig1/durum/fan");
    client.subscribe("akillig1/durum/branda");
    client.subscribe("akillig1/durum/lamba");
    client.subscribe("akillig1/durum/girilensfr");
    client.subscribe("akillig1/durum/sicaklik");
  }
  function onConnectionLost(responseObject){
    console.log("connection lost");
    client.connect({
    useSSL: false,
    onSuccess: onConnect,
    onFailure: onFailure
  });
  }
  function onFailure(message) {
    console.log('Connection failed: ' + message.errorMessage);
  }
  function onMessageArrived(msg){
      console.log(msg);
      switch(msg.destinationName)
      {
        
        case "akillig1/durum/fan":
          console.log("Fan durum mesajı geldi");
          switch(msg.payloadString)
          {
          case "3":
            document.getElementById("fan_durum").innerText = "Fan Hızlı";
            break;
          case "2":
            document.getElementById("fan_durum").innerText = "Fan Normal";
            break;
          case "1":
          document.getElementById("fan_durum").innerText = "Fan Yavaş";
          break;
          case "0":
          document.getElementById("fan_durum").innerText = "Fan Kapalı";
          break;
          default:
          document.getElementById("fan_durum").innerText = "Hatalı Veri";
          break;    
        }
          break;
        case "akillig1/durum/branda":
          console.log("Yağmur durum mesajı geldi");
          switch(msg.payloadString)
          {
          case "1":
            document.getElementsByTagName("BODY")[0].style.backgroundImage = "url(yagmur.jpg)"
          document.getElementById("branda_durum").innerText = "Yağmur Yağıyor";
          break;
          case "0":
          document.getElementById("branda_durum").innerText = "Yağmur Yağmıyor";
          document.getElementsByTagName("BODY")[0].style.backgroundImage = "url(gunesli.jpg)"
          break;
          default:
          document.getElementById("branda_durum").innerText = "Hatalı Veri";
            break;
        }
          break;
        case "akillig1/durum/girilensfr":
          alert("Kapıya Şifre Denemesi Yapıldı : "+ msg.payloadString);
          //document.getElementById("girilensfrdrm").innerText = "Kapıya Şifre Denemesi Yapıldı : "+ msg.payloadString;
          
          break;
        case "akillig1/durum/sicaklik":
          document.getElementById("sicaklik_durum").innerText = msg.payloadString;
          break;
        case "akillig1/durum/lamba":
          console.log("Lamba durum mesajı geldi");
          document.getElementById("lamba_durum").innerText = msg.payloadString;
          break;
        
      }
  }
  function mesajgonder(topic,mesaj){
    const message2 = new Paho.MQTT.Message(mesaj);
    message2.destinationName = topic;
    client.send(message2);
  }
  function fankomutgonder(x){mesajgonder("akillig1/fan",String(x));}
  function brandakomutgonder(x){if(x) mesajgonder("akillig1/branda","1"); else mesajgonder("akillig1/branda","0");}
  function garajkomutgonder(x){if(x) mesajgonder("akillig1/garaj","1"); else mesajgonder("akillig1/garaj","0");}
  function sifredegistir(){
    const oldpass = document.getElementById("oldpass").value;
    const newpass = document.getElementById("newpass").value;
    const newpassagain = document.getElementById("newpassagain").value
    if(newpass != newpassagain)
    {  
      alert("Şifreler eşleşmiyor!");
      document.getElementById("oldpass").value = "";
        document.getElementById("newpass").value = "";
        document.getElementById("newpassagain").value = "";
      return;
    }
    if(newpass.length != 4 || oldpass.length != 4)
    {
      alert("Lütfen 4 haneli bir şifre giriniz.");
      document.getElementById("oldpass").value = "";
        document.getElementById("newpass").value = "";
        document.getElementById("newpassagain").value = "";
        return;
    }
    mesajgonder("akillig1/kapisfrdgstr",document.getElementById("oldpass").value+":"+document.getElementById("newpass").value)
  }
  function lambakomutgonder(x){
      switch(x)
      {
        case 0:
          mesajgonder("akillig1/lamba","0");
          break;
        case 1:
          mesajgonder("akillig1/lamba","1");
          break;
        case 2:
          mesajgonder("akillig1/lamba","2");
          break;
        case 3:
          mesajgonder("akillig1/lamba","3");
          break;
        default:
          break;
      }
  }

</script>
</body>
</html>