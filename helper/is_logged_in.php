<?php
// is_logged_in.php
// This file is called by JavaScript (fetch API) to check if a user is logged in.
// It returns a JSON response: {"status": "yes"} or {"status": "no"}

// TODO 1: Start the session
session_start();
// TODO 2: Check if $_SESSION['first_name'] is set using isset()
//         If yes: echo json_encode(["status" => "yes"])
//         If no:  echo json_encode(["status" => "no"])
if (isset($_SESSION['first_name'])) {
    echo json_encode(["status" => "yes"]);
} else {
    echo json_encode(["status" => "no"]);
}
