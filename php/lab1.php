<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Лабораторная работа 1</title>
  <link rel="stylesheet" href="../css/lab1.css">
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>
  <?php require "blocks/header.php" ?> 
  <?php 
  $headings = ['1. Сайт компании, которая организовывает туры в Cappadocia', '2. Сайт digital агенства организованного из студентов московского политеха', '3. Дизайн социальных сетей клининговой фирмы', '4. Дизайн рекламы телевизоров'];
  $links = ['http://web1.std-2131.ist.mospolytech.ru/html/', 'https://polywebagency.ru', 'https://www.figma.com/file/8QxGGXQKmvoHftTqeJisWw/%D0%94%D0%B7-%D0%BC%D0%BE%D0%B4%D1%83%D0%BB%D1%8C-4?node-id=0%3A1&t=VPNWgd9hoe0lLQIU-1', 'https://www.figma.com/file/O9NJgY9mdmpm7K4w0n5AnA/%D0%A2%D1%80%D0%B5%D1%82%D0%B8%D0%B9-%D0%B1%D0%B0%D0%BD%D0%B5%D1%80?node-id=0%3A1&t=V7Ek5vaUh4JbVj1E-1'];
  ?>

  <section class="examples-section" id="examples">
    <h2 class="section-heading">Примеры моих работ</h2>
    <div class="examples wrapper1370">
    <?php
    for($i = 0; $i < 4; $i++):
    ?>
      <div class="example-img">
        <img src="../img/<?=$i+1?>.png" alt="cappadocia">
        <div class="example-text">
          <p class="text"><?=$headings[$i]?></p>
          <p class="text status-ready">Готово</p>
          <a class="example-portfolio-link" href=<?=$links[$i]?>>Перейти на сайт</a>
        </div>
      </div>
    <?php endfor; ?>
    </div>
  </section>
  <?php require "blocks/footer.php"?>
</body>

</html>