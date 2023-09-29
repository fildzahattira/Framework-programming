<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3><?php echo $title; ?></h3>
    <form method="post" action="<?php echo base_url('index.php/restaurant/insert') ?>">
        <table>
            <tr>
                <td>Food Name</td>
                <td>:</td>
                <td><input type="text" name="name_food"></td>
            </tr>
            <tr>
                <td>Food Category</td>
                <td>:</td>
                <td>
                    <tr>
                        <td>
                            <input type="radio" name="category_food" value="Appetizer">
                            <label for="Appetizer">Appetizer</label><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="radio" name="category_food" value="Main Course">
                            <label for="Main Course">Main Course</label><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="radio" name="category_food" value="Dessert">
                            <label for="Dessert">Dessert</label><br>
                        </td>
                    </tr>
                </td>
            </tr>
            <tr>
                <td>Food Price</td>
                <td>:</td>
                <td><input type="number" name="price_food"></td>
            </tr>
            <tr>
                <td>Food Calorie</td>
                <td>:</td>
                <td><input type="number" name="calorie_food"></td>
            </tr>
            <tr>
                <td>Food Description</td>
                <td>:</td>
                <td><input type="text" name="description_food"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Insert"></td>
            </tr>
        </table>
    </form>
</body>
</html>