<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,300;0,400;0,700;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="{{asset('/css/style.css')}}"/>
    <title>Portfolio</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="container">
            <div class="header__inner">
                <div class="user">
                    <div class="user__avatar">
                        <img src="https://sun9-26.userapi.com/impf/SlpqLfnARm-iH12asYQ56lY-Ysnc75ra640M_w/rlJFBavYZNw.jpg?size=1080x791&quality=96&proxy=1&sign=c9210125b749624d086c2f612955d6c6" alt="">
                    </div>
                    <div class="user__content">
                        <div class="user__name">Marte<br>Stanislav</div>
                        <div class="user__prof">I'm Web-Designer</div>
                    </div>
                </div>
                <nav class="nav" id="nav">
                    <a class="nav__link" href="#" onclick="about()">about me</a>
                    <a class="nav__link" href="#" onclick="slowScroll('.works')">portfolio</a>
                    <a class="nav__link" href="#" data-modal="#modal_resume">resume</a>
                    <a class="nav__link" href="#" onclick="blog()">blog</a>
                    <script>
                        function blog() {
                        location.replace("https://lab3/blog")
                            }
                            function about() {
                        location.replace("https://lab3/about")
                            }
                    </script>
                    <a class="nav__link nav__link--btn" href="#" data-modal="#modal_contact">contact</a>
                </nav>
                <button class="burger" type="button" id="navToggle">
                    <div class="line line1"></div>
                    <div class="line line2"></div>
                    <div class="line line3"></div>
                </button>
            </div>
        </div>
    </header>
    <!-- Header -->

    <!-- Intro -->
    <div class="intro">
        <div class="container">
            <div class="intro__inner">
                <div class="intro__content">
                    <h2 class="intro__subtitle">Hello I'm</h2>
                    <h1 class="intro__title">Marte Stanislav</h1>
                    <div class="intro__text">Web-Designer</div>

                    <div class="social">
                        <a class="social__link" href="#">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/2/21/VK.com-logo.svg" alt="">
                        </a>
                        <a class="social__link" href="#">
                            <img src="https://clipart-best.com/img/email/email-clip-art-43.png" alt="">
                        </a>
                        <a class="social__link" href="#">
                            <img src="https://im0-tub-kz.yandex.net/i?id=2ff455ad2012d955b4ebf0a5f4bbe768&n=13" alt="">
                        </a>
                        <a class="social__link" href="#">
                            <img src="https://i.pinimg.com/originals/f9/98/ab/f998ab810139a6bf1eee1b505a8c0922.png" alt="">
                        </a>
                    </div>

                    <a class="btn" href="#" data-modal="#modal_contact">CONTACT</a>
                    <button class="btn" type="button" data-modal="#modal_resume">SEE MY RESUME</button>
                </div>
                <img class="intro__photo" src="images/designer_photo.png" alt="">
            </div>
        </div>
    </div> 
    <!-- Intro -->

    <!-- Works -->
    <div class="works">
        <div class="container">
            <div class="works__nav">
                <a class="works__nav-link" href="#" data-filter="all">All</a>
                <a class="works__nav-link" href="#" data-filter="website">Website</a>
                <a class="works__nav-link" href="#" data-filter="mobile">Mobile</a>
                <a class="works__nav-link" href="#" data-filter="java">Java</a>
            </div>

            <div class="portfolio">
                <div class="portfolio__col" data-cat="website">
                    <div class="work" data-modal="#modal_project_1">
                        <img class="work__image" src="images/web1.jpg" alt="">
                        <div class="work__content">
                        <div class="work__cat">Web-design</div>
                        <div class="work__title">
                            Content
                            <time class="work__date" datetime="2020-11-28">2020</time>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="portfolio__col" data-cat="mobile">
                    <div class="work" data-modal="#modal_project_1">
                        <img class="work__image" src="images/web2.jpg" alt="">
                        <div class="work__content">
                        <div class="work__cat">Web + mobile</div>
                        <div class="work__title">
                            Ice-cream
                            <time class="work__date" datetime="2020-11-28">2019</time>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="portfolio__col" data-cat="website">
                    <div class="work" data-modal="#modal_project_1">
                        <img class="work__image" src="images/web3.jpg" alt="">
                        <div class="work__content">
                        <div class="work__cat">Website</div>
                        <div class="work__title">
                            San Jose
                            <time class="work__date" datetime="2020-11-28">2019</time>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="portfolio__col" data-cat="java">
                    <div class="work" data-modal="#modal_project_1">
                        <img class="work__image" src="images/web4.png" alt="">
                        <div class="work__content">
                        <div class="work__cat">JavaScript</div>
                        <div class="work__title">
                            JS Documentation
                            <time class="work__date" datetime="2020-11-28">2018</time>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="portfolio__col" data-cat="java">
                    <div class="work" data-modal="#modal_project_1">
                        <img class="work__image" src="images/web5.png" alt="">
                        <div class="work__content">
                        <div class="work__cat">Map</div>
                        <div class="work__title">
                            Interactive Map
                            <time class="work__date" datetime="2020-11-28">2020</time>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="portfolio__col" data-cat="website">
                    <div class="work" data-modal="#modal_project_1">
                        <img class="work__image" src="images/web6.png" alt="">
                        <div class="work__content">
                        <div class="work__cat">Web</div>
                        <div class="work__title">
                            My works
                            <time class="work__date" datetime="2020-11-28">2020</time>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <a class="btn  btn--sm" href="#">LOAD MORE WORK</a>
            </div>
        </div>
    </div>
    <!-- Works -->




    <!-- Footer -->
    <footer class="footer">
    <div class="footer__copy">
        <div class="container">
            <div class="copy__text">
                © 2020 Template by Marte Stanislav. All rights reserved.
            </div>
        </div>
    </div>
    </footer>
    <!-- Footer -->

    <!-- Modals -->
    <div class="modal" id="modal_project_1">
        <div class="modal__dialog">

            <button class="modal__close" type="button" data-close>
                <img src="images/cancel.svg" alt="">
            </button>

            <div class="modal-work">
                <div class="modal-work__photo">
                    <div data-slider="slick">
                        <div>
                            <img class="modal__photo" src="https://placehold.it/790x780" alt="">
                        </div>
                        <div>
                            <img class="modal__photo" src="https://placehold.it/790x780/333" alt="">
                        </div>
                    </div>
                </div>
                <div class="modal-work__content">
                    <div class="modal-work__header">
                        <h3 class="modal-work__title">Project title</h3>
                        <div class="modal-work__info">category <span class="divider">|</span> 2020</div>
                    </div>

                    <div class="modal-work__client">
                        <div class="modal-work__client-title">Client:</div>
                        <div class="modal-work__client-company">Creative agency</div>
                    </div>

                    <div class="modal-work__text">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde eum expedita at sequi assumenda dolorum corrupti perspiciatis iste culpa harum itaque, quam quos ipsa maiores eligendi illum animi, rerum exercitationem?</p>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde eum expedita at sequi assumenda dolorum corrupti perspiciatis iste culpa harum itaque, quam quos ipsa maiores eligendi illum animi, rerum exercitationem?</p>
                    </div>

                    <div class="modal-work__footer">
                        <button class="modal-work__btn slickPrev" type="button">
                            <img src="images/left-arrow.svg" height="12" alt="">
                            Previous
                        </button>
                        <button class="modal-work__btn slickNext" type="button">
                            <img src="images/next.svg" height="12" alt="">
                            Next
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="modal_resume"> 
        <div class="modal__dialog">

            <button class="modal__close" type="button" data-close>
                <img src="images/cancel.svg" alt="">
            </button>
            <div class="modal__content">
                <h3 class="modal__title text-center">Resume</h3>
                <div class="text-center">
                    <a class="btn btn--res" href="#">Download pdf</a>
                    <a class="btn btn--res" href="#">Print</a>
                </div>

                <div class="timeline">
                    <div class="timeline__cal timeline__cal--left">
                        <h4 class="timeline__title">Experience</h4>

                        <div class="timeline__item">
                            <time class="timeline__date" datetime="11-21-2019">2017 - <b>Present</b></time>
                            <h5 class="timeline__subtitle">Photoshop</h5>
                            <div class="timeline__position">Art&Macets</div>
                            <div class="timeline__text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae, architecto. Consequatur reiciendis amet voluptas molestias praesentium fugiat iusto dolores suscipit quasi, perferendis sapiente fugit pariatur vel animi asperiores atque beatae!</p>
                            </div>
                        </div>

                        <div class="timeline__item">
                            <time class="timeline__date" datetime="11-21-2019">2018-2019</time>
                            <h5 class="timeline__subtitle">Freelancer</h5>
                            <div class="timeline__position">Art</div>
                            <div class="timeline__text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae, architecto. Consequatur reiciendis amet voluptas molestias praesentium fugiat iusto dolores suscipit quasi, perferendis sapiente fugit pariatur vel animi asperiores atque beatae!</p>
                            </div>
                        </div>

                        <div class="timeline__item">
                            <time class="timeline__date" datetime="11-21-2019">2020</time>
                            <h5 class="timeline__subtitle">Web-designer</h5>
                            <div class="timeline__position">Design</div>
                            <div class="timeline__text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae, architecto. Consequatur reiciendis amet voluptas molestias praesentium fugiat iusto dolores suscipit quasi, perferendis sapiente fugit pariatur vel animi asperiores atque beatae!</p>
                            </div>
                        </div>

                    </div>
                    <div class="timeline__cal timeline__cal--right">
                        <h4 class="timeline__title">Education</h4>

                        <div class="timeline__item">
                            <time class="timeline__date" datetime="11-21-2019">2007-2019</time>
                            <h5 class="timeline__subtitle">Photoshop&Blender</h5>
                            <div class="timeline__position">School</div>
                        </div>

                        <div class="timeline__item">
                            <time class="timeline__date" datetime="11-21-2019">2019-2023</time>
                            <h5 class="timeline__subtitle">Fullstack Developer</h5>
                            <div class="timeline__position">University</div>
                        </div>

                        <h4 class="timeline__title">Skills</h4>

                        <div class="progress-bar">
                            <div class="progress-bar__item">
                                <div class="progress-bar__left">
                                    <div class="progress-bar__title">Java</div>
                                </div>
                                <div class="progress-bar__right">
                                    <div class="progress-bar__bar">
                                        <div class="progress-bar__progress" style="width: 60%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="progress-bar__item">
                            <div class="progress-bar__left">
                                <div class="progress-bar__title">Photoshop</div>
                            </div>
                            <div class="progress-bar__right">
                                <div class="progress-bar__bar">
                                    <div class="progress-bar__progress" style="width: 85%;"></div>
                                </div>
                            </div>
                        </div>

                        <div class="progress-bar__item">
                            <div class="progress-bar__left">
                                <div class="progress-bar__title">Layout</div>
                            </div>
                            <div class="progress-bar__right">
                                <div class="progress-bar__bar">
                                    <div class="progress-bar__progress" style="width: 73%;"></div>
                                </div>
                            </div>
                        </div>

                        <div class="progress-bar__item">
                            <div class="progress-bar__left">
                                <div class="progress-bar__title">SQL</div>
                            </div>
                            <div class="progress-bar__right">
                                <div class="progress-bar__bar">
                                    <div class="progress-bar__progress" style="width: 70%;"></div>
                                </div>
                            </div>
                        </div>

                        <h4 style="margin-top: 2.6rem;" class="timeline__title">Awards</h4>

                        <div class="timeline__item">
                            <time class="timeline__date" datetime="11-21-2019">2020</time>
                            <h5 class="timeline__subtitle">THE BEST PROJECT</h5>
                            <div class="timeline__position">Web-design</div>
                            <div class="timeline__text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae, architecto.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-center">
                    <a class="btn" href="#" data-modal="#modal_contact">Contact me</a>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="modal_contact" >
        <div class="modal__dialog modal__dialog--sm1">

            <button class="modal__close" type="button" data-close>
                <img src="images/cancel.svg" alt="">
            </button>

                <div class="contact">
                    <div class="contact__left">
                        <h3 class="modal__title modal__title--mb">Let's talk!</h3>
                        <div class="modal__subtitle">Ask me, tell me everything</div>

                        <ul class="contact__info">
                            <li class="contact__info-item">
                                <img class="contact__info-icon" src="images/phone-call.svg" style="width: 17x; height: 15px;" alt="">
                                87714648995
                            </li>
                            <li class="contact__info-item">
                                <img class="contact__info-icon" src="images/email.svg" style="width: 17x; height: 15px;" alt="">
                                martestas@mail.ru
                            </li>
                        </ul>

                        <form action="" method="POST">
                            <div class="form__group">
                                <label class="form__label" for="input-email">Adress e-mail</label>
                                <input class="form__input" name="input-email" type="text" id="input-email" placeholder="example@mail.ru">
                            </div>  

                            <div class="form__group">
                                <label class="form__label" for="input-text">Message</label>
                                <textarea class="form__textarea" style="height: 200px; resize: none;" name="input-text" id="input-text" placeholder="write your message"></textarea>
                            </div> 
                            
                            <div class="text-right">
                                <button class="btn" type="submit">SEND</button>
                            </div>
                        </form>
                    </div>
                    <div class="contack__right"></div>
                </div>
        </div>
    </div>
    <!-- Modals -->
<script src="js/slick.min.js"></script>
<script src="{{asset('/js/app.js')}}"></script>
<script src="форма обратной связи/contactform.js"></script>

</body>
</html>