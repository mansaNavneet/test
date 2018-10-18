<?php
/* @var $this FormdataController */
/* @var $model Formdata */

$this->breadcrumbs=array(
	'Formdatas'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Formdata', 'url'=>array('index')),
	array('label'=>'Create Formdata', 'url'=>array('create')),
	array('label'=>'Update Formdata', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Formdata', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Formdata', 'url'=>array('admin')),
);
?>

<h1>View Formdata #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'gender',
		'email',
		'phone',
	),
)); ?>
