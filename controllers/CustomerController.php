<?php
namespace app\controllers;

use app\models\Customer;
use yii\web\Controller;

class CustomerController extends Controller
{
    public function actionIndex()
    {
        $a=Customer::find()->all();
        echo '<pre>';
        var_dump($a);
        echo '</pre>';
    }

    public function actionView($id)
    {
        $customer=Customer::findOne($id);
        echo '<pre>';
        var_dump($customer);
        echo '</pre>';
    }

    public function actionSave()
    {
        $customer=new Customer();
        $customer->username = 'john';
        $customer->email = 'john.doe@something';
        $customer->save();
        return 'contact created';
    }

    public function actionUpdate($id)
    {
        $customer=Customer::findOne($id);
        $customer->email = 'john.doez.nthg@something';
        $customer->save();
        return 'contact updated';
    }

    public function actionDelete($id)
    {
        $customer=Customer::findOne($id);
        $customer->delete();
        return 'contact deleted';
    }
}

?>