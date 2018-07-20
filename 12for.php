<?php
echo <<<'form'
    <form action="" method="post">
        <input name="rows">行
        <input name="cols">列
        <input type="submit" value="提交">
    </form>
form;
$rows = isset($_POST['rows'])?$_POST['rows']:2;
$cols = isset($_POST['cols'])?$_POST['cols']:2;
echo '<table style="border:1px solid #000">';
    for($i=0;$i<$rows;$i++){
        echo '<tr>';
            for($j=0;$j<$cols;$j++){
                echo '<td>';
                    echo $i*$cols+$j;
                echo '</td>';
            }
        echo '</tr>';
    }
echo '</table>';