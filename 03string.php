<?php
// 转义符
$str = '群殴期待你哦\'www\'';
echo ($str);
echo '<hr>';
$str2 = "Dijsaod'奥\"萨蒂\"阿娇'";
echo ($str2);
// 适用于html结构的字符串定义方式：$heredoc,$nowdoc
$heredoc1 = <<<"L"
<ul>
    <li>{$str}</li>
    <li>"$str"</li>
    <li>'$str'</li>
    <li>$str</li>
    <li>4</li>
</ul>
L;
$heredoc2 = <<<'L'
<ul>
    <li>{$str2}</li>
    <li>$str2</li>
    <li>"$str2"</li>
    <li>'$str2'</li>
    <li>4</li>
</ul>
L;
echo '<hr>';
echo ($heredoc1);
echo ($heredoc2);

