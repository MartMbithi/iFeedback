<?php
/*
 *   Crafted On Tue Oct 08 2024
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
session_start();
require_once('../config/config.php');
require_once('../config/checklogin.php');
require_once('../partials/backoffice_head.php');
require_once('../helpers/users.php');
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
                <?php if ($_GET['directorate'] == 'all') { ?>
                    <div class="nk-content ">
                        <div class="container-fluid">
                            <div class="nk-content-inner">
                                <div class="nk-content-body">
                                    <div class="nk-block-head nk-block-head-sm">
                                        <div class="nk-block-between">
                                            <div class="nk-block-head-content">
                                                <h3 class="nk-block-title page-title"><?php echo $_GET['type']; ?> Complains</h3>
                                                <div class="nk-block-des text-soft">
                                                    <p>
                                                        This module allows you to manage <?php echo $_GET['type']; ?> complains <br>
                                                    </p>
                                                </div>
                                            </div><!-- .nk-block-head-content -->
                                        </div><!-- .nk-block-between -->
                                    </div><!-- .nk-block-head -->


                                    <div class="">
                                        <div class="row">
                                            <div class="card mb-3 col-md-12 border border-success">
                                                <div class="card-body">
                                                    <?php if ($_GET['type'] == 'All' && $_GET['directorate'] == 'all') { ?>
                                                        <table class="datatable-init table">
                                                            <thead>
                                                                <tr>
                                                                    <th>#</th>
                                                                    <th>Complain Submitted By</th>
                                                                    <th>Status</th>
                                                                    <th>Date Submitted</th>
                                                                    <th>Directorate</th>
                                                                    <th>Department</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                $fetch_records_sql = mysqli_query(
                                                                    $mysqli,
                                                                    "SELECT * FROM feedbacks WHERE feedback_type = 'Complain'"
                                                                );
                                                                $cnt = 1;
                                                                if (mysqli_num_rows($fetch_records_sql) > 0) {
                                                                    while ($return_results = mysqli_fetch_array($fetch_records_sql)) {
                                                                        if (empty($return_results['feedback_owner_name'])) {
                                                                            $feedback_by = "Anonymous";
                                                                        } else {
                                                                            $feedback_by = $return_results['feedback_owner_name'];
                                                                        }
                                                                ?>
                                                                        <tr style='cursor: pointer; cursor: hand;' onclick="window.location='complain?view=<?php echo $return_results['feedback_id']; ?>';">
                                                                            <td><?php echo $cnt; ?></td>
                                                                            <td>
                                                                                <?php echo $feedback_by; ?>
                                                                            </td>
                                                                            <td>
                                                                                <?php
                                                                                if ($return_results['feedback_status'] == 'Queued') { ?>
                                                                                    <span class="badge badge-dot badge-dot-xs badge-warning">Queued</span>
                                                                                <?php } elseif ($return_results['feedback_status'] == 'In Progress') { ?>
                                                                                    <span class="badge badge-dot badge-dot-xs badge-primary">In Progress</span>
                                                                                <?php } elseif ($return_results['feedback_status'] == 'Resolved') { ?>
                                                                                    <span class="badge badge-dot badge-dot-xs badge-success">Resolved</span>
                                                                                <?php } ?>
                                                                            </td>
                                                                            <td><?php echo date('d M Y g:ia', strtotime($return_results['feedback_sumbitted_on'])); ?></td>
                                                                            <td><?php echo $return_results['feedback_directorate']; ?></td>
                                                                            <td><?php echo $return_results['feedback_department']; ?></td>
                                                                        </tr>
                                                                <?php
                                                                        $cnt = $cnt + 1;
                                                                    }
                                                                } ?>
                                                            </tbody>
                                                        </table>
                                                    <?php } else if ($_GET['type'] == 'Solved' && $_GET['directorate'] == 'all') { ?>
                                                        <table class="datatable-init table">
                                                            <thead>
                                                                <tr>
                                                                    <th>#</th>
                                                                    <th>Complain Submitted By</th>
                                                                    <th>Status</th>
                                                                    <th>Date Submitted</th>
                                                                    <th>Directorate</th>
                                                                    <th>Department</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                $fetch_records_sql = mysqli_query(
                                                                    $mysqli,
                                                                    "SELECT * FROM feedbacks WHERE feedback_type = 'Complain' AND feedback_status = 'Resolved'"
                                                                );
                                                                $cnt = 1;
                                                                if (mysqli_num_rows($fetch_records_sql) > 0) {
                                                                    while ($return_results = mysqli_fetch_array($fetch_records_sql)) {
                                                                        if (empty($return_results['feedback_owner_name'])) {
                                                                            $feedback_by = "Anonymous";
                                                                        } else {
                                                                            $feedback_by = $return_results['feedback_owner_name'];
                                                                        }
                                                                ?>
                                                                        <tr style='cursor: pointer; cursor: hand;' onclick="window.location='complain?view=<?php echo $return_results['feedback_id']; ?>';">
                                                                            <td><?php echo $cnt; ?></td>
                                                                            <td>
                                                                                <?php echo $feedback_by; ?>
                                                                            </td>
                                                                            <td>
                                                                                <?php
                                                                                if ($return_results['feedback_status'] == 'Queued') { ?>
                                                                                    <span class="badge badge-dot badge-dot-xs badge-warning">Queued</span>
                                                                                <?php } elseif ($return_results['feedback_status'] == 'In Progress') { ?>
                                                                                    <span class="badge badge-dot badge-dot-xs badge-primary">In Progress</span>
                                                                                <?php } elseif ($return_results['feedback_status'] == 'Resolved') { ?>
                                                                                    <span class="badge badge-dot badge-dot-xs badge-success">Resolved</span>
                                                                                <?php } ?>
                                                                            </td>
                                                                            <td><?php echo date('d M Y g:ia', strtotime($return_results['feedback_sumbitted_on'])); ?></td>
                                                                            <td><?php echo $return_results['feedback_directorate']; ?></td>
                                                                            <td><?php echo $return_results['feedback_department']; ?></td>
                                                                        </tr>
                                                                <?php
                                                                        $cnt = $cnt + 1;
                                                                    }
                                                                } ?>
                                                            </tbody>
                                                        </table>
                                                    <?php } else if ($_GET['type'] == 'In Progress' && $_GET['directorate'] == 'all') { ?>
                                                        <table class="datatable-init table">
                                                            <thead>
                                                                <tr>
                                                                    <th>#</th>
                                                                    <th>Complain Submitted By</th>
                                                                    <th>Status</th>
                                                                    <th>Date Submitted</th>
                                                                    <th>Directorate</th>
                                                                    <th>Department</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                $fetch_records_sql = mysqli_query(
                                                                    $mysqli,
                                                                    "SELECT * FROM feedbacks WHERE feedback_type = 'Complain' AND feedback_status = 'In Progress'"
                                                                );
                                                                $cnt = 1;
                                                                if (mysqli_num_rows($fetch_records_sql) > 0) {
                                                                    while ($return_results = mysqli_fetch_array($fetch_records_sql)) {
                                                                        if (empty($return_results['feedback_owner_name'])) {
                                                                            $feedback_by = "Anonymous";
                                                                        } else {
                                                                            $feedback_by = $return_results['feedback_owner_name'];
                                                                        }
                                                                ?>
                                                                        <tr style='cursor: pointer; cursor: hand;' onclick="window.location='complain?view=<?php echo $return_results['feedback_id']; ?>';">
                                                                            <td><?php echo $cnt; ?></td>
                                                                            <td>
                                                                                <?php echo $feedback_by; ?>
                                                                            </td>
                                                                            <td>
                                                                                <?php
                                                                                if ($return_results['feedback_status'] == 'Queued') { ?>
                                                                                    <span class="badge badge-dot badge-dot-xs badge-warning">Queued</span>
                                                                                <?php } elseif ($return_results['feedback_status'] == 'In Progress') { ?>
                                                                                    <span class="badge badge-dot badge-dot-xs badge-primary">In Progress</span>
                                                                                <?php } elseif ($return_results['feedback_status'] == 'Resolved') { ?>
                                                                                    <span class="badge badge-dot badge-dot-xs badge-success">Resolved</span>
                                                                                <?php } ?>
                                                                            </td>
                                                                            <td><?php echo date('d M Y g:ia', strtotime($return_results['feedback_sumbitted_on'])); ?></td>
                                                                            <td><?php echo $return_results['feedback_directorate']; ?></td>
                                                                            <td><?php echo $return_results['feedback_department']; ?></td>
                                                                        </tr>
                                                                <?php
                                                                        $cnt = $cnt + 1;
                                                                    }
                                                                } ?>
                                                            </tbody>
                                                        </table>
                                                    <?php } else { ?>
                                                        <table class="datatable-init table">
                                                            <thead>
                                                                <tr>
                                                                    <th>#</th>
                                                                    <th>Complain Submitted By</th>
                                                                    <th>Status</th>
                                                                    <th>Date Submitted</th>
                                                                    <th>Directorate</th>
                                                                    <th>Department</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                $fetch_records_sql = mysqli_query(
                                                                    $mysqli,
                                                                    "SELECT * FROM feedbacks WHERE feedback_type = 'Complain' AND feedback_status = 'Queued'"
                                                                );
                                                                $cnt = 1;
                                                                if (mysqli_num_rows($fetch_records_sql) > 0) {
                                                                    while ($return_results = mysqli_fetch_array($fetch_records_sql)) {
                                                                        if (empty($return_results['feedback_owner_name'])) {
                                                                            $feedback_by = "Anonymous";
                                                                        } else {
                                                                            $feedback_by = $return_results['feedback_owner_name'];
                                                                        }
                                                                ?>
                                                                        <tr style='cursor: pointer; cursor: hand;' onclick="window.location='complain?view=<?php echo $return_results['feedback_id']; ?>';">
                                                                            <td><?php echo $cnt; ?></td>
                                                                            <td>
                                                                                <?php echo $feedback_by; ?>
                                                                            </td>
                                                                            <td>
                                                                                <?php
                                                                                if ($return_results['feedback_status'] == 'Queued') { ?>
                                                                                    <span class="badge badge-dot badge-dot-xs badge-warning">Queued</span>
                                                                                <?php } elseif ($return_results['feedback_status'] == 'In Progress') { ?>
                                                                                    <span class="badge badge-dot badge-dot-xs badge-primary">In Progress</span>
                                                                                <?php } elseif ($return_results['feedback_status'] == 'Resolved') { ?>
                                                                                    <span class="badge badge-dot badge-dot-xs badge-success">Resolved</span>
                                                                                <?php } ?>
                                                                            </td>
                                                                            <td><?php echo date('d M Y g:ia', strtotime($return_results['feedback_sumbitted_on'])); ?></td>
                                                                            <td><?php echo $return_results['feedback_directorate']; ?></td>
                                                                            <td><?php echo $return_results['feedback_department']; ?></td>
                                                                        </tr>
                                                                <?php
                                                                        $cnt = $cnt + 1;
                                                                    }
                                                                } ?>
                                                            </tbody>
                                                        </table>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- .nk-block -->
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } else { ?>
                    <div class="nk-content ">
                        <div class="container-fluid">
                            <div class="nk-content-inner">
                                <div class="nk-content-body">
                                    <div class="nk-block-head nk-block-head-sm">
                                        <div class="nk-block-between">
                                            <div class="nk-block-head-content">
                                                <h3 class="nk-block-title page-title"><?php echo $_GET['directorate'] . ' Directorate' . $_GET['type']; ?> Complains</h3>
                                                <div class="nk-block-des text-soft">
                                                    <p>
                                                        This module allows you to manage <?php echo $_GET['type']; ?> complains in <?php echo $_GET['directorate']; ?><br>
                                                    </p>
                                                </div>
                                            </div><!-- .nk-block-head-content -->
                                        </div><!-- .nk-block-between -->
                                    </div><!-- .nk-block-head -->

                                    <div class="">
                                        <div class="row">
                                            <div class="card mb-3 col-md-12 border border-success">
                                                <div class="card-body">
                                                    <table class="datatable-init table">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Complain Submitted By</th>
                                                                <th>Status</th>
                                                                <th>Date Submitted</th>
                                                                <th>Directorate</th>
                                                                <th>Department</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            $fetch_records_sql = mysqli_query(
                                                                $mysqli,
                                                                "SELECT * FROM feedbacks WHERE feedback_type = 'Complain' AND feedback_directorate = '{$_GET['directorate']}'"
                                                            );
                                                            $cnt = 1;
                                                            if (mysqli_num_rows($fetch_records_sql) > 0) {
                                                                while ($return_results = mysqli_fetch_array($fetch_records_sql)) {
                                                                    if (empty($return_results['feedback_owner_name'])) {
                                                                        $feedback_by = "Anonymous";
                                                                    } else {
                                                                        $feedback_by = $return_results['feedback_owner_name'];
                                                                    }
                                                            ?>
                                                                    <tr style='cursor: pointer; cursor: hand;' onclick="window.location='complain?view=<?php echo $return_results['feedback_id']; ?>';">
                                                                        <td><?php echo $cnt; ?></td>
                                                                        <td>
                                                                            <?php echo $feedback_by; ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php
                                                                            if ($return_results['feedback_status'] == 'Queued') { ?>
                                                                                <span class="badge badge-dot badge-dot-xs badge-warning">Queued</span>
                                                                            <?php } elseif ($return_results['feedback_status'] == 'In Progress') { ?>
                                                                                <span class="badge badge-dot badge-dot-xs badge-primary">In Progress</span>
                                                                            <?php } elseif ($return_results['feedback_status'] == 'Resolved') { ?>
                                                                                <span class="badge badge-dot badge-dot-xs badge-success">Resolved</span>
                                                                            <?php } ?>
                                                                        </td>
                                                                        <td><?php echo date('d M Y g:ia', strtotime($return_results['feedback_sumbitted_on'])); ?></td>
                                                                        <td><?php echo $return_results['feedback_directorate']; ?></td>
                                                                        <td><?php echo $return_results['feedback_department']; ?></td>
                                                                    </tr>
                                                            <?php
                                                                    $cnt = $cnt + 1;
                                                                }
                                                            } ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- .nk-block -->
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
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