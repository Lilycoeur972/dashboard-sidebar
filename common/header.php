<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ************* CSS **************** -->
    <link rel="stylesheet" href="css/styles.css">

    <!-- **********Boxicons CSS ************** -->
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet">


    <title> Admin: Nature et Moi </title>
</head>
<body>
    <nav class="sidebar">
        <header>
           <div class="image-text">
               <span class="image">
                 <img src="images/logo.png" alt="logo">  
               </span>


              <div class="text header-text">
                   <span class="name">CodingLab</span>
                   <span class="profession">web developer</span>
               </div>
           </div> 
           <i class="bx bx-chevron-right toggle"></i>

            <!-- <box-icon name='chevron-right' type='solid' ></box-icon> -->

        </header> 

       <div class="menu-bar">
            <div class="menu">
                <li class="search-box">
                    <i class="bx bx-search icon"></i>
                    <input type="search" placeholder="Search...">
                </li>
                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="index.php">
                            <i class="bx bx-home-alt icon" ></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="index.php?mod=editer">
                            <i class="bx bx-bar-chart-alt-2 icon" ></i>
                            <span class="text nav-text">Ajouter</span>
                        </a>
                    </li>
                    
                </ul> 
            </div>
            
            <div class="bottom-content">
                <li class="">
                    <a href="index.php">
                        <i class="bx bx-log-out icon" ></i>
                        <span class="text nav-text">Déconnexion</span>
                    </a>
                </li>

                <li class="mode">
                    <div class="moon-sun">
                        <i class="bx bx-moon icon moon" ></i>
                        <i class="bx bx-sun icon sun" ></i>
                    </div>
                    <span class="mode-text text">Dark Mode</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>

            </div>
        </div>
    </nav>