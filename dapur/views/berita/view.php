<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Berita */

$this->title = 'Berita '.$model->judul;
$subtitle = 'Detail Berita dengan id: '.$model->id;
$this->params['breadcrumbs'][] = ['label' => 'Berita', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="berita-view">
    <div class="box box-primary">
        <div class="box-header">
            <h3 class="box-title"><?= Html::encode($subtitle) ?></h3>
            <div class="box-tools pull-right">
                <?= Html::a('Ubah', ['update', 'id' => $model->id], ['class' => 'btn btn-primary btn-sm']) ?>
                <?= Html::a('Hapus', ['delete', 'id' => $model->id], [
                    'class' => 'btn btn-danger btn-sm',
                    'data' => [
                        'confirm' => 'Anda yakin ingin menghapus item ini?',
                        'method' => 'post',
                    ],
                ]) ?>
            </div>
        </div>
        <div class="box-body">
             <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'judul',
            [
                'attribute'=>'tanggal',
                'format' => ['date', 'php:d F Y'],
            ],
            'isi:ntext',
            'kategori.nama_kategori',
        ],
    ]) ?>
        </div>
    </div>
    

</div>
