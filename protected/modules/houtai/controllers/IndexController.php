<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/13
 * Time: 17:56
 */
class IndexController extends Controller{


    function actionHead(){
        $this->renderPartial('head');
    }
    function actionLeft(){
        $this->renderPartial('left');

    }
    function actionRight(){
        $this->renderPartial('right');
    }
    function actionIndex(){
        $this->renderPartial('index');
    }
}