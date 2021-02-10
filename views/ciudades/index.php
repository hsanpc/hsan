<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CiudadesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ciudades';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ciudades-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Ciudades', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_ciudades',
            'nomb_ciudades',
            'comu_ciudades',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
