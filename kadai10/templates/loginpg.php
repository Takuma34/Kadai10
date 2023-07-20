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

        header {
            background-color: #3aacad;
            color: white;
            padding: 10px;
            font-size: 24px;
            text-align: center;
        }

        .container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: white;
            border-radius: 5px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .container input[type="text"],
        .container input[type="password"] {
            width: 90%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .container input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            background-color: #3aacad;
            color: white;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            border-radius: 5px;
        }

        .container input[type="submit"]:hover {
            background-color: #2d8797;
        }
    </style>
    <title>ログイン</title>
</head>

<body>
   
    <div class="container">
        <form name="form1" action="login_act.php" method="post">
            <label for="lid">ID:</label>
            <input type="text" name="lid" id="lid">
            <label for="lpw">PW:</label>
            <input type="password" name="lpw" id="lpw">
            <input type="submit" value="ログイン">
        </form>
    </div>
</body>

</html>
