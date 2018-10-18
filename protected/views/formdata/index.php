<?php
/* @var $this FormdataController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Formdatas',
);

$this->menu=array(
	array('label'=>'Create Formdata', 'url'=>array('create')),
	array('label'=>'Manage Formdata', 'url'=>array('admin')),
);
?>

<h1>Formdatas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
