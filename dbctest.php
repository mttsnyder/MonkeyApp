<?php
/**
 * Created by PhpStorm.
 * User: Matt
 * Date: 7/18/2017
 * Time: 12:49 PM
 */

require "DBC.php";

$test = new DBC();
$q1="SELECT * FROM Balances";

$sql=$test->query($q1);

while ($results=$sql->fetch())
{$U = json_encode($results);
echo $U;}


?>