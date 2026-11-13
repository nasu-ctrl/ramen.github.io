<html>
<head>
<meta charset="utf-8">
</head>
<body>

<?php
$names = array("田中","佐藤","鈴木","高橋","山本",);
//for文を使って名前を1つずつ出そう！
for($i = 0; $i < count($names); $i++){
//文字サイズを動的に変更
//1番目の要素は文字サイズ５、2番目は４…というように小さくする
$font_size = 5 - $i;
if($font_size < 1){
 $font_size = 1; //最小サイズを１に設定
 } ?>
<p style='font-size:<?php print $font_size;?>em'>
名前:<?php print $names[$i]; ?></p>
<?php } ?>


</body>
</html>