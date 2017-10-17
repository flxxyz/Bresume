<!doctype html>
<html lang="zh">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Bresume</title>
    <meta name="description" content="不知你在哪，但我会去找你，穷极一生找寻你，等着我，一起去寻找彩虹海!" />
    <meta name="keywords" content="冯小贤,彩虹海是我的,梦逐彩虹海,彩虹海,小贤,简历" />
    <link rel="stylesheet" href="css/main.css">
    <script src="https://api.flxxyz.com/hitokoto/api?encode=js"></script>
    <!--[if IE]>
    <h1>此页面洪荒能量过高，如继续使用IE浏览器将会产生不可挽回的后果！！！</h1>
    <small>请使用 Chrome 系浏览器浏览</small>
    <![endif]-->
</head>
<body>
<h1>梦逐彩虹海</h1>
<p>不知你在哪，但我会去找你，穷极一生找寻你，等着我，一起去寻找彩虹海!</p>
<pre class="class">
<span class="identifier">Class</span> <span class="className"><?php echo $me->common->encode($me->about['名字'], 'all') ?></span> {
<pre class="action">
<span class="notation">// 个人</span>
<span class="identifier">public</span> <span class="identifier">function</span> <span class="actionName">about</span>() {
<?php echo $me->about(); ?>
}</pre>
<pre class="action">
<span class="notation">// 技能树</span>
<span class="identifier">public</span> <span class="identifier">function</span> <span class="actionName">skill</span>() {
<?php
    echo $me->skill->dev();
    echo $me->skill->web();
    echo $me->skill->ops();
    echo $me->skill->devOps();
    echo $me->skill->mobile();
    echo $me->skill->embedded();
    echo $me->skill->game();
    echo $me->skill->ai();
    echo $me->skill->framework();
?>}
</pre>
<pre class="action">
<span class="notation">// 项目经验</span>
<span class="identifier">public</span> <span class="identifier">function</span> <span class="actionName">project</span>() {
<?php
    echo $me->project->one();
    echo $me->project->two();
    echo $me->project->three();
    echo $me->project->four();
    echo $me->project->five();
    echo $me->project->six();
    echo $me->project->seven();
    echo $me->project->eight();
    echo $me->project->nine();
    echo $me->project->ten();
?>}</pre>
<pre class="action">
<span class="notation">// 工作经历</span>
<span class="identifier">public</span> <span class="identifier">function</span> <span class="actionName">job</span>() {
    <?php
    echo $me->job->one();
    echo $me->job->two();
    echo $me->job->three();
    echo $me->job->four();
    echo $me->job->five();
    echo $me->job->six();
    echo $me->job->seven();
    echo $me->job->eight();
    echo $me->job->nine();
    echo $me->job->ten();
?>}</pre>
<pre class="action">
<span class="notation">// 教育经历</span>
<span class="identifier">public</span> <span class="identifier">function</span> <span class="actionName">edu</span>() {
<?php
    echo $me->edu->nursery();
?>}</pre>
}
</pre>
</body>
</html>