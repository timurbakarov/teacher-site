<!DOCTYPE HTML>
<html>
<head>
    <title>Сайт преподавателя английского языка Сендеровой Дианы</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="Сайт преподавателя английского языка Сендеровой Дианы" />
    <meta name="keywords" content="сайт преподавателя английского языка" />
    <link href="<?=$this->asset->getUrl('css/app.css')?>" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

    <!-- Add fancyBox -->
    <link rel="stylesheet" href="<?=$this->asset->getUrl('fancybox/jquery.fancybox.css')?>" type="text/css" media="screen" />
    <script type="text/javascript" src="<?=$this->asset->getUrl('fancybox/jquery.fancybox.pack.js')?>"></script>
    <script>
        $(document).ready(function() {
            $(".fancybox").fancybox();
        });
    </script>
</head>

<body>
<div id="all">
    <div id="menuleft">
        <a class="logo" href="<?=$this->url->path('home')?>">
            <br />
                Сайт учителя английского языка<br />
                <div style="font-size: 20px;">Сендеровой Дианы</div>
        </a>
        <a class="menuleft1" href="<?=$this->url->path('page', ['page' => 'activity'])?>"><span>Педагогическая<br>деятельность</span></a>
        <a class="menuleft2" href="<?=$this->url->path('page', ['page' => 'for-teachers'])?>"><span>Материалы для<br>преподавателей</span></a>
        <a class="menuleft4" href="<?=$this->url->path('page', ['page' => 'tests'])?>"><span>Тесты<br><br></span></a>
    </div>

    <div id="menu">
        <div class="c_menu">
            <ul>

            </ul>
        </div>
    </div>
    <div id="menutop">
        <a href="http://elementary-english.ru/" target="_blank"><img src="<?=$this->asset->getUrl('img/img-razgovor.jpg')?>" />Начальная<br>школа</a>
        <a href="http://list-english.ru/nagl.html" target="_blank"><img src="<?=$this->asset->getUrl('img/img-ielts.jpg')?>" />Средняя<br>школа</a>
        <a href="http://4ege.ru/video-angliyskiy/" target="_blank"><img src="<?=$this->asset->getUrl('img/img-biznes.jpg')?>" />Старшая<br>школа</a>
    </div>

    <div class="body_content">
        <?php $this->section('content')?>
        <?php $this->stop()?>
    </div>

    <div id="footer">
        <div class="c_footer">
            <div class="footer-9" style="float: none; margin-left: 125px; margin-top: 50px;">
                &copy; 2016, Сайт преподавателя английского языка Сендеровой Дианы
            </div>
        </div>
    </div>
</div>
</body>
</html>