<?php
namespace app\controllers;
use yii\db\Connection;
use yii\web\Controller;

class UserController extends Controller
{
    public function actionIndex()
    {
        // $db = new Connection([
        //     // 'class' => 'yii\db\Connection',
        //     'dsn' => 'mysql:host=localhost;dbname=user',
        //     'username' => 'root',
        //     'password' => '',
        //     'charset' => 'utf8mb4',
        //     // 'tablePrefix' => ''
        // ]);
        $db=\Yii::$app->db;
        $users=$db->createCommand("SELECT * FROM user")->queryAll();
        echo '<pre>';
        var_dump($users);
        echo '</pre>';
        return "List of users";
    }

    public function actionCreate()
    {
        $db=\Yii::$app->db;
        $users=$db->createCommand()->insert('user',[
            'username'=>'user5',
            'email'=>null,
            'status'=>5
        ])->execute(); 
        return "User created";
    }

    public function actionUpdate()
    {
        $db=\Yii::$app->db;
        $db->createCommand()->update('user',[
            'email'=>'Not Found'
        ], [
            'email'=>null
        ])->execute();
        return "User updated";
    }

    public function actionDelete($id)
    {
        $db=\Yii::$app->db;
        $db->createCommand()->delete('user','id= :id',[
            'id' => $id
        ])->execute();
        return "User deleted";
    }

    public function actionUpsert()
    {
        
    }
}

?>