<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 10/11/2018
 * Time: 20:12
 */
$nbr=rand(0,63);
$tab1=[];
$tab2=[];
$tab3=[];
$tab4=[];
for ($i=0;$i<$nbr;$i++)
{array_push($tab1,rand(0,63));
//echo $tab1[$i]."<br>";
}
//echo "<br> **************************** <br>";
for ($j=0;$j<$nbr;$j++)
{
    array_push($tab2,($tab1[$j]/10));
    //echo $tab2[$j]."<br>";
    }

//echo "<br> **************************** <br>";

for ($l=0;$l<$nbr;$l++)
{array_push($tab4,sin($tab2[$l]));
    //echo $tab4[$l]."<br>";
    }
//echo "<br> **************************** <br>";

$tab3 = array_combine($tab2 , $tab4 );
/*
foreach ($tab3 as $key => $value) {
    echo "X: ". $key . ", Sinus(X) : ". $value . "<br/ >";

}
*/
echo "<table  border=1><tr> <th> X</th> <th>Sinus(X) </th></tr>";
foreach($tab3 as $cle =>$valeur){

    echo "<tr><td>".$cle."</td><td>".$valeur."</td></tr>";

}


echo "</table>";

?>