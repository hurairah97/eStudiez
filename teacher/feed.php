<?php 
include $_SERVER['DOCUMENT_ROOT'] . '/estudiez/helpers/database.php';

$db = new Database();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php include $_SERVER['DOCUMENT_ROOT'] .'/estudiez/components/head.php' ?>
</head>
<body>
  <?php include $_SERVER['DOCUMENT_ROOT'] .'/estudiez/components/nav.php' ?>
  <div class="container">
    <div class="main d-flex justify-content-center">
      <div class="announcements d-flex justify-content-center flex-column">
        <h1 class="text-center">Announcements</h1>

        <?php 
          $db->select('announcement', '*');

          while ($row = mysqli_fetch_assoc($db->res)) {
        ?>
          <div class="card mb-5" style="width: 30rem">
          <div class="card-body">
            <p class="card-text overflow-ellipses text-truncate"><?php echo $row['message'] ?></p>
            <a href="">Add Comment</a>
          </div>
        </div>  
        <?php } ?>
      </div>
    </div>
  </div>
  <?php include $_SERVER['DOCUMENT_ROOT'] .'/estudiez/components/footer.php' ?>
</body>
</html>