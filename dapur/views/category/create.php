<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Category */

$this->title = 'Category';
$sub_title = 'Create Category';
$this->params['breadcrumbs'][] = ['label' => 'Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $sub_title;
?>
<div class="category-create">
<div class="box box-primary">
	<div class="box-header">
		<h3><?= $sub_title ?></h3>
	</div>
	<div class="box-body">

	    <?= $this->render('_form', [
	        'model' => $model,
	    ]) ?>
		
	</div>
</div>

</div>
