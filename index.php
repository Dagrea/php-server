<?php
include "scripts/manager.php";
$Manager = new Library();
$Manager->add();//$Manager->add("Хроники Пангеи", "Голд Джон", 244, "Фантастика");
$Manager->edit();//$Manager->add(2,"Хроники Пангеи", "Голд Джон", 244, "Фантастика");
$Manager->delete();//$Manager->delete(3);
$books = $Manager->getAll();
$book = $Manager->search();//$Manager->search(2);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>readmag</title>
        <link rel="icon" href="img/logo.jpg" sizes="16x16" type="image/jpg">     
        <link rel="stylesheet" href="style.css">     
    </head>
    <body>        
        <div class="container">
        <!-- Header-->
        <header class="header">
                <ul class="nav">
                   <li><a href="#">Блог</a></li>
                   <li><a href="#">Каталог</a><div class="vertical-line"></div></li>
                   <li><a href="https://www.example.com">О нас</a><div class="vertical-line"></div></li>
                   <li><a href="http://www.example.com">Оплата</a><div class="vertical-line"></div></li>
                   <li><a href="http://www.example.com">Контакти</a><div class="vertical-line"></div></li>
                </ul>
                <div class="social">
                    <div class="left-social">
                         <img src="img/logo.jpg" alt="logo">
                         <p class="">readmag</p>
                    </div>
                    <div class="logos">
                         <img src="img/youtube.jpg" alt="youtube">
                         <img src="img/twitter.jpg" alt="twitter">
                         <img src="img/facebook.jpg" alt="facebook">
                         <img src="img/insta.jpg" alt="insta">
                    </div>
                </div>
                <div class="tools">
                    <div class="search-c">
                        <div class="filter-im">
                            <img src="img/filter.png" alt="filter">
                        </div>
                         <div class="search">
                          </div>
                         <img src="img/search.png" alt="search">
                     </div>
                    <img src="img/heart.jpg" alt="favorite">
                    <img src="img/cart.png" alt="cart">
                </div>
        </header>
        <!-- Section-->
        <div class="inline">
        <div class="filters">
            <div class="filter">
                 Жанр <img src="img/arrow-down.png" alt="arrow">
            </div>   
            <div class="filter"> 
                 Язык <img src="img/arrow-down.png" alt="arrow">
            </div>  
            <div class="filter">
                 Автор <img src="img/arrow-down.png" alt="arrow">
            </div>  
            <div class="filter">
                 Издательство <img src="img/arrow-down.png" alt="arrow">
            </div>  
            <div class="filter">
                 Возраст <img src="img/arrow-down.png" alt="arrow">
            </div>           
        </div>
        <div class="items">
            <div class="item">
                 <img src="img/atlant.jpeg" alt="cover">
                 <div class="item-text">
                    <div class="item-na">
                      <div class="item-name">Атлант расправил плечи. Часть первая Непротиворечие</div>
                      <div class="item-autor">Айн Рэнд</div>
                    </div>
                    <div class="item-desc">К власти в США приходят социалисты и правительство берет курс на
«равные возможности», считая справедливым за счет талантливых и
состоятельных сделать богатыми никчемных и бесталанных. Гонения на
бизнес приводят к разрушению экономики, к тому же один за другим при
загадочных обстоятельствах начинают исчезать талантливые люди и
лучшие предприниматели...
</div>
                    <div class="item-buttons">
                      <div class="item-button">Купить</div>
                      <div class="item-button">В избранное</div>  
                    </div>
                 </div>
            </div>      
            <div class="item">
                 <img src="img/atlant.jpeg" alt="cover">
                 <div class="item-text">
                    <div class="item-na">
                      <div class="item-name">Атлант расправил плечи. Часть первая Непротиворечие</div>
                      <div class="item-autor">Айн Рэнд</div>
                    </div>
                    <div class="item-desc">К власти в США приходят социалисты и правительство берет курс на
«равные возможности», считая справедливым за счет талантливых и
состоятельных сделать богатыми никчемных и бесталанных. Гонения на
бизнес приводят к разрушению экономики, к тому же один за другим при
загадочных обстоятельствах начинают исчезать талантливые люди и
лучшие предприниматели...
</div>
                    <div class="item-buttons">
                      <div class="item-button">Купить</div>
                      <div class="item-button">В избранное</div>  
                    </div>
                 </div>
            </div>      
            <div class="item">
                 <img src="img/atlant.jpeg" alt="cover">
                 <div class="item-text">
                    <div class="item-na">
                      <div class="item-name">Атлант расправил плечи. Часть первая Непротиворечие</div>
                      <div class="item-autor">Айн Рэнд</div>
                    </div>
                    <div class="item-desc">К власти в США приходят социалисты и правительство берет курс на
«равные возможности», считая справедливым за счет талантливых и
состоятельных сделать богатыми никчемных и бесталанных. Гонения на
бизнес приводят к разрушению экономики, к тому же один за другим при
загадочных обстоятельствах начинают исчезать талантливые люди и
лучшие предприниматели...
</div>
                    <div class="item-buttons">
                      <div class="item-button">Купить</div>
                      <div class="item-button">В избранное</div>  
                    </div>
                 </div>
            </div>      
            <div class="item">
                 <img src="img/atlant.jpeg" alt="cover">
                 <div class="item-text">
                    <div class="item-na">
                      <div class="item-name">Атлант расправил плечи. Часть первая Непротиворечие</div>
                      <div class="item-autor">Айн Рэнд</div>
                    </div>
                    <div class="item-desc">К власти в США приходят социалисты и правительство берет курс на
«равные возможности», считая справедливым за счет талантливых и
состоятельных сделать богатыми никчемных и бесталанных. Гонения на
бизнес приводят к разрушению экономики, к тому же один за другим при
загадочных обстоятельствах начинают исчезать талантливые люди и
лучшие предприниматели...
</div>
                    <div class="item-buttons">
                      <div class="item-button">Купить</div>
                      <div class="item-button">В избранное</div>  
                    </div>
                 </div>
            </div>      
            <div class="item">
                 <img src="img/atlant.jpeg" alt="cover">
                 <div class="item-text">
                    <div class="item-na">
                      <div class="item-name">Атлант расправил плечи. Часть первая Непротиворечие</div>
                      <div class="item-autor">Айн Рэнд</div>
                    </div>
                    <div class="item-desc">К власти в США приходят социалисты и правительство берет курс на
«равные возможности», считая справедливым за счет талантливых и
состоятельных сделать богатыми никчемных и бесталанных. Гонения на
бизнес приводят к разрушению экономики, к тому же один за другим при
загадочных обстоятельствах начинают исчезать талантливые люди и
лучшие предприниматели...
</div>
                    <div class="item-buttons">
                      <div class="item-button">Купить</div>
                      <div class="item-button">В избранное</div>  
                    </div>
                 </div>
            </div>    
            <div class="item">
                 <img src="img/atlant.jpeg" alt="cover">
                 <div class="item-text">
                    <div class="item-na">
                      <div class="item-name">Атлант расправил плечи. Часть первая Непротиворечие</div>
                      <div class="item-autor">Айн Рэнд</div>
                    </div>
                    <div class="item-desc">К власти в США приходят социалисты и правительство берет курс на
«равные возможности», считая справедливым за счет талантливых и
состоятельных сделать богатыми никчемных и бесталанных. Гонения на
бизнес приводят к разрушению экономики, к тому же один за другим при
загадочных обстоятельствах начинают исчезать талантливые люди и
лучшие предприниматели...
</div>
                    <div class="item-buttons">
                      <div class="item-button">Купить</div>
                      <div class="item-button">В избранное</div>  
                    </div>
                 </div>
            </div>      
            <div class="item">
                 <img src="img/atlant.jpeg" alt="cover">
                 <div class="item-text">
                    <div class="item-na">
                      <div class="item-name">Атлант расправил плечи. Часть первая Непротиворечие</div>
                      <div class="item-autor">Айн Рэнд</div>
                    </div>
                    <div class="item-desc">К власти в США приходят социалисты и правительство берет курс на
«равные возможности», считая справедливым за счет талантливых и
состоятельных сделать богатыми никчемных и бесталанных. Гонения на
бизнес приводят к разрушению экономики, к тому же один за другим при
загадочных обстоятельствах начинают исчезать талантливые люди и
лучшие предприниматели...
</div>
                    <div class="item-buttons">
                      <div class="item-button">Купить</div>
                      <div class="item-button">В избранное</div>  
                    </div>
                 </div>
            </div>      
            <div class="item">
                 <img src="img/atlant.jpeg" alt="cover">
                 <div class="item-text">
                    <div class="item-na">
                      <div class="item-name">Атлант расправил плечи. Часть первая Непротиворечие</div>
                      <div class="item-autor">Айн Рэнд</div>
                    </div>
                    <div class="item-desc">К власти в США приходят социалисты и правительство берет курс на
«равные возможности», считая справедливым за счет талантливых и
состоятельных сделать богатыми никчемных и бесталанных. Гонения на
бизнес приводят к разрушению экономики, к тому же один за другим при
загадочных обстоятельствах начинают исчезать талантливые люди и
лучшие предприниматели...
</div>
                    <div class="item-buttons">
                      <div class="item-button">Купить</div>
                      <div class="item-button">В избранное</div>  
                    </div>
                 </div>
            </div>      
            <div class="item">
                 <img src="img/atlant.jpeg" alt="cover">
                 <div class="item-text">
                    <div class="item-na">
                      <div class="item-name">Атлант расправил плечи. Часть первая Непротиворечие</div>
                      <div class="item-autor">Айн Рэнд</div>
                    </div>
                    <div class="item-desc">К власти в США приходят социалисты и правительство берет курс на
«равные возможности», считая справедливым за счет талантливых и
состоятельных сделать богатыми никчемных и бесталанных. Гонения на
бизнес приводят к разрушению экономики, к тому же один за другим при
загадочных обстоятельствах начинают исчезать талантливые люди и
лучшие предприниматели...
</div>
                    <div class="item-buttons">
                      <div class="item-button">Купить</div>
                      <div class="item-button">В избранное</div>  
                    </div>
                 </div>
            </div>     
            <div class="item">
                 <img src="img/atlant.jpeg" alt="cover">
                 <div class="item-text">
                    <div class="item-na">
                      <div class="item-name">Атлант расправил плечи. Часть первая Непротиворечие</div>
                      <div class="item-autor">Айн Рэнд</div>
                    </div>
                    <div class="item-desc">К власти в США приходят социалисты и правительство берет курс на
«равные возможности», считая справедливым за счет талантливых и
состоятельных сделать богатыми никчемных и бесталанных. Гонения на
бизнес приводят к разрушению экономики, к тому же один за другим при
загадочных обстоятельствах начинают исчезать талантливые люди и
лучшие предприниматели...
</div>
                    <div class="item-buttons">
                      <div class="item-button">Купить</div>
                      <div class="item-button">В избранное</div>  
                    </div>
                 </div>
            </div>         
        </div>
    </div>
        <!-- Footer-->
        <div class="footer">
          <p>dagonrha@gmail.com</p><p>+3809165034</p><p>Copyright© 2021 Alex Zhuravliov</p>
        </div>
        </div>
</body>
</html>