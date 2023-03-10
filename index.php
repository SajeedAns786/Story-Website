<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Stories Website</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <?php include('partials/connect.php'); ?>
  <div class="container-fluid slider">
    <?php include('partials/header.php'); ?>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/img11.jpg" class="d-block w-100" alt="..." />
        </div>
        <div class="carousel-item">
          <img src="images/img10.jpg" class="d-block w-100" alt="..." />
        </div>
        <div class="carousel-item">
          <img src="images/img9.jpg" class="d-block w-100" alt="..." />
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <h1 class="text-center featuretitle mb-5">Features Stories</h1>

    <div class="row">
      <?php
      $sql = "SELECT *FROM `topics`";
      $result = mysqli_query($con, $sql);
      if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
          $id = $row['topic_id'];
          $topic_image = $row['topic_image'];
          $topic_name = $row['topic_name'];
          $topic_desc = $row['topic_desc'];
          echo ' 
        <div class="col-md-4 col-sm-6 mb-5 ">
          <div class="card" style="width: 18rem;">
            <img src=' . $topic_image . ' class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">
               ' . $topic_name . '
              </h5>
              <p class="card-text">' . substr($topic_desc, 0, 50) . '....</p>
              <a href="stories.php?story_id=' . $id . '" class="btn btn-primary">Continue Reading</a>
            </div>
          </div>
        </div>
        ';
        }
      }

      ?>



    </div>
  </div>

  <?php include('partials/footer.php'); ?>
</body>

</html>