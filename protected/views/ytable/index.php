<?php
/* @var $this FormdataController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ytables',
);

$this->menu=array(
	array('label'=>'Create Ytable', 'url'=>array('create')),
	array('label'=>'Manage Ytable', 'url'=>array('admin')),
);
?>

<h1>Ytable</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
