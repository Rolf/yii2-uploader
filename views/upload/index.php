<?php
/* @var $this yii\web\View */
$this->title = 'My Yii Application';
if (isset($filename)) {
    echo $filename;
}
?>
<div class="site-index ">
    <form enctype="multipart/form-data" method="post" action="site/upload" id="form">
        <input type="file" name="file">
        <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />
        <input type="submit" value="Отправить" class="btn">
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
