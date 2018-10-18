<?php

class CustomController extends Controller
{
	public function actionIndex()
	{
		$this->render('greet');
	}
}
