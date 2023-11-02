<?php

            session_start(); // Start or resume the session

            // Check if a success message is set in the session
            if (isset($_SESSION['success_message'])) {
                $successMessage = $_SESSION['success_message'];

                // var_dump($successMessage);
                // exit;

                // Display the success message in a notification
                echo "<div class='success-notification'>$successMessage</div>";

                // Clear the success message from the session so it won't be displayed again
                unset($_SESSION['success_message']);
            }
            ?>
