<?php
/* @var $this yii\web\View */
?>
<form method="post" action="<?= \yii\helpers\Url::toRoute( [ 'student/register' ] ) ?>">
    <label>Nom :<input name="first_name"></label>
    <label>Pre nom :
        <input name="last_name">
    </label>
    <label>Age : <input name="age"></label>
    <button type="submit">Send</button>

</form>