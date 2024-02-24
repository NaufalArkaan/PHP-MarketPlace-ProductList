<?php
include('../Config/db.php');

$id = $_GET['id'];

try {
    $stmt = $conn->prepare("SELECT * FROM products WHERE id =
:id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $row = [];
    if ($stmt->rowCount() > 0) {
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Product Details</title>
    <style>
        h2 {
            text-align: center;
            font-family: monospace;
            font-size: 35px;
            padding-top: 10px;
        }

        .judul {
            background-color: #F4F6F6;
            height: 60px;
        }

        .button {
            background-color: #bf77f6;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 15px;
        }

        th,
        td {
            text-align: center;
        }
    </style>
</head>

<body>
    <h2 class="judul">Product Details</h2>
    <button class="button"><a href="../index.php" style="text-decoration: none; color: white;"><i class="fa-solid fa-arrow-left"></i> Back to Product List</a></button>
    <br><br>

    <?php if (count($row) > 0) : ?>
        <table border="1" cellpadding="10" style="margin: auto;">
            <tr>
                <th style="background-color: #999DA0;">ID:</th>
                <th style="background-color: #999DA0;">Product Name:</th>
                <th style="background-color: #999DA0;">Price:</th>
                <th style="background-color: #999DA0;">Quantity:</th>
                <th style="background-color: #999DA0;">Description:</th>
            </tr>
            <tr>
                <td><?php echo $row["id"]; ?></td>
                <td><?php echo $row["product_name"]; ?></td>
                <td>$<?php echo $row["price"]; ?></td>
                <td><?php echo $row["quantity"]; ?></td>
                <td><?php echo $row["description"]; ?></td>
            </tr>
        </table>
    <?php else : ?>
        <p>0 Result</p>
    <?php endif ?>
</body>

</html>