<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Berita */

$this->title = ' Berita: ' . $model->id;
$subtitle = 'Ubah Berita: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Berita', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Ubah';
?>
<div class="berita-update">



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
