<?php 
include $_SERVER['DOCUMENT_ROOT'] . '/estudiez/helpers/database.php';

$db = new Database();
$db->select('class', '*');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php include $_SERVER['DOCUMENT_ROOT'] .'/estudiez/components/head.php' ?>
</head>
<body>
  <?php include $_SERVER['DOCUMENT_ROOT'] .'/estudiez/components/nav.php' ?>
  <div class="container">
    <h1>Teachers Portal</h1>
    <div class="cards d-flex">
      <?php while ($row = mysqli_fetch_assoc($db->res)) { ?>
        <div class="card mb-5" style="width: 18rem; height: 24rem">
          <img class="object-fit" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" height="150px" alt="">
          <div class="card-body">
            <h5 class="card-title"><?php echo $row['name'] ?></h5>
            <p class="card-text overflow-ellipses text-truncate"><?php echo $row['description'] ?></p>
            <a href="#" class="btn btn-primary">Enter</a>
          </div>
        </div>  
      <?php } ?>
    </div>
  </div>
  <?php include $_SERVER['DOCUMENT_ROOT'] .'/estudiez/components/footer.php' ?>
</body>
</html>