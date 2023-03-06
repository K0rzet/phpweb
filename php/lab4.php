<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лабораторная работа 1</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/lab4.css">
</head>

<body>
    <?php require "blocks/header.php" ?>


    <section class="examples-section" id="examples">
        <div class="container">
            <h2 class="container__heading">Введите уравнение типа a + b = c</h2>
            <form action="" method="POST">
                <input value='5 + x = 10' type="text" name="eq" class="input" placeholder="a + b = c">
                <button type="submit" class="get-answer">Посчитать</button>
            </form>


            <textarea >
                <?php
                if (isset($_POST)){
                    $str = $_POST['eq'];
                    $str = str_replace(' ', '', $str);
                    function getxpos($str)
                    {
                        return strpos($str, 'x');
                    };
                    print_r(getxpos($str));
                };
                ?>
            </textarea>
        </div>
    </section>
    <?php require "blocks/footer.php" ?>
</body>

</html>