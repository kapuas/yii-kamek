<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel dapur\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'User';
$subtitle = 'Daftar '.'User';
$this->params['breadcrumbs'][] = $subtitle;
?>
<div class="user-index">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title"><?= Html::encode($subtitle) ?></h3>
            <div class="box-tools pull-right">
              <?= Html::a('Tambah User', ['create'], ['class' => 'btn btn-success btn-sm']) ?>
            </div>
        </div>
        <div class="box-body">
               <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

 

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'username',
            'auth_key',
            'password_hash',
            'password_reset_token',
            // 'email:email',
            // 'status',
            // 'created_at',
            // 'updated_at',
            // 'role',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
        </div>
        <div class="box-footer">
            Yii2-Kamek
        </div>

    </div>


  

</div>
