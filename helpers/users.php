<?php
/*
 *   Crafted On Wed Oct 09 2024
 *   From his finger tips, through his IDE to your deployment environment at full throttle with no bugs, loss of data,
 *   fluctuations, signal interference, or doubt—it can only be
 *   the legendary coding wizard, Martin Mbithi (martin.mbithi@makueni.go.ke, www.martmbithi.github.io)
 * 
 *   www.makueni.go.ke
 *   info@makueni.go.ke
 *
 *
 *   The Government Of Makueni DevSecOps Band User License Agreement
 *   Copyright (c) 2023 Government of Makueni County
 *
 *
 *   1. LICENSE TO RULE
 *   Welcome to the elite club! Crafted by the ingenious Martin Mbithi, this software comes with the all-powerful,
 *   revocable, personal, non-exclusive, and non-transferable right to install and activate this masterpiece on ONE  
 *   lucky computer for your official, non-commercial escapades. Got a commercial itch? Better get that license first. 
 *   No peeking, sharing, or showing off this software to anyone else—strictly against the rules!
 *
 *   2. COPYRIGHT POWER
 *   This software, a creation of Martin Mbithi under the banner of the Government Of Makueni DevSecOps Band, is guarded by 
 *   copyright law and international treaties. So, don’t even think about messing with the proprietary notices, labels, 
 *   or marks—what’s his stays his!
 *
 *
 *   3. USE IT RIGHT OR LOSE IT
 *   You may not, and you may not let your fellow geeks:
 *   (a) hack, reverse engineer, decompile, decode, decrypt, disassemble, or attempt any sorcery to reveal the source code;
 *   (b) modify, remix, distribute, or create spinoffs of this masterpiece;
 *   (c) make copies (aside from your trusty backup), distribute, show off in public, transmit, sell, rent, lease, or otherwise
 *   exploit this software like it’s yours. Spoiler: it’s not!
 *
 *
 *   4. GAME OVER, MAN!
 *   This license is your golden ticket until one of us says otherwise. Want to end it? Smash the software and all its copies into
 *   digital dust. Break any rules? The license self-destructs, and you’ll need to nuke all copies—no second chances!
 *
 *
 *   5. NO PIXEL-PERFECT PROMISES
 *   Martin Mbithi and the Government Of Makueni DevSecOps Band don’t guarantee this software is glitch-free—think of it as a feature
 *   not a bug! We disclaim all other warranties, whether expressed or implied, including, but not limited to, implied warranties of merchantability
 *   fitness for a particular purpose, and non-infringement of third-party rights. Some jurisdictions have their own funky rules, so your mileage may
 *   vary. But remember: use at your own risk, brave user!
 *
 *
 *   6. KEEP THE PARTY GOING
 *   If a court zaps any part of this license, no worries—the rest of it keeps the party alive. One piece fails, but the agreement stands strong!
 *
 *
 *   7. NO DRAMA, NO DAMAGES
 *   Under no circumstances shall Martin Mbithi, the Government Of Makueni DevSecOps Band, or their minions be held responsible for any wild, indirect
 *   or accidental chaos from using this software—even if we warned you! And if you think you’ve got a claim, the most you’re getting is what you paid for the 
 *   license—if anything. Keep calm and code on!
 *
 */

/* 
    Register User
 */
if (isset($_POST['Add_User'])) {
    /* Capture user details, assign a system-generated password 'Makueni102', email it to them, and prompt them to change it on first login */

    // Capture user details
    $user_names = mysqli_real_escape_string($mysqli, $_POST['user_names']);
    $user_email = mysqli_real_escape_string($mysqli, $_POST['user_email']);
    $user_phone = mysqli_real_escape_string($mysqli, $_POST['user_phone']);
    $user_access_level = mysqli_real_escape_string($mysqli, $_POST['user_access_level']); // Ensure correct name attribute in the form
    $generated_password = 'Makueni102'; // System-generated password
    $hashed_password = sha1(md5($generated_password)); // Hash the password before saving

    // Check if the email or phone already exists
    $check_user_sql = "SELECT * FROM users WHERE user_email = '{$user_email}' OR user_phone = '{$user_phone}'";
    $check_res = mysqli_query($mysqli, $check_user_sql);

    if (mysqli_num_rows($check_res) > 0) {
        $err = "Email or phone number already exists";
    } else {
        // Insert user into the database
        $insert_user_sql = "INSERT INTO users (user_names, user_email, user_phone, user_password, user_access_level, user_change_password) 
                            VALUES ('{$user_names}', '{$user_email}', '{$user_phone}', '{$hashed_password}', '{$user_access_level}', '1')";

        if (mysqli_query($mysqli, $insert_user_sql)) {
            // Include mailer script to send email
            include('../mailers/staff_welcome.php'); // Ensure this file sends the generated password

            // Set success message
            $success = 'User added successfully. An email has been sent with the password.';
        } else {
            $err = "Failed to create account, please try again later";
        }
    }
}



/* 
Change Password 
 */
if (isset($_POST['Change_Password'])) {
    /* Hard reset password to Makueni102 and prompt them to change on login
 */
    // Fetch and sanitize user inputs
    $user_id = mysqli_real_escape_string($mysqli, $_POST['user_id']);
    $user_email = mysqli_real_escape_string($mysqli, $_POST['user_email']);
    $generated_password = "Makueni102"; // Default password

    // Hash the password using sha1(md5())
    $hashed_password = sha1(md5($generated_password));

    // Update the user's password in the database
    $update_password_query = "UPDATE users SET 
                              user_password = '$hashed_password', 
                              user_change_password = 1 
                              WHERE user_id = '$user_id'";

    if (mysqli_query($mysqli, $update_password_query)) {
        // Success: Include mailer script to send email
        include('../mailers/force_password_reset.php');

        // Set success message and redirect
        $success = "Password reset successfully! An email has been sent to the user.";
        
    } else {
        // Error: Set error message and redirect
        $err = "Failed to reset password, please try again later.";
     
    }
}



/* Update Details */
if (isset($_POST['Update_User'])) {
    /* - Update personal details normally */
    // Fetch and sanitize user input from the form
    $user_id = mysqli_real_escape_string($mysqli, $_POST['user_id']);
    $user_names = mysqli_real_escape_string($mysqli, trim($_POST['user_names']));
    $user_email = mysqli_real_escape_string($mysqli, trim($_POST['user_email']));
    $user_phone = mysqli_real_escape_string($mysqli, trim($_POST['user_phone']));
    $user_access_level = mysqli_real_escape_string($mysqli, $_POST['user_access_level']);

    // Validation - Ensure none of the fields are empty
    if (!empty($user_names) && !empty($user_email) && !empty($user_phone) && !empty($user_access_level)) {

        // Check if email is valid
        if (filter_var($user_email, FILTER_VALIDATE_EMAIL)) {

            // Check if the email already exists for another user
            $email_check_query = "SELECT * FROM users WHERE user_email = ? AND user_id != ?";
            $stmt = $mysqli->prepare($email_check_query);
            $stmt->bind_param("si", $user_email, $user_id);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows == 0) {
                // Proceed with the update query using prepared statements to avoid SQL injection
                $update_query = "UPDATE users SET 
                                user_names = ?, 
                                user_email = ?, 
                                user_phone = ?, 
                                user_access_level = ? 
                                WHERE user_id = ?";

                $stmt = $mysqli->prepare($update_query);
                $stmt->bind_param("ssssi", $user_names, $user_email, $user_phone, $user_access_level, $user_id);

                if ($stmt->execute()) {
                    // Success message
                    $success = "User details updated successfully!";
                } else {
                    $err = "Error updating user details";
                }
            } else {
                // Email exists message
                $err = "This email address is already in use by another user.";
            }
        } else {
            // Invalid email message
            $err = "Please enter a valid email address.";
        }
    } else {
        // Missing fields message
        $err = "Please fill all required fields.";
        
    }
}




/* Disable User Account  */

if (isset($_POST['Disable_User'])) {
    // Fetch user ID
    $user_id = mysqli_real_escape_string($mysqli, $_POST['user_id']);

    // Update user status to "disabled"
    $disable_user_sql = "UPDATE users SET user_account_status = '1' WHERE user_id = '$user_id'";

    if (mysqli_query($mysqli, $disable_user_sql)) {
        // Success message and redirection
        $success = 'User account disabled successfully.';
    } else {
        // Error message
        $err = "Failed to disable user account. Please try again.";
    }
}

if (isset($_POST['Activate_User'])) {
    // Fetch user ID
    $user_id = mysqli_real_escape_string($mysqli, $_POST['user_id']);

    // Update user status to "active" (status = 1)
    $activate_user_sql = "UPDATE users SET user_account_status = '0' WHERE user_id = '$user_id'";

    if (mysqli_query($mysqli, $activate_user_sql)) {
        // Success message and redirection
        $success = 'User account activated successfully.';
        
    } else {
        // Error message
        $err = "Failed to activate user account. Please try again.";
    }
}


/* Change Password - Self Service */
if (isset($_POST['Update_User_Auth'])) {
    $user_id = mysqli_real_escape_string($mysqli, $_POST['user_id']);
    $new_password = sha1(md5(mysqli_real_escape_string($mysqli, $_POST['new_password'])));
    $confirm_password = sha1(md5(mysqli_real_escape_string($mysqli, $_POST['confirm_password'])));

    /* Check Match */
    if ($new_password != $confirm_password) {
        $err = "Passwords does not match";
    } else {
        if (mysqli_query(
            $mysqli,
            "UPDATE users SET user_password = '{$new_password}' WHERE user_id = '{$user_id}'"
        )) {
            $success = "Password updated";
        } else {
            $err = "Failed to update password";
        }
    }
}
