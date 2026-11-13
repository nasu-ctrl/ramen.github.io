<?php session_start();

if(isset($_POST["no"])){
	if(isset($_SESSION["kago"])){
		$_SESSION["kago"]++;
	}else{
		$_SESSION["kago"]=0;
	}
	$autono = $_SESSION["kago"];
	$_SESSION["no".$autono] = $_POST["no"];
	$_SESSION["title".$autono] = $_POST["title"];
	$_SESSION["price".$autono] = $_POST["price"];
	header("Location: http://localhost/pasta/cart.php");
}
if(isset($_GET["deldata"])){
	session_destroy();
	header("Location: http://localhost/pasta/cart.php");
}

if(isset($_SESSION["kago"])){
?>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>cart</title>
<link rel="stylesheet" href="cstyle.css">
</head>
<body>

<div id="container">
<main>

<section>
<h2 id="ct">カート<span>Cart</span></h2>
</section>
<table id="tb" border="1">
<tr><th>no</th><th>商品名</th><th>価格</th></tr>
<?php
	$goukei=0;
	$i=0;
	while($i<=$_SESSION["kago"]){ ?>
<tr>
<td><?php print $_SESSION["no".$i];?></td>
<td><?php print $_SESSION["title".$i];?></td>
<td style="text-align:right;"><?php print $_SESSION["price".$i];?>円</td></tr>
<?php
		$goukei += $_SESSION["price".$i];
		$i++;
	}
?>
<tr><td>合計</td><td colspan="2" style="text-align:right;"><?php print $goukei; ?>円</td></tr>
</table><br><br>
</main>
<p id="menu">
<a href="cart.php?deldata=1">カートを空にする</a>
<br><br>
<a href="addr.html">次へ</a><br><br>


<?php
}else{  ?>

カートの中は空です。<br>

<?php
} ?>
<a href="itemlist.php">商品選択画面へもどる</a>
</p>



<footer>
<p class="inner">&copy; 2024 ISC,iwasaki-gakuen All rights reserved.</p>
</footer>

</div>



</body>
</html>