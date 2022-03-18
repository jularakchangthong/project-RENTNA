<?PHP
    $DBHost     = "localhost" ;
    $DBName     = "rentnadb";
    $DBUserName = "root" ;
    $DBUserPwd  = "" ;
    
    $ConnDB = mysqli_connect($DBHost,$DBUserName,$DBUserPwd) ; //ใช้connaectกับdata base//   
    if(!$ConnDB)
        { 
            echo mysqli_connect_error();
            die('Could not connect Database Server, Please contact administrator.');
        }
	
    // mysqli_select_db($DBName,$ConnDB) or die('Could not found database, Please contact administrator.') ;
    mysqli_select_db($ConnDB, $DBName) or die('Could not found database, Please contact administrator.');
    mysqli_set_charset($ConnDB, "utf8"); 

    echo"Connect Database Complete. ";
    echo"<p>"
    
?>
