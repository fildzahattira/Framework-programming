<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Food Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
<div style="display: flex; justify-content: center; align-items: center; height: 100vh; background-color:#A8E6CE;">
    <div class="w-25 p-3"  style="background-color:#DCEDC2;"> 
        <h3><?php echo $title; ?></h3>

        <form method="post" action="<?php echo base_url('restaurant/insert') ?>">

            <label for="name_food" class="form-label">Food Name : </label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="write food name here" name="name_food">

            <label for="category_food" class="form-label">Food Category : </label><br>
                <input type="radio" name="category_food" value="Appetizer">
                <label for="Appetizer">Appetizer</label><br>
        
                <input type="radio" name="category_food" value="Main Course">
                <label for="Main Course">Main Course</label><br>
        
                <input type="radio" name="category_food" value="Dessert">
                <label for="Dessert">Dessert</label><br>
    
            <label for="price_food" class="form-label">Food Price : </label>
            <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="write food price here" name="price_food">
    
            <label for="calorie_food" class="form-label">Food Calorie : </label>
            <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="write food calorie here" name="calorie_food">

            <label for="description_food" class="form-label">Food Description : </label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="write food description here" name="description_food"></textarea>
    
            <label for="id_certification" class="form-label">Food Certification : </label><br>
            <select class="form-select form-select-sm" aria-label="Small select example" name="id_certification">
                <option value=>choose certification</option>
                    <?php foreach ($certification as $data) :  ?>
                        <option value="<?php echo $data->id_certification ?>"><?php echo $data->name_certification ?></option>
                    <?php endforeach; ?>
            </select>
            <br>
            <input class="btn btn-primary" type="submit" value="Add Data">
        </form>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>