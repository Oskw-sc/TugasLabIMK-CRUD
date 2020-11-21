<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .row.content {height:auto;} 
    }
  </style>
  <title>GIT</title>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
    <a class="navbar-brand" href="#">
        <img src="https://www.sascleanindonesia.com/wp-content/uploads/2015/10/logo-usu.png" alt="logo" style="width:80px;">Lab IMK
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="activity.php">Activity</a>
        </li> 
        <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
        </li>   
        </ul>
    </div>  
</nav>

<div class="jumbotron text-center" style="margin-bottom:0">
        <br/>
        <br/>
        <h1>Edit Data</h1>
      </div>

    <div class="container" style="margin-top:100px">
        <h2>Silahkan Mengisi Data</h2>
        <br/>
        <?php 
        include 'koneksi.php';
        $id_catatan = $_GET['id_catatan'];
        $data = mysqli_query($koneksi, "SELECT * FROM tugas1 WHERE id_catatan = '$id_catatan'");
        while($d = mysqli_fetch_array($data)){
        ?>
            <form class="form-horizontal" method="post" action="update_aksi.php">
                <div class="form-group">
                    <label class="col-sm-4 control-label" for="id_catatan">ID Catatan</label>
                    <input class="form-control col-sm-4" type="text" name="id_catatan" value="<?php echo $d['id_catatan']; ?>" id="id_catatan" pattern="[0-9]{6}" maxlength="6" size="6" title="Silahkan isi 6 digit angka, angka yang diizinkan mulai dari 0 hingga 9" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Tolong isi terlebih dahulu.</div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label" for="author">Author</label>
                    <input class="form-control col-sm-4" type="text" name="author" value="<?php echo $d['author']; ?>" maxlength="30" placeholder="Silahkan masukkan nama author di sini" id="author" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Tolong isi terlebih dahulu.</div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="tanggal">Tanggal</label>
                    
                    <select type="select" class="form-control col-sm-4" name="fakultas" id="fakultas" value="<?php echo $d['fakultas']; ?>" placeholder="Asal Fakultas Anda" required>
                    </select>

                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Tolong isi terlebih dahulu.</div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label" for="judul">Judul</label>
                    <input class="form-control col-sm-4" type="text" name="judul" value="<?php echo $d['judul']; ?>" maxlength="30" placeholder="Silahkan masukkan judul di sini" id="judul" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Tolong isi terlebih dahulu.</div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">catatan</label>
                    <input class="form-control col-sm-4" type="text" name="catatan" value="<?php echo $d['catatan']; ?>" maxlength="30" placeholder="Silahkan masukkan catatan anda di sini" required>
                </div>
                <input type="hidden" name="old_id_catatan" value="<?php echo $d['id_catatan']; ?>">
                <button type="submit" class="btn btn-primary">SIMPAN</button>
                <a href="activity.php" class="btn btn-primary">KEMBALI</a>
            </form>
        <?php
        }
        ?>
	</div>


    <footer class="container-fluid text-center">
    <p>Copyright &copy; 2020</p>
</footer>

</body>
</html>