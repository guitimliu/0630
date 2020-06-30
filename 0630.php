<form action="0630.php" method="post">
    <h1>第一題</h1>
    數字一：<input type="text" name="num1"></p>
    數字二：<input type="text" name="num2"></p>
    <input type="submit" value="ok"></p>
</form>
<?php
    @$num1 = $_POST["num1"];
    @$num2 = $_POST["num2"];
    if($num1>$num2){
        $min = $num2;
    }else{
        $min = $num1;
    }
    for($i=1; $i<=$min; $i++){
        if(($num1%$i==0) && ($num2%$i==0)){
            $factor = $i;
        }
    }
    if(@$factor == 1){
        echo "互為質數";
        $factor = null;
    }else{
        echo @$factor;
        $factor = null;
    }
?>

<form action="0630.php" method="post">
    <h1>第二題</h1>
    字串：<input type="text" name="reverse"></p>
    <input type="submit" value="字串反轉"></p>
</form>
<?php
    @$reverse = $_POST["reverse"];
    if($reverse != null){
        echo strrev($reverse);
    }
?>

<form action="0630.php" method="post">
    <h1>第三題</h1>
    數組：<input type="text" name="num"></p>
    請使用 <font color="red">,</font> 分隔數字</p>
    <input type="submit" value="排序"></p>
</form>
<?php
    @$num = $_POST["num"];
    $num_arr = explode(",", $num);
    sort($num_arr);
    foreach($num_arr as $arr){
        echo $arr." ";
    }
?>

<form action="0630.php" method="post">
<h1>第四題</h1>
<?php
    $rand_arr = array();
    for($i=0; $i<6; $i++){
        $rand_arr[$i] = 0;
    }
    for($i=1; $i<=10000; $i++){
        $rand = rand(1,6);
        $rand_arr[$rand-1]++;
    }
    for($i=0; $i<6; $i++){
        echo "骰子".($i+1)."出現的次數：".$rand_arr[$i]."</p>";
    }
?>
</form>

<form action="0630.php" method="post">
    <h1>第五題</h1>
    <input type="text" name="a">　
    <input type="text" name="b"> 　  　
    <input type="text" name="e">　
    <input type="text" name="f"></p>
    <input type="text" name="c">　
    <input type="text" name="d">　x　
    <input type="text" name="g">　
    <input type="text" name="h"></p>
    <input type="submit" value="矩陣相乘"></p>
</form>
<?php
    @$a = $_POST["a"];
    @$b = $_POST["b"];
    @$c = $_POST["c"];
    @$d = $_POST["d"];
    @$e = $_POST["e"];
    @$f = $_POST["f"];
    @$g = $_POST["g"];
    @$h = $_POST["h"];
    echo @$left_top = $a*$e+$b*$g."　";
    echo @$right_top = $a*$f+$b*$h."</p>";
    echo @$left_bottom = $c*$e+$d*$g."　";
    echo @$right_bottom = $c*$f+$d*$h."</p>";
?>