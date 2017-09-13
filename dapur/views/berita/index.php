<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\Kategori;
use yii\helpers\ArrayHelper;
use dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $searchModel common\models\BeritaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Berita';
$subtitle = 'Daftar '.'Berita';
$this->params['breadcrumbs'][] = $subtitle;
?>
<div class="berita-index">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title"><?= Html::encode($subtitle) ?></h3>
            <div class="box-tools pull-right">
              <?= Html::a('Tambah Berita', ['create'], ['class' => 'btn btn-success btn-sm']) ?>
            </div>
        </div>
        <div class="box-body">
               <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'judul',
            [
                'attribute'=>'tanggal',
                'value'=>'tanggal',
                'format' => ['date', 'php:d-M-Y'],
                'filter'=>DatePicker::widget([
                    'model' => $searchModel,
                    'attribute' => 'tanggal',
                        'clientOptions' => [
                            'autoclose' => true,
                            'format' => 'yyyy-mm-dd'
                        ]
                ])
            ],
            // 'isi:ntext',
            [
                'attribute'=>'kategori_id',
                'value'=>'kategori.nama_kategori',
                'filter'=>ArrayHelper::map(Kategori::find()->orderBy('id')->asArray()->all(), 'id', 'nama_kategori'),
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
        </div>
        <div class="box-footer">
            Yii2-Kamek
        </div>

    </div>


  

</div>
