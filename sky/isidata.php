<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>isidata</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<div style="padding: 200px;">
        <form action="data.php"  method="POST">
        <div class="container mt-2">
        <div class="row" >
        <div class="col-md-6 offset-md-1" style="margin:auto">
        <div class="card my-6" style="background:#AEBDCA;">
            <form class="card-body cardbody-color p-lg-4 text-dark" >
            <div class="container mt-2" >
            <div class="mb-3">
              <div class="mb-3 text-center mt-3 fw-bold">
                NIS : 
                <input class="rounded-3 form-control" type="text" name="Nis" style="width: 400px;margin:auto">
              </div>
              <div class="mb-3 text-center mt-3 fw-bold">
                NAME : 
                <input class="rounded-3 form-control" type="text" name="Name" style="width: 400px;margin:auto">
              </div>
              <div class="mb-3 text-center mt- fw-bold">
                CLASS : 
                <input class="rounded-3 form-control" type="text" name="Class" style="width: 400px;margin:auto">
              </div>
              <div class="text-center mt-3"> 
                <button type="submit" class="btn btn-success px-3 mb-3 fw-bold" style="width: 100px;">SAVE</button> 
                </div>
            </form>
</html>