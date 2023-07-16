<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title></title>
</head>
<style>
    #content {
        height: 80vh;
        overflow: auto;
        border: 1px solid black;
        margin-top: 1rem;
        display: flex;
        flex-direction: column;
        align-items: center;

    }

    #content-block {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    #content img {
        height: 8vh;
        border-radius: 3rem;
    }

    #content h6 {
        padding: 1rem;
        margin: 1rem;
        border-radius: 1rem;
    }

    #human-text {
        background-color: #1c4cef;
        color: white;
    }

    .bot {
        display: flex;
        flex-direction: row;
        align-items: center;
    }

    .bot-again {
        display: flex;
        flex-direction: row;
        align-items: center;
    }

    .human {
        display: flex;
        flex-direction: row;
        align-items: center;

    }

    .material-symbols-outlined {

        color: white;
        background-color: #1c4cef;
        font-variation-settings:
            'FILL' 0,
            'wght' 400,
            'GRAD' 0,
            'opsz' 48
    }
    #del-btn{
        
        color: white;
        background-color: #1c4cef;
        font-variation-settings:
            'FILL' 0,
            'wght' 400,
            'GRAD' 0,
            'opsz' 48
    }
    .get {
        padding: 1rem;
    }

    /* Style the input container */
    .input-container {

        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        margin-bottom: 15px;
    }

    /* Style the form icons */
    .icon {
        padding: 10px;
        min-width: 50px;
        text-align: center;
    }

    /* Style the input fields */
    #search {
        width: 40%;
        border-radius: 5rem;
        outline: none;
        border: none;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.6);
        padding: 1rem;
        outline: none;
    }

    #search:focus {
        border: 2px solid dodgerblue;
    }
</style>

</style>

<body>
    <nav class="navbar bg-primary  fixed-top mb-5" data-bs-theme="dark">
        <div class="container-fluid ">

            <a class="navbar-brand" href="#">
                <img src="images/—Pngtree—future intelligent technology robot ai_5766888.png" alt="Logo" width="70" height="60" class="d-inline-block align-text-top">
            </a>

            <a class="navbar-brand" href="#">Your Aida Here!</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Dark offcanvas</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Admin Panel</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Terms and Conditions</a>
                        </li>
                    </ul>
                    <form class="d-flex mt-3" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-success" type="submit">Search</button>

                    </form>
                </div>
            </div>
        </div>
    </nav>

    <!-- This is Chat area -->
    <div class="container text-center mt-5 p-5 " id="content">
        <!-- <div class="human">

        </div>
        <div class="bot-again">

        </div> -->
    </div>

    <div class="get container text-center ">
        <form action="" method="post">
            <div class="input-container">
               
                <button type="submit" id="s-btn1" style="border-radius:5rem;border:none;outline:none;">
                <i class="bi bi-trash3"id="del-btn"style="border-radius:5rem;padding:1.2rem;padding-top:1rem;"></i>
                    <!-- <span class="bi bi-trash3-outlined" style="border-radius:5rem;padding:1.2rem;padding-top:1rem" class="icon"></span> -->
                </button>
                <input type="search" placeholder="Ask Me Something" name="search" id="search">
                <button type="submit" id="s-btn" style="border-radius:5rem;border:none;outline:none;">
                    <span class="material-symbols-outlined" style="border-radius:5rem;padding:1.2rem;padding-top:1rem" class="icon">send</span>
                </button>
            </div>
        <h3 id="heading"></h3>
        </form>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            function loadchat() {
                $.ajax({
                    url: "loadchat.php",
                    type: "POST",
                    success: function(data) {
                        $("#content").html(data);
                    }
                });
            }
            loadchat(); 

            $("#s-btn").on("click", function() {
                var term = $("#search").val();
                
                $.ajax({
                    url: "queryhandler.php",
                    type: "POST",
                    data: {
                        search: term
                    },
                    success: function(data) {
                        $("#content").html(data);
                        loadchat();
                    }
                });
            })

            $("#s-btn1").on("click", function() {
                var term = $("#search").val();
                
                $.ajax({
                    url: "querydel.php",
                    type: "POST",
                    success: function(data) {
                        $("#content").html(data);
                        loadchat();
                    }
                });
            })

        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>

</html>