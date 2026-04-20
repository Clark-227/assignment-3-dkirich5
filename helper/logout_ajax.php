<?php
// logout_ajax.php
// This file is called by JavaScript (fetch API) to log the user out via AJAX.
// It returns a JSON response: {"status": "success"}

// TODO 1: Start the session
session_start();
// TODO 2: Destroy the session
session_destroy();
// TODO 3: Return a JSON response indicating success
//         echo json_encode(['status' => 'success'])
echo json_encode(['status' => 'success']);
