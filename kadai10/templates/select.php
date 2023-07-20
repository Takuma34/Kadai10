<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>登録一覧</title>
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<link rel="stylesheet" href="css/view.css">
<link rel="stylesheet" href="css/btn.css">

<style>
    
div{padding: 10px;font-size:16px;
}

#show{overflow: auto; height: 400px;

}
#button {
  display: flex;
  justify-content: center;
  align-items: center;
  margin-top: 10px;
}
#back {
            border: 1px solid #666;
            background-color: #fff;
            display: flex;
            margin: 20px;
            width: 120px;
            justify-content: center;
            transition: background-color 0.3s ease;

      }

      #back:hover {
            background: #f5a500;
      }
</style>
</head>

<body id="main">
<!-- Head[Start] -->
<header>

      <h2 class="list">登録済み一覧</h2>

</header>
<!-- Head[End] -->

<div>
    <div id="show" ><?php echo $view; ?></div>
</div>

        <div id="button">
            <input type="button" value="戻る" id="back">
        </div>

</body>

<script>

$("#back").click(function () {
                window.location.href = "menu2.php";
            });
</script>

</html>