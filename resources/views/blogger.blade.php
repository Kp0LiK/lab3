<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/css/style.css')}}"/>
    <title>Document</title>
</head>
<body>
<section class="blog">
        <div class="container">
            <div class="blog__header">
                <h3 class="blog__title">blog</h3>
                <div class="blog__text">A little bit about my life</div>
            </div>
            <div class="articles">
                <div class="articles__col">
                    <div class="articles__item">
                        <div class="articles__header">
                            <time class="articles__time">23<br>dec</time>
                            <a href="#">
                            <img class="articles__photo" src="images/1.jpg" alt="">
                            </a>
                        </div>
                        <div class="articles__content"></div>
                        <h4 class="articles__title">
                            <a href="#"> my best works </a></h4>
                        <div class="articles__cat">category</div>
                        <div class="articles__text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, illum. Sint nesciunt tempore animi recusandae sequi expedita sed. Quidem ratione reprehenderit atque! Nemo necessitatibus unde doloribus quod, ipsam dignissimos laboriosam!</p>
                        </div>
                    </div>
                    <a class="btn btn--sm" href="#">read more</a>
                </div>

                <div class="articles__col">
                    <div class="articles__item">
                        <div class="articles__header">
                            <time class="articles__time">05<br>june</time>
                            <a href="#">
                            <img class="articles__photo" src="images/My-Story-1.jpg" alt="">
                            </a>
                        </div>
                        <div class="articles__content"></div>
                        <h4 class="articles__title">
                            <a href="#"> my story </a></h4>
                        <div class="articles__cat">category</div>
                        <div class="articles__text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, illum. Sint nesciunt tempore animi recusandae sequi expedita sed. Quidem ratione reprehenderit atque! Nemo necessitatibus unde doloribus quod, ipsam dignissimos laboriosam!</p>
                        </div>
                    </div>
                    <a class="btn btn--sm" href="#">read more</a>
                </div>

                <div class="articles__col">
                    <div class="articles__item">
                        <div class="articles__header">
                            <time class="articles__time">16<br>may</time>
                            <a href="#">
                            <img class="articles__photo" src="images/freelance.jpg" alt="">
                            </a>
                        </div>
                        <div class="articles__content"></div>
                        <h4 class="articles__title">
                            <a href="#"> freelance </a></h4>
                        <div class="articles__cat">category</div>
                        <div class="articles__text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, illum. Sint nesciunt tempore animi recusandae sequi expedita sed. Quidem ratione reprehenderit atque! Nemo necessitatibus unde doloribus quod, ipsam dignissimos laboriosam!</p>
                        </div>
                    </div>
                    <a class="btn btn--sm" href="#">read more</a>
                </div>

                <div class="articles__col">
                    <div class="articles__item">
                        <div class="articles__header">
                            <time class="articles__time">16<br>may</time>
                            <a href="#">
                            <img class="articles__photo" src="images/facts.jpg" alt="">
                            </a>
                        </div>
                        <div class="articles__content"></div>
                        <h4 class="articles__title">
                            <a href="#"> Facts about me </a></h4>
                        <div class="articles__cat">category</div>
                        <div class="articles__text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, illum. Sint nesciunt tempore animi recusandae sequi expedita sed. Quidem ratione reprehenderit atque! Nemo necessitatibus unde doloribus quod, ipsam dignissimos laboriosam!</p>
                        </div>
                    </div>
                    <a class="btn btn--sm" href="#">read more</a>
                </div>
            </div>
            <div class="blog__footer">
                <a class="link" href="#">See more posts</a>
                <a class="link" href="#" onclick="returnTo()"><br>Back to portfolio</a>
                <script>
                    function returnTo() {
                    location.replace("https://lab3/portfolio")
                         }
                </script>
            </div>
        </div>
    </section>
</body>
</html>