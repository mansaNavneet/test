<?php
/* @var $this FormdataController */
/* @var $model Formdata */

$this->breadcrumbs=array(
	'Formdatas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Formdata', 'url'=>array('index')),
	array('label'=>'Manage Formdata', 'url'=>array('admin')),
);
?>

<h1>Create Formdata</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>