<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3><?php echo $judul; ?></h3>
    <form method="post" action="<?php echo base_url('index.php/library/update') ?>">
    <?php foreach ($cgry as $data): ?>
        <table>
            <tr>
                <td>ID Category </td>
                <td>:</td>
                <td><input type="text" name="name_category" value="<?php echo $data->id_category;?>" readonly></td>
            </tr>
            <tr>
                <td>Name Category </td>
                <td>:</td>
                <td><input type="text" name="name_category" value="<?php echo $data->name_category;?>"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="update"></td>
            </tr>
        </table>
    <?php endforeach;?>
    </form>
</body>
</html>