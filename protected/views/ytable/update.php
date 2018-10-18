<?php
/* @var $this FormdataController */
/* @var $model Formdata */

$this->breadcrumbs=array(
	'Ytables'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Ytable', 'url'=>array('index')),
	array('label'=>'Create Ytable', 'url'=>array('create')),
	array('label'=>'View Ytable', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Ytable', 'url'=>array('admin')),
);
?>

<h1>Update Ytable <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
