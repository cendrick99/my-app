<?php 
session_start();
include('back/data.php');
include('back/function.php');
$nbcat=count($cat);
$nbph=count($photo);
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
                <br>
                <h1> Catalogue de photos</h1>
            </div>
            <div id="nav">
                <ul>
                    <?php for($i=0;$i<$nbcat;$i++)
                    { ?>
                       <li><div class="buton"><a  style="color: #000000;" href="categorie.php?ind=<?php echo $i ; ?>"><?php echo $cat[$i]['name'] ;?></a></div></li> 
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
                $cpt=0;
                for($i=0;$i<$nbcat;$i++)
                { ?>
                    <th>
                        <div class="car">
                            <a style="color: #000000;" href="categorie.php?ind=<?php echo $i ; ?>"><img src="images/<?php echo $cat[$i]['img'] ; ?>"></a>
                            <a style="color: #000000;" href="categorie.php?ind=<?php echo $i ; ?>"><h4><?php echo $cat[$i]['name'] ; ?></h4></a>
                        </div>
                    </th>
                        <?php $cpt++;
                            if($cpt==3)
                            { ?>  
                                <tr>
                            <?php $cpt=0;
                            } ?>        
                <?php
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