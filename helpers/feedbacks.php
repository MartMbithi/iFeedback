<?php
/*
 *   Crafted On Mon Feb 24 2025
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

/* Step One */
if (isset($_POST['Step_One'])) {
    if (empty($_POST['feedback_directorate']) || empty($_POST['feedback_department'])) {
        $err = "Kindly select directorate and department";
    } else {
        $feedback_type = mysqli_real_escape_string($mysqli, $_POST['feedback_type']);
        $feedback_directorate = mysqli_real_escape_string($mysqli, $_POST['feedback_directorate']);
        $feedback_department = mysqli_real_escape_string($mysqli, $_POST['feedback_department']);

        /* Persist This And Set The Mood Right */
        if (mysqli_query(
            $mysqli,
            "INSERT INTO feedbacks (feedback_type, feedback_directorate, feedback_department) 
        VALUES ('{$feedback_type}', '{$feedback_directorate}', '{$feedback_department}')"
        )) {
            $feedback_id = mysqli_insert_id($mysqli);
            $_SESSION['feedback_id'] = $feedback_id;
            header('Location: feedback_questionnaire?page=1');
            exit;
        } else {
            $err = "Failed, please try again";
        }
    }
}


/* Step Two */
if (isset($_POST['Step_Three'])) {
    /* Prevent Nulls */
    if (
        empty($_POST['feedback_gsd1']) ||
        empty($_POST['feedback_gsd2']) ||
        empty($_POST['feedback_gsd3']) ||
        empty($_POST['feedback_gsd4']) ||
        empty($_POST['feedback_gsd5'])
    ) {
        $err = "Kindly fill all required fields";
    } else {
        $feedback_id = mysqli_real_escape_string($mysqli, $_POST['feedback_id']);
        $feedback_gsd1 = mysqli_real_escape_string($mysqli, $_POST['feedback_gsd1']);
        $feedback_gsd2 = mysqli_real_escape_string($mysqli, $_POST['feedback_gsd2']);
        $feedback_gsd3 = mysqli_real_escape_string($mysqli, $_POST['feedback_gsd3']);
        $feedback_gsd4 = mysqli_real_escape_string($mysqli, $_POST['feedback_gsd4']);
        $feedback_gsd5 = mysqli_real_escape_string($mysqli, $_POST['feedback_gsd5']);

        /* Update */
        if (mysqli_query(
            $mysqli,
            "UPDATE feedbacks SET feedback_gsd1 = '{$feedback_gsd1}', feedback_gsd2 = '{$feedback_gsd2}', 
        feedback_gsd3 = '{$feedback_gsd3}', feedback_gsd4 = '{$feedback_gsd4}', feedback_gsd5 = '{$feedback_gsd5}'
        WHERE feedback_id = '{$feedback_id}'"
        )) {
            $_SESSION['feedback_id'] = $feedback_id;
            header('Location: feedback_questionnaire?page=2');
            exit;
        } else {
            $err = "Failed, please try again";
        }
    }
}


/* Step Three */
if (isset($_POST['Step_Four'])) {
    if (
        empty($_POST['feedback_si1']) ||
        empty($_POST['feedback_si2']) ||
        empty($_POST['feedback_si3']) ||
        empty($_POST['feedback_si4']) ||
        empty($_POST['feedback_si5'])
    ) {
        $err = "Kindly fill all required fields";
    } else {
        $feedback_id = mysqli_real_escape_string($mysqli, $_POST['feedback_id']);
        $feedback_si1 = mysqli_real_escape_string($mysqli, $_POST['feedback_si1']);
        $feedback_si2 = mysqli_real_escape_string($mysqli, $_POST['feedback_si2']);
        $feedback_si3 = mysqli_real_escape_string($mysqli, $_POST['feedback_si3']);
        $feedback_si4 = mysqli_real_escape_string($mysqli, $_POST['feedback_si4']);
        $feedback_si5 = mysqli_real_escape_string($mysqli, $_POST['feedback_si5']);

        /* Persist */
        if (mysqli_query(
            $mysqli,
            "UPDATE feedbacks SET feedback_si1 = '{$feedback_si1}', feedback_si2 = '{$feedback_si2}',
        feedback_si3 = '{$feedback_si3}', feedback_si4 = '{$feedback_si4}', feedback_si5 = '{$feedback_si5}'
        WHERE feedback_id = '{$feedback_id}'"
        )) {
            $_SESSION['feedback_id'] = $feedback_id;
            header('Location: feedback_questionnaire?page=3');
            exit;
        } else {
            $err = "Failed, please try again";
        }
    }
}


/* Step 4 */
if (isset($_POST['Step_Five'])) {
    if (
        empty($_POST['feedback_et1']) ||
        empty($_POST['feedback_et2']) ||
        empty($_POST['feedback_et3']) ||
        empty($_POST['feedback_et4']) ||
        empty($_POST['feedback_et5'])
    ) {
        $err = "Kindly fill all required fields";
    } else {
        $feedback_id = mysqli_real_escape_string($mysqli, $_POST['feedback_id']);
        $feedback_et1 = mysqli_real_escape_string($mysqli, $_POST['feedback_et1']);
        $feedback_et2 = mysqli_real_escape_string($mysqli, $_POST['feedback_et2']);
        $feedback_et3 = mysqli_real_escape_string($mysqli, $_POST['feedback_et3']);
        $feedback_et4 = mysqli_real_escape_string($mysqli, $_POST['feedback_et4']);
        $feedback_et5 = mysqli_real_escape_string($mysqli, $_POST['feedback_et5']);

        /* Persist */
        if (mysqli_query(
            $mysqli,
            "UPDATE feedbacks SET feedback_et1 = '{$feedback_et1}', feedback_et2 = '{$feedback_et2}',
            feedback_et3 = '{$feedback_et3}', feedback_et4 = '{$feedback_et4}', feedback_et5 = '{$feedback_et5}'
            WHERE feedback_id = '{$feedback_id}'"
        )) {
            $_SESSION['feedback_id'] = $feedback_id;
            header('Location: feedback_questionnaire?page=4');
            exit;
        } else {
            $err = "Failed, please try again";
        }
    }
}


/* Step 5 */
if (isset($_POST['Step_Six'])) {
    if (
        empty($_POST['feedback_ac1']) ||
        empty($_POST['feedback_ac2']) ||
        empty($_POST['feedback_ac3']) ||
        empty($_POST['feedback_ac4']) ||
        empty($_POST['feedback_ac5'])
    ) {
        $err = "Kindly fill all required fields";
    } else {
        $feedback_id = mysqli_real_escape_string($mysqli, $_POST['feedback_id']);
        $feedback_ac1 = mysqli_real_escape_string($mysqli, $_POST['feedback_ac1']);
        $feedback_ac2 = mysqli_real_escape_string($mysqli, $_POST['feedback_ac2']);
        $feedback_ac3 = mysqli_real_escape_string($mysqli, $_POST['feedback_ac3']);
        $feedback_ac4 = mysqli_real_escape_string($mysqli, $_POST['feedback_ac4']);
        $feedback_ac5 = mysqli_real_escape_string($mysqli, $_POST['feedback_ac5']);

        /* Persist */
        if (mysqli_query(
            $mysqli,
            "UPDATE feedbacks SET feedback_ac1 = '{$feedback_ac1}', feedback_ac2 = '{$feedback_ac2}',
        feedback_ac3 = '{$feedback_ac3}', feedback_ac4 = '{$feedback_ac4}', feedback_ac5 = '{$feedback_ac5}'
        WHERE feedback_id = '{$feedback_id}'"
        )) {
            $_SESSION['feedback_id'] = $feedback_id;
            header('Location: feedback_questionnaire?page=5');
            exit;
        } else {
            $err = "Failed, please try again";
        }
    }
}

/* Step 7 */
if (isset($_POST['Step_Seven'])) {
    if (
        empty($_POST['feedback_is1']) ||
        empty($_POST['feedback_is2']) ||
        empty($_POST['feedback_is3']) ||
        empty($_POST['feedback_is4']) ||
        empty($_POST['feedback_is5'])
    ) {
        $err = "Kindly fill all required fields";
    } else {
        $feedback_id = mysqli_real_escape_string($mysqli, $_POST['feedback_id']);
        $feedback_is1 = mysqli_real_escape_string($mysqli, $_POST['feedback_is1']);
        $feedback_is2 = mysqli_real_escape_string($mysqli, $_POST['feedback_is2']);
        $feedback_is3 = mysqli_real_escape_string($mysqli, $_POST['feedback_is3']);
        $feedback_is4 = mysqli_real_escape_string($mysqli, $_POST['feedback_is4']);
        $feedback_is5 = mysqli_real_escape_string($mysqli, $_POST['feedback_is5']);
        $feedback_owner_name = mysqli_real_escape_string($mysqli, $_POST['feedback_owner_name']);
        $feedback_owner_email = mysqli_real_escape_string($mysqli, $_POST['feedback_owner_email']);
        $feedback_owner_contact = mysqli_real_escape_string($mysqli, $_POST['feedback_owner_contact']);

        /* Persist */
        if (mysqli_query(
            $mysqli,
            "UPDATE feedbacks SET feedback_is1 = '{$feedback_is1}', feedback_is2 = '{$feedback_is2}',
        feedback_is3 = '{$feedback_is3}', feedback_is4 = '{$feedback_is4}', feedback_is5 = '{$feedback_is5}',
        feedback_owner_name = '{$feedback_owner_name}', feedback_owner_email = '{$feedback_owner_email}',
        feedback_owner_contact = '{$feedback_owner_contact}'
        WHERE feedback_id = '{$feedback_id}'"
        )) {
            $_SESSION['feedback_id'] = $feedback_id;
            $_SESSION['success'] = 'Your feedback has been submitted successfully, we appreciate your time';
            header('Location: ../');
            exit;
        } else {
            $err = "Failed, please try again";
        }
    }
}


/* Update Status */
if (isset($_POST['Update_Status'])) {
    $feedback_id = mysqli_real_escape_string($mysqli, $_POST['feedback_id']);
    $feedback_status = mysqli_real_escape_string($mysqli, $_POST['feedback_status']);

    /* Persist */
    if (mysqli_query(
        $mysqli,
        "UPDATE feedbacks SET feedback_status = '{$feedback_status}' WHERE feedback_id = '{$feedback_id}'"
    )) {
        $success = "Complain status updated to {$feedback_status}";
    } else {
        $err = "Failed, please try again";
    }
}
