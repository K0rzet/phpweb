<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfolio</title>
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>
  <header class="header">
    <nav class="navigation wrapper1370">
      <div class="nav-left">
        <ul class="nav-ul">
          <li><a href="https://rgr.std-2131.ist.mospolytech.ru" class="nav-logo">Butorin Ilya</a></li>
          <li><a href="https://github.com/FrontendCourseMP/rk-K0rzet" class="nav-link">GitHub</a></li>
          <li><a href="https://rgr.std-2131.ist.mospolytech.ru" class="nav-link">Домен</a></li>
        </ul>
      </div>
      <div class="nav-right">
        <ul class="nav-ul">
          <li><a href="#skills" class="nav-link">Мои навыки</a></li>
          <li><a href="#examples" class="nav-link">Портфолио</a></li>
          <li><a href="#feedback" class="nav-link">Отзывы</a></li>
          <li><a href="#contacts" class="nav-link">Контакты</a></li>
        </ul>
      </div>
    </nav>
  </header>
  <main>
    <section class="jumbotron">
      <div class="jumbotron-content wrapper1370">
        <div class="jumbotron-text">
          <p class="greeting">Привет, меня зовут:</p>
          <p class="jumbotron-name">Буторин Илья</p>
          <p class="jumbotron-info">Я студент факультета информационных технологий в московском политехническом
            университете.
            Я занимаюсь web-дизайном и изучаю web-разработку</p>
          <a href="#reply" class="reply-link">Связаться со мной</a>
        </div>
        <img class="main-photo" src="../img/main-photo.png" alt="mine-photo">
      </div>
    </section>
    <section class="skills-section" id="skills">
      <h2 class="section-heading">Мои навыки</h2>
      <div class="skills wrapper1370">
        <div class="skill">
          <img src="../img/image 12.png" alt="Figma">
          <p class="skill-name">Figma</p>
          <p class="skill-time">Более года</p>
        </div>
        <div class="skill">
          <img src="../img/image 16.png" alt="Photoshop">
          <p class="skill-name">Photoshop</p>
          <p class="skill-time">Более года</p>
        </div>
        <div class="skill">
          <img src="../img/image 15.png" alt="HTML">
          <p class="skill-name">HTML</p>
          <p class="skill-time">Более года</p>
        </div>
        <div class="skill">
          <img src="../img/image 14.png" alt="CSS">
          <p class="skill-name">CSS</p>
          <p class="skill-time">Более года</p>
        </div>

      </div>
    </section>
    <section class="examples-section" id="examples">
      <h2 class="section-heading">Примеры моих работ</h2>
      <div class="examples wrapper1370">
        <?php
        $headings = ['1. Сайт компании, которая организовывает туры в Cappadocia', '2. Сайт digital агенства организованного из студентов московского политеха', '3. Дизайн социальных сетей клининговой фирмы', '4. Дизайн рекламы телевизоров'];
        $links = ['http://web1.std-2131.ist.mospolytech.ru/html/', 'https://polywebagency.ru', 'https://www.figma.com/file/8QxGGXQKmvoHftTqeJisWw/%D0%94%D0%B7-%D0%BC%D0%BE%D0%B4%D1%83%D0%BB%D1%8C-4?node-id=0%3A1&t=VPNWgd9hoe0lLQIU-1', 'https://www.figma.com/file/O9NJgY9mdmpm7K4w0n5AnA/%D0%A2%D1%80%D0%B5%D1%82%D0%B8%D0%B9-%D0%B1%D0%B0%D0%BD%D0%B5%D1%80?node-id=0%3A1&t=V7Ek5vaUh4JbVj1E-1'];
        ?>
        <?php
        for ($i = 0; $i < 4; $i++):
          ?>
          <div class="example-img">
            <img src="../img/<?= $i + 1 ?>.png" alt="cappadocia">
            <div class="example-text">
              <p class="text">
                <?= $headings[$i] ?>
              </p>
              <p class="text status-ready">Готово</p>
              <a class="example-portfolio-link" href=<?= $links[$i] ?>>Перейти на сайт</a>
            </div>
          </div>
        <?php endfor; ?>
      </div>
      <a href="#" class="else">Смотреть еще</a>
    </section>
    <section class="feedback-section" id="feedback">
      <h2 class="section-heading">Отзывы</h2>
      <div class="feedbacks wrapper1370">
        <div class="feedback">
          <div class="feedback-img">
            <img src="../img/Ellipse 70.png" alt="feedback-photo">
          </div>
          <div class="feedback-content">
            <p class="feedback-name">Иван Иванов</p>
            <p class="feedback-date">22.12.2004</p>
            <div class="rating">
              <img src="../img/Vector.png" alt="star">
              <img src="../img/Vector.png" alt="star">
              <img src="../img/Vector.png" alt="star">
              <img src="../img/Vector.png" alt="star">
              <img src="../img/Vector.png" alt="star">
            </div>
            <div class="feedback-text">
              <p>tempor orci eu lobortis elementum nibh tellus molestie nunc non blandit massa enim nec dui nunc mattis
                enim ut tellus elementum sagittis vitae et leo duis ut diam quam nulla porttitor massa id neque aliquam
                vestibulum morbi blandit cursus risus at ultrices mi tempus imperdiet nulla malesuada pellentesque elit
                eget
              </p>
            </div>
          </div>
        </div>
        <div class="feedback">
          <div class="feedback-img">
            <img src="../img/Ellipse 70.png" alt="feedback-photo">
          </div>
          <div class="feedback-content">
            <p class="feedback-name">Иван Иванов</p>
            <p class="feedback-date">22.12.2004</p>
            <div class="rating">
              <img src="../img/Vector.png" alt="star">
              <img src="../img/Vector.png" alt="star">
              <img src="../img/Vector.png" alt="star">
              <img src="../img/Vector.png" alt="star">
              <img src="../img/Vector.png" alt="star">
            </div>
            <div class="feedback-text">
              <p>tempor orci eu lobortis elementum nibh tellus molestie nunc non blandit massa enim nec dui nunc mattis
                enim ut tellus elementum sagittis vitae et leo duis ut diam quam nulla porttitor massa id neque aliquam
                vestibulum morbi blandit cursus risus at ultrices mi tempus imperdiet nulla malesuada pellentesque elit
                eget
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="contacts-section" id="contacts">
      <h2 class="section-heading">Контакты</h2>
      <div class="contacts wrapper1370">
        <div class="contact-container">
          <a href="https://google.com" class="contact-link">
            <img src="../img/telegram-svgrepo-com 1.png" alt="telegram">
            <p class="contact-text">@butorin</p>
          </a>
        </div>
        <div class="contact-container">
          <a href="https://vk.com" class="contact-link">
            <img src="../img/vk-svgrepo-com 1.png" alt="vk">
            <p class="contact-text">Илья Буторин</p>
          </a>
        </div>
        <div class="contact-container">
          <a href="https://google.com" class="contact-link">
            <img src="../img/instagram-2-1-logo-svgrepo-com 1.png" alt="">
            <p class="contact-text">butorin.i_</p>
          </a>
        </div>
        <div class="contact-container">
          <a href="mailto:ilbur@inbox.ru" class="contact-link">
            <img src="../img/image 22.png" alt="email">
            <p class="contact-text">ilbur@inbox.ru</p>
          </a>
        </div>
        <div class="contact-container">
          <a href="tel:+79143233634" class="contact-link">
            <img src="../img/image 23.png" alt="phone">
            <p class="contact-text">+79143233634</p>
          </a>
        </div>
      </div>
    </section>
  </main>
  <footer class="footer-section">
    <div class="footer wrapper1370">
      <div class="main-info">
        <p class="footer-info">Буторин Илья Валерьевич</p>
        <p class="footer-info">Группа 221-322</p>
        <p class="footer-info">25.11.2022</p>
      </div>
      <div class="form">
        <form action="">
          <fieldset class="fieldset" id="reply">
            <legend>Заполните форму, чтобы связаться с вами</legend>
            <label><input class="footer-input" type="text" placeholder="Имя"> </label>
            <label><input class="footer-input" type="text" placeholder="Фамилия"> </label>
            <label><input class="footer-input" type="email" placeholder="email"> </label>
            <label><input class="footer-input" type="tel" placeholder="Телефон"> </label>
            <label>Связаться срочно: <input class="checkbox" type="checkbox"></label>
            <label><button type="submit">Отправить</button></label>
          </fieldset>
        </form>
      </div>
    </div>
  </footer>
</body>

</html>