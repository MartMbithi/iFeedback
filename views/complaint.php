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

session_start();
require_once('../config/config.php');
require_once('../helpers/feedbacks.php');
require_once('../partials/backoffice_head.php');
?>

<body class="nk-body npc-subscription has-aside ui-clean ">
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="content-page wide-md m-auto">
                        <div class="nk-block-head nk-block-head-lg wide-xs mx-auto">
                            <div class="nk-block-head-content text-center">
                                <img class="logo-dark logo-img logo-img-lg" src="../public/images/logo.png" srcset="../public/images/logo.png 2x" alt="logo-dark">
                                <div class="nk-block-des">
                                    <h5 class="">
                                        <br> Proceed to submit a complain, kindly select a directorate and subsequent department <br>
                                    </h5>
                                </div>
                            </div>
                        </div><!-- .nk-block-head -->
                        <form method="post" enctype="multipart/form-data">
                            <div class="nk-block">
                                <div class="nk-block">
                                    <div class="row g-gs">
                                        <div class="col-md-12">
                                            <input type="hidden" name="feedback_type" value="Complain">
                                            <label for="directorate" class="form-label">Choose Directorate:</label>
                                            <select id="directorate" name="feedback_directorate" class="form-select" onchange="updateDepartments()">
                                                <option value="">Select directorate</option>
                                                <?php
                                                $fetch_records_sql = mysqli_query(
                                                    $mysqli,
                                                    "SELECT * FROM directorates"
                                                );
                                                if (mysqli_num_rows($fetch_records_sql) > 0) {
                                                    while ($rows = mysqli_fetch_array($fetch_records_sql)) {
                                                ?>
                                                        <option value="<?php echo $rows['directorate_name']; ?>"><?php echo $rows['directorate_name']; ?></option>
                                                <?php }
                                                } ?>
                                            </select>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="department" class="form-label">Choose Department:</label>
                                            <select id="department" name="feedback_department" class="form-select"></select>
                                            <input type="hidden" name="department_email" id="department_email" value="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <a href="../" class="btn btn-primary mt-3"> <em class="icon ni ni-first"></em> Back</a> &nbsp; &nbsp;
                                <button type="submit" name="Step_One" class="btn btn-primary mt-3">Next <em class="icon ni ni-last"></em> </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- app-root @e -->
    <!-- JavaScript -->
    <?php require_once('../partials/backoffice_scripts.php'); ?>
</body>


</html>