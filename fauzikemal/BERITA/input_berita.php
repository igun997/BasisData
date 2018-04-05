<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Input Berita - User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h1 class="text-center" style="font-family:verdana;font-size:42px">INPUT DATA BERITA</h1>
        <form action="#" method="post">
          <div class="form-group">
            <label for="judul">Judul : </label>
            <input type="text" class="form-control" id="judul" placeholder="Judul">
            <label for="gambar">Upload Gambar : </label>
            <input type="file" id="gambar">
            <label for="deskripsi">Deskripsi : </label>
            <textarea class="form-control" id="deskripsi" rows="5" placeholder="Deskripsi Berita"></textarea><br>
            <button type="submit" class="btn btn-info">Submit</button>
            <a href="tabel.php"><button class="btn btn-default pull-right">Home</button></a>
          </div>
        </form>
    </div>
  </body>
</html>
