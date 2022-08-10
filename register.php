<!DOCTYPE html>
<html lang="en">

<head>
  <?php include './components/head.php' ?>
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"> -->

  <style>
    input {
      width: auto;
      margin-bottom: 10px;
    }

    h1 {
      margin-top: 35px;
      margin-bottom: 30px;
    }
  </style>
</head>

<body>
  <?php include './components/nav.php' ?>
  <?php include './components/scripts_file.php' ?>

  <div class="container justify-content-center d-flex">
    <div class="mt-4 p-5 bg-light w-50  rounded text-center">
      <nav>
        <div class="nav nav-tabs justify-content-center text-center" id="nav-tab" role="tablist">
          <button class="nav-link active" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Teachers</button>
          <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Parents</button>
        </div>
      </nav>
      <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
          <form class="form-group">
            <h1>Teachers SingIn</h1>
            <input class="form-control" type="text" name="name" placeholder="Name" required><br>
            <input class="form-control" type="email" name="email" placeholder="Email" required><br>
            <input class="form-control" type="password" name="password" placeholder="Password" required><br>
            <input class="form-control" type="file" name="image" required> </br>

            <button class="btn btn-info text-white">Submit</button>
          </form>
        </div>
        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
          <form class="form-group">
            <h1>Parents SingIn</h1>
            <input class="form-control" type="text" name="name" placeholder="Name" required ><br>
            <input class="form-control" type="email" name="email" placeholder="Email" required><br>
            <input class="form-control" type="password" name="password" placeholder="Password" required><br>
            <button class="btn btn-info text-white">Submit</button>
          </form>
        </div>
      </div>
    </div>
    <!--   
<div class="mt-4 p-5 bg-light  rounded text-center">
  <div class="d-flex mb-3">

      <ul class="nav nav-pills center">
        <div class="p-2 flex-fill">
          <li class="active"><a data-toggle="pill" href="#home">Teachers</a></li>
        </div>
        <div class="p-2 flex-fill">
          <li><a data-toggle="pill" href="#menu1">Students</a></li>
        </div>
        <div class="p-2 flex-fill">
          <li><a data-toggle="pill" href="#menu2">Parents</a></li>
        </div>
      </ul>
  </div>
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
    <div class="container">
            <form class="form-group">
                <h1>Teachers Login</h1>
                  <input class="form-control" type="email" name="email" placeholder="Email"><br>
                  <input class="form-control" type="password" name="password" placeholder="Password"><br>
                  <button class="btn btn-info">Submit</button>
            </form>
        
    </div>
    </div>
    <div id="menu1" class="tab-pane fade">
    <div class="container">
            <form class="form-group" >
                <h1>Students Login</h1>
                  <input class="form-control" type="email" name="email" placeholder="Email"><br>
                  <input class="form-control" type="password" name="password" placeholder="Password"><br>
                  <button class="btn btn-info">Submit</button>
            </form>
        </div>
    </div>
    <div id="menu2" class="tab-pane fade">
    <div class="container">
            <form class="form-group" >
                <h1>Parents Login</h1>
                  <input class="form-control" type="email" name="email" placeholder="Email"><br>
                  <input class="form-control" type="password" name="password" placeholder="Password"><br>
                  <button class="btn btn-info">Submit</button>
            </form>
        
    </div>
    </div>
  </div>
</div> -->

  </div>

</body>

</html>