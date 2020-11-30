<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
        crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Keto Restaurant</title>
</head>

<body data-spy="scroll" data-target="#main-nav" id="home">
    <nav class="navbar navbar-expand-sm navbar-light" id="main-nav">
    <div class="container">
        <a href="index.html" class="navbar-brand"><img src="img/logo.png" alt="logo"></a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="index.php" class="nav-link text-white">Home</a>
                </li>
                <li class="nav-item">
                    <a href="index.php" class="nav-link text-white">About</a>
                </li>
                <li class="nav-item">
                    <a href="index.php" class="nav-link text-white">Info</a>
                </li>
                <li class="nav-item">
                    <a href="contact.php" class="nav-link text-white">Contact</a>
                </li>
            </ul>
        </div>
    </div>
    </nav>

    
    <!-- HOME SECTION -->
    <header id="home">
        <div class="home-inner container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="card mb-4">
                        <div class="card-title">
                            <h3 class="text-center pt-3">Contact Us</h3>
                        </div>
                        <div class="card-body">
                            <form>
                                <input type="text" name="name" class="form-control mb-3" placeholder="Name">
                                <!-- <span class="error"><?= $name_error ?></span> -->
                                <input type="number" name="phone" class="form-control mb-3" placeholder="Enter your phone number">
                                <!-- <span class="error"><?= $phone_error ?></span> -->
                                <input type="email" name="email" class="form-control mb-3" placeholder="Email">
                                <!-- <span class="error"><?= $email_error ?></span> -->
                                <textarea class="form-control mb-3" name="message" placeholder="Enter your messages here!"></textarea>
                                <a style="background-color: #49176d;" class="btn w-100 text-white">Send</a>
                            </form>
                        </div>
                    </div>
                </div>    
            </div>        
        </div>
    </header>


    <!-- FOOTER -->
    <footer id="main-footer" style="background: #49176d;">
        <div class="container">
        <div class="row">
            <div class="col text-center py-4">
            <img src="img/logo.png" alt="">
            <p class="text-white">Copyright &copy;
                <span id="year"></span>
            </p>
            </div>
        </div>
        </div>
    </footer>

    <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
        crossorigin="anonymous"></script>
</body>

</html>