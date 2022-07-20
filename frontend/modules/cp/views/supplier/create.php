<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Users */

$this->title = 'Yetkazib beruvchi qo`shish';
$this->params['breadcrumbs'][] = ['label' => 'Yetkazib beruvchilar', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-create">



    <div class="row">
        <div class="col-12">
            <div class="card">

                <div class="card-body p-4">
                    <?= $this->render('_form', [
                        'model' => $model,
                    ]) ?>
                </div>
            </div>
        </div> <!-- end col -->
    </div>
    <!-- end row -->



</div>
