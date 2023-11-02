 if ($status) {
        // After successful insertion, set a session variable with a success message
        $_SESSION['success_message'] = "New Item added";
 } else {
        var_dump($stmt->errorInfo());
        exit;
    }
