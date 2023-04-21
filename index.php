<?php

    require_once './autoload.php';

    $swiper = new Swiper();
    $notes = $swiper->getAllNotes();

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    if (isset($_POST['phone']) && isset($_POST['clientName'])) {
        $phone = $_POST['phone'];
        $name = $_POST['clientName'];

        //Формирование письма
        $title = 'Новое письмо';
        $body = "
            <h2>Новая заявка</h2>
            <p>Имя: $name</p>
            <p>Телефон: $phone</p>
        ";

        try {
            //Server settings
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'ssl://smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'n664045@gmail.com';                     //SMTP username
            $mail->Password   = 'iolopdpayrpynufj';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('n664045@gmail.com', 'Новая заявка');
            $mail->addAddress('rbru-metrika@yandex.ru', 'Получатель');     //Add a recipient

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = $title;
            $mail->Body    = $body;

            $mail->send();
            echo 'Письмо было отправлено';
            header('location: /');
        } catch (Exception $e) {
            echo "Письмо не было отправлено...";
        }
    }
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/normalize.css">
    <link rel="stylesheet" href="./style/swiper.min.css">
    <link rel="stylesheet" href="./style/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Caption:wght@400;700&display=swap" rel="stylesheet">
    <script defer src="./js/swiper.min.js"></script>
    <script defer src="./js/inputmask.min.js"></script>
    <script defer src="./js/main.js"></script>
    <title>Metrika</title>
</head>

<body class="page">
    <h1 class="visibily-hidden">
        Metrika
    </h1>
    <header class="page__header header">
        <div class="container header__container ">
            <div class="header__top">
                <div class="header__left">
                    <button class="header__burger">
                        <svg width="37" height="26" viewBox="0 0 37 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="37" height="4" fill="#1FA181"/>
                        <rect y="11" width="37" height="4" fill="#1FA181"/>
                        <rect y="22" width="37" height="4" fill="#1FA181"/>
                        </svg>
                    </button>
                    <img class="header__logo" src="./img/svg/logo.svg" alt="Логотип">
                    <address class="header__address">
                        <span class="header__city">
                            Ростов-на-Дону
                        </span>
                        <span class="header__street">
                            ул. Ленина, 2Б
                        </span>
                    </address>
                </div>
                <div class="header__right">
                    <a class="header__contact" href="tel:+78630000000">+7(863) 000 00 00</a>
                    <button class="header__btn">
                        Записаться на прием
                    </button>
                    <div class="header__contacts_mobile">
                        <a class="header__contact_mobile" href="tel:+78630000000">+7(863) 000 00 00</a>
                        <span class="header__city_mobile">
                            Ростов-на-Дону
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="header__bottom">
            <div class="header__container container">
                <nav class="header__nav">
                    <ul class="header__list">
                        <li class="header__item">
                            <a href="#" class="header__link">
                                О клинике
                            </a>
                        </li>
                        <li class="header__item">
                            <a href="#" class="header__link">
                                Услуги
                            </a>
                        </li>
                        <li class="header__item">
                            <a href="#" class="header__link">
                                Специалисты
                            </a>
                        </li>
                        <li class="header__item">
                            <a href="#" class="header__link">
                                Цены
                            </a>
                        </li>
                        <li class="header__item">
                            <a href="#" class="header__link">
                                Контакты
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <div class="burger page__burger">
        <div class="container burger__container">
            <nav class="burger__nav">
                <ul class="burger__list">
                    <li class="burger__item">
                        <a href="#" class="burger__link">
                            О клинике
                        </a>
                    </li>
                    <li class="burger__item">
                        <a href="#" class="burger__link">
                            Услуги
                        </a>
                    </li>
                    <li class="burger__item">
                        <a href="#" class="burger__link">
                            Специалисты
                        </a>
                    </li>
                    <li class="burger__item">
                        <a href="#" class="burger__link">
                            Цены
                        </a>
                    </li>
                    <li class="burger__item">
                        <a href="#" class="burger__link">
                            Контакты
                        </a>
                    </li>
                </ul>
            </nav>
            <button class="burger__btn">
                Записаться на прием
            </button>
        </div>
    </div>

    <main class="page__main main">
        <section class="main__hero hero">
            <div class="hero__container container">
                <div class="hero__about">
                    <h2 class="hero__title">
                        Многопрофильная клиника для детей и&nbsp;взрослых
                    </h2>
                    <p class="hero__descr">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do&nbsp;eiusmod tempor incididunt ut&nbsp;labore et&nbsp;dolore magna aliqua
                    </p>
                </div>
                <div class="hero__mobile">
                    <div class="container hero__mobile-container">
                        <h2 class="hero__title_mobile">
                            Многопрофильная клиника для детей и&nbsp;взрослых
                        </h2>
                        <p class="hero__descr_mobile">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do&nbsp;eiusmod tempor incididunt ut&nbsp;labore et&nbsp;dolore magna aliqua
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="main__check-ups check-ups">
            <div class="container check-ups__container">
                <div class="swiper check-ups__swiper">
                    <div class="swiper-wrapper">
                        <?php foreach ($notes as $note): ?>
                        <div class="swiper-slide slide">
                            <div class="slide__content">
                                <h3 class="slide__title">
                                    Check-UP
                                </h3>
                                <p class="slide__extra">
                                    <?=$note['extra'] ?>
                                </p>
                                <ul class="slide__list">
                                    <?php foreach ($note['list'] as $list): ?>
                                    <li class="slide__item">
                                        <?= $list ?>
                                    </li>
                                    <?php endforeach; ?>
                                </ul>
                                <p class="slide__price">
                                    Всего <?=$note['current_price'] ?>₽
                                </p>
                                <span class="slide__old-price">
                                    <?=$note['old_price'] ?>₽
                                </span>
                                <div class="slide__actions">
                                    <button class="slide__btn-enroll">
                                        Записаться
                                    </button>
                                    <a class="slide__more" href="#">
                                        Подробнее
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </section>
    </main>
    <footer class="page__footer footer">
        <div class="footer__container ">
            <div class="footer__content container">
                <img class="footer__logo" src="./img/svg/logo-light.svg" alt="Логотип">

                <nav class="footer__nav">
                    <ul class="footer__list">
                        <li class="footer__item">
                            <a href="#" class="footer__link">
                                О клинике
                            </a>
                        </li>
                        <li class="footer__item">
                            <a href="#" class="footer__link">
                                Услуги
                            </a>
                        </li>
                        <li class="footer__item">
                            <a href="#" class="footer__link">
                                Специалисты
                            </a>
                        </li>
                        <li class="footer__item">
                            <a href="#" class="footer__link">
                                Цены
                            </a>
                        </li>
                        <li class="footer__item">
                            <a href="#" class="footer__link">
                                Контакты
                            </a>
                        </li>
                    </ul>
                </nav>
                <ul class="footer__social">
                    <li class="footer__social-item">
                        <a class="footer__social__link" href="#">
                            <img class="footer__social-img" src="./img/svg/instagram_icon.svg" alt="Instagram">
                        </a>
                    </li>
                    <li class="footer__social-item">
                        <a class="footer__social__link" href="#">
                            <img class="footer__social-img" src="./img/svg/whatsapp_icon.svg" alt="WhatsApp">     
                        </a>          
                    </li>
                    <li class="footer__social-item">
                        <a class="footer__social__link" href="#">
                            <img class="footer__social-img" src="./img/svg/telegram_icon.svg" alt="Telegram">  
                        </a>  
                    </li>
                </ul>
            </div>
        </div>
    </footer>

    <div class="modals">
        <div class="modal">
            <!--   Svg иконка для закрытия окна  -->
            <svg class="modal__cross" width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M22.2333 7.73333L21.2666 6.76666L14.4999 13.5334L7.73324 6.7667L6.76658 7.73336L13.5332 14.5L6.7666 21.2667L7.73327 22.2333L14.4999 15.4667L21.2666 22.2334L22.2332 21.2667L15.4666 14.5L22.2333 7.73333Z" fill="#B0B0B0" />
            </svg>
            
            <h3 class="modal__title">
                Оставьте свои данные, чтобы мы связались с Вами
            </h3>

            <form class="modal__form" name="form" method="post">
                <label class="modal__label">
                    Введите номер телефона:
                    <span class="modal__error">
                        Неверный формат ввода!
                    </span>
                    <input class="modal__input modal__telephone" type="text" name="phone" placeholder="+7 (999) 999-99-99">
                </label>
                <label class="modal__label">
                    Введите номер Ваше имя:
                    <span class="modal__error">
                        Неверный формат ввода!
                    </span>
                    <input class="modal__input" type="text" name="clientName" placeholder="Иван">
                </label>
                <button class="modal__btn" type="submit">
                    Отправить
                </button>
            </form>
        </div>
        <!-- Подложка под модальным окном -->
        <div class="overlay" id="overlay-modal"></div>
    </div>
</body>

</html>
