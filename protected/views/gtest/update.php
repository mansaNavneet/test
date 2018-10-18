
<?php
use yii\helpers\Html;
  use yii\widgets\ActiveForm;
  use app\models\Status;
//session_start();
if (Yii::app()->user->isGuest)
{

}
 else { ?>

   <h2>Welcome back <?php echo Yii::app()->user-> name; ?></h2>
   <?php
 }
?>
<div class="container">
  <table class="table">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
<?php foreach ($command as $model) { ?>
  <tr>
<td><?php echo $model['fname']; ?>
  <td><?php echo CHtml::link('Edit',array('gtest/Upd','id'=>$model['id']));  ?> </td>
  <td><?php echo CHtml::link('Delete',array('gtest/Del','id'=>$model['id']));  ?></td>
<?php } ?>
</table>
</div>
