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
    

    

    <!-- About -->
    <section class="about">
        <div class="container">

            <div class="about__inner">
                <div class="about__photo">
                    <img class="img" src="images/W4PrSvAnmX4.jpg" alt="">
                </div>
                <div class="about__content">
                    <h3 class="about__title">ABOUT ME</h3>
                    <h2 class="about__bigtitle">WHO AM I</h2>
                    <div class="about__text">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum ex aperiam ipsam, cupiditate ratione accusantium voluptatum nobis provident voluptate, aut maxime at corporis officiis porro! Labore animi repellat modi fugit!</p>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum ex aperiam ipsam, cupiditate ratione accusantium voluptatum nobis provident voluptate, aut maxime at corporis officiis porro! Labore animi repellat modi fugit!</p>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum ex aperiam ipsam, cupiditate ratione accusantium voluptatum nobis provident voluptate, aut maxime at corporis officiis porro! Labore animi repellat modi fugit!</p>
                    </div>
                    <a class="btn" href="#" data-modal="#modal_contact">CONTACT</a>
                    <button class="btn" type="button" data-modal="#modal_resume">SEE MY RESUME</button>
                </div>
            </div>
            <div class="blog__footer">
                <a class="link" href="#" onclick="returnTo()"><br>Back to portfolio</a>
                <script>
                    function returnTo() {
                    location.replace("https://lab3/portfolio")
                         }
                </script>
            </div>
        </div>
    </section>
    <!-- About -->


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