
   <div class="wrapper">
      <header id="header" class="header lock-padding">
         <div class="header__container">
            <div class="header__body">
               <div class="header__logo">
                  <img src="image/header/logo_text.svg" alt="Logo">
               </div>
               <nav class="header__menu menu">
                  <ul class="menu__list" id="menu">
                     <li class="menu__item"><a href="#" class="menu__link">Главная</a></li>
                     <li class="menu__item"><a href="#info" class="menu__link">О компании</a></li>
                     <li class="menu__item"><a href="#services" class="menu__link">Об услуге</a></li>
                     <li class="menu__item"><a href="#contacs" class="menu__link">Контакты</a></li>
                     <li class="menu__item"><a href="#popup" class="menu__link popup-link">Admin</a></li>
                  </ul>
                  <div class="menu__phone">
                     <div class="menu__phone-icon">
                        <img src="image/header/phone.svg" alt="Phone">
                     </div>
                     <a href="tel:+78432511010" class="menu__phone-link">+7 (843) 251 10 10</a>
                  </div>
                  <div class="hamb" >
                     <div class="hamb__field" id="humb">
                        <span></span>
                     </div>
                  </div>
               </nav>
            </div>
         </div>
         <?php
            if(isset($_POST['auth'])){
                $email=$_POST['email'];
                $password=$_POST['password'];
                $password_md5=md5($password);
                // echo $email;
                // echo $password;
                // echo $password_md5;
                if(empty($email)){
                  $error.='<br><font color="red">Введите email</font>';
                }
                if(empty($password)){
                  $error.='<br><font color="red">Введите password</font>';
                }
                //Проверка пользователя на наиличие в БД
                $query="SELECT * FROM azimut_user WHERE email='$email' AND password='$password_md5'";
                $result=$link->query($query);
                $num=$result->num_rows;
                if($num==0){
                    $error.='<br><font color="red">Неверный email или password</font>';
                }
                $query="SELECT * FROM azimut_user WHERE email='$email'";
                $result=$link->query($query);
                $num=$result->num_rows;
                if($num==0){
                    $error.='<br><font color="red">Если вы не зарегистрированы, то зарегистрируйтесь</font>';
                }

                if(empty($error)){
                    $row=$result->fetch_assoc();
                    $uid=$row['id'];
                    $_SESSION['uid']=$uid;
                    echo '<script>document.location.href="?"</script>';
                }
            }
            // echo $error;
            ?> 
         <div id="popup" class="popup">
            <a href="#" class="popup__area"></a>
            <div class="popup__body">
               <div class="popup__content">
                  <a href="#" class="popup__close close-popup">X</a>
                  <div class="popup__title">Admin Panel</div>
                  <form method="POST" class="admin__panel form__admin" name="auth">
                     <input type="text" class="form__admin-email form__admin-input" placeholder="Email" name="email"><br>
                     <input type="password" class="form__admin-password form__admin-input" placeholder="Password" name="password">
                     <input type="submit" class="form__admin-submit" value="Войти" name="auth">
                  </form>
                  <?php echo $error ?>
               </div>
            </div>
         </div>
      </header>
      <main class="page">
         <section class="page__mainblock mainblock">
            <div class="mainblock__container">
               <div class="mainblock__box main-box">
                  <div class="main-box__text">Юридическая помощь</div>
                  <h1 class="main-box__title">Финансовый эксперт</h1>
                  <div class="main-box__text main-box__mobil">Признанный эксперт по вопросам банкротства</div>
                  <a href="#contacs" class="main-box__link">
                     <div class="main-box__button">Заказать услугу</div>
                  </a>
               </div>
            </div>
            <div class="main-block__image _ibg">
               <img src="image/mainblock/fon.jpg" alt="Fon">
            </div>
         </section>
         <section class="page__info info" id="info">
            <div class="info__container">
               <div class="info__body body-info">
                  <h2 class="body-info__title">О компании</h2>
                  <div class="body-info__box info-box">
                     <div class="info-box__min">
                        Юридическая Служба «Финансовый эксперт» с 2016 года занимается вопросами банкротства и является признанным экспертом в данной сфере.
                        Команда высококлассных специалистов, обладающих не только необходимым профильным образованием, ценным багажом знаний, но
                        и многолетним опытом, помогает как физическим, так и юридическим лицам.
                     </div>
                     <div class="info-box__logo">
                        <img src="image/info/info-icon.svg" alt="Scales">
                     </div>
                     <div class="info-box__min info-box__min2">
                        Компанией установлены единые высокие стандарты работы с клиентами, позволяющие каждому гражданину получить
                        квалифицированные услуги. Наши юристы занимаются работой по защите прав потребителей на всех стадиях судопроизводства и
                        урегулированием гражданских споров по всем вопросам гражданского права.
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="page__benefits benefits" id="services">
            <div class="benefits__container">
               <div class="benefits__body body-benefits">
                  <h2 class="body-benefits__title">Об услуге</h2>
                  <div class="body-benefits__text">
                     Наши юристы знают и практикуют множество методов по освобождению наших Клиентов от долгов, без потери имущества. Мы
                     поможем пройти этот нелегкий период максимально безболезненно, учитывая ваши интересы.
                  </div>
                  <div class="body-benefits__box box-column">
                     <div class="box-column__item item-box">
                        <h3 class="item-box__title">1. Профессиональная консультация юриста</h3>
                        <a href="#" class="item-box__text">Подробное опиание</a>
                     </div>
                     <div class="box-column__vector">
                        <img src="image/benefits/Vector.svg" alt="Vector">
                     </div>
                     <div class="box-column__item item-box">
                        <h3 class="item-box__title">2. Подготовка документов и заявления в суд</h3>
                        <a href="#" class="item-box__text">Подробное опиание</a>
                     </div>
                     <div class="box-column__vector">
                        <img src="image/benefits/Vector.svg" alt="Vector">
                     </div>
                     <div class="box-column__item item-box">
                        <h3 class="item-box__title">3. Суд и выесение решения</h3>
                        <a href="#" class="item-box__text">Подробное опиание</a>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="page__services services" >
            <div class="services__container">
               <div class="services__body body-services">
                  <h2 class="body-services__title">Выигранные дела</h2>
                  <div class="body__services services-box">
                     <div class="services-box__block">
                        <div class="services-box__block-photo">
                           <img src="image/services/vector.jpg" alt="Обложка">
                        </div>
                        <a href="" class="services-box__choose">
                           <div class="services-box__text-choose">Дело Иванова А.М.</div>
                           <div class="services-box__icon-choose">
                              <img src="image/services/vector.svg" alt="Vector">
                           </div>
                        </a>
                     </div>
                     <div class="services-box__block">
                        <div class="services-box__block-photo">
                           <img src="image/services/vector.jpg" alt="Обложка">
                        </div>
                        <a href="" class="services-box__choose">
                           <div class="services-box__text-choose">Дело Иванова А.М.</div>
                           <div class="services-box__icon-choose">
                              <img src="image/services/vector.svg" alt="Vector">
                           </div>
                        </a>
                     </div>
                     <div class="services-box__block">
                        <div class="services-box__block-photo">
                           <img src="image/services/vector.jpg" alt="Обложка">
                        </div>
                        <a href="" class="services-box__choose">
                           <div class="services-box__text-choose">Дело Иванова А.М.</div>
                           <div class="services-box__icon-choose">
                              <img src="image/services/vector.svg" alt="Vector">
                           </div>
                        </a>
                     </div>
                     <div class="services-box__block">
                        <div class="services-box__block-photo">
                           <img src="image/services/vector.jpg" alt="Обложка">
                        </div>
                        <a href="" class="services-box__choose">
                           <div class="services-box__text-choose">Дело Иванова А.М.</div>
                           <div class="services-box__icon-choose">
                              <img src="image/services/vector.svg" alt="Vector">
                           </div>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="page__reviews reviews">
            <div class="reviews__container">
               <div class="reviews__body">
                  <!-- <div class="reviews__box"> -->
                  <h2 class="reviews__title">Отзывы</h2>
                  <!-- </div> -->
                  <div class="reviews__slider slider">
                     <div class="slider__item item-slider">
                        <div class="slider__box">
                           <div class="item-slider__box">
                              <div class="item-slider__photo"></div>
                              <div class="item-slider__name">Владимир Мономахов</div>
                           </div>
                           <div class="item-slider__text">Отлично 1</div>
                           <div class="item-slider__text">
                              Юридическая Служба «Финансовый эксперт» с 2016 года занимается вопросами банкротства и является признанным экспертом в данной сфере.
                              Команда высококлассных специалистов, обладающих не только необходимым профильным образованием, ценным багажом знаний, но
                              и многолетним опытом, помогает как физическим, так и юридическим лицам.
                           </div>
                        </div>
                     </div>
                     <div class="slider__item item-slider">
                        <div class="item-slider__box">
                           <div class="item-slider__photo"></div>
                           <div class="item-slider__name">Владимир Мономахов</div>
                        </div>
                        <div class="item-slider__text">Отлично 2</div>
                        <div class="item-slider__text">
                           Наши юристы знают и практикуют множество методов по освобождению наших Клиентов от долгов, без потери имущества. Мы
                           поможем пройти этот нелегкий период максимально безболезненно, учитывая ваши интересы.
                        </div>
                     </div>
                     <div class="slider__item item-slider">
                        <div class="item-slider__box">
                           <div class="item-slider__photo"></div>
                           <div class="item-slider__name">Владимир Мономахов</div>
                        </div>
                        <div class="item-slider__text">Отлично 3</div>
                        <div class="item-slider__text">Превосходно</div>
                     </div>
                     <div class="slider__item item-slider">
                        <div class="item-slider__box">
                           <div class="item-slider__photo"></div>
                           <div class="item-slider__name">Владимир Мономахов</div>
                        </div>
                        <div class="item-slider__text">Отлично 4</div>
                        <div class="item-slider__text">
                           Компанией установлены единые высокие стандарты работы с клиентами, позволяющие каждому гражданину получить
                           квалифицированные услуги. Наши юристы занимаются работой по защите прав потребителей на всех стадиях судопроизводства и
                           урегулированием гражданских споров по всем вопросам гражданского права.
                        </div>
                     </div>
                  </div>
                  <!-- <div class="arrow"></div> -->
               </div>
            </div>
         </section>
         
         
         <section class="page__contacs contacs" id="contacs">
            <div class="contacs__container">
               <div class="contacs__body contacs-body">
                  <div class="contacs-body__box">
                     <h2 class="contacs-body__title">Оставьте заявку</h2>
                     <div class="contacs-body__text">и мы с Вами свяжемся</div>

                     <?php
                        if(isset($_POST['contacs_form'])) {
                           $name = $_POST['name'];
                           // echo $name;
                           $phone = $_POST['phone'];
                           // echo $phone;
                           $description = $_POST['description'];
                           // echo $description;

                           $query = "INSERT INTO azimut (name,phone,description)
                              VALUE ('$name','$phone','$description')";

                           $link->query($query);
                           echo '<script>document.location.href="?"</script>';  
                        }
                     ?>

                     <form method="post" class="contacs-body__form" name="contacs_form">
                        <input type="text" class="contacs-body__form-input" placeholder="Имя" name="name" required>
                        <input type="number" class="contacs-body__form-input" placeholder="Телефон" name="phone" required>
                        <textarea class="contacs-body__form-textarea" placeholder="Опишите Вашу проблему..." name="description" required></textarea>
                        <input type="submit" class="contacs-body__form-submit" value="Отправить заявку" name="contacs_form">
                     </form>
                  </div>
                  <div class="contacs-body__box">
                     <h2 class="contacs-body__title contacs-body__title2">Контакты</h2>
                     <div class="contacs-body__box-min box__min">
                        <div class="box__min-icon">
                           <img src="image/contacts/01.svg" alt="01">
                        </div>
                        <a href="https://go.2gis.com/xvkv7" class="box-min__link">Казань, ул. Рихарда Зорге, д. 84</a>
                     </div>
                     <div class="contacs-body__box-min box__min">
                        <div class="box__min-icon">
                           <img src="image/contacts/02.svg" alt="02">
                        </div>
                        <a href="tel:+78432511010" class="box-min__link">+7 (843) 251 10 10</a>
                     </div>
                     <div class="contacs-body__box-min box__min">
                        <div class="box__min-icon">
                           <img src="image/contacts/03.svg" alt="03">
                        </div>
                        <a href="mailto:2511010@list.ru" class="box-min__link">2511010@list.ru</a>
                     </div>
                     <div class="contacs-body__box-min box__min">
                        <div class="box__min-icon">
                           <img src="image/contacts/04.svg" alt="04">
                        </div>
                        <a href="https://vk.com/law_azimuth" class="box-min__link">https://vk.com/law_azimuth</a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="contacts__image _ibg">
               <img src="image/contacts/fon.jpg" alt="Fon">
            </div>
         </section>
      </main>
      <footer class="footer">
         <div class="footer__container">
            <div class="footer__body">
               <div class="footer__logo">
                  <a href="#" class="header__logo">
                     <img src="image/header/logo_text.svg" alt="Финансовый эксперт">
                  </a>
               </div>
               <div class="footer__nav">
                  <ul class="footer__item">
                     <li class="footer__list">
                        <a href="#" class="footer__link">Главная</a>
                     </li>
                     <li class="footer__list">
                        <a href="#info" class="footer__link">О компании</a>
                     </li>
                     <li class="footer__list">
                        <a href="#services" class="footer__link">Об услуге</a>
                     </li>
                     <li class="footer__list">
                        <a href="#" class="footer__link">
                           <img src="image/footer/Vector.svg" alt="Vector">
                        </a>
                     </li>
                  </ul>
               </div>
               <div class="footer__inn">ИНН 1640016716 ОГРН 1161690141887</div>
            </div>
         </div>
      </footer>
      <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
      <script src="js/slick.min.js"></script>
      <script src="js/script.js"></script>
      <!-- <script src="js/popup.js"></script> -->
   </div>
