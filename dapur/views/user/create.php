<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model dapur\models\User */

$this->title = 'User';
$subtitle = 'Tambah User';
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $subtitle;
?>
<div class="user-create">

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
