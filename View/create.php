<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Create Product</title>
    <style>
        label {
            float: left;
            width: 120px;
        }

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

        input[type=text] {
            width: 97%;
            padding: 12px 20px;
            margin: 8px 0px;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit] {
            width: 97%;
            background-color: green;
            padding: 12px 10px;
            margin: 8px 0px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        .container {
            background-color: #f2f2f2;
            border-radius: 5px;
            padding: 20px;
        }
    </style>
</head>

<body>
    <h2 class="judul">Create Product</h2>
    <button class="button"><a href="../index.php" style="text-decoration: none; color: white;"><i class="fa-solid fa-arrow-left"></i> Back to Product List</a></button>
    </br>
    </br>
    <div class="container">
        <form action="../Controller/create.php" method="post">
            <label for="product_name">Product Name:</label>
            <input type="text" name="product_name" required><br>
            <label for="price">Price:</label>
            <input type="text" name="price" required><br>
            <label for="quantity">Quantity:</label>
            <input type="text" name="quantity" required><br>
            <label for="description">Description:</label>
            <input type="text" name="description" required><br>
            </br>
            <input type="submit" value="Save Product" style="color: white;" >
        </form>
    </div>
</body>

</html>