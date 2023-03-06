<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лабораторная работа №2</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/lab2.css">
    <link rel="stylesheet" href="../css/reset.css">
</head>

<body>
    <?php require "blocks/header.php" ?>
    <main>
        <h2 class="heading-get-headers">Функция get_headers()</h2>
        <div class="content">
            <label>
                <textarea class="getheaders" name="getHeaders" cols="60" rows="30">
                <?php
                print_r(get_headers("http://google.com/"));
                ?>
            </textarea>
        </div>
    </main>
    <?php require "blocks/footer.php" ?>
</body>

</html>