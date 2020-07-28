  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <form method="post" action="<?php $_SERVER["PHP_SELF"];?>">
    <h2>Circle</h2>
    Color:<input type="text" name="color" ><br><br>
    Fill: 
        <input type="radio" name="fill"  value="True">True
        <input type="radio" name="fill"  value="False">False<br><br>
    Radius:<input type="text" name="radius" ><br><br>
    <input type="submit" name="submit" value="Submit">
    </form>
    <?php include 'shape.php';
    
        
    if (isset($_POST['submit']))
    {
        
          $color =$_POST["color"];
          $fill = $_POST["fill"];
          $radius=$_POST["radius"];

          

          $circle=new Circle($radius);
          $circle->set_color($color);
          $circle->set_fill($fill);
          $circle->get_color($color);
          $circle->get_fill($fill);
          $circle->getArea();
          $circle->getPerimeter();
          $circle->Info();

    }
  ?>
</body>
</html>