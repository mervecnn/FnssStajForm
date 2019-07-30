<!DOCTYPE html>
<html>

<head>

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <meta charset="utf-8">
  <form class="form-horizontal" action="personelkontrol.php" method="Post">
</head>
<fieldset id="inputs">
  <nav aria-label="...">
    <ul class="pagination">
      <li class="page-item active"><a class="page-link" href="personel.php">Personel Bilgi Formu</a></li>
      <li class="page-item"><a class="page-link" href="bilgilendirme.php">Bilgilendirme Formu</a></li>
      <li class="page-item"><a class="page-link" href="saglik.php">Sağlık Bilgisi Formu</a></li>
      </li>
    </ul>
  </nav>
  <div class="form-group">
    <label class="col-md-4 control-label" for="ad">Ad:</label>
    <div class="col-md-4">
      <input id="ad" name="ad" type="text" placeholder="Boş bırakmayınız.." class="form-control input-md" required="">
      </input>

    </div>
  </div>

  <div class="form-group">
    <label class="col-md-4 control-label" for="soyad">Soyad:</label>
    <div class="col-md-4">
      <input id="soyad" name="soyad" type="text" placeholder="Boş bırakmayınız.." class="form-control input-md"
        required="">      
    </div>
  </div>

  <div class="form-group">
    <label class="col-md-4 control-label" for="tc">Tc Kimlik No:</label>
    <div class="col-md-4">
      <input id="tc" name="tc" type="text" placeholder="Boş bırakmayınız.." class="form-control input-md" required="">

    </div>
  </div>
  <div class="form-group">
    <label class="col-md-4 control-label" for="dtarihi">Doğum Tarihi:</label>
    <div class="col-md-4">
      <input id="dtarihi" name="dtarihi" type="text" placeholder="Boş bırakmayınız.." class="form-control input-md"
        required="">

    </div>
  </div>
  <div class="form-group">
    <label class="col-md-4 control-label" for="email">Email Adresi:</label>
    <div class="col-md-4">
      <input id="email" name="email" type="text" placeholder="Boş bırakmayınız.." class="form-control input-md"
        required="" />

    </div>
  </div>
  <div class="form-group">
    <label class="col-md-4 control-label" for="dyeri">Doğum Yeri:</label>
    <div class="col-md-4">
      <input id="dyeri" name="dyeri" type="text" placeholder="Boş bırakmayınız.." class="form-control input-md"
        required="">

    </div>
  </div>
  <div class="form-group">
    <label class="col-md-4 control-label" for="ikametgah">İkametgah adresi:</label>
    <div class="col-md-4">
      <input id="ikametgah" name="ikametgah" type="text" placeholder="Boş bırakmayınız.." class="form-control input-md">

    </div>
  </div>
  <div class="form-group">
    <label class="col-md-4 control-label" for="il">İl:</label>
    <div class="col-md-4">
      <input id="il" name="il" type="text" placeholder="Boş bırakmayınız.." class="form-control input-md" required="">

    </div>
  </div>
  <div class="form-group">
    <label class="col-md-4 control-label" for="ilce">İlçe:</label>
    <div class="col-md-4">
      <input id="ilce" name="ilce" type="text" placeholder="Boş bırakmayınız.." class="form-control input-md"
        required="">

    </div>
  </div>
  <div class="form-group">
    <label class="col-md-4 control-label" for="sgkno">Sgk no:</label>
    <div class="col-md-4">
      <input id="sgkno" name="sgkno" type="text" placeholder="Boş bırakmayınız.." class="form-control input-md"
        required="">

    </div>
  </div>
  <div class="form-group">
    <label class="col-md-4 control-label" for="iletisimnumarasi">İletişim numarası:</label>
    <div class="col-md-4">
      <input id="iletisimnumarasi" name="iletisimnumarasi" type="text" placeholder="Boş bırakmayınız.."
        class="form-control input-md" required="">

    </div>
  </div>
  <div class="form-group">
    <label class="col-md-4 control-label" for="universiteadi">Hangi üniversitede okuyorsunuz?</label>
    <div class="col-md-4">
      <input id="universiteadi" name="universiteadi" type="text" placeholder="Boş bırakmayınız.."
        class="form-control input-md" required="">

    </div>
  </div>
  <div class="form-group">
    <label class="col-md-4 control-label" for="bolumadi">Hangi bölümde okuyorsunuz? </label>
    <div class="col-md-4">
      <input id="bolumadi" name="bolumadi" type="text" placeholder="Boş bırakmayınız.." class="form-control input-md"
        required="">

    </div>
  </div>
  <div class="form-group">
    <label class="col-md-4 control-label" for="sinif">Kaçıncı Sınıfsınız?</label>
    <div class="col-md-4">
      <input id="sinif" name="sinif" type="text" placeholder="Boş bırakmayınız.." class="form-control input-md"
        required="">

    </div>
  </div>
  <div class="form-group">
    <label class="col-md-4 control-label" for="departman">Departman Adı:</label>
    <div class="col-md-4">
      <input id="departman" name="departman" type="text" placeholder="Boş bırakmayınız.." class="form-control input-md"
        required="">

    </div>
  </div>
  <div class="form-group">
    <label class="col-md-4 control-label" for="anneadi">Anne adı:</label>
    <div class="col-md-4">
      <input id="anneadi" name="anneadi" type="text" placeholder="Boş bırakmayınız.." class="form-control input-md"
        required="">

    </div>
  </div>
  <div class="form-group">
    <label class="col-md-4 control-label" for="babaadi">Baba adı:</label>
    <div class="col-md-4">
      <input id="babaadi" name="babaadi" type="text" placeholder="Boş bırakmayınız.." class="form-control input-md"
        required="">

    </div>
  </div>
  <div>
    <form action="#"
      onsubmit="if(document.getElementById('agree').checked) { return true; } else { alert('Please indicate that you have read and agree to the Terms and Conditions and Privacy Policy'); return false; }">

      <input class="button" type="checkbox" name="checkbox" value="check" id="agree" /> Bilgilerin doğruluğunu kabul
      ediyorum </br>
      <input class="button" type="submit" name="submit" value="Gönder" "/>

 
</div>
<script src=" src/lib/js-cookie.js"> </script> <script src="src/personel.js"></script>

</fieldset>

</form>

</html>