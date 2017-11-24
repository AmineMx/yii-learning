<?php
/**
 * Project :yii-learning
 * User: Amine
 * Date: 24/11/2017
 * Time: 10:41
 *
 **/

/**
 * @var \yii\web\View $this
 */

?>
<?php $this->beginBlock( 'header' ) ?>
    <h3>Hello</h3>
    <p style="text-transform: capitalize">AMINE</p>
<?php
$this->endBlock(); ?>

    <h1>Here i am </h1>

<?php
echo $this->render( '_block' );
?>