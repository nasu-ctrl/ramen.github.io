<!DOCTYPE html>
<?php
$db = mysqli_connect('localhost', 'root', '', 'pasta');

// 接続状況をチェックします
if (mysqli_connect_errno()) {
    die("データベースに接続できません:" . mysqli_connect_error() . "\n");
} else {
    //echo "データベースの接続に成功しました。\n";
}
mysqli_select_db($db, 'pasta');

/*	$db = mysql_connect("localhost","root","");
	mysql_select_db("cake",$db);
mysql_query('SET NAMES sjis');*/

	$sql = "select * from pastalist order by code";
	$r = mysqli_query($db,$sql);
?>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>cart</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="ここにサイト説明を入れます">
<link rel="stylesheet" href="cstyle.css">
</head>
<body>

<div id="container">

<header>
<h1 id="logo">online store</h1>
</header>

<div id="contents">

<main>

<section>

<h2>オンラインストア<span>online store</span></h2>

<div class="list-grid">


<?php while($row = mysqli_fetch_assoc($r)){ ?>

<div class="list">
<figure><img src="image/<?php print $row["gazou"];?>"></figure>
<div class="text">
<h4><?php print $row["name"];?></h4>
<p>￥<?php print $row["price"];?></p>

<p class="btn">
<form action="cart.php" method="post">
<input type="hidden" name="no" value="<?php print $row["code"];?>">
<input type="hidden" name="title" value="<?php print $row["name"];?>">
<input type="hidden" name="price" value="<?php print $row["price"];?>">
<input type="submit" value="カートにいれる"></form></p>
</div>

</div>

<?php } 

mysqli_close($db);

?>


</div>


</section>

</main>

</div>



<ul id="footermenu">
<li><a href="index.html">ホーム</a></li>
</ul>

<footer>
<p class="inner">&copy; 2024 ISC,iwasaki-gakuen All rights reserved.</p>
</footer>


</body>
</html>