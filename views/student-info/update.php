<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\StuInfo */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Stu Info',
]) . ' ' . $model->stu_info_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Stu Infos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->stu_info_id, 'url' => ['view', 'id' => $model->stu_info_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="stu-info-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
