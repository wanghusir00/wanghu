<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<form action="<?php echo U('addSave');?>" method="post">
    书名：<input type="text" name="name"><br>
    价钱：<input type="text" name="price"><br>
    状态：<input type="radio" name="status" value="0" checked>可卖
          <input type="radio" name="status" value="1">不可卖 <br>
    <input type="submit">
</form>
</body>
</html>