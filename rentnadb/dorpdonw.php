<?php
    // Connect Database 
    require 'include/ConnModule.php';
    $Nat = '';
    if(isset($_POST['Nat']))
    {
        $Nat = $_POST['Nat'];
    }

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
    <h4>ประเทศ :</h4>
    <select name="Nat">
     <?php
      if ($resultCus = mysqli_query($ConnDB,$sqlnat))
      {
        while($RecCus=mysqli_fetch_array($resultCus,MYSQLI_ASSOC))
        {
            
            $ID = $RecCus['NationID'];
            $Name = $RecCus['NameTH'];
            echo "<option value=\"$Name\">$Name</option>";
        }
      }
     ?>
        <input type="hidden" name="ispostback" value="true">
        <br><button onclick="document.location='/rentnadb/categories.html'" >กลับไปหน้าหลัก</button>
</form>
</body>
</html>