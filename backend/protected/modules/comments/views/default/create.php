<?php
/**
 * Представление создания комментария.
 * @var yii\base\View $this Представление
 * @var common\modules\comments\models\Comment $model Модель
 */

use yii\helpers\Html;
use yii\widgets\Menu;

$this->title = Yii::t('categories', 'Новая категория');
$this->params['control'] = [
    'brandLabel' => Html::encode($this->title)
];

echo $this->render('_form', [
	'model' => $model,
	'statusArray' => $statusArray,
	'userArray' => $userArray
]);