<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/btn.css">
    <style>
        body {
            font-family: "ヒラギノ明朝 ProN", "Hiragino Mincho Pro";
            background-color: #f5f5f5;
        }

        .menu-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            max-width: 400px;
            margin: 50px auto;            
            padding: 15px;
            background-color: white;
            border-radius: 5px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .menu-container a {
            display: block;
            padding: 17px;
            text-decoration: none;
            color: #333;
            text-align: center;
            border-bottom: 1px solid #ccc;
            
        }

        .menu-container a:last-child {
            border-bottom: none;
        }

        .menu-container a:hover {
            background-color: #3aacad;
            border-radius: 5px;

        }
    </style>
    <title>メニュー</title>
</head>

<body>
    <div class="menu-container">
        <a href="index2.php">新規登録</a>
        <a href="select2.php">登録済み一覧</a>
        <a href="logout.php">ログアウト</a>
    </div>

    
</body>

</html>
