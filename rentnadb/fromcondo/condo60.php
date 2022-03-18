<?php
    // Connect Database 
    require 'formlocation.php';
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
        
        <br><h4 style="display: inline"><br>สถานที่ใกล้เคียง</h4>
        <br><input type="checkbox" id="shopping" name="shopping" value="shopping">
        <label for="vehicle1"> ห้างสรรพสินค้า</label>
        <input type="checkbox" id="super" name="super" value="super">
        <label for="vehicle1"> ซุปเปอร์มาร์เก็ต</label>
        <input type="checkbox" id="hospital" name="hospital" value="hospital">
        <label for="vehicle1"> โรงพยาบาล</label>
        <br><input type="checkbox" id="school" name="school" value="school">
        <label for="vehicle1"> โรงเรียน</label>
        <input type="checkbox" id="airport" name="airport" value="airport">
        <label for="vehicle1"> สนามบิน</label>
        <input type="checkbox" id="university" name="university" value="university">
        <label for="vehicle1"> มหาวิทยาลัย</label>
        <br><input type="checkbox" id="ETC" name="ETC" value="ETC">
        <label for="vehicle1"> อื่นๆ</label>
        <input type="text" id = "ETC" name="ETC">

        <br><h4 style="display: inline"><br>สถานีรถไฟฟ้าใกล้เคียง</h4>
        <br><select name="lineBTS">
        <?php
            if ($resultbts = mysqli_query($ConnDB,$sqlBTS))
            {
            while($Recbts=mysqli_fetch_array($resultbts,MYSQLI_ASSOC))
            {
                
                $ID = $Recbts['BtsID'];
                $Name = $Recbts['NameTH'];
                echo "<option value=\"$Name\">$Name</option>";
            }
            }
        ?>
        </select>
        <select name="stationBTS">
        <?php
            if ($resultstation = mysqli_query($ConnDB,$sqlstation))
            {
            while($Recstation=mysqli_fetch_array($resultstation,MYSQLI_ASSOC))
            {
                
                $ID = $Recstation['BtsID'];
                $Name = $Recstation['LineStation'];
                echo "<option value=\"$Name\">$Name</option>";
            }
            }
        ?>
        </select><br>
        <br><select name="MRT">
            <?php
                if ($resultmrt = mysqli_query($ConnDB,$sqlMRT))
                {
                while($Recmrt=mysqli_fetch_array($resultmrt,MYSQLI_ASSOC))
                {
                    
                    $ID = $Recmrt['MrtID'];
                    $Name = $Recmrt['NameTH'];
                    echo "<option value=\"$Name\">$Name</option>";
                }
                }
            ?>
        </select>
        <select name="stationMRT">
        <?php
            if ($resultline = mysqli_query($ConnDB,$sqlline))
            {
            while($Recline=mysqli_fetch_array($resultline,MYSQLI_ASSOC))
            {
                
                $ID = $Recline['MrtID'];
                $Name = $Recline['LineStation'];
                echo "<option value=\"$Name\">$Name</option>";
            }
            }
        ?>
        </select>
    </form>
    <br><button onclick="document.location='condo40.php'" >ย้อนกลับ</button>
    <button onclick="document.location='condo80.php'" >ถัดไป</button>
</body>
</html>