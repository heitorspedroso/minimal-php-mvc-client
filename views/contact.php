<?php
    /** @var $this \heitorspedroso\minimalphpmvcframework\View */
    /** @var $model \app\models\ContactForm */

use heitorspedroso\minimalphpmvcframework\form\TextareaField;

$this->title = 'Contact';
?>
<h1>Contact us</h1>

<?php $form = \heitorspedroso\minimalphpmvcframework\form\Form::begin('','post') ?>
<?php echo $form->field($model, 'subject'); ?>
<?php echo $form->field($model, 'email'); ?>
<?php echo new TextareaField($model, 'body') ?>
    <button type="submit" class="btn btn-primary">Submit</button>
<?php \heitorspedroso\minimalphpmvcframework\form\Form::end(); ?>