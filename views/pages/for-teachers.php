<?php $this->layout('layouts/default') ?>

<?php $this->section('content') ?>

<div class="post">

    <h1 style="margin-bottom: 40px;">
        Материалы для преподавателей
    </h1>

    <div class="clouds">
        <a href="<?=$this->url->path('subpage', ['page' => 'for-teachers', 'subpage' => '1'])?>">
            <div class="cloud-1"><span>План урока: идиомы с say, tell, speak, talk</span></div>
        </a>


        <a href="<?=$this->url->path('subpage', ['page' => 'for-teachers', 'subpage' => '2'])?>">
            <div class="cloud-2"><span>EF Elementary Unit 5A - Verb phrases</span></div>
        </a>


        <a href="<?=$this->url->path('subpage', ['page' => 'for-teachers', 'subpage' => '3'])?>">
            <div class="cloud-3"><span>План урока: тема Personality</span></div>
        </a>
    </div>

    <div class="clouds">
        <a href="<?=$this->url->path('subpage', ['page' => 'for-teachers', 'subpage' => '4'])?>">
            <div class="cloud-4"><span>План урока: тема Travelling / тема London</span></div>
        </a>


        <a href="<?=$this->url->path('subpage', ['page' => 'for-teachers', 'subpage' => '5'])?>">
            <div class="cloud-5"><span>Jazz Chants: Are you a student?</span></div>
        </a>


        <a href="<?=$this->url->path('subpage', ['page' => 'for-teachers', 'subpage' => '6'])?>">
            <div class="cloud-6"><span>EF Elementary Unit 3A - Verb phrases</span></div>
        </a>
    </div>
</div>

<?php $this->append() ?>
