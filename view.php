<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Drug</title>
</head>
<body>
    <h1>This is the page to show drug details</h1>
    <p>Testing</p>
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

            echo "Name: " . "<b>$name</b> <br>";
            echo "price: " . "<b>TZS $price</b> <br>";
            echo "Description: " . "<b> $description</b> <br>";
        }
    }

    ?>
</body>
</html>