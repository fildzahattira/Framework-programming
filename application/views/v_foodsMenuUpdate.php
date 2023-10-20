<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Food Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
<div style="display: flex; justify-content: center; align-items: center; height: 100vh; background-color:#DCEDC2;">
    <div class="w-25 p-3" style="background-color:#A8E6CE;"> 
        <h3><?php echo $title; ?></h3>
        <form method="post" action="<?php echo base_url('restaurant/update') ?>">
            <?php foreach ($f_menu as $data) : ?>
                <label for="id_food" class="form-label">Food ID : </label>
                <input type="number" class="form-control" id="exampleFormControlInput1" value="<?php echo $data->id_food; ?>" readonly name="id_food">

                <label for="name_food" class="form-label">Food Name : </label>
                <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $data->name_food; ?>" name="name_food">

                    <label for="name_food" class="form-label">Food Category : </label><br>
                        <input type="radio" name="category_food" value="Appetizer" <?php if ($data->category_food == 'Appetizer') echo 'checked' ?> /> Appetizer<br />
                        <input type="radio" name="category_food" value="Main Course" <?php if ($data->category_food == 'Main Course') echo 'checked' ?> /> Main Course<br />
                        <input type="radio" name="category_food" value="Dessert" <?php if ($data->category_food == 'Dessert') echo 'checked' ?> /> Dessert<br />

                <label for="price_food" class="form-label">Food Price : </label>
                <input type="number" class="form-control" id="exampleFormControlInput1" value="<?php echo $data->price_food; ?>" name="price_food">

                <label for="calorie_food" class="form-label">Food Calorie : </label>
                <input type="number" class="form-control" id="exampleFormControlInput1" value="<?php echo $data->calorie_food; ?>" name="calorie_food">

                <label for="description_food" class="form-label">Food Description : </label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description_food"><?php echo $data->description_food; ?></textarea>

                <label for="id_certification" class="form-label">Food Certification : </label><br>
                <select class="form-select form-select-sm" aria-label="Small select example" name="id_certification">
                    <?php
                        foreach ($certification as $dataTemplate) :  ?>
                            <option value="<?php echo $dataTemplate->id_certification ?>" <?php if ($data->id_certification == $dataTemplate->id_certification) echo 'selected' ?>><?php echo $dataTemplate->name_certification; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <br>
            <?php endforeach; ?>
            <input class="btn btn-primary" type="submit" value="Update data">
        </form>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
