<?php
session_start();

// addr.htmlからのPOSTデータを確認
if (isset($_POST['name']) && isset($_POST['addr']) && isset($_POST['tel']) && isset($_POST['mail'])) {
    // 文字化け対策: 受け取ったPOSTデータをUTF-8に変換してセッションに保存
    // 'auto' を指定することで、PHPが自動的に元のエンコーディングを判別しようとします。
    $_SESSION['customer_name'] = mb_convert_encoding($_POST['name'], 'UTF-8', 'auto');
    $_SESSION['customer_addr'] = mb_convert_encoding($_POST['addr'], 'UTF-8', 'auto');
    $_SESSION['customer_tel'] = mb_convert_encoding($_POST['tel'], 'UTF-8', 'auto');
    $_SESSION['customer_mail'] = mb_convert_encoding($_POST['mail'], 'UTF-8', 'auto');
}

// カートに商品があるか確認
if (!isset($_SESSION['kago']) || $_SESSION['kago'] == -1) {
    echo "カートに商品がありません。";
    exit;
}

// 合計金額を計算
$goukei = 0;
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>ご注文内容確認</title>
<link rel="stylesheet" href="cstyle.css">
</head>
<body>

<div id="container">
<main>

<section>
<h2 id="ct">ご注文内容確認<span>Order Confirmation</span></h2>

<h3>お客様情報</h3>
<table id="tb" border="1">
    <tr><td>氏名</td><td><?php echo htmlspecialchars($_SESSION['customer_name']); ?></td></tr>
    <tr><td>住所</td><td><?php echo htmlspecialchars($_SESSION['customer_addr']); ?></td></tr>
    <tr><td>電話番号</td><td><?php echo htmlspecialchars($_SESSION['customer_tel']); ?></td></tr>
    <tr><td>E-Mail</td><td><?php echo htmlspecialchars($_SESSION['customer_mail']); ?></td></tr>
</table>

<h3>ご注文商品</h3>
<table id="tb" border="1">
    <tr><th>商品コード</th><th>商品名</th><th>価格</th></tr>
    <?php
    for ($i = 0; $i <= $_SESSION['kago']; $i++) {
        // カートの中身をループで表示
        if (isset($_SESSION["no".$i])) {
            $goukei += $_SESSION["price".$i];
            ?>
            <tr>
                <td><?php print $_SESSION["no".$i]; ?></td>
                <td><?php print $_SESSION["title".$i]; ?></td>
                <td style="text-align:right;">&yen;<?php print number_format($_SESSION["price".$i]); ?></td>
            </tr>
            <?php
        }
    }
    ?>
    <tr>
        <td colspan="2" style="text-align:right;">合計</td>
        <td style="text-align:right;">&yen;<?php print number_format($goukei); ?></td>
    </tr>
</table>

<p style="text-align:center;">
    <a href="cart.php">カートに戻る</a>
</p>

<p style="text-align:center;">
    <a href="checkout2.php">ご注文を確定する</a>
</p>

</section>

</main>
</div>

</body>
</html>