<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script src="js/bootstrap.min.js"></script>
<script src="jquery.js"></script>
<body>


    <nav class="navbar navbar-expand-lg bg-primary">

        <div class="container-fluid">
            
            <a href="" class="text-white navbar-brand fs-3 fw-bold" style="text-decoration: none;">Logo</a>

            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">Click here</button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">

                    <li class="nav-item">
                        <a href="#" class="nav-link text-white">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-white">Contact</a>
                    </li>
                    
                    <li class="nav-item">
                        <a href="#" class="nav-link text-white">About</a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link text-white">Service</a>
                    </li>
                </ul>
            </div>

        </div>

    </nav>

    <?php 

    $con = mysqli_connect('localhost','root','','proj') or die();

    $query = mysqli_query($con , "SELECT * FROM `image`");

    if ($query) {
        // code...
?>

    <div id="carouselExample" class="carousel slide position-relative">
        <div class="carousel-inner">

            <?php
            foreach ($query as $key => $value) {
            // code...

            if ($value['id'] == '1') {
                // code...
                ?>
            <div class="carousel-item active">
                <img src="<?=$value['img'];?>" class="d-block w-100" alt="">
            </div>
                <?php
                        }else{

                            echo '<div class="carousel-item ">
                <img src="'.$value['img'].'" class="d-block w-100" alt="">
            </div>';
                        }
                    }
                }
            ?>
            

    
        </div>

        <button class="carousel-control-prev" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </button>

        <button class="carousel-control-next" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>

        </button>


    </div>

    <div class="container">
        <div class="card position-absolute p-3 bg-white" style="top: 80px; right: 40px;">
            <h4>Form Details</h4>
            <form class="form" method="post" action="submit.php" enctype="multipart/form-data">
                <input type="text" class="form-control" name="name" placeholder="Name">
                <br>
                <input type="email" class="form-control" name="email" placeholder="Email">
                <br>
                <input type="file" class="form-control" name="file">

                <br><br>

                <input type="submit" name="submit" class="btn btn-warning" value="submit">
            </form>

        </div>
    </div>

</body>
</html>