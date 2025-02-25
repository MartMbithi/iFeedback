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
require_once('../functions/analytics.php');
require_once('../partials/backoffice_head.php');
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
                                            <h3 class="nk-block-title page-title"><?php echo $greeting . ' ' . $_SESSION['user_names']; ?></h3>
                                            <div class="nk-block-des text-soft">
                                                <p>Welcome to Pharmacy and Poisons Board Feedback & Complains Redress MIS </p>
                                            </div>
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="row g-gs">

                                        <div class="col-md-4 col-sm-12">
                                            <a href="dealers">
                                                <div class="card card-bordered card-full">
                                                    <div class="card-inner">
                                                        <div class="card-title-group align-start mb-0">
                                                            <div class="card-title">
                                                                <h6 class="subtitle">Cumulative Reported Complains </h6>
                                                            </div>
                                                        </div>
                                                        <div class="card-amount">
                                                            <span class="amount">
                                                                <?php echo number_format($all_complains); ?>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div><!-- .card -->
                                            </a>
                                        </div><!-- .col -->

                                        <div class="col-md-4 col-sm-12">
                                            <a href="reports_all_dealers">
                                                <div class="card card-bordered card-full">
                                                    <div class="card-inner">
                                                        <div class="card-title-group align-start mb-0">
                                                            <div class="card-title">
                                                                <h6 class="subtitle">Solved Complains</h6>
                                                            </div>
                                                        </div>
                                                        <div class="card-amount">
                                                            <span class="amount">
                                                                <?php echo number_format($all_solved); ?>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div><!-- .card -->
                                            </a>
                                        </div><!-- .col -->

                                        <div class="col-md-4 col-sm-12">
                                            <a href="payment_confirmations">
                                                <div class="card card-bordered card-full">
                                                    <div class="card-inner">
                                                        <div class="card-title-group align-start mb-0">
                                                            <div class="card-title">
                                                                <h6 class="subtitle">Pending Complains</h6>
                                                            </div>
                                                        </div>
                                                        <div class="card-amount">
                                                            <span class="amount">
                                                                <?php echo  number_format($all_pending); ?>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div><!-- .card -->
                                            </a>
                                        </div><!-- .col -->
                                        <div class="col-xl-12 col-md-12 col-xxl-12 col-lg-12 col-sm-12">
                                            <div class="card card-bordered card-full">
                                                <div class="card-inner border-bottom">
                                                    <div class="card-title-group">
                                                        <div class="card-title">
                                                            <h6 class="title">Departmental Complaint Resolutions </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="nk-tb-list">
                                                    <div class="nk-tb-item nk-tb-head">
                                                        <div class="nk-tb-col tb-col-sm"><span>Department</span></div>
                                                        <div class="nk-tb-col"><span>Resolved complains</span></div>
                                                        <div class="nk-tb-col tb-col-lg"><span>In progress</span></div>
                                                        <div class="nk-tb-col"><span>Pending resolution</span></div>
                                                        <div class="nk-tb-col"><span>Totals</span></div>
                                                    </div>
                                                    <?php
                                                    $departments = array('Transport', 'Security', 'Finance', 'Testing', 'Analysis');
                                                    foreach ($departments as $department) {
                                                        $query = "SELECT 
                                                        COALESCE(SUM(CASE WHEN feedback_status = 'Resolved' THEN 1 ELSE 0 END), 0) AS resolved,
                                                        COALESCE(SUM(CASE WHEN feedback_status = 'In Progress' THEN 1 ELSE 0 END), 0) AS inprogress,
                                                        COALESCE(SUM(CASE WHEN feedback_status = 'Queued' THEN 1 ELSE 0 END), 0) AS pending
                                                      FROM feedbacks 
                                                      WHERE feedback_type = 'Complain' 
                                                      AND feedback_department = ?";

                                                        $stmt = $mysqli->prepare($query);
                                                        $stmt->bind_param("s", $department);
                                                        $stmt->execute();
                                                        $stmt->bind_result($resolved, $inprogress, $pending);
                                                        $stmt->fetch();
                                                        $stmt->close();

                                                        $resolved = $resolved ?? 0;
                                                        $inprogress = $inprogress ?? 0;
                                                        $pending = $pending ?? 0;

                                                    ?>
                                                        <div class="nk-tb-item">
                                                            <div class="nk-tb-col tb-col-sm">
                                                                <div class="user-card">
                                                                    <div class="user-avatar user-avatar-xs bg-pink-dim">
                                                                        <span>
                                                                            <?php echo substr($department, 0, 2); ?>
                                                                        </span>
                                                                    </div>
                                                                    <div class="user-name">
                                                                        <span class="tb-lead"><?php echo $department; ?></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="nk-tb-col">
                                                                <span class="tb-sub tb-amount"><?php echo $resolved; ?></span>
                                                            </div>
                                                            <div class="nk-tb-col">
                                                                <span class="tb-sub tb-amount"><?php echo $inprogress; ?></span>
                                                            </div>
                                                            <div class="nk-tb-col">
                                                                <span class="tb-sub tb-amount"><?php echo $pending; ?></span>
                                                            </div>
                                                            <div class="nk-tb-col">
                                                                <span class="tb-sub tb-amount">
                                                                    <?php echo $resolved + $inprogress + $pending; ?>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    <?php } ?>
                                                    <!-- Totals -->
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col">
                                                            <span class="tb-sub tb-amount">Totals</span>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <span class="tb-sub tb-amount"><?php echo $total_resolved; ?></span>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <span class="tb-sub tb-amount"><?php echo $total_inprogress; ?></span>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <span class="tb-sub tb-amount"><?php echo $total_pending; ?></span>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <span class="tb-sub tb-amount">
                                                                <?php echo $resolved + $inprogress + $pending; ?>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- .card -->
                                        </div><!-- .col -->

                                        <div class="col-xl-4 col-md-4 col-xxl-4 col-lg-4 col-sm-12">
                                            <div class="card card-bordered h-100">
                                                <div class="card-inner border-bottom">
                                                    <div class="card-title-group">
                                                        <div class="card-title">
                                                            <h6 class="title">Today Authentication Logs</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-inner">
                                                    <div class="timeline">
                                                        <h6 class="timeline-head"><?php echo date('d M Y'); ?></h6>
                                                        <ul class="timeline-list">
                                                            <?php
                                                            /* Bwoy Gimmie Those Logs 😋  Wanna Know Who Logged In Today*/
                                                            include('../partials/logs.php');
                                                            ?>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div><!-- .card -->
                                        </div><!-- .col -->
                                        <div class="col-xl-8 col-md-8 col-xxl-8 col-lg-8 col-sm-12">
                                            <div class="card card-bordered card-full">
                                                <div class="card-inner border-bottom">
                                                    <div class="card-title-group">
                                                        <div class="card-title">
                                                            <h6 class="title">Pending Complaints Awaiting Escalation and Resolution</h6>
                                                        </div>
                                                        <div class="card-tools">
                                                            <a href="../views/payment_confirmations.php" class="link">View All</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="nk-tb-list">
                                                    <div class="nk-tb-item nk-tb-head">
                                                        <div class="nk-tb-col tb-col-sm"><span>Applicant Name</span></div>
                                                        <div class="nk-tb-col"><span>Application REF</span></div>
                                                        <div class="nk-tb-col tb-col-lg"><span>Applicant Contacts</span></div>
                                                        <div class="nk-tb-col"><span>Payment Ref</span></div>
                                                        <div class="nk-tb-col"><span>Date</span></div>
                                                        <div class="nk-tb-col"><span>Action</span></div>
                                                    </div>

                                                </div>
                                            </div><!-- .card -->
                                        </div><!-- .col -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content @e -->
                <!-- footer - This Section has application core scripts removal of it will break the application do not fuck around with these scripts @s -->
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