<?php

class formView {

    public function halamanformawal() {
        ?>

    <!DOCTYPE html>
  <html>
    <head>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="http://localhost/PEMWEB/BUNGAMVC/css/materialize.min.css"  media="screen,projection"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
   <body style="background-image: url(header.jpeg); background-attachment: fixed;">
  <div class="row">
       <div class="navbar-fixed">
    <nav class="#42f4bc" style="background-color: #42f4bc">
      <a id="logo-container" href="#" class="brand-logo center pink-text"><b>FORM PENDAFTARAN E-BANKING</b></a>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons black-text">menu</i></a>
    </nav>
</div>
      </div>
      <form class="col s12" action="http://localhost/PEMWEB/BUNGAMVC/router.php/formController/gethalamanakhir" method="POST" enctype="multipart/form-data">
      <div class="row">
        <div class="input-field col s12">
        <input id="first_name" type="text" class="validate" name="nama-depan">
        <label class="pink-text" for="first_name">Nama Depan</label>
        </div>
        </div>
         <div class="row">
        <div class="input-field col s12">
          <input id="last_name" type="text" class="validate" name="last-name">
          <label class="pink-text" for="last_name">Nama Belakang</label>
        </div>
      </div>
      
      <div class="row">
        <div class="col s6">
        <!-- <form action="#"> -->
        <p class="pink-text"> LAYANAN YANG DIPILIH </p>
      <p>
      <input type="radio" class="filled-in" id="A" name="layanan[]" value="Deposito" />
      <label for="A">Deposito</label>
      </p>
      <p>
      <input type="radio" class="filled-in" id="B" name="layanan[]" value="Token Mobile" />
      <label for="B">Token Mobile</label>
      </p>
      <p>
      <input type="radio" class="filled-in" id="C" name="layanan[]" value="M-Banking" />
      <label for="C">M-Banking</label>
      </p>
      <p>
      <input type="radio" class="filled-in" id="D" name="layanan[]" value=" Kartu ATM" />
      <label for="D">Kartu ATM</label>
      </p>
      <p>
      <input type="radio" class="filled-in" id="E" name="layanan[]" value="SMS Banking" />
      <label for="E">SMS Banking</label>
      </p>
      <!-- </form> -->
        </div>
         </div>

      <div class="row">
        <div class="col s6">
          <!-- <form action="#"> -->
    <p class="pink-text">PEKERJAAN</p>
    <p>
      <input type="radio" class="filled-in" id="13" name="pekerjaan[]" value="Mahasiswa" />
      <label for="13">Mahasiswa</label>
    </p>
    <p>
      <input type="radio" class="filled-in" id="14" name="pekerjaan[]" value="Wirausaha" />
      <label for="14">Wirausaha</label>
    </p>
    <p>
      <input type="radio" class="filled-in" id="15"" name="pekerjaan[]" value="PNS" />
      <label for="15">PNS</label>
    </p>
    <p>
      <input type="radio" class="filled-in" id="16" name="pekerjaan[]" value="Karyawan" />
      <label for="16">Karyawan</label>
    </p>
  <!-- </form> -->
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate" name="email">
          <label class="pink-text" for="email">Email</label>
        </div>
      </div>
       <div class="row">
        <div class="input-field col s12">
          <input id="id" type="text" class="validate" name="idline">
          <label class="pink-text" for="id">Id Line / No. HP</label>
        </div>
      </div>
      <div class="row">
    <!-- <form class="col s12"> -->
      <div class="row">
        <div class="input-field col s12">
          <input id="textarea1" class="validate" name="keterangan"></input>
          <label class="pink-text" for="textarea1">Keterangan</label>
        </div>
      </div>
    <!-- </form> -->
  </div>
  <!-- <form action="#"> -->
  <p class="pink-text"> Scan KTP </p>
    <div class="file-field input-field">
      <div class="btn waves-effect waves-yellow">
        <span class="pink-text">File</span>
        <input type="file" name="berkas">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
      </div>
    </div>
  <!-- </form> -->
  <br>
  <button class="btn waves-effect waves-yellow" type="submit" name="action">
  <!-- <i class="material-icons right">send</i> -->
    <a class="pink-text"> Submit </a>
  </button>
    </form>
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="http://localhost/PEMWEB/BUNGAMVC/js/materialize.min.js"></script>
    </body>
  </html>

  <?php
}

public function halamanformakhir($poin){
    $namadpn = $_POST['nama-depan'];
    $namablkg = $_POST['last-name'];
    $layanan = $_POST['layanan'];
    $pekerjaan = $_POST['pekerjaan'];
    $email = $_POST['email'];
    $idline = $_POST['idline'];
    $keterangan = $_POST['keterangan'];
    $berkas = $_FILES['berkas']['name'];
    $temp = $_FILES['berkas']['tmp_name'];
    move_uploaded_file($temp, $_SERVER['DOCUMENT_ROOT']."/PEMWEB/BUNGAMVC/".$berkas);
?>

<!doctype html>
<html>
<head><link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="http://localhost/PEMWEB/BUNGAMVC/css/materialize.min.css"  media="screen,projection"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

</head>

<body>
<div class="row">
       <div class="navbar-fixed">
    <nav class="#42f4bc" style="background-color: #42f4bc">
      <a id="logo-container" href="#" class="brand-logo center pink-text"><b>FORM PENDAFTARAN E-BANKING</b></a>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons black-text">menu</i></a>
    </nav>
</div>
      </div>
      <table class="pink-text" style="margin-left: 20px;">
                                <tr>
                                    <td style="width: 200px;">Nama Depan</td>
                                    <td>:</td>
                                     <td><?php echo $namadpn; ?></td>
                                </tr>
                                <tr>
                                    <td>Nama Belakang</td>
                                    <td>:</td>
                                     <td><?php echo $namablkg; ?></td>
                                </tr>
                                <tr>
                                    <td>Layanan</td>
                                    <td>:</td>
                                <td><?php echo implode(", ",$layanan) ;?></td>
                                </tr>
                                <tr>
                                    <td>Pekerjaan</td>
                                    <td>:</td>
                               <td><?php echo implode(", ",$pekerjaan) ;?></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>:</td>
                                      <td><?php echo $email; ?></td>
                                </tr>
                                <tr>
                                    <td>ID Line / No.Telp</td>
                                    <td>:</td>
                                  <td><?php echo $idline; ?></td>
                                </tr>
                                <tr>
                                    <td>Keterangan</td>
                                    <td>:</td>
                                    <td><?php echo $keterangan; ?></td>
                                </tr>
                                <tr>
                                    <td>Poin</td>
                                    <td>:</td>
                                <td><?php echo $poin; ?></td>
                                </tr>
                                <tr>
                                    <td>Scan KTP</td>
                                    <td>:</td>
                                    <td><img src="<?php echo $berkas;?>"</td>
                                </tr>

                            </table>

      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="http://localhost/PEMWEB/BUNGAMVC/js/materialize.min.js"></script>        
</body>
</html>
<?php
}
}