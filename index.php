<?php
include('Config/db.php');
$sql = "SELECT * FROM products";
$result = $conn->query($sql);
$products = [];
if ($result->rowCount() > 0) {
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $products[] = $row;
    }
}
$conn = null;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Product List</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: black;
            color: white;
        }

        h1 {
            text-align: center;
            font-family: monospace;
            font-size: 35px;
            padding-top: 10px;
        }

        .judul {
            background-color: #F4F6F6;
            height: 65px;
        }

        .button {
            background-color: #bf77f6;
            /* Green */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 15px;
        }

        .button-view {
            background-color: blue;
            border: none;
            color: white;
            padding: 5px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
        }

        .button-update {
            background-color: #00FF00;
            border: none;
            color: white;
            padding: 5px 11px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
        }
        
        .button-delete {
            background-color: red;
            border: none;
            color: white;
            padding: 5px 12px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
        }
    </style>
</head>

<body>
    <div class="judul">
        <h1>Product List</h1>
    </div>
    </br>
    <button type="submit" class="button"><a href="./View/create.php" style="text-decoration: none; color: white"><i class="fa-solid fa-plus"></i> Add New Product</a></button>
    <br><br>
    <table>
        <tr>
            <th>Id</th>
            <th>Product Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
        <?php if (count($products) > 0) : ?>
            <?php $counter = 1 ?>
            <?php foreach ($products as $product) : ?>
                <tr>
                    <td><?php echo $product["id"] ?></td>
                    <td><?php echo $product["product_name"] ?></td>
                    <td><?php echo $product["price"] ?></td>
                    <td><?php echo $product["quantity"] ?></td>
                    <td><?php echo $product["description"] ?></td>
                    <td>
                        <button class="button-view"><a style="text-decoration: none; color:white;" href="view/detail.php?id=<?php echo $product["id"] ?>">View</a></button> 
                        <button class="button-update"><a style="text-decoration: none; color:white;" href="view/update.php?id=<?php echo $product["id"] ?>">Update</a></button> 
                        <button class="button-delete"><a style="text-decoration: none; color:white;" href="view/delete.php?id=<?php echo $product["id"] ?>">Delete</a></button>
                    </td>
                </tr>
                <?php $counter++ ?>
            <?php endforeach ?>
        <?php else : ?>
            <tr>
                <td colspan="5">0 result</td>
            </tr>
        <?php endif ?>
    </table>

</body>

</html>