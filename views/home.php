<?php $this->layout('layouts/default') ?>

<?php $this->section('content')?>

    <div class="post">
        <div>
            <img src="<?=$this->asset->getUrl('img/self2.jpg')?>" style="float: left; padding-right: 20px;" />

            <p>
                Образование: Воронежский госуниверситет 2005 г.<br />
                Лингвист. <br />
                Преподаватель по специальности : теория и методика преподавания
                иностранных языков и культур<br />

                Квалификационная категория: первая
            </p>

            <p>
                <a class="fancybox" rel="group" href="<?=$this->asset->getUrl('img/certificates/FpiccPR7Ftg.jpg')?>">
                    <img src="<?=$this->asset->getUrl('img/certificates/FpiccPR7Ftg-preview.jpg')?>">
                </a>
            </p>

        </div>

        <div style="clear: both;"></div>

        <div style="margin-top: 20px;">
            <a class="fancybox" rel="group" href="<?=$this->asset->getUrl('img/certificates/d-ujH3d8PxU.jpg')?>">
                <img src="<?=$this->asset->getUrl('img/certificates/d-ujH3d8PxU-preview.jpg')?>">
            </a>

            <a class="fancybox" rel="group" href="<?=$this->asset->getUrl('img/certificates/l8LMchwY-H8.jpg')?>">
                <img src="<?=$this->asset->getUrl('img/certificates/l8LMchwY-H8-preview.jpg')?>">
            </a>
        </div>
    </div>

<?php $this->append()?>
