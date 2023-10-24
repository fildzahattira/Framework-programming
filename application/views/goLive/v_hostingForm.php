<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Hosting</title>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/css@3.css">
    <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div style="display: flex; justify-content: center; align-items: center; height: 100vh; background-color:#52BBFF;">
    <div class="w-25 p-3"  style="background-color:#CCD4E0;"> 
    <h3><?php echo $title; ?></h3>

        <form method="post" action="<?php echo base_url('goLive/hosting_insert') ?>">

            <label for="id_hosting" class="form-label">Hosting ID : </label>
            <input type="number" class="form-control" id="exampleFormControlInput1"  name="id_hosting">

            <label for="nama_hosting" class="form-label">Hosting Name : </label>
            <input type="text" class="form-control" id="exampleFormControlInput1"  name="nama_hosting">

            <label for="has_cpanel" class="form-label">Has CPanel? </label><br>
                <input type="radio" name="has_cpanel" value='y'>
                <label for="yes">Yes</label><br>
        
                <input type="radio" name="has_cpanel" value='n'>
                <label for="no">No</label><br>

            <label for="has_ssl" class="form-label">Has ssl? </label><br>
                <input type="radio" name="has_ssl" value='y'>
                <label for="yes">Yes</label><br>
        
                <input type="radio" name="has_ssl" value='n'>
                <label for="no">No</label><br>
    
            <label for="has_subdomain" class="form-label">How many subdomain (0-9)?  </label>
            <input type="number" class="form-control" id="exampleFormControlInput1"  name="has_subdomain">
    
            <label for="has_storage" class="form-label">How many storage (MB)? </label>
            <input type="number" class="form-control" id="exampleFormControlInput1"  name="has_storage">

            
            <label for="num_database" class="form-label">How many database? </label>
            <input type="number" class="form-control" id="exampleFormControlInput1"  name="num_database">

            <label for="harga" class="form-label">Price :  </label>
            <input type="number" class="form-control" id="exampleFormControlInput1"  name="harga">

            <br>
            <input class="btn btn-primary" type="submit" value="Add Data">
        </form>
    </div>
</div>
    <script src="<?php echo base_url() ?>assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>