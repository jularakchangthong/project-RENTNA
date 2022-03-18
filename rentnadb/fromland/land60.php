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
        <h4 style="display: inline"><br>สถานที่ใกล้เคียง</h4>
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

        <h2>สภาพแวดล้อม :</h2>
        <br><input type="text" name="environment">

        <h2>ผังสีทำเล :</h2>

        <h2>คมนาคม :</h2>
        <br><input type="text" name="communications">

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
    <br><button onclick="document.location='land40.php'" >ย้อนกลับ</button>
    <button onclick="document.location='land100.php'" >ถัดไป</button>
</body>
</html>