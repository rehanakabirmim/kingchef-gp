<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <title>Home</title>
    <link rel = "icon" href ="img/logo.jpg" type = "image/x-icon">
    <style>
      .home{
            display: flex;
            flex-wrap: wrap;
            gap:1.5rem;
            min-height: 100vh;
            align-items: center;
            background:url(../img/home-bg.jpg) no-repeat;
            background-size: cover;
            background-position: center;
          }

          .home .content{
            flex:1 1 40rem;
            padding-top: 6.5rem;
            text-align: center;
          }

          .home .image{
            flex:1 1 40rem;
            padding-bottom: 5rem;
            padding-left: 5rem;
          }

          .home .image img{
            width:100%;
            padding:1rem;
            animation:float 3s linear infinite;
          }
          @keyframes float{
            0%, 100%{
              transform: translateY(0rem);
            }
            50%{
              transform: translateY(3rem);
            }
          }

          .home .content h3{
            font-size: 3rem;
            color:#333;
          }

          .home .content p{
            font-size: 1.2rem;
            color:#666;
            padding:1rem 0;
          }

    </style>
  </head>
<body>
  <?php include 'partials/_dbconnect.php';?>
  <?php require 'partials/_nav.php' ?>
  
  <!-- home section starts  -->

<section class="home pr-3 pl-3" id="home">

<div class="content">
    <h3>Best pizza in Dhaka</h3>
    <p>"Savor the finest slices in Kingchef,Dhaka – where every pizza is crafted to perfection for a taste that keeps you coming back!"</p>

</div>

<div class="image">
    <img src="img/home-img3.png" alt="">
</div>

</section>

<!-- home section ends -->
  <!-- Category container starts here -->
  <div class="container my-3 mb-5">
    <div class="col-lg-2 text-center bg-light my-3" style="margin:auto;border-top: 2px groove black;border-bottom: 2px groove black;">     
      <h2 class="text-center">Menu </h2>
    </div>
    <div class="row">
      <!-- Fetch all the categories and use a loop to iterate through categories -->
      <?php 
        $sql = "SELECT * FROM `categories`"; 
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)){
          $id = $row['categorieId'];
          $cat = $row['categorieName'];
          $desc = $row['categorieDesc'];
          echo '<div class="col-xs-3 col-sm-3 col-md-3">
                  <div class="card" style="width: 18rem;">
                    <img src="img/card-'.$id. '.jpg" class="card-img-top" alt="image for this category" width="249px" height="270px">
                    <div class="card-body">
                      <h5 class="card-title"><a href="viewPizzaList.php?catid=' . $id . '">' . $cat . '</a></h5>
                      <p class="card-text">' . substr($desc, 0, 30). '... </p>
                      <a href="viewPizzaList.php?catid=' . $id . '" class="btn btn-primary">View All</a>
                    </div>
                  </div>
                </div>';
        }
      ?>
    </div>
  </div>


    <?php require 'partials/_footer.php' ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>         
    <script src="https://unpkg.com/bootstrap-show-password@1.2.1/dist/bootstrap-show-password.min.js"></script>
</body>
</html>