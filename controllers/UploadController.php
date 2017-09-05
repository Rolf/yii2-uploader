<?php
/**
 * Created by PhpStorm.
 * User: artyom
 * Date: 21.08.17
 * Time: 17:51
 */

namespace app\controllers;

use app\services\UploadAction;
use yii\web\Controller;

class UploadController extends Controller
{
    public function actions()
    {
        return [
          'upload' => 'app\services\UploadAction',
        ];
    }
}