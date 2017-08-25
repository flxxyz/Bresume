<html lang="zh">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Bresume</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<pre class="class">
<span class="identifier">Class</span> <span class="className"><?php echo $me->common->encode($me->about['name'], 'all') ?></span> {
<pre class="action">
<span class="notation">// 个人</span>
<span class="identifier">public</span> <span class="identifier">function</span> <span class="actionName">skill</span>() {
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
<span class="notation">// 项目经验</span>
<span class="identifier">public</span> <span class="identifier">function</span> <span class="actionName">edu</span>() {
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
<span class="notation">// 教育经历</span>
<span class="identifier">public</span> <span class="identifier">function</span> <span class="actionName">edu</span>() {
<?php
    echo $me->edu->nursery();
?>}</pre>
}
</pre>

</body>
</html>