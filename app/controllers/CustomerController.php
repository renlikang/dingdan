<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\Customer;

class CustomerController extends Controller
{
    public function actionIndex()
    {
        $model = Customer::find()->All();
        return $this->render('index',array('model'=>$model));
    }

    public function actionAdd()
    {
        $title = '添加客户信息';
        if( yii::$app->request->Get('id'))
        {
            $model = Customer::findone(yii::$app->request->Get('id'));
            $title = '更新客户信息';
        }else
        {
            $model = new Customer;
        }
        
        if( yii::$app->request->getIsPost() )
        {
            $model->attributes = yii::$app->request->Post('Customer');
            if($model->save())
            {
                Yii::$app->session->setFlash('contactFormSubmitted');
                $this->redirect(['customer/index']);
            }
        }
        return $this->render('add',array('model'=>$model,'title'=>$title));
    }    
}
