<?php
/* @var $this yii\web\View */
$this->title = 'My Yii Application';
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
?>

<!--        <form action="site/upload_dir">-->
<!--            <img src='--><?//= $fileUrl ?><!--' class='img-responsive'>-->
<!--            <input type='hidden' name='save_img' value='--><?//= $filename ?><!--'>-->
<!--            <input type="submit" value="Отправить" class="btn">-->
<!--        </form>-->

<div class="site-index">
    <?php if (isset($fileUrl)) :?>
        <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
<!--            <img src="--><?//= $fileUrl?><!--">-->
        <?php $form->field($model, 'text')->textInput()->hint('Введите любой текст')->label('Текстовое поле');?>
        <?php ActiveForm::end(); ?>
    <?php endif; ?>

    <form enctype="multipart/form-data" method="post" action="/site/upload" id="form">
        <input type="file" name="file">
        <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />
        <input type="submit" value="Загрузить" class="btn">
    </form>
    <script>
        $(function(){
            $('#form').on('submit', function(e){
                e.preventDefault();
                var $that = $(this),
                    formData = new FormData($that.get(0));
                $.ajax({
                    url: $that.attr('action'),
                    type: $that.attr('method'),
                    contentType: false,
                    processData: false,
                    data: formData,
                    dataType: 'html',
                    success: function(form){
                        if(form){
                            $that.replaceWith(form);
                        }
                    }
                });
            });
        });
    </script>
</div>
