<?php
  $hostname = "localhost";
  $db = "rentnadb";
  $Username="root";
  $Password="";

  $conn = new PDO("mysql:host=$hostname;dbname=$db",$Username,$Password);
  $sql = "SELECT NameTH FROM tb_nationality";
  /*try
  {
      $stmt=$conn->prepara($sql);
      $stmt->execute();
      $results->$stmt->fetchAll();
  }
  catch(Exception $ex)
  {
      echo($ex->getMessage());
  }*/
  $result = $conn->query($sql);
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.14/css/bootstrap-multiselect.css" type="text/css">
    <title>Hello, world!</title>
  </head>
  <body>
    
    <h1>Hello, world!</h1>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script sre="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.14/js/bootstrap-multiselect.js"></script>
    <script type="text/javascript">
      $(function(){
        $('$nationality').multiselect({

          includeSelectAllOption : true;
          
        });
      });
    </script>
    <label>Please Select Country :</label>
    <select id="nationality" multiple="multiple">
        <?php foreach ($result as $output) {?>
       <option>
           <?php echo $output["NameTH"]?>
       </option> 
       <?php }?>
    </select>
  </body>
</html>