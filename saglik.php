<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<form class="form-horizontal">
<fieldset>
<nav aria-label="...">
  <ul class="pagination">   
    <li class="page-item"><a class="page-link" href="index.php">Personel Bilgi Formu</a></li>
    <li class="page-item"><a class="page-link" href="sayfa2.php">Bilgilendirme Formu</a></li>
    <li class="page-item active"><a class="page-link" href="saglik.php">Sağlık Bilgisi Formu</a></li>
  </ul>
</nav>
<div class="form-group">
  <label class="col-md-4 control-label" for="fn">AD:</label>  
  <div class="col-md-4">
  <input id="fn" name="fn" type="text" placeholder="Boş bırakmayınız.." class="form-control input-md" required="">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="ln">Soyad:</label>  
  <div class="col-md-4">
  <input id="ln" name="ln" type="text" placeholder="Boş bırakmayınız.." class="form-control input-md" required="">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="cmpny">Doğum Tarihi:</label>  
  <div class="col-md-4">
  <input id="cmpny" name="cmpny" type="text" placeholder="Boş bırakmayınız.." class="form-control input-md" required="">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="email">TELEFON NUMARASI:</label>  
  <div class="col-md-4">
  <input id="email" name="email" type="text" placeholder="Boş bırakmayınız.." class="form-control input-md" required="">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="add1">BİR HASTALIĞINIZ VAR MI?:</label>  
  <div class="col-md-4">
  <input id="add1" name="add1" type="text" placeholder="Varsa adını yazınız.." class="form-control input-md" required="">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="add2">İLAÇ KULLANIYOR MUSUNUZ?:</label>  
  <div class="col-md-4">
  <input id="add2" name="add2" type="text" placeholder="Kullanıyorsanız adını yazınız.." class="form-control input-md">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="city">HİÇ AMELİYAT OLDUNUZ MU?:</label>  
  <div class="col-md-4">
  <input id="city" name="city" type="text" placeholder="Olduysanız ne için yazınız.." class="form-control input-md" required="">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="zip">ALERJİNİZ VAR MI?:</label>  
  <div class="col-md-4">
  <input id="zip" name="zip" type="text" placeholder="Varsa neye yazınız.." class="form-control input-md" required="">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="ctry">BOY:</label>  
  <div class="col-md-4">
  <input id="ctry" name="ctry" type="text" placeholder="Boş bırakmayınız.." class="form-control input-md" required="">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="phone">SİGARA KULLANIYOR MUSUNUZ?:</label>  
  <div class="col-md-4">
  <input id="phone" name="phone" type="text" placeholder="Kullanıyorsanız günde kaç tane yazınız.." class="form-control input-md" required="">
    
  </div>
</div>
<div>
<form action="#" onsubmit="if(document.getElementById('agree').checked) { return true; } else { alert('Please indicate that you have read and agree to the Terms and Conditions and Privacy Policy'); return false; }">

<input class="button"   type="checkbox" name="checkbox" value="check" id="agree" /> Bilgilerin doğruluğunu kabul ediyorum </br>
<input class="button"  type="submit" name="submit" value="Gönder"  />

</div>
</fieldset>
</form>
