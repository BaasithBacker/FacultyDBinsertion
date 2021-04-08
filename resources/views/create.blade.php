<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">HOME</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">FACULTY ADD</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/busadd">BUS ADD</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/student">STUDENT ADD</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/bookadd">BOOK ADD</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <div class="row">
    <div class="col col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
    </div>

    <div class="col col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
    
    <form action="/facultyread" method="post">
    {{csrf_field()}}
    <table class="table">
    
    <tr>
        <td>Name</td>
        <td><input name="fname" type="text" class="form-control"></td>
    </tr>
    <tr>
        <td>Designation</td>
        <td><input name="fdes" type="text" class="form-control"></td>
    </tr>
    <tr>
        <td>College</td>
        <td><input name="fcoll" type="text" class="form-control"></td>
    </tr>
    <tr>
        <td>Contact-No</td>
        <td><input name="fcont" type="text" class="form-control"></td>
    </tr>
    <tr>
        <td></td>
        <td><button class="btn btn-primary">SUBMIT</button></td>
    </tr>

    </table>
    </form>

    </div>

    <div class="col col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
    </div>
    </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>