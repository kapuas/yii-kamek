<?php

use yii\helpers\Html;
use frontend\widgets\Alert;
use yii\widgets\ActiveForm;

$this->title = 'Ubah Password';
$this->params['breadcrumbs'][] = ['label' => 'Profile', 'url' => ['/profile/index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="box box-primary">
    
    <!-- /.box-header -->
        
    <div class="box-body">
		<?= Alert::widget() ?>

		<?php $form = ActiveForm::begin(); ?>

		<?= $form->field($user, 'currentPassword')->passwordInput() ?>
		<?= $form->field($user, 'newPassword')->passwordInput() ?>
		<?= $form->field($user, 'newPasswordConfirm')->passwordInput() ?>

		<div class="form-group">
			
		</div>

	</div>
    <!-- /.box-body -->

    <div class="box-footer">
		<?= Html::submitButton('Ganti', ['class' => 'btn btn-primary']) ?>
		<?php ActiveForm::end(); ?>
        <!-- <button class="btn btn-primary" type="submit">Submit</button> -->
	</div>
</div>