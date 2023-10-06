<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar" style="background-color: #FDFD96;">
    <div class="container-fluid">
        <a class="navbar-brand">FOOD MENU</a>
        <a class = "btn btn-outline-success" href = "<?php echo base_url('index.php/restaurant/insert/');?>" role = "button">ADD NEW DATA</a>
    </div>
    </nav>
    <table class="table table-striped table-hover">
        <thead>
            <tr align="center">
                <th scope="col">Food ID</th>
                <th scope="col">Food Name</th>
                <th scope="col">Food Category</th>
                <th scope="col">Food Price</th>
                <th scope="col">Food Calorie</th>
                <th scope="col">Food Description</th>
                <th scope="col">Food Certification</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($f_menu as $data) : ?>
                <tr align="center">
                    <th scope = "row"><?php echo $data->id_food; ?></th>
                    <td><?php echo $data->name_food; ?></td>
                    <td><?php echo $data->category_food; ?></td>
                    <td><?php echo $data->price_food; ?></td>
                    <td><?php echo $data->calorie_food; ?></td>
                    <td><?php echo $data->description_food; ?></td>
                    <td><?php echo $data->name_certification; ?></td>
                    <td>
                        <a class = "btn btn-warning" href = "<?php echo base_url('index.php/restaurant/update/'.$data->id_food);?>" role = "button">UPDATE</a>
                        <a class = "btn btn-danger" href = "<?php echo base_url('index.php/restaurant/delete/'.$data->id_food);?>" role = "button">DELETE</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>