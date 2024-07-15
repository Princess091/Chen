<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Bootstrap CSS Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.0/css/all.min.css" integrity="sha512-3PN6gfRNZEX4YFyz+sIyTF6pGlQiryJu9NlGhu9LrLMQ7eDjNgudQoFDK3WSNAayeIKc6B8WXXpo4a7HqxjKwg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- CSS File -->
     <link rel="stylesheet" href="../style.css">

</head>
<body>
    <!-- Navbar -->
     <div class="container-fluid p-0">
        <!-- First Child --> 
        <nav class="navbar navbar-expand-lg navbar-light bg-primary">
            <div class="container-fluid">
                <img src="../pictures/Logo1.png" alt="" class="logo">
                <nav class="navbar navbar-expang-lg">
                    <ul class="nav-item">
                        <a href="" class="nav-link text-light">Welcome Guest</a>
                    </ul>
                </nav>
            </div>
        </nav>

        <!-- Second Child -->
         <div class="bg-light">
            <h3 class="text-center p-2">Manage Details</h3>
         </div>

         <!-- Third Child -->
          <div class="row">
            <div class="col-md-12 bg-dark p-1 d-flex
            align-items-center">
                <div class="px-3">
                    <a href="#"><img src="../pictures/sneakers7.jpg" alt="" class="admin_image p-1"></a>
                    <p class="text-light text-center">Chen</p>
                </div>
                 <div class="button text-center">
                    <button class="my-3"><a href="" class="nav-link text-light bg-primary my-1">Insert Products</a>
                    </button>
                    <button><a href="" class="nav-link text-light bg-primary my-1">View Products</a>
                    </button>
                    <button><a href="index.php?insert_category" class="nav-link text-light bg-primary my-1">Insert Categories</a>
                    </button>
                    <button><a href="" class="nav-link text-light bg-primary my-1">View Categories</a>
                    </button>
                    <button><a href="index.php?insert_brands" class="nav-link text-light bg-primary my-1">Insert Brands</a>
                    </button>
                    <button><a href="" class="nav-link text-light bg-primary my-1">View Brands</a>
                    </button>
                    <button><a href="" class="nav-link text-light bg-primary my-1">All Orders</a>
                    </button>
                    <button><a href="" class="nav-link text-light bg-primary my-1">All Payments</a>
                    </button>
                    <button><a href="" class="nav-link text-light bg-primary my-1">List Users</a>
                    </button>
                    <button><a href="" class="nav-link text-light bg-primary my-1">Logout</a>
                    </button>
                </div>
            </div>
          </div>

    <!-- Fourth child -->
    <div class="container my-3 ">
        <?php
        if(isset($_GET['insert_category'])){
            include('insert_categories.php');
        }
        
        if(isset($_GET['insert_brands'])){
            include('insert_brands.php');
        }
        ?>
    </div>


    <!-- Last child -->
    <div class="bg-primary p-3 text-center text-light footer">
    <p>All rights reserved © Designed by Aisha & Princess - 2024</p>
    </div>

</div>

<!-- Bootstrap JS Link-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>