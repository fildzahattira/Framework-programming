<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Pembelian</title>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/css@3.css">
    <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar" style="background-color: #1AA7EC;">
    <div class="container-fluid">
        <a class="navbar-brand">TABLE PEMBELIAN</a>
        <?php echo $this->session->flashdata('msg'); ?>
        <a class = "btn btn-outline-dark" href = "<?php echo base_url('goLive/pembelian_insert');?>" role = "button">ADD NEW DATA</a>
    </div>
    </nav>
    <table class="table table-bordered border-primary">
        <thead>
            <tr align="center" class="table-info">
                <th scope="col">K Pembelian</th>
                <th scope="col">Nama Pembeli</th>
                <th scope="col">Alamat Pembeli</th>
                <th scope="col">Domain</th>
                <th scope="col">Jumlah Bayar</th>
                <th scope="col">Lama Sewa</th>
                <th scope="col">ID Hosting</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($detail_pembelian as $data) : ?>
                <tr align="center">
                    <th scope = "row"><?php echo($data->k_pembelian); ?></th>
                    <td><?php echo $data->nama_pembeli; ?></td>
                    <td><?php echo $data->alamat; ?></td>
                    <td><?php echo $data->domain; ?></td>
                    <td><?php echo price($data->jumlah_bayar); ?></td>
                    <td><?php echo tahun($data->lama_sewa); ?></td>
                    <td><?php echo $data->id_hosting; ?> - <?php echo $data->nama_hosting; ?></td>
                    <td>
                        <a class = "btn btn-warning" href = "<?php echo base_url('goLive/pembelian_update/'.$data->k_pembelian);?>" role = "button">UPDATE</a>
                        <a class = "btn btn-danger" href = "<?php echo base_url('goLive/pembelian_delete/'.$data->k_pembelian);?>" role = "button">DELETE</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <script src="<?php echo base_url() ?>assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>