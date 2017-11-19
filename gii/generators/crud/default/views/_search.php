<?php

use yii\helpers\Inflector;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $generator yii\gii\generators\crud\Generator */

echo "<?php\n";
?>

use yii\helpers\Html;
use coreb2c\smartadmin\SAActiveForm;
use coreb2c\smartadmin\JarvisWidget;

/* @var $this yii\web\View */
/* @var $model <?= ltrim($generator->searchModelClass, '\\') ?> */
/* @var $form coreb2c\smartadmin\SAActiveForm */
?>
<?php
echo "<?php\n";
?>

JarvisWidget::begin([
    'id' => '<?= Inflector::camel2id(StringHelper::basename($generator->modelClass)) ?>-search',
    'header' => Yii::t('app', 'Search'),
    'widgetIcon' => 'fa fa-search',
    'padding' => true,
]);
?>

    <?= "<?php " ?>$form = SAActiveForm::begin([
        'id' => <?= Inflector::camel2id(StringHelper::basename($generator->modelClass)) ?>-search-form
        'action' => ['index'],
        'method' => 'post',
    ]); ?>

<?php
$count = 0;
foreach ($generator->getColumnNames() as $attribute) {
    if (++$count < 6) {
        echo "    <?= " . $generator->generateActiveSearchField($attribute) . " ?>\n\n";
    } else {
        echo "    <?php // echo " . $generator->generateActiveSearchField($attribute) . " ?>\n\n";
    }
}
?>
    <div class="form-actions">
        <?= "<?= " ?>Html::submitButton(<?= $generator->generateString('Search') ?>, ['class' => 'btn btn-primary']) ?>
        <?= "<?= " ?>Html::resetButton(<?= $generator->generateString('Reset') ?>, ['class' => 'btn btn-default']) ?>
    </div>

    <?= "<?php " ?>SAActiveForm::end(); ?>
    <?php
echo "<?php\n";
?>
JarvisWidget::end(); 
<?php
echo "?>\n";
?>