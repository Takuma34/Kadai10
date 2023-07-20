<?php

require_once('templates/loginpg.php');
require_once('model.php');

$form = new RepairForm();
if (isset($_POST['toggleBtn'])) {
    $form->toggleFormVisibility();
}

$buttonHandler = new ButtonHandler();
$buttonHandler->handleButtonClick();
$buttonHandler->displayButton();
$form->displayForm();


