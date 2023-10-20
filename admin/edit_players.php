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
                      <a class="nav-link" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="user.php">Add / Edit / Delete User</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Add / Edit / Delete News</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" href="#">Add / Edit / Delete Players</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Approve / Deny Testimonials</a>
                    </li>
                  </ul>
                </section>
              </section>
            </section>
        </nav>
    </header>
    <!-- End of Navigation Panel -->

    <section class="edit_form mb-5 mt-5">
        <section class="container">
            <section class="row">
                <h3 class="mb-4">Edit Player</h3>
                <?php
                    $id = $_GET["player_id"];
                    $update_query = "SELECT * FROM player_info WHERE id = '$id'";
                    $execute = mysqli_query($con,$update_query);
                    if($execute){
                        $player_data = mysqli_fetch_array($execute);
                ?>
                <form action="update_players.php" method="POST">
                    <div class="row g-3">
                        <div class="col-sm-12">
                            <input hidden type="text" value="<?= $player_data['id'];?>" class="form-control" name="user_id" id="user_id">
                        </div>
                        <div class="col">
                            <input type="text" value="<?= $player_data['name'];?>" class="form-control" name="playername" id="playername" placeholder="Player Name">
                        </div>
                        <div class="col">
                            <input type="text" value="<?= $player_data['role'];?>" class="form-control" name="playerrole" id="playerrole" placeholder="Player Role">
                        </div>
                        <div class="col-sm-12">
                            <input type="text" value="<?= $player_data['details'];?>" class="form-control" name="playerdetails" id="playerdetails" placeholder="Player Details">
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-warning">Update Player</button>
                        </div>
                    </div>
                </form>
                <?php
                    }
                ?>
            </section>
        </section>
    </section>

    <!-- Javascript Links -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
    <!-- End of Javascript Links -->


</body>
</html>