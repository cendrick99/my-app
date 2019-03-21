<?php 
session_start();
include('back/data.php');
include('back/function.php');
$nbph=count($photo);
$nbcat=count($cat);
if(isset($_GET["ind"]))
{
    $_SESSION["cate"]=catego($_GET["ind"],$photo);
}
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
                <table>
                    <tr>
                <?php 
                $sto=$_SESSION["cate"];
                $a=count($sto);
                $cpt=0;
                for($i=0;$i<$a;$i++)
                { ?> 
                    <th>
                        <div class="car"><img src="images/<?php echo $photo[$sto[$i]]['peti']; ?>">
                            <h4><?php echo $photo[$sto[$i]]['name'] ; ?></h4>
                            <a href="photo.php?inda=<?php echo $sto[$i] ; ?> "><img src="images/icon_zoom.jpg" style=" padding-right:60px;"></a>
                        </div>
                    </th>
                    <?php $cpt++;
                    if($cpt==2)
                    { ?>  
                        <tr>
                    <?php $cpt=0;
                    } 
                } ?>
                    </tr>
                </table>
            </div>
            <div id="footer">
                <p>Copyright 2019</p>
            </div>
        </div>
    </body>
</html>