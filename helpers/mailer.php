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

if (isset($_POST['STMP'])) {
    $id = mysqli_real_escape_string($mysqli, $_POST['id']);
    $mailer_host = mysqli_real_escape_string($mysqli, $_POST['mailer_host']);
    $mailer_port = mysqli_real_escape_string($mysqli, $_POST['mailer_port']);
    $mailer_protocol = mysqli_real_escape_string($mysqli, $_POST['mailer_protocol']);
    $mailer_username = mysqli_real_escape_string($mysqli, $_POST['mailer_username']);
    $mailer_mail_from_name = mysqli_real_escape_string($mysqli, $_POST['mailer_mail_from_name']);
    $mailer_mail_from_email = mysqli_real_escape_string($mysqli, $_POST['mailer_mail_from_email']);
    $mailer_password = mysqli_real_escape_string($mysqli, $_POST['mailer_password']);
    $mailer_status = mysqli_real_escape_string($mysqli, $_POST['mailer_status']);

    if ($mailer_status == 'Active') {
        /* Before fine tuning this sucker, check if postfix still active */
        $fetch_records_sql = mysqli_query(
            $mysqli,
            "SELECT * FROM postfix_mailer_configs"
        );
        if (mysqli_num_rows($fetch_records_sql) > 0) {
            while ($rows = mysqli_fetch_array($fetch_records_sql)) {
                $postfix_mailer_status = $rows['postfix_mailer_status'];
                if ($postfix_mailer_status == 'Active') {
                    $err = "Please disable the postfix mailer before activating the STMP mailer";
                } else {
                    /* Fine Tune */
                    $tune_sql = "UPDATE mailer_settings SET mailer_host  = '{$mailer_host}', mailer_port = '{$mailer_port}', 
                    mailer_protocol = '{$mailer_protocol}', mailer_username = '{$mailer_username}', mailer_mail_from_name = '{$mailer_mail_from_name}',
                    mailer_mail_from_email = '{$mailer_mail_from_email}', mailer_password = '{$mailer_password}', mailer_status = '{$mailer_status}' WHERE id = '{$id}'";

                    if (mysqli_query($mysqli, $tune_sql)) {
                        $success = "STMP settings updated";
                    } else {
                        $err  = "Failed, please try again";
                    }
                }
            }
        }
    } else {
        /* Fine tune stmp mailer silently */
        $tune_sql = "UPDATE mailer_settings SET mailer_host  = '{$mailer_host}', mailer_port = '{$mailer_port}', 
        mailer_protocol = '{$mailer_protocol}', mailer_username = '{$mailer_username}', mailer_mail_from_name = '{$mailer_mail_from_name}',
        mailer_mail_from_email = '{$mailer_mail_from_email}', mailer_password = '{$mailer_password}', mailer_status = '{$mailer_status}' WHERE id = '{$id}'";

        if (mysqli_query($mysqli, $tune_sql)) {
            $success = "STMP settings updated";
        } else {
            $err  = "Failed, please try again";
        }
    }
}
/* postfix */
if (isset($_POST['POSTFIX'])) {
    $postfix_mailer_from_name = mysqli_real_escape_string($mysqli, $_POST['postfix_mailer_from_name']);
    $postfix_mailer_from_email = mysqli_real_escape_string($mysqli, $_POST['postfix_mailer_from_email']);
    $postfix_mailer_status = mysqli_real_escape_string($mysqli, $_POST['postfix_mailer_status']);

    if ($postfix_mailer_status == 'Active') {
        /* Determine If the stmp mailer is set to active, only one mailer must be active */
        $fetch_records_sql = mysqli_query(
            $mysqli,
            "SELECT * FROM mailer_settings"
        );
        if (mysqli_num_rows($fetch_records_sql) > 0) {
            while ($rows = mysqli_fetch_array($fetch_records_sql)) {
                $mailer_status = $rows['mailer_status'];
                if ($mailer_status == 'Active') {
                    $err = "Please disable the STMP mailer before activating the postfix mailer";
                } else {
                    /* Fine Tune */
                    $tune_sql = "UPDATE postfix_mailer_configs SET postfix_mailer_from_name = '{$postfix_mailer_from_name}', postfix_mailer_from_email = '{$postfix_mailer_from_email}',  
                    postfix_mailer_status = '{$postfix_mailer_status}'";

                    if (mysqli_query($mysqli, $tune_sql)) {
                        $success = "Postfix mailer settings updated";
                    } else {
                        $err = "Failed, please try again";
                    }
                }
            }
        }
    } else {
        /* Fine tune postfix silently */
        $tune_sql = "UPDATE postfix_mailer_configs SET postfix_mailer_from_name = '{$postfix_mailer_from_name}', postfix_mailer_from_email = '{$postfix_mailer_from_email}',  
        postfix_mailer_status = '{$postfix_mailer_status}'";

        if (mysqli_query($mysqli, $tune_sql)) {
            $success = "Postfix mailer settings updated";
        } else {
            $err = "Failed, please try again";
        }
    }
}
