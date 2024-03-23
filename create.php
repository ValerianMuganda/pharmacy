<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creatin various drugs</title>
</head>
<body>
    <form action="create.php" method="post">
    <label for="name">name</label>
    <input type="text" name="name" ><br><br>
    <label for="price">price</label>
    <input  type="text" name="price" ><br><br>
    <label for="description">description</label>
    <input type="text" name="description" ><br><br>
    <input type="submit" value="submit">
</form>

    <?php
    include("connection.php");
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $name= $_POST["name"];
        $price = $_POST["price"];
        $description = $_POST["description"];

        $query = "INSERT INTO drugs (name,price,description) VALUES ('$name',$price,'$description')";
        $result = $connection->query($query);
        if($result){
            echo "Data inserted successfully";
        }else{
            echo "Data not inserted: " . $connection->error;
        }
    }
    ?>

    
</body>
</html>