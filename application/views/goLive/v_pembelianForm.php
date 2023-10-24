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
        <?php echo $this->session->flashdata('msg'); ?>
            <h3><?php echo $title; ?></h3>

            <form method="post" action="<?php echo base_url('goLive/pembelian_insert') ?>">

                <label for="k_pembelian" class="form-label">K Pembelian : </label>
                <input type="number" class="form-control" id="exampleFormControlInput1" name="k_pembelian">

                <label for="nama_pembeli" class="form-label">Nama Pembeli : </label>
                <input type="text" class="form-control" id="exampleFormControlInput2" name="nama_pembeli">

                <label for="alamat" class="form-label">Alamat : </label>
                <input type="text" class="form-control" id="exampleFormControlInput3" name="alamat">

                <label for="domain" class="form-label">Domain : </label>
                <input type="text" class="form-control" id="exampleFormControlInput4" name="domain">

                <label for="lama_sewa" class="form-label">Lama Sewa (Tahun) : </label><br>
                <input type="radio" name="lama_sewa" value=1>
                <label for=1>1</label><br>

                <input type="radio" name="lama_sewa" value=2>
                <label for=2>2</label><br>

                <input type="radio" name="lama_sewa" value=3>
                <label for=3>3</label><br>

                <label for="id_hosting" class="form-label">ID Hosting : </label><br>
                <select class="form-select form-select-sm" aria-label="Small select example" name="id_hosting">
                    <option value=>choose ID hosting</option>
                    <?php foreach ($hosting as $data) :  ?>
                        <option value="<?php echo $data->id_hosting ?>"><?php echo $data->id_hosting ?> - <?php echo $data->nama_hosting ?></option>
                    <?php endforeach; ?>
                </select>

                <label for="jumlah_bayar" class="form-label">Jumlah Bayar : </label>
                <input type="text" class="form-control" id="exampleFormControlInput5" name="jumlah_bayar" value=0 placeholder=0>

                <br>
                <input class="btn btn-primary" type="submit" value="Order">
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

                <?php echo json_encode($hosting) ?>.forEach(data => {
                    if (data.id_hosting == valueSelected) {
                        $("#exampleFormControlInput5").attr('value', data.harga*12 * $("input[type=radio][name=lama_sewa]:checked").val())
                    }
                });

                console.log($("#exampleFormControlInput5").val());
            });

            $('select').change(function() {
                var optionSelected = $(this).find("option:selected");
                var valueSelected = optionSelected.val();
                var textSelected = optionSelected.text();

                <?php echo json_encode($hosting) ?>.forEach(data => {
                    if (data.id_hosting == valueSelected) {
                        $("#exampleFormControlInput5").attr('value', data.harga*12 * $("input[type=radio][name=lama_sewa]:checked").val())
                    }
                });
                console.log($("#exampleFormControlInput5").val());
            });
        });
    </script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>