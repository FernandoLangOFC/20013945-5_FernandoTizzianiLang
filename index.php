<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css"/>
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</head>
<body style="background-image: linear-gradient(to left, rgb(255, 255, 255) , rgb(0, 194, 228)) !important;">
    <header>
      <img src = 'images/logo.png' alt="logo" style="position: absolute; -webkit-filter: drop-shadow(5px 5px 5px #222 );filter: drop-shadow(5px 5px 5px #222);"/>
      <div class="dadada d-flex justify-content-center" style="background-image: linear-gradient(to right,  rgb(0, 194, 228) , rgb(255, 255, 255) ) !important;">
        <nav class="navbar navbar-expand-lg text-white  " >
            <ul class="navbar-nav mr-auto  ">
              <li class="nav-item active"><a class="navbar-brand" href="index.php?page=pages/home.php">Home</a></li>  
              <li class="nav-item active"><a class="navbar-brand" href="index.php?page=pages/contact.php">Contato</a></li> 
              <li class="nav-item active"><a class="navbar-brand" href="index.php?page=pages/location.php">Localização</a></li>
              <li class="nav-item active"><a class="navbar-brand" href="index.php?page=pages/about.php">Quem Somos</a></li>
            </ul>
        </nav>
      </div>
    </header>
    <main >
    
      <div id = 'container' class="d-flex justify-content-center" style="height: 80vh">

           <?php
               if(isset($_GET["page"]) && !empty($_GET["page"])){
                   $page = $_GET["page"];

                   include($page);
               }
               else{
                   include("pages/home.php");
               }
           ?>
        </div>

    </main>
    <footer class="mt-auto bg-dark " style="color: white; margin-bottom: 0px; padding: 20px;">
      <h5 class="text-center">Fernando Tizziani Lang - RA: 20013945-5</h5>
      <p class="text-center"> Curso: Sistemas para internet </p>
      <p class="text-center"> Disciplina: Programação backend I </p>
      <p class="text-center"> Atividade: Mapa </p>
      
    </footer>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>