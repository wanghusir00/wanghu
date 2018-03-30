<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<a href="<?php echo U('add');?>">添加</a>
<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>编号</th>
        <th>书名</th>
        <th>价钱</th>
        <th>状态</th>
        <th>创建时间</th>
        <th>修改时间</th>
        <th>操作</th>
    </tr>
    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><tr>
            <td><?php echo ($val["id"]); ?></td>
            <td><?php echo ($val["name"]); ?></td>
            <td><?php echo ($val["price"]); ?></td>
            <td><?php echo ($val["status_text"]); ?></td>
            <td><?php echo ($val["create_time_text"]); ?></td>
            <td><?php echo ($val["update_time_text"]); ?></td>
            <td>
                <a href="<?php echo U('edit',['id'=>$val['id']]);?>">编辑</a>
                <a href="">删除</a>
            </td>

        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
</table>
</body>
</html>