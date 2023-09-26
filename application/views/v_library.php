<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3><?php echo $judul; ?></h3>
<a href="<?php echo base_url('index.php/library/insert') ?>">
        TAMBAH DATA
    </a>
    <table border="1">
        <thead>
            <tr>
                <td>id</td>
                <td>nama</td>
                <td>action</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cgry as $data) : ?>
                <tr>
                    <td><?php echo $data->id_category; ?></td>
                    <td><?php echo $data->name_category; ?></td>
                    <td>
                        <a href = "<?php echo base_url('index.php/library/update/'.$data->id_category);?>">UPDATE</a>
                        <a href = "<?php echo base_url('index.php/library/delete/'.$data->id_category);?>">DELETE</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>