﻿<?php
$posts = array(
    304684 => array(
        'title' => 'Поэтапное руководство по созданию иконок',
        'text'  => 'Статья была опубликована на smashingmagazine автор статьи Scott Lewis.

Найти недорогие качественно сделанные иконки и векторные изображения не составляет труда – именно для этого есть такие веб-сайты, как Iconfinder (где работает автор настоящей статьи). В распоряжении дизайнеров тысячи наборов иконок премиум класса, и сотни наборов доступны для бесплатного скачивания.

В данной статье приводится руководство по дизайну векторных иконок, которое включает в себя шесть этапов. Мы рассмотрим эти этапы после того, как разберем основные принципы успешного дизайна иконок. Эти принципы хорошо известны и подробно рассмотрены в таких работах, как Руководство по дизайну иконок Джона Хикса, а также в руководстве от Google Материальный дизайн в разработке системных иконок. Шесть этапов, которые мы будем рассматривать в данной статье, должны восприниматься, как рекомендации, а не как догмы. Способность чувствовать, где нужно следовать правилам, а когда их лучше нарушить – это важное качество, которое должен развить в себе каждый хороший дизайнер, и мы наглядно это продемонстрируем.
'
    ),
    304680 => array(
        'title' => 'Some title #2',
        'text'  => 'Some text #2'
    ),
    304682 => array(
        'title' => 'Some title #2',
        'text'  => 'Some text #2'
    )
);
?>

<style>
    #container {
        width: 800px;
    }
    .post {
        width: 600px;
    }
    .title {
        color: white;
        background-color: #0000aa;
    }
    .content {
        color: red;
    }
</style>
<div id="container">
    <?php foreach ($posts as $postId => $postData): ?>
        <div class="post">
            <p class="title"><?php echo $postId . ' | ' . $postData['title'] ?></p>
            <div class="content">
                <?php echo $postData['text'] ?>
            </div>
        </div>
    <?php endforeach; ?>
</div>
