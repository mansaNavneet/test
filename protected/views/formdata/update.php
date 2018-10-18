<?php
/* @var $this FormdataController */
/* @var $model Formdata */

$this->breadcrumbs=array(
	'Formdatas'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Formdata', 'url'=>array('index')),
	array('label'=>'Create Formdata', 'url'=>array('create')),
	array('label'=>'View Formdata', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Formdata', 'url'=>array('admin')),
);
?>

<h1>Update Formdata <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>