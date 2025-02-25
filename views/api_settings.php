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

session_start();
require_once('../config/config.php');
require_once('../config/checklogin.php');
require_once('../partials/backoffice_head.php');
require_once('../helpers/mailer.php');
?>

<body class="nk-body bg-lighter npc-general has-sidebar ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- sidebar @s -->
            <?php require_once('../partials/backoffice_sidebar.php'); ?>
            <!-- sidebar @e -->
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                <?php require_once('../partials/backoffice_header.php'); ?>
                <!-- main header @e -->
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Mailer API Settings</h3>
                                            <div class="nk-block-des text-soft">
                                                <p>
                                                    This module allows you to manage your Mailer API Settings <br>
                                                </p>
                                            </div>
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->

                                <div class="">
                                    <div class="row">
                                        <div class="card mb-3 col-md-12 border border-success">
                                            <div class="card-body">
                                                <ul class="nav nav-tabs nav-tabs-s2">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" data-toggle="tab" href="#tabItem9">STMP Mailer API Configs</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#tabItem10">Postfix Mailer API Configs</a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="tabItem9">
                                                        <?php
                                                        $fetch_records_sql = mysqli_query(
                                                            $mysqli,
                                                            "SELECT * FROM mailer_settings"
                                                        );
                                                        if (mysqli_num_rows($fetch_records_sql) > 0) {
                                                            while ($rows = mysqli_fetch_array($fetch_records_sql)) {
                                                        ?>
                                                                <form method="post" enctype="multipart/form-data">
                                                                    <div class="form-row">
                                                                        <div class="form-group col-md-6">
                                                                            <label>Host <span class="text-danger">*</span></label>
                                                                            <input type="hidden" name="id" value="<?php echo $rows['id']; ?>" required class="form-control">
                                                                            <input type="text" name="mailer_host" value="<?php echo $rows['mailer_host']; ?>" required class="form-control">
                                                                        </div>
                                                                        <div class="form-group col-md-3">
                                                                            <label>Port <span class="text-danger">*</span></label>
                                                                            <input type="text" name="mailer_port" value="<?php echo $rows['mailer_port']; ?>" required class="form-control">
                                                                        </div>
                                                                        <div class="form-group col-md-3">
                                                                            <label>Protocol <span class="text-danger">*</span></label>
                                                                            <input type="text" name="mailer_protocol" value="<?php echo $rows['mailer_protocol']; ?>" required class="form-control">
                                                                        </div>
                                                                        <div class="form-group col-md-6">
                                                                            <label>STMP Username <span class="text-danger">*</span></label>
                                                                            <input type="text" name="mailer_username" value="<?php echo $rows['mailer_username']; ?>" required class="form-control">
                                                                        </div>
                                                                        <div class="form-group col-md-6">
                                                                            <label>STMP Password <span class="text-danger">*</span></label>
                                                                            <input type="password" name="mailer_password" value="<?php echo $rows['mailer_password']; ?>" required class="form-control">
                                                                        </div>
                                                                        <div class="form-group col-md-4">
                                                                            <label>Mailer Name <span class="text-danger">*</span></label>
                                                                            <input type="text" name="mailer_mail_from_name" value="<?php echo $rows['mailer_mail_from_name']; ?>" required class="form-control">
                                                                        </div>
                                                                        <div class="form-group col-md-4">
                                                                            <label>Mailer Email <span class="text-danger">*</span></label>
                                                                            <input type="text" name="mailer_mail_from_email" value="<?php echo $rows['mailer_mail_from_email']; ?>" required class="form-control">
                                                                        </div>
                                                                        <div class="form-group col-md-4">
                                                                            <label>Mailer status <span class="text-danger">*</span></label>
                                                                            <select type="text" name="mailer_status" required class="form-control">
                                                                                <?php if ($rows['mailer_status'] == 'Active') { ?>
                                                                                    <option value="Active">Active</option>
                                                                                    <option value="Inactive">Inactive</option>
                                                                                <?php } else { ?>
                                                                                    <option value="Inactive">Inactive</option>
                                                                                    <option value="Active">Active</option>
                                                                                <?php } ?>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <br><br>
                                                                    <div class="text-right">
                                                                        <button name="STMP" class="btn btn-primary" type="submit">
                                                                            <em class="icon ni ni-save"></em> Save
                                                                        </button>
                                                                    </div>
                                                                </form>
                                                        <?php }
                                                        }
                                                        ?>
                                                    </div>
                                                    <div class="tab-pane" id="tabItem10">
                                                        <?php
                                                        $fetch_records_sql = mysqli_query(
                                                            $mysqli,
                                                            "SELECT * FROM postfix_mailer_configs"
                                                        );
                                                        if (mysqli_num_rows($fetch_records_sql) > 0) {
                                                            while ($rows = mysqli_fetch_array($fetch_records_sql)) {
                                                        ?>
                                                                <form method="post" enctype="multipart/form-data">
                                                                    <div class="form-row">
                                                                        <div class="form-group col-md-12">
                                                                            <label>Mail from name <span class="text-danger">*</span></label>
                                                                            <input type="hidden" name="postfix_mailer_id" value="<?php echo $rows['postfix_mailer_id']; ?>" required class="form-control">
                                                                            <input type="text" name="postfix_mailer_from_name" value="<?php echo $rows['postfix_mailer_from_name']; ?>" required class="form-control">
                                                                        </div>
                                                                        <div class="form-group col-md-6">
                                                                            <label>Mail from name <span class="text-danger">*</span></label>
                                                                            <input type="text" name="postfix_mailer_from_email" value="<?php echo $rows['postfix_mailer_from_email']; ?>" required class="form-control">
                                                                        </div>
                                                                        <div class="form-group col-md-6">
                                                                            <label>Mailer status <span class="text-danger">*</span></label>
                                                                            <select type="text" name="postfix_mailer_status" required class="form-control">
                                                                                <?php if ($rows['postfix_mailer_status'] == 'Active') { ?>
                                                                                    <option value="Active">Active</option>
                                                                                    <option value="Inactive">Inactive</option>
                                                                                <?php } else { ?>
                                                                                    <option value="Inactive">Inactive</option>
                                                                                    <option value="Active">Active</option>
                                                                                <?php } ?>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <br><br>
                                                                    <div class="text-right">
                                                                        <button name="POSTFIX" class="btn btn-primary" type="submit">
                                                                            <em class="icon ni ni-save"></em> Save
                                                                        </button>
                                                                    </div>
                                                                </form>
                                                        <?php }
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- .nk-block -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content @e -->
                <!-- footer @s -->
                <?php require_once('../partials/backoffice_footer.php'); ?>
                <!-- footer @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    <?php require_once('../partials/backoffice_scripts.php'); ?>
</body>

</html>