<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pharmacy Management System</title>
    <style>
        td,
        th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>

<body>
    <h1>Welcome To Valerian Pharmacy</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, ipsa doloremque pariatur quasi illum ullam, debitis alias officia temporibus animi deleniti molestiae nulla unde maiores veniam exercitationem eum mollitia quo.</p>

    <h3>Check out our inventory</h3>
    <table border="1px">
        <thead>
            <tr>
                <td>Id</td>
                <td>Name</td>
                <td>Price</td>
                <td>Action</td>
            </tr>
        </thead>

        <tbody>
            <?php
            include("connection.php");
            $drugs = $connection->query("SELECT * FROM drugs");

            if ($drugs->num_rows > 0) {
                while ($drug = $drugs->fetch_assoc()) {
                    $id = $drug["id"];
                    $name = $drug["name"];
                    $price = $drug["price"];
                    echo <<<ROW
                            <tr>
                                <td>$id</td>
                                <td>$name</td>
                                <td>$price</td>
                                <td>
                                    <a href='view.php?id=$id'>View</a>
                                    <a href='edit.php?id=$id'>Edit</a>
                                    <a href='delete.php?id=$id'>Delete</a>
                                    <a href='create.php?id=$id'>Create</a>
                                </td>
                            </tr>

                        ROW;
                }
            }
            ?>
            <script src="pharmacy.js></script>
        </tbody>
    </table>
</body>
</html>