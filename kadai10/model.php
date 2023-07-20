<?php
//共通に使う関数を記述

function h($str){
    return htmlspecialchars($str,ENT_QUOTES,'UTF-8');
}

// ログインチェク処理 loginCheck()

function loginCheck()

{
    if (!isset($_SESSION['chk_ssid']) || $_SESSION['chk_ssid'] !== session_id()) {
        exit('LOGIN ERROR');
    } else {
        session_regenerate_id(true);
        $_SESSION['chk_ssid'] = session_id();
    }
}


///問い合わせフォーム////
class RepairForm
{
    private $formVisible;

    public function __construct()
    {
        $this->formVisible = false;
    }

    public function toggleFormVisibility()
    {
        $this->formVisible = !$this->formVisible;
    }

    public function displayForm()
    {
        if ($this->formVisible) {
            echo '<div class="form-container" id="repairForm">'; 
            echo '<h2>問い合わせフォーム</h2>';
            echo '<form method="post" action="">'; 

            echo '<label for="name">お名前:</label>';
            echo '<input type="text" name="name" id="name" required>';
            echo '<br>';

            echo '<label for="email">メールアドレス:</label>';
            echo '<input type="email" name="email" id="email" required>';
            echo '<br>';

            echo '<label for="message">内容:</label>';
            echo '<textarea name="message" id="message" rows="4" required></textarea>';
            echo '<br>';

            echo '<input type="submit" value="送信">';
            echo '</form>';
            echo '</div>';
        }
    }
}

///ボタンの非表示用////
class ButtonHandler
{
    private $buttonVisible;

    public function __construct()
    {
        session_start();
        $this->buttonVisible = true;
    }

    public function handleButtonClick()
    {
        if (isset($_POST['toggleBtn'])) {
            $this->buttonVisible = !$this->buttonVisible;
        }
    }

    public function displayButton()
    {
        if ($this->buttonVisible) {
            echo '<div style="text-align: center;">'; 
            echo '<form method="POST">';
            echo '<button class="casual-button" type="submit" name="toggleBtn">問い合わせ</button>';
            echo '</form>';
            echo '</div>'; 
        }
    }
}





