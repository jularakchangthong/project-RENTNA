<?php
    // Connect Database 
    require '../include/ConnModule.php'; 

    $sqlnat = "SELECT * FROM tb_nationality";
    $result = $ConnDB->query($sqlnat);
?>
<!DOCTYPE html>
<html>
<head>
<title>Nationality</title>
</head>
<body>
<form method="post" action="">
        <br><button onclick="document.location='/rentnadb/categories.html'" >กลับไปหน้าหลัก</button>
</form>
</body>
</html>