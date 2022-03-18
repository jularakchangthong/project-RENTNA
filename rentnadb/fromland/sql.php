<?php
    // Connect Database 
    require '../include/ConnModule.php';
    $tambon = '';
    $amphoe = '';
    $city = '';
    $BTS = '';
    $stationBTS = '';
    $MRT = '';
    $stationMRT = '';
    if(isset($_POST['tambon,amphoe,city,BTS']))
    {
        $districts = $_POST['tambon'];
        $amphures = $_POST['amphoe'];
        $provinces = $_POST['city'];
        $BTS = $_POST['BTS'];
        $stationBTS = $_POST['stationBTS'];
        $MRT = $_POST['MRT'];
        $stationMRT = $_POST['stationMRT'];
    }

    $sqldis = "SELECT * FROM tb_districts";
    $sqlap = "SELECT * FROM tb_amphures";
    $sqlj = "SELECT * FROM tb_provinces";
    $sqlBTS = "SELECT * FROM tb_bts";
    $sqlstation = "SELECT DISTINCT LineStation FROM tb_bts";
    $sqlMRT = "SELECT * FROM tb_mrt";
    $sqlline = "SELECT DISTINCT LineStation FROM tb_mrt";
    $resultdis = $ConnDB->query($sqldis);
    $resultap = $ConnDB->query($sqlap);
    $resultj = $ConnDB->query($sqlj);
    $resultBTS = $ConnDB->query($sqlBTS);
    $resultstation = $ConnDB->query($sqlstation);
    $resultMRT = $ConnDB->query($sqlMRT);
    $resultline = $ConnDB->query($sqlline);
?>