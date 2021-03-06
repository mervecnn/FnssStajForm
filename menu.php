<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: 'Lato', sans-serif;
}

.overlay {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0, 0.9);
  overflow-x: hidden;
  transition: 0.5s;
}

.overlay-content {
  position: relative;
  top: 25%;
  width: 100%;
  text-align: center;
  margin-top: 30px;
}

.overlay a {
  padding: 8px;
  text-decoration: none;
  font-size: 36px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.overlay a:hover, .overlay a:focus {
  color: #f1f1f1;
}

.overlay .closebtn {
  position: absolute;
  top: 20px;
  right: 45px;
  font-size: 60px;
}

@media screen and (max-height: 450px) {
  .overlay a {font-size: 20px}
  .overlay .closebtn {
  font-size: 40px;
  top: 15px;
  right: 35px;
  }
}
</style>
</head>
<body>

<div id="myNav" class="overlay">
  <a href="javascript:v	oid(0)" class="closebtn">
  <div class="overlay-content">
    <a href="personel.php">PERSONEL BİLGİ FORMU İÇİN TIKLAYINIZ</a>
    <a href="bilgilendirme.php">STAJYER BİLGİLENDİRME FORMU İÇİN TIKLAYINIZ</a>
    <a href="saglik.php">SAĞLIK BİLGİ FORMU İÇİN TIKLAYINIZ</a>
  </div>
</div>

<h2>ÖNCELİKLE ŞİMDİDEN FNSS SAVUNMA SİSTEMLERİ A.Ş'ye HOŞGELDİNİZ.</h2>
<span style="font-size:28px;cursor:pointer" > Bazı hatırlatmalar ve firmamızla ilgili ufak bir önbilgi vermek istiyoruz.</br>
Firmamızın mesai saatleri hafta içi saat 08:00-17-00 arasındadır.Semt servislerimiz mevcuttur ve sizler bu olanaktan faydalanabilirsiniz!</br>
FNSS'ye ulaşım için semt servislerini kullanacaklar için ilk gün mesai bitiminde servis ayarlaması yapılacaktır.İlk staj günü servisle gelmek isteyenler için detaylar aşağıdadır.(Sadece ilk güne özel saat 10.00'da şirkete gelebilirsiniz)</br>
SERVİS ADRESİ:NUROL HOLDİNG MERKEZ BİNASI(Arjantin caddesi no-7)</br>
SERVİS SAATİ:09:45 </br>
STAJA GELİRKEN YANINIZDA GETİRMENİZ GEREKEN EVRAK LİSTESİ AŞAĞIDA BELİRTİLMİŞTİR </br> 1-Nüfus cüzdanı sureti </br> 2-İkametgah Belgesi </br> 3-Sabıkasızlık Kaydı</br> 4- SGK işe giriş bildirgesi </br> 5- 2 Adet Fotoğraf</br>  BAŞARI DİLEKLERİMİZLE......</br>
 <button onclick="openNav()">DEVAM ETMEK İÇİN TIKLAYINIZ</button>

 </span>

<script>
function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}
</script>
     
</body>
</html>
