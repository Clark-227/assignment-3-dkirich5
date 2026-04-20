<?php
// logout.php

// TODO 1: Start the session using session_start()
session_start();
// TODO 2: Destroy the session using session_destroy()
session_destroy();
// TODO 3: Redirect the user back to home.php using header("Location: ...")
header("Location: home.php");
