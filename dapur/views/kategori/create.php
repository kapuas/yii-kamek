<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Kategori */

$this->title = 'Kategori';
$subtitle = 'Tambah Kategori';
$this->params['breadcrumbs'][] = ['label' => 'Kategoris', 'url' => ['index']];
$this->params['breadcrumbs'][] = $subtitle;
?>
<div class="kategori-create">

	<div class="box box-primary">
		<div class="box-header with-border">
	    <h3 class="box-title"><?= Html::encode($subtitle) ?></h3>
			
		</div>
		<div class="box-body">
	    	 <?= $this->render('_form', [
		        'model' => $model,
		    ]) ?>
			
		</div>
	</div>

</div>
