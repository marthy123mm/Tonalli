<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AssetSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="asset-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_asset') ?>

    <?= $form->field($model, 'purchase_date') ?>

    <?= $form->field($model, 'description') ?>

    <?= $form->field($model, 'sales_check') ?>

    <?= $form->field($model, 'create_at') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'serial_number') ?>

    <?php // echo $form->field($model, 'ubication') ?>

    <?php // echo $form->field($model, 'id_asset_type') ?>

    <?php // echo $form->field($model, 'id_model') ?>

    <?php // echo $form->field($model, 'id_leasing') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
