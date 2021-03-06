<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use frontend\models\Prodi;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model frontend\models\Dosen */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dosen-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nidn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tmp_lahir')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_lahir')->textInput() ?>

<!--    <?= $form->field($model, 'jk')->textInput(['maxlength' => true]) ?> -->


    <?= $form->field($model, 'jk')
            ->radioList([
            'L'=> 'Laki-Laki',
            'P'=> 'Perempuan']) ?>



<?php
   $prodis = Prodi::find()->all();
   $list_prodi = ArrayHelper::map($prodis, 'id', 'nama');
   echo $form->field($model, 'prodi_id')->dropDownList(
                        $list_prodi,
                    ['prompt'=>' --- Pilih ---']);

?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
