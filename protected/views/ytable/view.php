<?php
/* @var $this FormdataController */
/* @var $model Formdata */

$this->breadcrumbs=array(
	'Ytables'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Ytable', 'url'=>array('index')),
	array('label'=>'Create Ytable', 'url'=>array('create')),
	array('label'=>'Update Ytable', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Ytable', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Ytable', 'url'=>array('admin')),
);
?>

<h1>View Ytable #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'city',
		'email',
	),
)); ?>
