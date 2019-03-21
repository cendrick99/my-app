<?php
function catego($ind,$tabph)
{
    $stock=array();
    $nb=count($tabph);
    $cpt=0;
    for($i=0;$i<$nb;$i++)
    {
        if($tabph[$i]['cat']==$ind)
        {
            $stock[$cpt]=$i;
            $cpt++;
        }
    }
    return $stock;
} 
/*function countpage($tabcat)
{
    $nb=count($tabcat);
    $cpt=0;
    while(nb>0)
    {
        $nb=$nb-4;
        $cpt++;
    }
    return $cpt;
}*/

function pagination($tabcat)
{
    $nb=count($tabcat);
    $nbpage=count($tabcat)/4;
    $tab;
    $k=0;
    if($nbpage>1)
    {
        for($i=0;$i<$nbpage;$i++)
        {
            for($j=0;$j<4;$i++)
            {
                $tab[$i][$j]=$tabcat[$k];
                $k++;
            }
        }
    } else{}
}
/*function createpage($tabcat)
{
    $nbpage=countpage($tabcat);
    $tabpage;
    for($i=0;$i<$nbpage;$i++)
    {
        for($j=0;$j<4;$j++)
        {
            $tabpage[$i][$j]=$tabcat[];
        }
    }
}*/

?>