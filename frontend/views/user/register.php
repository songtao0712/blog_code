
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<body class="style-2">

<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">


            <!-- Start Sign In Form -->
<!--            <form action="#" class="fh5co-form animate-box" data-animate-effect="fadeInLeft">-->
                <?php $form = \yii\bootstrap\ActiveForm::begin(['options' => ['class' => 'fh5co-form animate-box','data-animate-effect'=>'fadeInLeft']]);?>
                <h2>注册</h2>
                <div class="form-group">
                    <div class="alert alert-success" role="alert">请正确填写您的信息并记录好密码</div>
                </div>
                <div class="form-group">
                    <label for="name" class="sr-only">用户名</label>
                    <?=$form->field($model,'username')->textInput(['class'=>'form-control','id'=>'name','placeholder'=>'用户名'])?>
<!--                    <input type="text" class="form-control" name="username" id="name" placeholder="用户名" autocomplete="off">-->
                </div>
                <div class="form-group">
                    <label for="email" class="sr-only">Email</label>
                    <?=$form->field($model,'email')->textInput(['class'=>'form-control','id'=>'email','placeholder'=>'邮箱'])?>
<!--                    <input type="email" class="form-control" name="email" id="email" placeholder="邮箱" autocomplete="off">-->
                </div>
                <div class="form-group">
                    <label for="password" class="sr-only">密码</label>
                    <?=$form->field($model,'password_hash')->passwordInput(['class'=>'form-control','id'=>'password','placeholder'=>'密码'])?>
<!--                    <input type="password" class="form-control" name="password" id="password" placeholder="密码" autocomplete="off">-->
                </div>
                <div class="form-group">
                    <label for="re-password" class="sr-only">再输一次</label>
                    <?=$form->field($model,'re_password')->passwordInput(['class'=>'form-control','id'=>'re-password','placeholder'=>'再输一次'])?>
<!--                    <input type="password" class="form-control" id="re-password" placeholder="再输一次" autocomplete="off">-->
                </div>

                <div class="form-group">
                    <?=\yii\helpers\Html::submitInput('加入我们',['class'=>'btn btn-primary'])?>
<!--                    <input type="submit" value="加入我们" class="btn btn-primary">-->
                </div>
                <?php \yii\bootstrap\ActiveForm::end()?>
<!--            </form>-->
            <!-- END Sign In Form -->


        </div>
    </div>

</div>



</body>
</html>

