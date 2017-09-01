<?php

/**
 * Created by PhpStorm.
 * User: Matt
 * Date: 7/16/2017
 * Time: 12:49 PM
 */
class DBC
{
    protected $host = 'http://www.holisticanalyticswnc.com';
    protected $charset = 'utf8';
    protected $UN="mttdb";
    protected $Pass="P@ssw0rd";
    protected $database="MonkeyApp";
    protected $opt = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
        ];

    public function connect () {

        $dsn = "mysql:host=$this->host;dbname=$this->database;charset=$this->charset";
                $pdo = new PDO($dsn, $this->UN, $this->Pass, $this->opt);

                /*if($pdo)
               {echo "connection successful";}
                else {
                    echo "connection unsuccessful";
                }*/
        return $pdo;
    }

    public function query ($q){
        $stmt = DBC::connect()->query($q);
        return $stmt;

    }

    public function process($q){
        $star = DBC::query($q)->fetchAll();
        return $star;
    }
    public function echotoscreen($star){

        while ($star){
            echo $star["id"];
        }
    }
}


?>
