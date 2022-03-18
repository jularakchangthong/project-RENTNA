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

        <h4 style="display: inline"><br>อาคาร :</h4>
        <input type="number" id="building" name="building" min="0" max="20">
        <h4 style="display: inline">ชั้นที่ให้ทำการเช่า :</h4>
        <input type="number" id="floor" name="floor" min="0" max="20">
        <h4 style="display: inline">จำนวนชั้นทั้งหมด :</h4>
        <input type="number" id="num_floor" name="num_floor" min="0" max="20">

        <br><h4 style="display: inline"><br>ห้องนอน :</h4>
        <input type="number" id="bed_room" name="bed_room" min="0" max="20">
        <h4 style="display: inline">ห้องน้ำ :</h4>
        <input type="number" id="bath_room" name="bath_room" min="0" max="20">
        <h4 style="display: inline">ห้องนั่งเล่น :</h4>
        <input type="number" id="kitchen_room" name="kitchen_room" min="0" max="20">

        <br><h4 style="display: inline"><br>ห้องครัว :</h4>
        <input type="number" id="living_room" name="living_room" min="0" max="20">
        <h4 style="display: inline">ที่จอดรถ :</h4>
        <input type="number" id="park_car" name="park_car" min="0" max="20">
        <h4 style="display: inline">ห้องสตูดิโอ :</h4>
        <input type="number" id="studio_room" name="studio_room" min="0" max="20">

        <h4>ทิศของระเบียง :</h4>
        <select name="direction" id="direction" class="selectpicker">
            <option value="north"><h3>ทิศเหนือ</h3></option>
            <option value="south"><h3>ทิศใต้</h3></option>
            <option value="east"><h3>ทิศตะวันออก</h3></option>
            <option value="west"><h3>ทิศตะวันตก</h3></option>
            <option value="Northeast"><h3>ทิศตะวันออกเฉียงเหนือ</h3></option>
            <option value="Southeast"><h3>ทิศตะวันออกเฉียงใต้</h3></option>
            <option value="Northwest"><h3>ทิศตะวันตกเฉียงเหนือ</h3></option>
            <option value="Southwest"><h3>ทิศตะวันตกเฉียงใต้</h3></option>
        </select>
        <h4><br>พื้นที่ใช้สอย(ตร.ม.) :</h4><br>
        <input type="text" id = "area_sqm" name="area_sqm">
        <h4><br>รหัสทรัพย์สิน :</h4><br>
        <input type="text" id = "id_property" name="id_property">
        <h4><br>สัญชาติที่ไม่สามารถทำการเช่าได้ :</h4><br>
    </form>
    <br><button onclick="document.location='condo20.php'" >ย้อนกลับ</button>
    <button onclick="document.location='condo60.php'" >ถัดไป</button>
</body>
</html>