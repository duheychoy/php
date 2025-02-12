<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Git与GitHub教程网站列表</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }

        h1 {
            text-align: center;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
        }

        a {
            color: #007BFF;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        h2 {
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <h2>Git教程网站列表</h2>   
    <ul>
        <?php
        // 定义一个包含 Git 教程网站信息的数组
        $gitTutorialSites = [
            [
                "name" => "Git 官方文档",
                "url" => "https://git-scm.com/doc"
            ],
            [
                "name" => "廖雪峰的 Git 教程",
                "url" => "https://www.liaoxuefeng.com/wiki/896043488029600"
            ],
            [
                "name" => "菜鸟教程 - Git 教程",
                "url" => "https://www.runoob.com/git/git-tutorial.html"
            ]
        ];

        // 遍历数组，输出每个网站的名称和链接
        foreach ($gitTutorialSites as $site) {
            $name = htmlspecialchars($site["name"], ENT_QUOTES, 'UTF-8');
            $url = htmlspecialchars($site["url"], ENT_QUOTES, 'UTF-8');
            echo "<li><a href=\"$url\" target=\"_blank\">$name</a></li>";
        }
        ?>
    </ul>
    <h2>GitHub教程网站列表</h2>
    <ul>
    <?php
    // 定义教程列表数组
    $tutorial_list = [
        [
            "name" => "教程1",
            "url" => "https://example.com/tutorial1"
        ],
        [
            "name" => "教程2",
            "url" => "https://example.com/tutorial2"
        ]
    ];

    // 遍历教程列表并生成 HTML 内容
foreach ($tutorial_list as $item) {
            $name = htmlspecialchars($item["name"], ENT_QUOTES, 'UTF-8');
            $url = htmlspecialchars($item["url"], ENT_QUOTES, 'UTF-8');
            echo "<li><a href=\"$url\" target=\"_blank\">$name</a></li>";
        }
         ?>
       </ul>
</body>

</html>
