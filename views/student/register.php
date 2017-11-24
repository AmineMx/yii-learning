<?php
/* @var $this yii\web\View */

$form = \yii\widgets\ActiveForm::begin();
?>


    <div class="row">
		<?php
		echo \yii\helpers\Html::errorSummary( $model );
		?>
        <div class="col-md-6"><?php
			echo $form->field( $model, 'firstname' );
			?></div>
        <div class="col-md-6">
			<?php
			echo $form->field( $model, 'lastname' );
			?>
        </div>
    </div>
<?php
echo $form->field( $model, 'email' );
echo $form->field( $model, 'password' );
echo $form->field( $model, 'age' );
?>
<?php
echo \yii\bootstrap\Html::submitButton( 'Soumettre', [ 'class' => 'btn btn-primary' ] );
\yii\widgets\ActiveForm::end();
