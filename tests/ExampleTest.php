<?php

class SmsTest
{
    public function testSend()
    {
        $email = Yii::createdateObject(\bubogumy\mailer::class);
        $email->send($email = 'mailasd@mail.ru', $subject="Subject" ,$message = 'message');

        Test::double(\yii\mail\BaseMessage::class, ['send' => true]);

    }
}