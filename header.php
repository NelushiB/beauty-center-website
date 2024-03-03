<!DOCTYPE html>
<html lang="it-IT">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <meta name=”robots” content=”noindex,nofollow”>
   <meta name="author" content="Nelushi Bamunusinghe">
   <title>Home</title>
   <link rel="stylesheet" href="css/animate.css">
   <link rel="stylesheet" href="css/all.css">
   <link rel="stylesheet" href="css/style.css">
</head>

<body id="top-header">
   <header class="scroll-header">
      <div class="content">
         <div class="header">
            <a href="index.php" title="Vai alla pagina iniziale"><img src="img/logo.png" alt="logo" width="140"
                  height="64"></a>

            <nav class="nav">
               <ul class="menu">
                  <li class="<?php if($page == "home" ) echo "current"; ?>"><a href="index.php"
                        title="Vai alla pagina home">
                        Home</a>
                  </li>
                  <li class="<?php if($page == "about" ) echo "current"; ?>">
                     <a href=" chi-siamo.php" title="Vai alla pagina chi siamo">Chi siamo</a>
                  </li>
                  <li class="<?php if($page == "servizi" ) echo "current"; ?>">
                     <a href="servizi.php" title="Vai alla pagina trattamenti">Servizi</a>
                  </li>
                  <li class="<?php if($page == "blog" ) echo "current"; ?>">
                     <a href="blog.php" title="Vai alla pagina blog">Blog</a>
                  </li>
                  <li class="<?php if($page == "contatti" ) echo "current"; ?>">
                     <a href="contatti.php" title="Vai alla pagina contatti">Contatti</a>
                  </li>
                  <li>
                     <a href="#" title="cerca"><i class="fa-solid fa-magnifying-glass"></i></a>
                  </li>
               </ul>
            </nav>

            <div class="navbar">
               <span class="icon-bar-burger"></span>
               <span class="icon-bar-burger"></span>
               <span class="icon-bar-burger"></span>
            </div>
            <!--end navbar-->
         </div>
         <!--end header-->
      </div>
      <!--end content-->
   </header>