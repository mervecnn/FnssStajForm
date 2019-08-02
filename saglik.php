<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

  <form class="form-horizontal" action="saglikkontrol.php" method="Post">
</head>

<fieldset id="inputs"  style = "text-align: center;">	
  <nav aria-label="...">
    <ul class="pagination">
      <li class="page-item"><a class="page-link" href="personel.php">Personel Bilgi Formu</a></li>
      <li class="page-item"><a class="page-link" href="bilgilendirme.php">Bilgilendirme Formu</a></li>
      <li class="page-item active"><a class="page-link" href="saglik.php">Sağlık Bilgisi Formu</a></li>
    </ul>
  </nav>

  <div class="form-group">
    <label class="col-md-4 control-label" for="ad">AD:</label>
    <div class="col-md-4">
      <input id="ad" name="ad" type="text" placeholder="Boş bırakmayınız.." class="form-control input-md" required="">

    </div>
  </div>

  <div class="form-group">
    <label class="col-md-4 control-label" for="soyad">SOYAD:</label>
    <div class="col-md-4">
      <input id="soyad" name="soyad" type="text" placeholder="Boş bırakmayınız.." class="form-control input-md"
        required="">
    </div>
  </div>

  <div class="form-group">
    <label class="col-md-4 control-label" for="tc">TC KİMLİK NO:</label>
    <div class="col-md-4">
      <input id="tc" name="tc" type="text" placeholder="Boş bırakmayınız.." class="form-control input-md" required="">
    </div>
  </div>

  <div class="form-group">
    <label class="col-md-4 control-label" for="dtarihi">DOĞUM TARİHİ:</label>
    <div class="col-md-4">
      <input id="dtarihi" name="dtarihi" type="text" placeholder="Boş bırakmayınız.." class="form-control input-md"
        required="">
    </div>
  </div>

  <div class="form-group">
    <label class="col-md-4 control-label" for="telnumarasi">TELEFON NUMARASI:</label>
    <div class="col-md-4">
      <input id="telnumarasi" name="telnumarasi" type="text" placeholder="Boş bırakmayınız.."
        class="form-control input-md" required="">
    </div>
  </div>

  <div class="form-group">
    <label class="col-md-4 control-label" for="hastalik">BİR HASTALIĞINIZ VAR MI?:</label>
    <div class="col-md-4">
      <input id="hastalik" name="hastalik" type="text" placeholder="Varsa adını yazınız.." class="form-control input-md"
        required="">

    </div>
  </div>

  <div class="form-group">
    <label class="col-md-4 control-label" for="ilac">İLAÇ KULLANIYOR MUSUNUZ?:</label>
    <div class="col-md-4">
      <input id="ilac" name="ilac" type="text" placeholder="Kullanıyorsanız adını yazınız.."
        class="form-control input-md">
    </div>
  </div>

  <div class="form-group">
    <label class="col-md-4 control-label" for="ameliyat">HİÇ AMELİYAT OLDUNUZ MU?:</label>
    <div class="col-md-4">
      <input id="ameliyat" name="ameliyat" type="text" placeholder="Olduysanız ne için yazınız.."
        class="form-control input-md" required="">
    </div>
  </div>

  <div class="form-group">
    <label class="col-md-4 control-label" for="alerji">ALERJİNİZ VAR MI?:</label>
    <div class="col-md-4">
      <input id="alerji" name="alerji" type="text" placeholder="Varsa neye yazınız.." class="form-control input-md"
        required="">
    </div>
  </div>

  <div class="form-group">
    <label class="col-md-4 control-label" for="boy">BOY:</label>
    <div class="col-md-4">
      <input id="boy" name="boy" type="text" placeholder="Boş bırakmayınız.." class="form-control input-md" required="">
    </div>
  </div>

  <div class="form-group">
    <label class="col-md-4 control-label" for="sigara">SİGARA KULLANIYOR MUSUNUZ?:</label>
    <div class="col-md-4">
    <input class="button" type="checkbox" name="sigara" id="sigara" /> Kullanıyorum </br>
 
    </div>
  </div>

  <div>
    <form action="#"
      onsubmit="if(document.getElementById('agree').checked) { return true; } else { alert('Please indicate that you have read and agree to the Terms and Conditions and Privacy Policy'); return false; }">

      <input class="button" type="checkbox" name="checkbox" value="check" id="agree" required/> Bilgilerin doğruluğunu kabul
      ediyorum </br>
      <input class="button" type="submit" name="submit" value="Gönder" />
  </div>
  <script src=" src/lib/js-cookie.js"> </script>
  <script src="src/cookies.js"></script>
</fieldset>