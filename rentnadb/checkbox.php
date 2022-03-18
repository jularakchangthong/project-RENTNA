<?php
    // Connect Database 
    require 'include/ConnModule.php';

    $sqlnat = "SELECT * FROM tb_nationality";
    $result = $ConnDB->query($sqlnat);
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
        <table>
        <?php
        while ($row = $result->fetch_object()) {
        ?>
            <tr>
                <td><input type="checkbox" name="nationality" value="<?php echo $row->NationID; ?>"/></td>
                <td><?php echo $row->NationID; ?></td>
                <td><?php echo $row->NameTH; ?></td>
            </tr>
        <?php
        }
        ?>
        </table>
    </form>
<input type="hidden" name="ispostback" value="true">
<br><button onclick="document.location='checkbox.php'" >กลับไปหน้าหลัก</button>
<br><button onclick="document.location='checkbox.php'" >บันทึก</button>
</body>
</html>