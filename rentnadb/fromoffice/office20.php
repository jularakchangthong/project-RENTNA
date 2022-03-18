<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ประกาศ</h1>
    <input type="radio" name="announcer_status" value="owner_propperty">เจ้าของทรัพย์<br>
    <input type="radio" name="announcer_status" value="agent_know">Agentรู้จักกับเจ้าของทรัพย์โดยตรง
    <input type="radio" name="announcer_status" value="agent_unknow">Agentไม่ได้รู้จักกับเจ้าของทรัพย์โดยตรง<br>
    <h2>ชื่อสถานที่ :</h2>
    <br><input type="text" name="name_property">
    <h2><br>ชื่อตึก :</h2>
    <br><input type="text" name="name_building">
    <h2><br>รายละเอียด :</h2> 
    <br><textarea name="detail_property" cols="40" rows="4"></textarea>
    <br><button onclick="document.location='/rentnadb/categories.html'" >กลับไปหน้าหลัก</button>
    <button onclick="<?php ?>" >ถัดไป</button>
</body>
</html>