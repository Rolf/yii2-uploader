    <?php

    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
    use app\models\UserProfile;
    /* @var $this yii\web\View */
    /* @var $model app\models\UserProfile */
    /* @var $form ActiveForm */

    $model = new bubogumy\UserProfile();

    ?>
    <div class="site-index">
        <?php if (isset($fileUrl)) :?>
            <?php $form = ActiveForm::begin(['action' => ['index']]); ?>

                <img src="<?= $fileUrl ?>" height="100px">

                <?= $form->field($model, 'logo')->hiddenInput(['value' => $filename]) ?>
                <?= $form->field($model, 'logo_prev')->hiddenInput(['value' => $filename]) ?>

                <div class="form-group">
                    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
                </div>
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

    </div><!-- site-index -->


