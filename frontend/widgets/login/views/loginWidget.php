<?php

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $user \common\models\LoginForm */
/* @var $title string */

$this->registerCss('
#login-form .form-control {
  position: relative;
  height: auto;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  padding: 10px;
  font-size: 16px;
}
');
?>
<div class="panel panel-default">
  <div class="panel-heading"><?= $title ?></div>
  <div class="panel-body">
    <?php $form = ActiveForm::begin(['id' => 'login-form', 'enableClientValidation' => false]); ?>
        <?= $form->field($user, 'username', [
            'template' => '<div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>{input}</div>{error}',
            'inputOptions' => [
              'placeholder' => $user->getAttributeLabel('username'),
            ],
          ])->label(false);
        ?>
        <?= $form->field($user, 'password', [
            'template' => '<div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>{input}</div>{error}',
            'inputOptions' => [
              'placeholder' => $user->getAttributeLabel('password'),
            ],
          ])->passwordInput()->label(false);
        ?>
        <div style="color:#999;margin:1em 0">
            <?= Yii::t('app', 'If you forgot your password you can ') . Html::a(Yii::t('app', 'reset it'), ['/site/request-password-reset']) ?>.
        </div>
        <div class="form-group">
            <?= Html::submitButton(Yii::t('app', 'Log in'), ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            <?= Html::a(Yii::t('app', 'Sign up now!'), ['/site/signup']) ?>
        </div>
    <?php ActiveForm::end(); ?>
  </div>
</div>
