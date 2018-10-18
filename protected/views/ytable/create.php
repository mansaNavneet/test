<?php
/* @var $this FormdataController */
/* @var $model Formdata */

$this->breadcrumbs=array(
	'Ytables'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Ytable', 'url'=>array('index')),
	array('label'=>'Manage Ytable', 'url'=>array('admin')),
);
?>

<h1>Create Formdata</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
