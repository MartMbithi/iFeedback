<?php
/*
 *   Crafted On Tue Feb 25 2025
 *   From his finger tips, through his IDE to your deployment environment at full throttle with no bugs, loss of data,
 *   fluctuations, signal interference, or doubt—it can only be
 *   the legendary coding wizard, Martin Mbithi (martin@devlan.co.ke, www.martmbithi.github.io)
 *   
 *   www.devlan.co.ke
 *   hello@devlan.co.ke
 *
 *
 *   The Devlan Solutions LTD Super Duper User License Agreement
 *   Copyright (c) 2022 Devlan Solutions LTD
 *
 *
 *   1. LICENSE TO BE AWESOME
 *   Congrats, you lucky human! Devlan Solutions LTD hereby bestows upon you the magical,
 *   revocable, personal, non-exclusive, and totally non-transferable right to install this epic system
 *   on not one, but TWO separate computers for your personal, non-commercial shenanigans.
 *   Unless, of course, you've leveled up with a commercial license from Devlan Solutions LTD.
 *   Sharing this software with others or letting them even peek at it? Nope, that's a big no-no.
 *   And don't even think about putting this on a network or letting a crowd join the fun unless you
 *   first scored a multi-user license from us. Sharing is caring, but rules are rules!
 *
 *   2. COPYRIGHT POWER-UP
 *   This Software is the prized possession of Devlan Solutions LTD and is shielded by copyright law
 *   and the forces of international copyright treaties. You better not try to hide or mess with
 *   any of our awesome proprietary notices, labels, or marks. Respect the swag!
 *
 *
 *   3. RESTRICTIONS, NO CHEAT CODES ALLOWED
 *   You may not, and you shall not let anyone else:
 *   (a) reverse engineer, decompile, decode, decrypt, disassemble, or do any sneaky stuff to
 *   figure out the source code of this software;
 *   (b) modify, remix, distribute, or create your own funky version of this masterpiece;
 *   (c) copy (except for that one precious backup), distribute, show off in public, transmit, sell, rent,
 *   lease, or otherwise exploit the Software like it's your own.
 *
 *
 *   4. THE ENDGAME
 *   This License lasts until one of us says 'Game Over'. You can call it quits anytime by
 *   destroying the Software and all the copies you made (no hiding them under your bed).
 *   If you break any of these sacred rules, this License self-destructs, and you must obliterate
 *   every copy of the Software, no questions asked.
 *
 *
 *   5. NO GUARANTEES, JUST PIXELS
 *   DEVLAN SOLUTIONS LTD doesn’t guarantee this Software is flawless—it might have a few
 *   quirks, but who doesn’t? DEVLAN SOLUTIONS LTD washes its hands of any other warranties,
 *   implied or otherwise. That means no promises of perfect performance, marketability, or
 *   non-infringement. Some places have different rules, so you might have extra rights, but don’t
 *   count on us for backup if things go sideways. Use at your own risk, brave adventurer!
 *
 *
 *   6. SEVERABILITY—KEEP THE GOOD STUFF
 *   If any part of this License gets tossed out by a judge, don’t worry—the rest of the agreement
 *   still stands like a boss. Just because one piece fails doesn’t mean the whole thing crumbles.
 *
 *
 *   7. NO DAMAGE, NO DRAMA
 *   Under no circumstances will Devlan Solutions LTD or its squad be held responsible for any wild,
 *   indirect, or accidental chaos that might come from using this software—even if we warned you!
 *   And if you ever think you’ve got a claim, the most you’re getting out of us is the license fee you
 *   paid—if any. No drama, no big payouts, just pixels and code.
 *
 */

/* 
    Register User
 */
if (isset($_POST['Add_User'])) {
    $user_names = mysqli_real_escape_string($mysqli, $_POST['user_names']);
    $user_email = mysqli_real_escape_string($mysqli, $_POST['user_email']);
    $user_phone = mysqli_real_escape_string($mysqli, $_POST['user_phone']);
    $user_access_level = mysqli_real_escape_string($mysqli, $_POST['user_access_level']); // Ensure correct name attribute in the form
    $generated_password = $pass;
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

    $user_id = mysqli_real_escape_string($mysqli, $_POST['user_id']);
    $user_email = mysqli_real_escape_string($mysqli, $_POST['user_email']);
    $generated_password = $pass;
    $hashed_password = sha1(md5($generated_password));

    $update_password_query = "UPDATE users SET 
                              user_password = '$hashed_password', 
                              user_change_password = 1 
                              WHERE user_id = '$user_id'";

    if (mysqli_query($mysqli, $update_password_query)) {
        include('../mailers/force_password_reset.php');
        $success = "Password reset successfully! An email has been sent to the user.";
    } else {
        $err = "Failed to reset password, please try again later.";
    }
}



/* Update Details */
if (isset($_POST['Update_User'])) {
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
