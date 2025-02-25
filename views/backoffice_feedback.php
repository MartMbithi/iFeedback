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
                <?php
                $fetch_records_sql = mysqli_query(
                    $mysqli,
                    "SELECT * FROM feedbacks WHERE feedback_id = '{$_GET['view']}'"
                );
                if (mysqli_num_rows($fetch_records_sql) > 0) {
                    while ($return_results = mysqli_fetch_array($fetch_records_sql)) {

                ?>
                        <div class="nk-content ">
                            <div class="container-fluid">
                                <div class="nk-content-inner">
                                    <div class="nk-content-body">
                                        <div class="nk-block-head nk-block-head-sm">
                                            <div class="nk-block-between">
                                                <div class="nk-block-head-content">
                                                    <h3 class="nk-block-title page-title">
                                                        Complain Details - Submitted on <?php echo  date('d M Y g:ia', strtotime($return_results['feedback_sumbitted_on'])); ?>
                                                    </h3>
                                                    <div class="nk-block-des text-soft">
                                                        <p>
                                                            This module enables you to review and update complaint status <br>
                                                        </p>
                                                    </div>
                                                </div><!-- .nk-block-head-content -->
                                                <div class="nk-block-head-content">
                                                    <div class="toggle-wrap nk-block-tools-toggle">
                                                        <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                                        <div class="toggle-expand-content" data-content="pageMenu">
                                                            <ul class="nk-block-tools g-3">
                                                                <li>
                                                                    <a href="backoffice_feedbacks" data-toggle="modal" class="btn btn-white btn-outline-light">
                                                                        <em class="icon ni ni-first"></em>
                                                                        <span>Back</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- .toggle-wrap -->
                                                </div>
                                            </div><!-- .nk-block-between -->
                                        </div><!-- .nk-block-head -->

                                        <div class="">
                                            <div class="row">
                                                <div class="card mb-3 col-md-12 border border-success">
                                                    <div class="card-body">
                                                        <div class="nk-block">
                                                            <div class="nk-block">
                                                                <div class="row g-gs">
                                                                    <div class="col-md-12">
                                                                        <fieldset class="border col-12 border p-3 rounded ">
                                                                            <legend class="w-auto text-danger">Section 1: General Service Delivery</legend>
                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                    <label for="service_delivery">1. How would you rate our service delivery? <span class="text-danger">*</span></label>
                                                                                </div>
                                                                                <div class="col-md-12">
                                                                                    <label class="text-danger"> <?php echo $return_results['feedback_gsd1']; ?> </label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                    <label for="service_delivery">2. Were your concerns or inquiries addressed promptly and effectively? <span class="text-danger">*</span></label>
                                                                                </div>
                                                                                <div class="col-md-12">
                                                                                    <label class="text-danger"> <?php echo $return_results['feedback_gsd2']; ?> </label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                    <label for="service_delivery">3. How satisfied are you with the clarity of information provided by the staff? <span class="text-danger">*</span></label>
                                                                                </div>
                                                                                <div class="col-md-12">
                                                                                    <label class="text-danger"> <?php echo $return_results['feedback_gsd3']; ?> </label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                    <label for="service_delivery">4. Did you find the office environment clean, organized, and professional? <span class="text-danger">*</span></label>
                                                                                </div>
                                                                                <div class="col-md-12">
                                                                                    <label class="text-danger"> <?php echo $return_results['feedback_gsd4']; ?> </label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                    <label for="service_delivery">5. Were the operating hours convenient for your needs? <span class="text-danger">*</span></label>
                                                                                </div>
                                                                                <div class="col-md-12">
                                                                                    <label class="text-danger"> <?php echo $return_results['feedback_gsd5']; ?> </label>
                                                                                </div>
                                                                            </div>
                                                                        </fieldset>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-block">
                                                            <div class="nk-block">
                                                                <div class="row g-gs">
                                                                    <div class="col-md-12">
                                                                        <input type="hidden" name="feedback_id" value="<?php echo $_SESSION['feedback_id']; ?>">
                                                                        <fieldset class="border col-12 border p-3 rounded ">
                                                                            <legend class="w-auto text-danger">Section 2: Staff Interaction</legend>
                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                    <label for="service_delivery">1. How would you rate the professionalism and courtesy of the staff? <span class="text-danger">*</span></label>
                                                                                </div>
                                                                                <div class="col-md-12">
                                                                                    <label class="text-danger"> <?php echo $return_results['feedback_si1']; ?> </label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                    <label for="service_delivery">2. Were the staff members knowledgeable and able to answer your questions
                                                                                        adequately?
                                                                                        <span class="text-danger">*</span></label>
                                                                                </div>
                                                                                <div class="col-md-12">
                                                                                    <label class="text-danger"> <?php echo $return_results['feedback_si2']; ?> </label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                    <label for="service_delivery">3. Did you feel treated with respect and fairness during your interaction with the staff? <span class="text-danger">*</span></label>
                                                                                </div>
                                                                                <div class="col-md-12">
                                                                                    <label class="text-danger"> <?php echo $return_results['feedback_si3']; ?> </label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                    <label for="service_delivery">4. How would you rate the communication skills of the staff (e.g., clarity, patience, and
                                                                                        willingness to help)? <span class="text-danger">*</span></label>
                                                                                </div>
                                                                                <div class="col-md-12">
                                                                                    <label class="text-danger"> <?php echo $return_results['feedback_si4']; ?> </label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                    <label for="service_delivery">5.Were you able to easily identify the appropriate staff member to assist with your
                                                                                        needs? <span class="text-danger">*</span></label>
                                                                                </div>
                                                                                <div class="col-md-12">
                                                                                    <label class="text-danger"> <?php echo $return_results['feedback_si5']; ?> </label>
                                                                                </div>
                                                                            </div>
                                                                        </fieldset>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="nk-block">
                                                            <div class="nk-block">
                                                                <div class="row g-gs">
                                                                    <div class="col-md-12">
                                                                        <fieldset class="border col-12 border p-3 rounded ">
                                                                            <legend class="w-auto text-danger">Section 3: Efficiency and Timeliness</legend>
                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                    <label for="service_delivery">1. How satisfied are you with the time it took to complete your transaction or request? <span class="text-danger">*</span></label>
                                                                                </div>
                                                                                <div class="col-md-12">
                                                                                    <label class="text-danger"> <?php echo $return_results['feedback_et1']; ?> </label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                    <label for="service_delivery">2. Were there any unnecessary delays in the service delivery process?
                                                                                        <span class="text-danger">*</span></label>
                                                                                </div>
                                                                                <div class="col-md-12">
                                                                                    <label class="text-danger"> <?php echo $return_results['feedback_et2']; ?> </label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                    <label for="service_delivery">3. How would you rate the efficiency of the processes at the office? <span class="text-danger">*</span></label>
                                                                                </div>
                                                                                <div class="col-md-12">
                                                                                    <label class="text-danger"> <?php echo $return_results['feedback_si5']; ?> </label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                    <label for="service_delivery">4. Were you informed of any waiting times or delays in advance? <span class="text-danger">*</span></label>
                                                                                </div>
                                                                                <div class="col-md-12">
                                                                                    <label class="text-danger"> <?php echo $return_results['feedback_et4']; ?> </label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                    <label for="service_delivery">5. Did the office meet the promised deadlines for your requests? <span class="text-danger">*</span></label>
                                                                                </div>
                                                                                <div class="col-md-12">
                                                                                    <label class="text-danger"> <?php echo $return_results['feedback_et5']; ?> </label>
                                                                                </div>
                                                                            </div>
                                                                        </fieldset>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>

                                                        <div class="nk-block">
                                                            <div class="nk-block">
                                                                <div class="row g-gs">
                                                                    <div class="col-md-12">
                                                                        <fieldset class="border col-12 border p-3 rounded ">
                                                                            <legend class="w-auto text-danger">Section 4: Accessibility and Convenience</legend>
                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                    <label for="service_delivery">
                                                                                        1. How easy was it to locate the Pharmacy and Poisons Board office?
                                                                                        <span class="text-danger">*</span>
                                                                                    </label>
                                                                                </div>
                                                                                <div class="col-md-12">
                                                                                    <label class="text-danger"> <?php echo $return_results['feedback_ac1']; ?> </label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                    <label for="service_delivery">2. Were the office facilities accessible and user-friendly (e.g., signage, seating, and
                                                                                        waiting areas)?
                                                                                        <span class="text-danger">*</span></label>
                                                                                </div>
                                                                                <div class="col-md-12">
                                                                                    <label class="text-danger"> <?php echo $return_results['feedback_ac2']; ?> </label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                    <label for="service_delivery">3. How would you rate the availability of online services? <span class="text-danger">*</span></label>
                                                                                </div>
                                                                                <div class="col-md-12">
                                                                                    <label class="text-danger"> <?php echo $return_results['feedback_ac3']; ?> </label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                    <label for="service_delivery">4. Were you able to access the information or services you needed without difficulty? <span class="text-danger">*</span></label>
                                                                                </div>
                                                                                <div class="col-md-12">
                                                                                    <label class="text-danger"> <?php echo $return_results['feedback_ac4']; ?> </label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                    <label for="service_delivery">5. How convenient was the payment process? <span class="text-danger">*</span></label>
                                                                                </div>
                                                                                <div class="col-md-12">
                                                                                    <label class="text-danger"> <?php echo $return_results['feedback_ac5']; ?> </label>
                                                                                </div>
                                                                            </div>
                                                                        </fieldset>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="nk-block">
                                                                <div class="nk-block">
                                                                    <div class="row g-gs">
                                                                        <div class="col-md-12">
                                                                            <fieldset class="border col-12 border p-3 rounded ">
                                                                                <legend class="w-auto text-danger">Section 5: Improvement Suggestions</legend>
                                                                                <div class="row">
                                                                                    <div class="col-md-12">
                                                                                        <label for="service_delivery">
                                                                                            1. What improvements would you suggest to enhance service delivery at the Pharmacy
                                                                                            and Poisons Board office?
                                                                                            <span class="text-danger">*</span>
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="col-md-12">
                                                                                        <label class="text-danger"> <?php echo $return_results['feedback_is1']; ?> </label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-md-12">
                                                                                        <label for="service_delivery">
                                                                                            2. Were there any specific challenges you faced during your visit or interaction with the
                                                                                            office?
                                                                                            <span class="text-danger">*</span></label>
                                                                                    </div>
                                                                                    <div class="col-md-12">
                                                                                        <label class="text-danger"> <?php echo $return_results['feedback_is2']; ?> </label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-md-12">
                                                                                        <label for="service_delivery">3. What additional services or information would you like the office to provide? <span class="text-danger">*</span></label>
                                                                                    </div>
                                                                                    <div class="col-md-12">
                                                                                        <label class="text-danger"> <?php echo $return_results['feedback_is3']; ?> </label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-md-12">
                                                                                        <label for="service_delivery">4.How likely are you to recommend the Pharmacy and Poisons Board Kenya office to
                                                                                            others? <span class="text-danger">*</span></label>
                                                                                    </div>
                                                                                    <div class="col-md-12">
                                                                                        <label class="text-danger"> <?php echo $return_results['feedback_is4']; ?> </label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-md-12">
                                                                                        <label for="service_delivery">5. Any other comments or feedback you would like to share? <span class="text-danger">*</span></label>
                                                                                    </div>
                                                                                    <div class="col-md-12">
                                                                                        <label class="text-danger"> <?php echo $return_results['feedback_is5']; ?> </label>
                                                                                    </div>
                                                                                </div>
                                                                                <hr>
                                                                                <p class="text-center text-primary">Complain Submitted By</p>
                                                                                <?php if (!empty($return_results['feedback_owner_name']) && !empty($return_results['feedback_owner_email']) && !empty($return_results['feedback_owner_contact'])) { ?>
                                                                                    <table class="table">
                                                                                        <thead>
                                                                                            <tr>
                                                                                                <th scope="col">Name</th>
                                                                                                <th scope="col">Email</th>
                                                                                                <th scope="col">Contacts</th>
                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td><?php echo $return_results['feedback_owner_name']; ?></td>
                                                                                                <td><?php echo $return_results['feedback_owner_email']; ?></td>
                                                                                                <td><?php echo $return_results['feedback_owner_contact']; ?></td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                <?php } else { ?>
                                                                                    <label for="service_delivery">This feedback was submitted anonymously</label>
                                                                                <?php } ?>
                                                                            </fieldset>
                                                                            <br>
                                                                            <div class="d-flex justify-content-end">
                                                                                <a href="#status_change" data-toggle="modal" class="btn btn-white btn-outline-primary">
                                                                                    <em class="icon ni ni-grid-add-c"></em>
                                                                                    <span>Change Status</span>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
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
                        <!-- Status Modal -->
                        <div class="modal fade" id="status_change">
                            <div class="modal-dialog  modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Kindly indicate the status of this complain</h4>
                                        <button type="button" class="close" data-dismiss="modal">
                                            <span>&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" enctype="multipart/form-data">
                                            <div class="form-row">
                                                <input type="hidden" name="feedback_id" value="<?php echo $return_results['feedback_id']; ?>">
                                                <div class="form-group col-md-12">
                                                    <label>Current status<span class="text-danger">*</span></label>
                                                    <select name="feedback_status" required class="form-control">
                                                        <option <?= ($return_results['feedback_status'] == 'Queued') ? 'selected' : '' ?>>Queued</option>
                                                        <option <?= ($return_results['feedback_status'] == 'In Progress') ? 'selected' : '' ?>>In Progress</option>
                                                        <option <?= ($return_results['feedback_status'] == 'Resolved') ? 'selected' : '' ?>>Resolved</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <br><br>
                                            <div class="text-right">
                                                <button name="Update_Status" class="btn btn-primary" type="submit">
                                                    <em class="icon ni ni-save"></em> Save
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Modal -->
                <?php  }
                } ?>
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