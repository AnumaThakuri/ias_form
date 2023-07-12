<?php
        session_start();
        
        define("HOSTNAME","localhost");
        define("USERNAME","root");
        define("PASSWORD","");
        define("DBNAME","ias_atiform");
    
        $con = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DBNAME);
        
        if(!$con){
            die("connection failed". mysqli_connect_error());
        }else{
            //  echo "connected";
        }
?>