<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3><?php echo $judul; ?></h3>
    <form method="post" action="<?php echo base_url('index.php/restaurant/update') ?>">
    <?php foreach ($f_menu as $data): ?>
        <table>
            <tr>
                <td>Food ID</td>
                <td>:</td>
                <td><input type="number" name="id_food" value="<?php echo $data->id_food;?>" readonly></td>
            </tr>
            <tr>
                <td>Food Name</td>
                <td>:</td>
                <td><input type="text" name="name_food" value="<?php echo $data->name_food;?>"></td>
            </tr>
            <tr>
                <td>Food Category</td>
                <td>:</td>
                <tr>
                    <td>
                        <input type="radio" name="category_food" value="Appetizer" <?php if($data->category_food=='Appetizer') echo 'checked'?>/> Appetizer<br />
                        <input type="radio" name="category_food" value="Main Course" <?php if($data->category_food=='Main Course') echo 'checked'?>/> Main Course<br />
                        <input type="radio" name="category_food" value="Dessert" <?php if($data->category_food=='Dessert') echo 'checked'?>/> Dessert<br />
                    </td>
                </tr>
            </tr>
            <tr>
                <td>Food Price</td>
                <td>:</td>
                <td><input type="number" name="price_food" value="<?php echo $data->price_food;?>"></td>
            </tr>
            <tr>
                <td>Food Calorie</td>
                <td>:</td>
                <td><input type="number" name="calorie_food" value="<?php echo $data->calorie_food;?>"></td>
            </tr>
            <tr>
                <td>Food Description</td>
                <td>:</td>
                <td>
                    <textarea rows = 5 cols = 25 name = "description_food" text><?php echo $data->description_food; ?></textarea>
                </td>
            </tr>
            <tr>
                <td><input type="submit" value="Update data"></td>
            </tr>
        </table>
    <?php endforeach;?>
    </form>
</body>
</html>