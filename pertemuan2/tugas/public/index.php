<?php
// Load semua file yang diperlukan
if (!session_id()) {
    session_start();
}
require_once '../app/init.php';
// require_once __DIR__ . '/../app/config/Database.php';
// require_once __DIR__ . '/../app/models/User.php';
// require_once __DIR__ . '/../app/controllers/UserController.php';

$app = new App;