<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form action="proses.php" method="POST" class="container w-75">
<br>
    <legend alig="center">Form Registrasi IT Club Data Science</legend>
    <br>
</br>
  <div class="form-group row">
    <label for="masukkan NIM kamu di sini" class="col-4 col-form-label">NIM :</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-adn"></i>
          </div>
        </div> 
        <input id="nim" name="nim" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Lengkap :</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-book"></i>
          </div>
        </div> 
        <input id="nama" name="nama" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Jenis Kelamin :</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jenisKelamin" id="jenisKelamin_0" type="radio" required="required" class="custom-control-input" value="Laki-laki"> 
        <label for="jenisKelamin_0" class="custom-control-label">Laki-laki</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jenisKelamin" id="jenisKelamin_1" type="radio" required="required" class="custom-control-input" value="Perempuan"> 
        <label for="jenisKelamin_1" class="custom-control-label">Perempuan</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="programStudi" class="col-4 col-form-label">Program Studi :</label> 
    <div class="col-8">
      <select id="programStudi" name="programStudi" class="custom-select" required="required">
        <option value="-">-</option>
        <option value="SI">Sistem informasi</option>
        <option value="TI">Teknik Informatika</option>
        <option value="BD">Bisnis Digital</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Skill Web &amp; Programming :</label> 
    <div class="col-8">
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skillWeb" id="skillWeb_0" type="checkbox" class="custom-control-input" value="HTML"> 
        <label for="skillWeb_0" class="custom-control-label">HTML</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skillWeb" id="skillWeb_1" type="checkbox" class="custom-control-input" value="CSS"> 
        <label for="skillWeb_1" class="custom-control-label">CSS</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skillWeb" id="skillWeb_2" type="checkbox" class="custom-control-input" value="JavaScript"> 
        <label for="skillWeb_2" class="custom-control-label">JavaScript</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skillWeb" id="skillWeb_3" type="checkbox" class="custom-control-input" value="RWD Bootstrap"> 
        <label for="skillWeb_3" class="custom-control-label">RWD Bootstrap</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skillWeb" id="skillWeb_4" type="checkbox" class="custom-control-input" value="PHP"> 
        <label for="skillWeb_4" class="custom-control-label">PHP</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skillWeb" id="skillWeb_5" type="checkbox" class="custom-control-input" value="Python"> 
        <label for="skillWeb_5" class="custom-control-label">Python</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skillWeb" id="skillWeb_6" type="checkbox" class="custom-control-input" value="Java"> 
        <label for="skillWeb_6" class="custom-control-label">Java</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="domisili" class="col-4 col-form-label">Tempat Domisili :</label> 
    <div class="col-8">
      <select id="domisili" name="domisili" class="custom-select" required="required">
        <option value="Jakarta">Jakarta</option>
        <option value="Depok">Depok</option>
        <option value="Bekasi">Bekasi</option>
        <option value="Tanggerang">Tanggerang</option>
        <option value="Bengukulu">Bengkulu</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">Email :</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-gg-circle"></i>
          </div>
        </div> 
        <input id="email" name="email" type="text" class="form-control">
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>