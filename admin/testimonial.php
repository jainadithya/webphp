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
                      <a class="nav-link" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="user.php">Add / Edit / Delete User</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="news.php">Add / Delete News</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="players.php">Add / Edit / Delete Players</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" href="testimonial.php">Approve / Deny Testimonials</a>
                    </li>
                  </ul>
                </section>
              </section>
            </section>
        </nav>
    </header>
    <!-- End of Navigation Panel -->

    <!-- Display Testimonial Details -->
    <section class="user_details mt-5 mb-5">
      <section class="container">
        <section class="row">
          <section class="col-sm-12">
            <h3 class="pb-3">Testimonials
            </h3>
            <table class="table table-secondary table-striped">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Feedback</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                  $testimonial_info = "SELECT * FROM testimonial WHERE status = 'Not Approved'";
                  $testimonial_info_run = mysqli_query($con, $testimonial_info);

                  if(mysqli_num_rows($testimonial_info_run) > 0){
                    while($result = $testimonial_info_run->fetch_assoc()){
                ?>
                <tr>
                  <th scope="row"><?= $result['id']; ?></th>
                  <td><?= $result['username']; ?></td>
                  <td><?= $result['email']; ?></td>
                  <td><?= substr($result['feedback'], 0,300); ?></td>
                  <td style="width:15%">
                        <button type="button" value="<?= $result['id'];?>" id="approve" class=" btn btn-outline-success">Approve</button>
                        <button type="button" value="<?= $result['id'];?>" id="deny" class=" btn btn-outline-danger">Deny</button>
                  </td>
                </tr>
                <?php
                    }
                  }
                ?>
              </tbody>
            </table>
          </section>
        </section>
      </section>
    </section>
    <!-- End of Display Testimonial Details -->

    <!-- Display Testimonial Details -->
    <section class="testimonial_details mt-5 mb-5">
      <section class="container">
        <section class="row">
          <section class="col-sm-12">
            <h3 class="pb-3">Approved Testimonials
            </h3>
            <table class="table table-secondary table-striped">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Feedback</th>
                  <th scope="col">Status</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                  $testimonial_info = "SELECT * FROM testimonial WHERE status = 'Approved'";
                  $testimonial_info_run = mysqli_query($con, $testimonial_info);

                  if(mysqli_num_rows($testimonial_info_run) > 0){
                    while($result = $testimonial_info_run->fetch_assoc()){
                ?>
                <tr>
                  <th scope="row"><?= $result['id']; ?></th>
                  <td><?= $result['username']; ?></td>
                  <td><?= $result['email']; ?></td>
                  <td><?= substr($result['feedback'], 0,300); ?></td>
                  <td><?= $result['status']; ?></td>
                </tr>
                <?php
                    }
                  }
                ?>
              </tbody>
            </table>
          </section>
        </section>
      </section>
    </section>
    <!-- End of Display Testimonial Details -->
    <!-- Javascript Links -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
    <!-- End of Javascript Links -->

    <!-- Custom Javascript -->
    <script>
        $(document).on('click', '#approve', function(){
            var player_id = $(this).val();
            window.location.href = "testimonial_action.php?approve="+player_id;
        });
        $(document).on('click', '#deny', function(){
            var player_id = $(this).val();
            window.location.href = "testimonial_action.php?deny="+player_id;
        });
    </script>
    <!-- End of Custom Javascript -->

</body>
</html>