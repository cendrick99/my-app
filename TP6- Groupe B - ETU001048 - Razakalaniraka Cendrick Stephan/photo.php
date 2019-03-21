<?php 
session_start();
include('back/data.php');
include('back/function.php');
$nbcat=count($cat);
$tab=$_SESSION["cate"];
$nb= count($tab);

?>
<! DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <title>Ktalogue</title>
    </head>
    <body>
        <div id="page">
            <div id="header">
                <a href="accueil.php"><img style=" padding-right:1100px; border-bottom-left-radius:20px;" src="images/icon_home1.jpg"></a>
                <h1> Catal !!!!!</h>
            </div>
            <div id="nav">
                <ul>
                    <?php
                    for($i=0;$i<$nbcat;$i++)
                    {   ?>
                        <li><div class="buton"><a style="color: #000000;" href="categorie.php?ind=<?php echo $i ; ?>"><?php echo $cat[$i]['name'] ;?></a></div></li> 
                        <hr>
                        <br>
                        <br>
                    <?php } ?>
                </ul>
            </div>
            <div id="content">
                <?php if($_GET["inda"]!=0){ ?>
                            <a style="float:left;" href="photo.php?inda=<?php echo $_GET["inda"]-1 ;?>"><img src="images/icon_prev0.jpg"></a>
                <?php } ?>
                <img style="padding-left:100px;" src="images/<?php echo $photo[$_GET["inda"]]['big']; ?>">
                <?php if($_GET["inda"]!=$nb-2){ ?>
                            <a style="float:right;" href="photo.php?inda=<?php echo $_GET["inda"]+1 ;?>"><img src="images/icon_next0.jpg"></a>
                <?php } ?>
            </div>
            <div id="footer">
                <p>Copyright 2019</p>
            </div>
        </div>
    </body>
</html>