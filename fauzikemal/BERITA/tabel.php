<?php

 ?>
<html lang=en>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

</head>
<body>
  <h1 style="font-size:40px;color:#646464;font-family:verdana;text-align:center;">TABEL BERITA</h1>
  <div class="btn btn-default">
    <a style="text-decoration:none;color:white;" href="../registrasi.php">TAMBAH DATA</a><br>
  </div>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>NO</th>
        <th>ID USER</th>
        <th>JUDUL</th>
        <th>GAMBAR</th>
        <th>DESKRIPSI</th>
        <th>AKSI</th>
      </tr>
    </thead>
    <tbody>
      <?php

        $hasil = $db->QUERY("SELECT * FROM user");
          $rows = $hasil->fetch_All(MYSQLI_ASSOC);
          $no = 1;
          foreach($rows as $row):

          ?>
      <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $row['id_user']; ?></td>
        <td><?php echo $row['']; ?></td>
        <td><?php echo $row['']; ?></td>
        <td><?php echo $row['']; ?></td>
        <td>
          <a href="edit.php?id=<?php echo $row['id_user'];?>">Edit</a> ||
          <a href="hapus.php?id=<?php echo $row['id_user'];?>">Hapus</a> ||
          <a href="berita.php">Berita</a>
        </td>
      </tr>
      <?php
        $no++;
      endforeach;
      ?>
    </tbody>
  </table>
</body>
</html>
