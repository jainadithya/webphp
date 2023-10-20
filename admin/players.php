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
                      <a class="nav-link active" href="players.php">Add / Edit / Delete Players</a>
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

    <!-- Display User Details -->
    <section class="user_details mt-5 mb-5">
      <section class="container">
        <section class="row">
          <section class="col-sm-12">
            <h3 class="pb-3">Players
                <button type="button" class="float-end btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Add Players
                </button>
            </h3>
            <table class="table table-secondary table-striped">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Player Image</th>
                  <th scope="col">Player Name</th>
                  <th scope="col">Player Role</th>
                  <th scope="col">Player Details</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                  $player_info = "SELECT * FROM player_info";
                  $player_info_run = mysqli_query($con, $player_info);

                  if(mysqli_num_rows($player_info_run) > 0){
                    while($result = $player_info_run->fetch_assoc()){
                ?>
                <tr>
                  <th scope="row"><?= $result['id']; ?></th>
                  <td><img src="../<?= $result['src']; ?>" width="70"></td>
                  <td><?= $result['name']; ?></td>
                  <td><?= $result['role']; ?></td>
                  <td><?= substr($result['details'], 0,200); ?></td>
                  <td style="width:15%">
                        <button type="button" value="<?= $result['id'];?>" id="editPlayerBtn" class=" btn btn-outline-secondary">Edit</button>
                        <button type="button" value="<?= $result['id'];?>" id="deletePlayerBtn" class=" btn btn-outline-danger">Delete</button>
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
    <!-- End of Display User Details -->

    <!-- Add User Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form action="add_player.php" method="POST">
                    <div class="row g-3">
                        <div class="col-sm-12">
                            <label for="playername" class="form-label">Player Name</label>
                            <input type="text" class="form-control" name="playername" id="playername" placeholder="Player Name">
                        </div>
                        <div class="col-sm-12">
                            <label for="playerrole" class="form-label">Player Role</label>
                            <input type="text" class="form-control" name="playerrole" id="playerrole" placeholder="Player Role">
                        </div>
                        <div class="col-sm-12">
                            <label for="playerdetails" class="form-label">Player Details</label>
                            <textarea type="text" class="form-control" name="playerdetails" id="playerdetails" placeholder="Player Details"></textarea>
                        </div>
                        <div class="col-12">
                            <button type="submit" name="add_player" class="btn btn-danger">Add Player</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>
    <!-- End of Add User Modal -->

    <!-- Javascript Links -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
    <!-- End of Javascript Links -->

    <!-- Custom Javascript -->
    <script>
        $(document).on('click', '#deletePlayerBtn', function(){
            var player_id = $(this).val();
            window.location.href = "delete_player.php?player_id="+player_id;
        });
        $(document).on('click', '#editPlayerBtn', function(){
            var player_id = $(this).val();
            window.location.href = "edit_players.php?player_id="+player_id;
        });
    </script>
    <!-- End of Custom Javascript -->

</body>
</html>