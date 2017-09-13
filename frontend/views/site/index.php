<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Selamat!</h1>

        <p class="lead">Anda berhasil menginstall Yii2 dengan template Yii-kamek.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Memulai Yii2</a></p>
    </div>

    <div class="body-content">

        <div class="row">
        <?php foreach ($berita as $iberita): ?>
            
            <div class="col-lg-4">
                <h2><?php echo $iberita->judul ?></h2>

                <p><?php echo $iberita->isi ?></p>

                <p><a class="btn btn-default" href="#">Selengkapnya &raquo;</a></p>
            </div>
           
        <?php endforeach ?>
        </div>

    </div>
</div>
