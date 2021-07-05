<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Upload Berkas</title>
  </head>
  <body>
    <div class="container">
      <h1>Crud Upload Image dan Delete</h1>

      <table class="table table-bordered">
        <tr>
          <td>No</td>
          <td>Photo</td>
          <td>Keterangan</td>
          <td>Pilihan</td>
        </tr>
        <?php
        foreach ($result as $row);
        $no=1;
        ?>

        <tr>
          <td><?= $no++ ?></td>
          <td>
            <?= $row->nama_file ?>
            <img height="30px" src="<?= base_url() ?>gambar/<?= $row->nama_file ?>" alt="">
          </td>
          <td><?= $row->keterangan ?></td>
          <td>
            <a href="<?= site_url('C_upload_gambar/edit/').$row->id_upload ?>" class="btn btn-info">Edit</a>
            <a href="<?= site_url('C_upload_gambar/hapus/').$row->id_upload ?>" class="btn btn-danger">Hapus</a>
          </td>
        </tr>
      </table>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
