<!DOCTYPE html>
<html lang="en">

<head>
  <?php include './components/head.php' ?>
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"> -->

  <style>
    input {
      width: auto;
      margin-bottom: 20px;
        }

    h1 {
      margin-top: 35px;
      margin-bottom: 40px;
    }
    .btn-info{
      margin-bottom: 20px;
    }
  </style>
</head>

<body>
  <?php include './components/nav.php' ?>
  <?php include './components/scripts_file.php' ?>

  <div class="container justify-content-center d-flex">
    <div class="mt-4 p-5 bg-light w-50  rounded ">
      
        
          <form class="form-group text-center">
            <h1>Feedback</h1>
            <input class="form-control" type="name" name="name" placeholder="Name" required><br>
            <input class="form-control" type="email" name="email" placeholder="Email" required><br>
            <textarea class="form-control" type="text" name="password" placeholder="Message" required></textarea><br>
           
           <button class="btn btn-outline-info btn-lg ">Send</button><br>
            </form>

        </div>
       
  </div>

</body>

</html>