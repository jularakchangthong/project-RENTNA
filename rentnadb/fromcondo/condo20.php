<?php
    // Connect Database 
    require '../include/ConnModule.php';     
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="/rentnadb/product-update.php" method="POST">
    <div>
        <div>
            <h1>ประกาศ</h1>
        <input type="radio" name="announcer_status" value="owner_propperty">เจ้าของทรัพย์<br>
        <input type="radio" name="announcer_status" value="agent_know">Agentรู้จักกับเจ้าของทรัพย์โดยตรง
        <input type="radio" name="announcer_status" value="agent_unknow">Agentไม่ได้รู้จักกับเจ้าของทรัพย์โดยตรง<br>
        </div>
        <div>
            <h2>ชื่อโครงการ :</h2>
            <br><input type="text" name="name_property">
        </div>
        <div>
            <h2><br>รายละเอียด :</h2> 
        <br><textarea name="detail_property" cols="40" rows="4"></textarea>
        </div>
    </div>
</form>
    <br><button onclick="document.location='/rentnadb/categories.html'" >กลับไปหน้าหลัก</button>
        <button onclick="document.location='condo40.php'" >ถัดไป</button>
</body>
</html>