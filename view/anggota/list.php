<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <body>
    <h1>Daftar Anggota</h1>
    <?php
    foreach($anggota as $row): ?>
     
        <li>
            <a href=""> <?= $row['nama']; ?></a>
        </li>
  <?php endforeach ?>
</body>
</body>
</html>