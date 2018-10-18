<?php
//print_r($command);
foreach ($command as $key ) {
//echo  $key['image'];

?>
<img src="<?php echo Yii::app()->basePath.'/upload/'.$key['image'].'' ?>">
<?php } ?>
