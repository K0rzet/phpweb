<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лабораторная работа №2</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/lab2.css">
    <link rel="stylesheet" href="css/reset.css">
</head>

<body>
    <?php require "blocks/header.php" ?>
    <main>
        <form class="form" action="https://httpbin.org/post" method="POST">
            <fieldset class="fieldset">
                <legend class="form__legend">Заполните информацию о себе</legend>

                <label class="form__label" for="name">Имя
                    <input class="form__input form__name" name="username" type="text" placeholder="Введите ваше имя"
                        required>
                </label>

                <label class="form__label" for="name">Email
                    <input class="form__input form__email" name="email" type="email" placeholder="Введите ваш Email"
                        required>
                </label>

                <label class="form__label" for="name">Цель обращения
                    <select class="form__select" name="TypeOfAppeal">
                        <option value="claim">Жалоба</option>
                        <option value="offer">Предложение</option>
                        <option value="gratitude">Благодарность</option>
                    </select>
                </label>
                <div class="grid">
                <label id='label' class="form__label" for="textarea">Сообщение</label>
                <textarea class="form__input form__comment" name="message" cols="30" rows="10"
                    placeholder="Введите ваше сообщение" id=textarea></textarea>
                <div class="btns__wrapper">
                    <button class="form__reset btn" type="reset">Сбросить</button>
                    <button class="form__submit btn" type="submit">Отправить</button>
                    <a class="link_to_next_page__link" href="lab2s2.php">Следующая страница</a>
                </div>
                </div>
            </fieldset>
        </form>
    </main>
    <?php require "blocks/footer.php" ?>
</body>

</html>