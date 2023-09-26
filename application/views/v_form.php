<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3><?php echo $judul; ?></h3>
    <form method="post" action="<?php echo base_url('index.php/library/insert') ?>">
        <table>
            <tr>
                <td>Name Category </td>
                <td>:</td>
                <td><input type="text" name="name_category"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="save"></td>
            </tr>
        </table>
    </form>
</body>
</html>