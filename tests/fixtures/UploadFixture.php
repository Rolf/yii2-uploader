<?php
/**
 * Created by PhpStorm.
 * User: artyom
 * Date: 16.08.17
 * Time: 16:46
 */

namespace app\tests\fixtures;

use yii\test\ActiveFixture;

class UploadFixture extends ActiveFixture
{
    public $modelClass = 'bubogumy\UserProfile';
    public $dataFile = '@tests/fixtures/data/upload.php';
}
