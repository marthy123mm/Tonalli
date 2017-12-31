<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Asset */

$this->title = Yii::t('app', 'Create Asset');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Assets'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="asset-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
