<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3><?php echo $title; ?></h3>
<a href="<?php echo base_url('index.php/restaurant/insert') ?>">ADD DATA</a>
    <table border="1">
        <thead>
            <tr>
                <td>id_food</td>
                <td>name_food</td>
                <td>category_food</td>
                <td>price_food</td>
                <td>calorie_food</td>
                <td>description_food</td>
                <td>action</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($f_menu as $data) : ?>
                <tr>
                    <td><?php echo $data->id_food; ?></td>
                    <td><?php echo $data->name_food; ?></td>
                    <td><?php echo $data->category_food; ?></td>
                    <td><?php echo $data->price_food; ?></td>
                    <td><?php echo $data->calorie_food; ?></td>
                    <td><?php echo $data->description_food; ?></td>

                    <td>
                        <a href = "<?php echo base_url('index.php/restaurant/update/'.$data->id_food);?>">UPDATE</a>
                        <a href = "<?php echo base_url('index.php/restaurant/delete/'.$data->id_food);?>">DELETE</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>