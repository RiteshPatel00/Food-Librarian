<?php
    // Ending the session and redirecting to the sign in page after user logs out
    session_start();
    session_destroy();
    session_unset();
    header("Location: ../sign_in.php?success=true");
?>