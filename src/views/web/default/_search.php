<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use portalium\menu\Module;
/* @var $this yii\web\View */
/* @var $model portalium\menu\models\MenuSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="menu-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_menu') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'slug') ?>

    <?= $form->field($model, 'date_create') ?>

    <?= $form->field($model, 'date_update') ?>

    <div class="form-group">
        <?= Html::submitButton(Module::t('Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Module::t('Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
