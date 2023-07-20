<?php

session_start();
require_once('model.php');

loginCheck();
require_once('templates/list.php');

$form = new RepairForm();
if (isset($_POST['toggleBtn'])) {
    $form->toggleFormVisibility();
}

$buttonHandler = new ButtonHandler();
$buttonHandler->handleButtonClick();
$buttonHandler->displayButton();
$form->displayForm();

