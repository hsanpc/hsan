<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Ciudades */

$this->title = 'Update Ciudades: ' . $model->id_ciudades;
$this->params['breadcrumbs'][] = ['label' => 'Ciudades', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_ciudades, 'url' => ['view', 'id' => $model->id_ciudades]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ciudades-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
