<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-31 09:44:52
  from 'D:\ugm\xampp\htdocs\web11\templates\user.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e33e90417f712_62963642',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a24642fcf47e21d8e0c4afbd422f5cc24f77b53' => 
    array (
      0 => 'D:\\ugm\\xampp\\htdocs\\web11\\templates\\user.tpl',
      1 => 1580460284,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e33e90417f712_62963642 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
bootstrap/bootstrap.min.css">

    <title>會員管理</title>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="   crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"><?php echo '</script'; ?>
>
  </head>
  <body>
    <style>
        .form-signin {
            width: 100%;
            max-width: 400px;
            padding: 15px;
            margin: 0 auto;
        }      
    </style>
    <?php if (!$_SESSION['admin']) {?>
        <div class="container mt-5">
            <form class="form-signin" action="user.php" method="post">
                <h1 class="h3 mb-3 font-weight-normal">會員登入</h1>
                <div class="mb-3">
                <label for="name" class="sr-only">帳號</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="請輸入帳號"  required>
                </div>
                <div class="mb-3">
                <label for="pass" class="sr-only">密碼</label>
                <input type="password" name="pass" id="pass" class="form-control" placeholder="請輸入密碼" required>
                </div>
            
                <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" name="remember" id="remember"> 記住我
                </label>
                    
                </div>
                <input type="hidden" name="op" id="op" value="login">
                <button class="btn btn-lg btn-primary btn-block" type="submit">會員登入</button>
                <div>
                    您還沒還沒註冊嗎？請 <a href="#">點選此處註冊您的新帳號</a>。
                </div>
            </form>
        </div>
    <?php }?>

  </body>
</html><?php }
}
