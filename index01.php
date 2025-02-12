<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>GitHub教程合集</title>
</head>
<body>

<h1>GitHub教程合集</h1>

<?php
// 定义教程列表数组
$tutorial_list = array(
    array(
        'name' => '教程1',
        'url' => 'https://example.com/tutorial1'
    ),
    array(
        'name' => '教程2',
        'url' => 'https://example.com/tutorial2'
    )
);

// 遍历教程列表并生成 HTML 内容
foreach ($tutorial_list as $item) {
    ?>
    <h2><?php echo $item['name']; ?></h2>
    <p>跳转到教程：<a href="<?php echo $item['url']; ?>">查看教程</a></p>
    <?php
}
?>

</body>
</html>
