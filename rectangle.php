  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="<?php $_SERVER["PHP_SELF"];?>">
    <h2>Rectangle</h2>
    Color:<input type="text" name="color" ><br><br>
    Fill: 
        <input type="radio" name="fill"  value="True">True
        <input type="radio" name="fill"  value="False">False<br><br>
    Width:<input type="text" name="width" ><br><br>
    Height:<input type="text" name="height" ><br><br>
    <input type="submit" name="submit" value="Submit">
    </form>

    <?php include 'shape.php';

        if (isset($_POST['submit']))
        {
            
            $color =$_POST["color"];
            $fill = $_POST["fill"];
            $width=$_POST["width"];
            $height=$_POST["height"];

            

            $rectangle=new Rectangle($width,$height);
            $rectangle->set_color($color);
            $rectangle->set_fill($fill);
            $rectangle->get_color($color);
            $rectangle->get_fill($fill);
            $rectangle->getArea();
            $rectangle->getPerimeter();
            $rectangle->Info();

        }
        

    ?>


</body>
</html>