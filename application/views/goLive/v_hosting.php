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
    <nav class="navbar" style="background-color: #1AA7EC;">
    <div class="container-fluid">
        <a class="navbar-brand">TABLE HOSTING</a>
        <?php echo $this->session->flashdata('msg'); ?>
        <a class = "btn btn-outline-dark" href = "<?php echo base_url('goLive/hosting_insert');?>" role = "button">ADD NEW DATA</a>
    </div>
    </nav>
    <table class="table table-bordered border-primary">
        <thead>
            <tr align="center" class="table-info">
                <th scope="col">Hosting ID</th>
                <th scope="col">Hosting Name</th>
                <th scope="col">CPanel</th>
                <th scope="col">SSL</th>
                <th scope="col">Sub Domain</th>
                <th scope="col">Storage</th>
                <th scope="col">Database</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($detail_hosting as $data) : ?>
                <tr align="center">
                    <th scope = "row"><?php echo($data->id_hosting); ?></th>
                    <td><?php echo $data->nama_hosting; ?></td>
                    <td><?php echo color($data->has_cpanel); ?></td>
                    <td><?php echo color($data->has_ssl); ?></td>
                    <td><?php echo $data->has_subdomain; ?></td>
                    <td><?php echo storage($data->has_storage); ?></td>
                    <td><?php echo $data->num_database; ?></td>
                    <td><?php echo price($data->harga); ?></td>
                    <td>
                        <a class = "btn btn-warning" href = "<?php echo base_url('goLive/hosting_update/'.$data->id_hosting);?>" role = "button">UPDATE</a>
                        <a class = "btn btn-danger" href = "<?php echo base_url('goLive/hosting_delete/'.$data->id_hosting);?>" role = "button">DELETE</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <script src="<?php echo base_url() ?>assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>