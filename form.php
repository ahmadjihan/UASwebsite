<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Masukan</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Websiteku</a>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link" href="index.html">Beranda</a></li>
          <li class="nav-item"><a class="nav-link" href="gallery.html">Galeri</a></li>
          <li class="nav-item"><a class="nav-link" href="profile.html">Profil</a></li>
          <li class="nav-item"><a class="nav-link" href="form.php">Masukan</a></li>
          <li class="nav-item"><a class="nav-link" href="contact.html">Tentang Saya</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <h1>Masukan</h1>
  <form action="output.php" method="post">
    <label>Nama:</label>
    <input type="text" name="nama"><br><br>
    <label>Email:</label>
    <input type="email" name="email"><br><br>
    <label>Pesan:</label><br>
    <textarea name="pesan" rows="4" cols="40"></textarea><br><br>
    <input type="submit" value="Kirim">
  </form>
</body>
</html>