<?php
    // Connect Database 
    require 'sql.php';     
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        <h1>ข้อมูลโครงการ</h1>
        <h2><br>รายละเอียด</h2>
        <h3><br>ระยะเวลาให้เช่าขั้นต่ำ :</h3>
        <select name="period" id="period">
            <option value="6month"><h3>6 เดือน</h3></option>
            <option value="1y"><h3>1 ปี</h3></option>
            <option value="2y"><h3>2 ปี</h3></option>
            <option value="3y"><h3>3 ปี</h3></option>
            <option value="over"><h3>3 ปีขึ้นไป</h3></option>
        </select><br>
        <h4>ที่ตั้ง</h4>
        <h4 style="display: inline">ซอย :</h4>
        <input type="text" id = "alley" name="alley">
        <h4 style="display: inline">ถนน :</h4>
        <input type="text" id = "road" name="road">
        <h4 style="display: inline">แขวง/ตำบล :</h4>
        <select name="tambon">
        <?php
            if ($resultdis = mysqli_query($ConnDB,$sqldis))
            {
            while($Recdis=mysqli_fetch_array($resultdis,MYSQLI_ASSOC))
            {
                
                $ID = $Recdis['DisID'];
                $Name = $Recdis['NameTH'];
                echo "<option value=\"$Name\">$Name</option>";
            }
            }
        ?>
        </select><br>
        <h4 style="display: inline"><br>เขต/อำเภอ :</h4>
        <select name="amphoe">
        <?php
            if ($resultap = mysqli_query($ConnDB,$sqlap))
            {
            while($Recap=mysqli_fetch_array($resultap,MYSQLI_ASSOC))
            {
                
                $ID = $Recap['DisID'];
                $Name = $Recap['NameTH'];
                echo "<option value=\"$Name\">$Name</option>";
            }
            }
        ?>
        </select>
        <h4 style="display: inline">จังหวัด :</h4>
        <select name="city">
        <?php
            if ($resultj = mysqli_query($ConnDB,$sqlj))
            {
            while($Recj=mysqli_fetch_array($resultj,MYSQLI_ASSOC))
            {
                
                $ID = $Recj['ProvinceID'];
                $Name = $Recj['NameTH'];
                echo "<option value=\"$Name\">$Name</option>";
            }
            }
        ?>
        </select>
        
        <br><h4 style="display: inline"><br>ลิงค์ตำแหน่งที่ตั้งโดย google Maps :</h4>
        <input type="text" id = "location_link" name="location_link">
        
        <br><h4 style="display: inline"><br>เนื้อที่ :</h4>
        <input type="number" id="area_rai" name="area_rai" min="0" max="20">
        <h4 style="display: inline">ไร่</h4>
        <input type="number" id="area_agan" name="area_agan" min="0" max="20">
        <h4 style="display: inline">งาน</h4>
        <input type="number" id="area_wah" name="area_wah" min="0" max="20">
        <h4 style="display: inline">ตารางวา</h4>

        <h4><br>รหัสทรัพย์สิน :</h4>
        <input type="text" id = "id_property" name="id_property">
        
        <h4><br>สัญชาติที่ไม่สามารถทำการเช่าได้ :</h4><br>
    </form>
    <br><button onclick="document.location='land20.php'" >ย้อนกลับ</button>
    <button onclick="document.location='land60.php'" >ถัดไป</button>
</body>
</html>