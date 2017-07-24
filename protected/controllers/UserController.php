<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/11
 * Time: 16:29
 */
class UserController extends  Controller{


    function actionLogin(){
        $this->render('login');

    }

    function actionRegister(){
        $this->renderPartial('register');
    }

    function  actionTtest(){
        $sql1="select * from student";
        $data=Yii::app()->db->createCommand($sql1)->queryAll(true);
        //print_r($data);
        $this->renderPartial('ttest',['data'=>$data]);
    }
}