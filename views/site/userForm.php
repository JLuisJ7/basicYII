<?php 
	use yii\helpers\Html;
	use yii\widgets\ActiveForm;
?>

<?php 
	if(Yii::$app->session->getFlash('succes')){
		echo "<div class='alert alert-success'>".Yii::$app->session->getFlash('succes')."</div>";
	}else{}
 ?>
<?php $form = ActiveForm::begin();?>
<?= $form->field($model,'name'); ?>
<?= $form->field($model,'email'); ?>
<?= Html::submitButton('Submit',['class'=>'btn btn-success']); ?>