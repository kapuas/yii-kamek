<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\CategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Categories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title"><?= Html::encode($this->title) ?></h3>
      <?= Html::a('Create Category', ['create'], ['class' => 'btn btn-success pull-right']) ?>
    </div>
    <!-- /.box-header -->
    <!-- form start -->

      <div class="box-body">
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                'id',
                'category_name',

                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]); ?>
      </div>
      <!-- /.box-body -->

      <div class="box-footer">
       Yii2-Kamek
      </div>
</div>
