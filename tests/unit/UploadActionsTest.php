<?php
/**
 * Created by PhpStorm.
 * User: artyom
 * Date: 05.09.17
 * Time: 11:57
 */

use bubogumy\UploadAction;
use bubogumy\UploadException;
use bubogumy\UploadInterface;
use bubogumy\UploadHelper;
use bubogumy\UploadService;

class UploadActionsTest extends \Codeception\Test\Unit
{
    use bubogumy\UploadTrait;
    use \yii\test\FixtureTrait;
}