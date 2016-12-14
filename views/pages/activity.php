<?php $this->layout('layouts/default') ?>

<?php $this->section('content') ?>

<div class="post">

    <h1 style="margin-bottom: 40px;">
        Педагогическая деятельность
    </h1>

    <div class="clouds">
        <a href="<?=$this->url->path('subpage', ['page' => 'activity', 'subpage' => '1'])?>">
            <div class="cloud-1"><span>Разработка урока для 1 класса по теме “Игрушки”
</span></div>
        </a>


        <a href="<?=$this->url->path('subpage', ['page' => 'activity', 'subpage' => '2'])?>">
            <div class="cloud-2"><span>Статья “Игровые упражнения”</span></div>
        </a>


        <a href="<?=$this->url->path('subpage', ['page' => 'activity', 'subpage' => '3'])?>">
            <div class="cloud-3"><span>Разработка урока для 6 класса по теме “Лондон”</span></div>
        </a>
    </div>

    <div class="clouds">
        <a href="<?=$this->url->path('subpage', ['page' => 'activity', 'subpage' => '4'])?>">
            <div class="cloud-4"><span>Разработка урока для 3 класса по теме “Мои друзья”</span></div>
        </a>


        <a href="<?=$this->url->path('subpage', ['page' => 'activity', 'subpage' => '5'])?>">
            <div class="cloud-5"><span>Технологическая карта урока для 3 класса по теме “Мои друзья”</span></div>
        </a>


        <a href="<?=$this->url->path('subpage', ['page' => 'activity', 'subpage' => '6'])?>">
            <div class="cloud-6"><span>Разработка урока для 10 класса по теме “Профессии”</span></div>
        </a>

        <a href="/web-quest/" target="_blank">
            <div class="cloud-1"><span>Find a job</span></div>
        </a>
    </div>
</div>

<?php $this->append() ?>
