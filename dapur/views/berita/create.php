<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Berita */

$this->title = 'Berita';
$subtitle = 'Tambah Berita';
$this->params['breadcrumbs'][] = ['label' => 'Beritas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $subtitle;
?>
<div class="berita-create">

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
