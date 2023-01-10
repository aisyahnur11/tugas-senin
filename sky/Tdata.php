<?php

$db = mysqli_connect("localhost","root","","sekul");

$result = mysqli_query($db, "SELECT * FROM data_siswa");
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <title>Catatan_Perjalanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container mt-4">
    <div class="d-grip gap-2 col-12 mt-2">
    <table class="table table-hover text-dark" >
  <thead>
    <tr style="text-align:center;">
      <th scope="col">No</th>
      <th scope="col">NIS</th>
      <th scope="col">NAME</th>
      <th scope="col">CLASS</th>
      <th scope="col">ACTION</th>
    </tr>
  </thead>
  <?php $i=1;?>
  <?php while($row = mysqli_fetch_assoc($result)):?>
  <tbody>
    <tr class="text-center">
      <th scope="row"><?= $i ?></th>
      <td><?=$row['Nis'];?></td>
      <td><?=$row['Name'];?></td>
      <td><?=$row['Class'];?></td>
      <td><a href="fupdate.php?id=<?=$row['id'];?>" class="btn btn-sm btn-success ml-auto fw-bold">Update</a>
      <a href="delete.php?id=<?=$row['id'];?>" class="btn btn-sm btn-danger ml-auto fw-bold">delete</a></td>
    </tr>
    </tbody>
    <?php $i++; ?>
    <?php endwhile ?>
    </table>
    </div>
    <div class="text-end">
      <a href="isidata.php"class="btn btn-primary">Isi Data</a>
    </div>
    </div>
    
</body>
</html>