<?php
  include 'connection.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WeBees Admin Dashboard</title>

    <!-- CSS Links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <!-- End of CSS Links -->

    <!-- Javascript Links -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- End of Javascript Links -->

    <!-- Start of Custom Stylesheet -->
    <style>
      .card{
        border: none;
      }
      h1.textalign{
        text-align: center;
      }
      td.capitalize{
        text-transform: capitalize;
      }
    </style>
    <!-- End of Custom Stylesheet -->
</head>
<body>
    
    <!-- Start of Navigation Panel -->
    <header>
        <nav class="navbar bg-body-secondary pb-3 pt-3">
            <section class="container">
              <a class="navbar-brand" href="#"><h2>
				  WeBees Admin
				  </h2></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <section class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <section class="offcanvas-header">
                  <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Admin</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </section>
                <section class="offcanvas-body">
                  <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="user.php">Add / Edit / Delete User</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="news.php">Add / Delete News</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="players.php">Add / Edit / Delete Players</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="testimonial.php">Approve / Deny Testimonials</a>
                    </li>
                  </ul>
                </section>
              </section>
            </section>
        </nav>
    </header>
    <!-- End of Navigation Panel -->

    <!-- Start of Card Section showing database analytics -->
    <section class="data_analytics mt-5 mb-5">
        <section class="container">
          <section class="row">
            <section class="col-sm-3 mb-3 mb-sm-0">
              <section class="card bg-success text-white shadow">
                <section class="card-body">
                  <section class="row">
                    <section class="col">
                      <?php
                          $user_query = "SELECT * FROM users";
                          $user_query_run = mysqli_query($con,$user_query);

                          $user_count = mysqli_num_rows($user_query_run);
                      ?>
                      <h1 class="textalign"><?= $user_count; ?> Users</h1>
                    </section>
                  </section>
                </section>
              </section>
            </section>
            <section class="col-sm-3">
              <section class="card bg-danger text-white shadow">
                <section class="card-body">
                  <section class="row">
                    <section class="col">
                      <?php
                          $news_query = "SELECT * FROM news";
                          $news_query_run = mysqli_query($con,$news_query);

                          $news_count = mysqli_num_rows($news_query_run);
                      ?>
                      <h1 class="textalign"><?= $news_count; ?> News</h1>
                    </section>
                  </section>
                </section>
              </section>
            </section>
            <section class="col-sm-3">
              <section class="card bg-info text-white shadow">
                <section class="card-body">
                  <section class="row">
                    <section class="col">
                      <?php
                          $testimonial_query = "SELECT * FROM testimonial";
                          $testimonial_query_run = mysqli_query($con,$testimonial_query);

                          $testimonial_count = mysqli_num_rows($testimonial_query_run);
                      ?>
                      <h1 class="textalign"><?= $testimonial_count; ?> Testimonials</h1>
                    </section>
                  </section>
                </section>
              </section>
            </section>
            <section class="col-sm-3">
              <section class="card bg-secondary text-white shadow">
                <section class="card-body">
                  <section class="row">
                    <section class="col">
                      <?php
                          $player_query = "SELECT * FROM player_info";
                          $player_query_run = mysqli_query($con,$player_query);

                          $player_count = mysqli_num_rows($player_query_run);
                      ?>
                      <h1 class="textalign"><?= $player_count; ?> Players</h1>
                    </section>
                  </section>
                </section>
              </section>
            </section>
          </section>
        </section>
    </section>
    <!-- End of Card Section showing database analytics -->

    <!-- Display User Details -->
    <section class="user_details mb-5">
      <section class="container">
        <section class="row">
          <section class="col-sm-9">
            <h3 class="pb-3">Registered Users</h3>
            <table class="table table-secondary table-striped">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Username</th>
                  <th scope="col">Email</th>
                  <th scope="col">Password</th>
                  <th scope="col">User Type</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                  $player_info = "SELECT * FROM users LIMIT 4";
                  $player_info_run = mysqli_query($con, $player_info);

                  if(mysqli_num_rows($player_info_run) > 0){
                    while($result = $player_info_run->fetch_assoc()){
                ?>
                <tr>
                  <th scope="row"><?= $result['id']; ?></th>
                  <td class="capitalize"><?= $result['username']; ?></td>
                  <td><?= $result['email']; ?></td>
                  <td><?= $result['password']; ?></td>
                  <td><?= $result['userID']; ?></td>
                </tr>
                <?php
                    }
                  }
                ?>
              </tbody>
            </table>
          </section>

          <!-- Latest Login -->
          <section class="col-sm-3">
            <h3 class="pb-3">Last Login</h3>
            <table class="table table-secondary table-striped">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Login Date and Time</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                  $login_info = "SELECT * FROM user_logs ORDER BY login_id DESC LIMIT 4";
                  $login_info_run = mysqli_query($con, $login_info);

                  if(mysqli_num_rows($login_info_run) > 0){
                    while($row = $login_info_run->fetch_assoc()){
                ?>
                <tr>
                  <th scope="row"><?= $row['login_id']; ?></th>
                  <td class="capitalize"><?= $row['user_name']; ?></td>
                  <td><?= $row['login_date_time']; ?></td>
                </tr>
                <?php
                    }
                  }
                ?>
              </tbody>
            </table>
          </section>
          <!-- End of Latest Login -->
        </section>
      </section>
    </section>
    <!-- End of Display User Details -->

    <!-- Javascript Links -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
    <!-- End of Javascript Links -->

</body>
</html>