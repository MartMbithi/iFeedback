<?php
/*
 *   Crafted On Wed Feb 26 2025
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

require_once('../config/config.php');
/* Mailer Configurations */
require_once('../vendor/PHPMailer/src/SMTP.php');
require_once('../vendor/PHPMailer/src/PHPMailer.php');
require_once('../vendor/PHPMailer/src/Exception.php');

$ret = "SELECT * FROM mailer_settings 
JOIN postfix_mailer_configs";
$stmt = $mysqli->prepare($ret);
$stmt->execute(); //ok
$res = $stmt->get_result();
while ($mailer = $res->fetch_object()) {

    /* Determine which mailer is active */
    if ($mailer->mailer_status == 'Active') {

        $mail = new PHPMailer\PHPMailer\PHPMailer();
        $mail->setFrom($mailer->mailer_mail_from_email);
        $mail->addAddress($department_email);
        $mail->addBCC("martdevelopers254@gmail.com"); // Edit This
        $mail->FromName = $mailer->mailer_mail_from_name;
        $mail->isHTML(true);
        $mail->IsSMTP();
        $mail->SMTPKeepAlive = true; //SMTP connection will not close after each email sent, reduces SMTP overhead
        $mail->SMTPSecure = $mailer->mailer_protocol;
        $mail->Host = $mailer->mailer_host;
        $mail->SMTPAuth = true;
        $mail->Port = $mailer->mailer_port;
        $mail->Username = $mailer->mailer_username;
        $mail->Password = $mailer->mailer_password;
        $mail->Subject = 'A New ' . $feedback_type . ' Has Been Submitted';
        /* Custom Mail Body */
        $mail->Body = '
        <!doctype html>
        <html lang="en-US">
        
        <head>
            <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
            <title>Password Reset</title>
            <meta name="description" content="Reset Password Email">
            <style type="text/css">
                a:hover {text-decoration: underline !important;}
            </style>
        </head>
        
        <body marginheight="0" topmargin="0" marginwidth="0" style="margin: 0px; background-color: #f2f3f8;" leftmargin="0">
            <!--100% body table-->
            <table cellspacing="0" border="0" cellpadding="0" width="100%" bgcolor="#f2f3f8"
                style="@import url(https://fonts.googleapis.com/css?family=Rubik:300,400,500,700|Open+Sans:300,400,600,700); font-family: "Open Sans", sans-serif;">
                <tr>
                    <td>
                        <table style="background-color: #f2f3f8; max-width:670px;  margin:0 auto;" width="100%" border="0"
                            align="center" cellpadding="0" cellspacing="0">
                            <tr>
                                <td style="height:80px;">&nbsp;</td>
                            </tr>
                            <tr>
                                <td style="height:20px;">&nbsp;</td>
                            </tr>
                            <tr>
                                <td>
                                    <table width="95%" border="0"  cellpadding="0" cellspacing="0"
                                        style="max-width:670px;background:#fff; border-radius:3px; text-align:center;-webkit-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);-moz-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);box-shadow:0 6px 18px 0 rgba(0,0,0,.06);">
                                        <tr>
                                            <td style="height:40px;">&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td style="padding:0 35px;">
                                                <h4 style="color:#1e1e2d; font-weight:500; margin:0;font-size:39px;font-family:"Rubik",sans-serif;">
                                                        Pharmacy and Poisons Board <br>
                                                        Feedback Portal
                                                    </h4>
                                                <span
                                                    style="display:inline-block; vertical-align:middle; margin:29px 0 26px; border-bottom:1px solid #cecece; width:100px;"></span>
                                                <p style="color:#455056; font-size:15px;line-height:24px; margin:0;" align="justify">
                                                    A new  ' . $feedback_type . ' has been successfully submitted to the ' . $feedback_directorate . ' directorate under the ' . $feedback_department . ' department. <br>
                                                    You are requested to log in to the feedback portal to review the details and take the necessary action.
                                                </p>
                                                <p align="center" style="color:#455056; font-size:15px;line-height:24px; margin:0;">
                                                <br>
                                                Yours Sincerely<br>
                                                    <b>
                                                        Pharmacy and Poisons Board <br>
                                                        <i>Powered by Devlan Solutions LTD</i>
                                                    <br>
                                                </b>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="height:40px;">&nbsp;</td>
                                        </tr>
                                    </table>
                                </td>
                            <tr>
                                <td style="height:20px;">&nbsp;</td>
                            </tr>
                            <tr>
                                <td style="height:80px;">&nbsp;</td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </body>
    ';
        /* Send this email here */
        $mail->send();
        /* ****************************************************************************************************** */
    } else if ($mailer->postfix_mailer_status == 'Active') {
        /* Load postfix mailer settings */
        $fromName = $mailer->postfix_mailer_from_name;
        $from = $mailer->postfix_mailer_from_email;
        $to = $department_email;
        $bcc = 'martdevelopers254@gmail.com'; // Edit This
        $subject = "A New  $feedback_type Has Been Submitted";
        $message = ' 
        <!doctype html>
        <html lang="en-US">
        
            <head>
                <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
                <title>Welcome Reset</title>
                <meta name="description" content="Welcome Email">
                <style type="text/css">
                    a:hover {text-decoration: underline !important;}
                </style>
            </head>
            
            <body marginheight="0" topmargin="0" marginwidth="0" style="margin: 0px; background-color: #f2f3f8;" leftmargin="0">
                <!--100% body table-->
                <table cellspacing="0" border="0" cellpadding="0" width="100%" bgcolor="#f2f3f8"
                    style="@import url(https://fonts.googleapis.com/css?family=Rubik:300,400,500,700|Open+Sans:300,400,600,700); font-family: "Open Sans", sans-serif;">
                    <tr>
                        <td>
                            <table style="background-color: #f2f3f8; max-width:670px;  margin:0 auto;" width="100%" border="0"
                                align="center" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td style="height:80px;">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td style="height:20px;">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>
                                        <table width="95%" border="0"  cellpadding="0" cellspacing="0"
                                            style="max-width:670px;background:#fff; border-radius:3px; text-align:center;-webkit-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);-moz-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);box-shadow:0 6px 18px 0 rgba(0,0,0,.06);">
                                            <tr>
                                                <td style="height:40px;">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td style="padding:0 35px;">
                                                    <h4 style="color:#1e1e2d; font-weight:500; margin:0;font-size:39px;font-family:"Rubik",sans-serif;">
                                                            Pharmacy and Poisons Board <br>
                                                            Feedback Portal
                                                        </h4>
                                                    <span
                                                        style="display:inline-block; vertical-align:middle; margin:29px 0 26px; border-bottom:1px solid #cecece; width:100px;"></span>
                                                    <p style="color:#455056; font-size:15px;line-height:24px; margin:0;" align="justify">
                                                        A new  ' . $feedback_type . ' has been successfully submitted to the ' . $feedback_directorate . ' directorate under ' . $feedback_department . ' department. <br>
                                                        You are requested to log in to the feedback portal to review the details and take the necessary action.
                                                    </p>
                                                    <p align="center" style="color:#455056; font-size:15px;line-height:24px; margin:0;">
                                                    <br>
                                                    Yours Sincerely<br>
                                                        <b>
                                                            Pharmacy and Poisons Board <br>
                                                            <i>Powered by Devlan Solutions LTD</i>
                                                        <br>
                                                    </b>
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="height:40px;">&nbsp;</td>
                                            </tr>
                                        </table>
                                    </td>
                                <tr>
                                    <td style="height:20px;">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td style="height:80px;">&nbsp;</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </body>
        </html>';
        // Set content-type header for sending HTML email 
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // Additional headers 
        $headers .= 'From: ' . $fromName . '<' . $from . '>' . "\r\n";

        mail($to, $subject, $message, $headers);
    } else {
        /* Shhhh - Say nothing */
    }
}
