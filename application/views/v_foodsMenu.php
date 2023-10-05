<?php include('v_headerFoodsMenu.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Menu</title>
</head>
<body>
    <table class="table table-striped">
        <thead>
            <tr>
                <td>Food ID</td>
                <td>Food Name</td>
                <td>Food Category</td>
                <td>Food Price</td>
                <td>Food Calorie</td>
                <td>Food Description</td>
                <td>Food Certification</td>
                <td>Action</td>
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
                    <td><?php echo $data->name_certification; ?></td>


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