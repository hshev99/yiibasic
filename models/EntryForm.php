<?php
/**
 * Created by PhpStorm.
 * User: hshev99
 * Date: 2017/4/20
 * Time: 下午5:21
 */
namespace app\models;

use Yii;
use yii\base\Model;

class EntryForm extends Model
{
    public $name;
    public $email;

    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
            ['email', 'email'],
        ];
    }
}