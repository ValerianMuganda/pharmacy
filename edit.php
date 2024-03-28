<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Drug</title>
</head>
<body>
    <h1>This is the page to edit drugs</h1>
    <?php
    $id = intval($_GET["id"]);

    $connection = new mysqli("localhost","root","","pharmacy",3307);
    $query = $connection->query("SELECT * FROM drugs WHERE id =$id");
    

    if($query->num_rows >0){
        while($drug=$query->fetch_assoc()){
            echo "<h2>Drug Details</h2>";
            $name = $drug['name'];
            $price = $drug['price'];
            $description = $drug['description'];  

            echo <<<FORM
            <form action="edit.php" method="POST">
            <input name="id" value=$id hidden>
            <label for="Newname">Newname</label>
            <input type="text" name="name" value=$name><br><br>
            <label for="Newprice">newPrice</label>
            <input type="text" name="price" value=$price><br><br>
            <label for="description">newDescription</label>
            <input type="text" name="description" value=$description><br><br>
            <input type="submit" value="Submit">
            </form>

            FORM;
        }
    }

    ?>



    <?php
    include("connection.php");
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $name= $_POST["name"];
        $price = $_POST["price"];
        $description = $_POST["description"];
        $id = $_POST["id"];

        $query = "UPDATE drugs SET name='$name', price='$price', description='$description' WHERE id='$id'";
        $result = $connection->query($query);
        if($result){
            echo "Data updated successfully";
        }else{
            echo "Data not inserted: " . $connection->error;
        }
    }
    ?>


</body>
</html>