<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/13
 * Time: 17:24
 */
class UserController extends  Controller{


    function actionLogin(){
        $this->render('login');

    }

    function actionRegister(){
        $this->renderPartial('register');
    }
}