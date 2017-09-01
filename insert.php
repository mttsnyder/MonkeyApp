<?php
/**
 * Created by PhpStorm.
 * User: Matt
 * Date: 8/19/2017
 * Time: 2:05 PM
 *
 *
 */
require "DBC.php";

$amt=$_POST['amount'];

$test = new DBC();

$q1="SELECT * FROM Balances";

$sql=$test->query($q1);

while ($results=$sql->fetch())
{$magb=$results['MagBalance'];
 $lucb=$results['LucBalance'];
};
$upmagb = $magb+$amt;
$uplucb = $lucb + $amt;
$q= "UPDATE Balances set MagBalance= $upmagb, LucBalance=$uplucb WHERE id>0";

$sql=$test->query($q);
if ($sql)
{echo $upmagb;}
else
{echo "There was... some unpleasantness...";};


?>