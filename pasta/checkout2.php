<?php
session_start();

// セッションからお客様情報とカートの内容を取得
if (!isset($_SESSION['customer_name']) || !isset($_SESSION['kago'])) {
    // 必要な情報がセッションにない場合、エラーメッセージを表示して終了
    echo "セッション情報が見つかりません。再度ご注文をお願いします。";
    echo "<br><a href='itemlist.php'>商品一覧へ戻る</a>";
    exit;
}

// ここで、データベースに注文情報を保存する処理が入ります
// 例：
// $db = mysqli_connect('localhost', 'root', '', 'pasta');
// $sql_order = "INSERT INTO orders (customer_name, customer_addr, customer_tel, customer_mail) VALUES ('" . mysqli_real_escape_string($db, $_SESSION['customer_name']) . "', '" . mysqli_real_escape_string($db, $_SESSION['customer_addr']) . "', '" . mysqli_real_escape_string($db, $_SESSION['customer_tel']) . "', '" . mysqli_real_escape_string($db, $_SESSION['customer_mail']) . "')";
// mysqli_query($db, $sql_order);
// $order_id = mysqli_insert_id($db);

// カートの内容を注文詳細として保存する処理
// for ($i = 0; $i <= $_SESSION['kago']; $i++) {
//     if (isset($_SESSION["no".$i])) {
//         $sql_detail = "INSERT INTO order_details (order_id, item_code, item_name, item_price) VALUES ('$order_id', '" . $_SESSION["no".$i] . "', '" . mysqli_real_escape_string($db, $_SESSION["title".$i]) . "', '" . $_SESSION["price".$i] . "')";
//         mysqli_query($db, $sql_detail);
//     }
// }
// mysqli_close($db);

// 注文が完了したのでセッションをリセット
session_destroy();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>ご注文完了</title>
<link rel="stylesheet" href="cstyle.css">
</head>
<body>

<div id="container">
<main>

<section>
<h2 id="ct">ご注文完了<span>Order Complete</span></h2>

<p>ご注文が完了しました。ありがとうございます。</p>
<p>
    <a href="itemlist.php">商品一覧へ戻る</a>
</p>

</section>

</main>
</div>

</body>
</html>