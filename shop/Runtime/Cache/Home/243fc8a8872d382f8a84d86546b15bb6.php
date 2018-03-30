<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<form action="<?php echo U('editSave');?>" method="post">
    <input type="hidden" value="<?php echo ($data["id"]); ?>" name="id">
    书名：<input type="text" name="name" value="<?php echo ($data["name"]); ?>"><br>
    价钱：<input type="text" name="price" value="<?php echo ($data["price"]); ?>"><br>
    状态：<input type="radio" name="status" value="0" checked>可卖
    <input type="radio" name="status" value="1" <?php if($data['status'] == 1): ?>checked<?php endif; ?> >不可卖 <br>
    <input type="submit">
</form>
</body>
</html>