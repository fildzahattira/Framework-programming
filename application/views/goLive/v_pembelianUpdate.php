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
        <div class="w-25 p-3" style="background-color:#CCD4E0;">
            <h3><?php echo $title; ?></h3>
            <form method="post" action="<?php echo base_url('goLive/pembelian_update') ?>">
                <?php foreach ($detail_pembelian as $data) : ?>

                    <label for="k_pembelian" class="form-label">K Pembelian : </label>
                    <input type="number" class="form-control" id="exampleFormControlInput1" value="<?php echo $data->k_pembelian; ?>" readonly name="k_pembelian">

                    <label for="nama_pembeli" class="form-label">Nama Pembeli : </label>
                    <input type="text" class="form-control" id="exampleFormControlInput2" value="<?php echo $data->nama_pembeli; ?>" name="nama_pembeli">

                    <label for="alamat" class="form-label">Alamat : </label>
                    <input type="text" class="form-control" id="exampleFormControlInput3" value="<?php echo $data->alamat; ?>" name="alamat">

                    <label for="domain" class="form-label">Domain : </label>
                    <input type="text" class="form-control" id="exampleFormControlInput4" value="<?php echo $data->domain; ?>" name="domain">

                    <label for="lama_sewa" class="form-label">Lama Sewa : </label><br>
                    <input type="radio" name="lama_sewa" value=1 <?php if ($data->lama_sewa == 1) echo ' checked' ?> /> 1<br />
                    <input type="radio" name="lama_sewa" value=2 <?php if ($data->lama_sewa == 2) echo ' checked' ?> /> 2<br />
                    <input type="radio" name="lama_sewa" value=3 <?php if ($data->lama_sewa == 3) echo ' checked' ?> /> 3<br />

                    <label for="id_hosting" class="form-label">ID Hosting : </label><br>
                    <select class="form-select form-select-sm" aria-label="Small select example" name="id_hosting">
                        <?php
                        foreach ($hosting as $dataTemplate) :  ?>
                            <option value="<?php echo $dataTemplate->id_hosting ?>" <?php if ($data->id_hosting == $dataTemplate->id_hosting) echo 'selected' ?>><?php echo $dataTemplate->id_hosting; ?> - <?php echo $dataTemplate->nama_hosting; ?></option>
                        <?php endforeach; ?>
                    </select>

                    <label for="jumlah_bayar" class="form-label">Jumlah Bayar : </label>
                    <input type="number" class="form-control" id="exampleFormControlInput5" value="<?php echo $data->jumlah_bayar; ?>" name="jumlah_bayar">

                    <br>
                <?php endforeach; ?>
                <input class="btn btn-primary" type="submit" value="Update Data">
            </form>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $("input[type=radio][name=lama_sewa]").change(function() {
                console.log('test');
                var optionSelected = $('select').find("option:selected");
                var valueSelected = optionSelected.val();
                var textSelected = optionSelected.text();

                <?php echo json_encode($hosting) ?>.forEach(hosting => {
                    if (hosting.id_hosting == valueSelected) {
                        $("#exampleFormControlInput5").attr('value', hosting.harga*12 * $("input[type=radio][name=lama_sewa]:checked").val())
                    }
                });

                console.log($("#exampleFormControlInput5").val());
            });

            $('select').change(function() {
                var optionSelected = $(this).find("option:selected");
                var valueSelected = optionSelected.val();
                var textSelected = optionSelected.text();

                <?php echo json_encode($hosting) ?>.forEach(hosting => {
                    if (hosting.id_hosting == valueSelected) {
                        $("#exampleFormControlInput5").attr('value', hosting.harga*12 * $("input[type=radio][name=lama_sewa]:checked").val())
                    }
                });
                console.log($("#exampleFormControlInput5").val());
            });
        });
    </script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>