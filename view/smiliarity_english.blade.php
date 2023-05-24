<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        /* Styling tambahan untuk sidebar dan main content */
        .sidebar {
            height: 100vh;
            background-color: #f8f9fa;
            padding: 20px;
        }

        .main-content {
            padding: 20px;
        }

        .navbar {
          color: white;
        }

        .footer {
            background-color: #f8f9fa;
            padding: 20px;
            color: white;
        }

    </style>

    <title>English Detector</title>
  </head>
  <body>

    <nav class="navbar navbar-secondary bg-secondary">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1">HOME</span>
    <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-success shadow" type="submit">Search</button>
      </form>
  </div>
</nav>


    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9 main-content">
               
               <center><h2>TEXT DETECTOR</h2></center>
               <br>
                <div class="container">
                    <center>
                    <div class="btn-group">
                    <button class="btn btn-primary shadow">ENGLISH</button>
                    <form method="POST" action="deteksi_bali.php">
                    <button class="btn btn-secondary shadow">INDONESIAN</button>
                    </form>
                    <form method="POST" action="deteksi_bali.php">
                    <button class="btn btn-secondary shadow">BALINESE</button>
                    </form>
                    </div>
                    </center>
                </div>

                <form method="POST" action="deteksi_bali.php">
                <div class="col container">
                    <div class="mb-3">
                        <label for="file1" class="form-label">File 1</label>
                        <input type="file" class="form-control" id="file1" name="file1">
                    </div>
                </div>
            

                <div class="col container">
                    <div class="mb-3">
                        <label for="file2" class="form-label">File 2</label>
                        <input type="file" class="form-control" id="file2" name="file2">
                    </div>
                </div>


                <div class="col-auto">
                    <center><button type="submit" class="btn btn-primary shadow">CHECK</button></center>
                </div>
                </form>

<?php  
//BACKEND
?>
        <br>
        <div class="container">
            <div class="card">
                <div class="card-body">
                <center><h5 class="card-title">RESULT</h5></center>
                <center><p class="card-text">SIMILIARITY : 0%</p></center>
                </div>
            </div>
        </div>


        </div>

            <div class="col-md-3 sidebar bg-light">
                <h2>Sidebar</h2>
                <div class="container">
                <div class="card">
                <div class="card-body">
                <h5 class="card-title">How To Use</h5>
                <p class="card-text">1. Upload files by clicking choose file.</p>
                <p class="card-text">2. Click "CHECK".</p>
                <p class="card-text">2. Similiarity of your files will be shown at the result.</p>
                </div>
                </div>
                </div>
                </div>
            </div>
    </div>


    <footer class="footer bg-secondary">
        <div class="container-fluid">
            <p>Hak Cipta &copy; 2023 - OKA</p>
        </div>
    </footer>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>