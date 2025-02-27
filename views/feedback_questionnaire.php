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
                                        <br> Kindly fill all the required fields to submit your feedback<br>
                                    </h5>
                                </div>
                            </div>
                        </div><!-- .nk-block-head -->
                        <?php if ($_GET['page'] == '1') { ?>
                            <form method="post" enctype="multipart/form-data">
                                <div class="nk-block">
                                    <div class="nk-block">
                                        <div class="row g-gs">
                                            <div class="col-md-12">
                                                <input type="hidden" name="feedback_id" value="<?php echo $_SESSION['feedback_id']; ?>">
                                                <fieldset class="border col-12 border p-3 rounded ">
                                                    <legend class="w-auto text-danger">Section 1: General Service Delivery</legend>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label for="service_delivery">1. How would you rate our service delivery? <span class="text-danger">*</span></label>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label><input type="radio" name="feedback_gsd1" value="Excellent"> Excellent</label> &nbsp;
                                                            <label><input type="radio" name="feedback_gsd1" value="Good"> Good</label> &nbsp;
                                                            <label><input type="radio" name="feedback_gsd1" value="Average"> Average</label> &nbsp;
                                                            <label><input type="radio" name="feedback_gsd1" value="Poor"> Poor</label> &nbsp;
                                                            <label><input type="radio" name="feedback_gsd1" value="Very Poor"> Very Poor</label>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label for="service_delivery">2. Were your concerns or inquiries addressed promptly and effectively? <span class="text-danger">*</span></label>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label><input type="radio" name="feedback_gsd2" value="Strongly Agree"> Strongly Agree</label> &nbsp;
                                                            <label><input type="radio" name="feedback_gsd2" value="Agree"> Agree</label> &nbsp;
                                                            <label><input type="radio" name="feedback_gsd2" value="Neutral"> Neutral</label> &nbsp;
                                                            <label><input type="radio" name="feedback_gsd2" value="Disagree"> Disagree</label> &nbsp;
                                                            <label><input type="radio" name="feedback_gsd2" value="Strongly Disagree"> Strongly Disagree</label>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label for="service_delivery">3. How satisfied are you with the clarity of information provided by the staff? <span class="text-danger">*</span></label>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label><input type="radio" name="feedback_gsd3" value="Very Satisfied"> Very Satisfied</label> &nbsp;
                                                            <label><input type="radio" name="feedback_gsd3" value="Satisfied"> Satisfied</label> &nbsp;
                                                            <label><input type="radio" name="feedback_gsd3" value="Neutral"> Neutral</label> &nbsp;
                                                            <label><input type="radio" name="feedback_gsd3" value="Dissatisfied"> Dissatisfiedd</label> &nbsp;
                                                            <label><input type="radio" name="feedback_gsd3" value="Very Dissatisfied"> Very Dissatisfied</label>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label for="service_delivery">4. Did you find the office environment clean, organized, and professional? <span class="text-danger">*</span></label>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label><input type="radio" name="feedback_gsd4" value="Strongly Agree"> Strongly Agree</label> &nbsp;
                                                            <label><input type="radio" name="feedback_gsd4" value="Agree"> Agree</label> &nbsp;
                                                            <label><input type="radio" name="feedback_gsd4" value="Neutral"> Neutral</label> &nbsp;
                                                            <label><input type="radio" name="feedback_gsd4" value="Disagree"> Disagree</label> &nbsp;
                                                            <label><input type="radio" name="feedback_gsd4" value="Strongly Disagree"> Strongly Disagree</label>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label for="service_delivery">5. Were the operating hours convenient for your needs? <span class="text-danger">*</span></label>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label><input type="radio" name="feedback_gsd5" value="Strongly Agree"> Strongly Agree</label> &nbsp;
                                                            <label><input type="radio" name="feedback_gsd5" value="Agree"> Agree</label> &nbsp;
                                                            <label><input type="radio" name="feedback_gsd5" value="Neutral"> Neutral</label> &nbsp;
                                                            <label><input type="radio" name="feedback_gsd5" value="Disagree"> Disagree</label> &nbsp;
                                                            <label><input type="radio" name="feedback_gsd5" value="Strongly Disagree"> Strongly Disagree</label>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <button type="submit" name="Step_Three" class="btn btn-primary mt-3">Save and proceed <em class="icon ni ni-last"></em> </button>
                                    </div>
                                </div>
                            </form>
                        <?php } else if ($_GET['page'] == '2') { ?>
                            <form method="post" enctype="multipart/form-data">
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
                                                            <label><input type="radio" name="feedback_si1" value="Excellent"> Excellent</label> &nbsp;
                                                            <label><input type="radio" name="feedback_si1" value="Good"> Good</label> &nbsp;
                                                            <label><input type="radio" name="feedback_si1" value="Average"> Average</label> &nbsp;
                                                            <label><input type="radio" name="feedback_si1" value="Poor"> Poor</label> &nbsp;
                                                            <label><input type="radio" name="feedback_si1" value="Very Poor"> Very Poor</label>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label for="service_delivery">2. Were the staff members knowledgeable and able to answer your questions
                                                                adequately?
                                                                <span class="text-danger">*</span></label>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label><input type="radio" name="feedback_si2" value="Strongly Agree"> Strongly Agree</label> &nbsp;
                                                            <label><input type="radio" name="feedback_si2" value="Agree"> Agree</label> &nbsp;
                                                            <label><input type="radio" name="feedback_si2" value="Neutral"> Neutral</label> &nbsp;
                                                            <label><input type="radio" name="feedback_si2" value="Disagree"> Disagree</label> &nbsp;
                                                            <label><input type="radio" name="feedback_si2" value="Strongly Disagree"> Strongly Disagree</label>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label for="service_delivery">3. Did you feel treated with respect and fairness during your interaction with the staff? <span class="text-danger">*</span></label>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label><input type="radio" name="feedback_si3" value="Very Satisfied"> Very Satisfied</label> &nbsp;
                                                            <label><input type="radio" name="feedback_si3" value="Satisfied"> Satisfied</label> &nbsp;
                                                            <label><input type="radio" name="feedback_si3" value="Neutral"> Neutral</label> &nbsp;
                                                            <label><input type="radio" name="feedback_si3" value="Dissatisfied"> Dissatisfiedd</label> &nbsp;
                                                            <label><input type="radio" name="feedback_si3" value="Very Dissatisfied"> Very Dissatisfied</label>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label for="service_delivery">4. How would you rate the communication skills of the staff (e.g., clarity, patience, and
                                                                willingness to help)? <span class="text-danger">*</span></label>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label><input type="radio" name="feedback_si4" value="Excellent"> Excellent</label> &nbsp;
                                                            <label><input type="radio" name="feedback_si4" value="Good"> Good</label> &nbsp;
                                                            <label><input type="radio" name="feedback_si4" value="Average"> Average</label> &nbsp;
                                                            <label><input type="radio" name="feedback_si4" value="Poor"> Poor</label> &nbsp;
                                                            <label><input type="radio" name="feedback_si4" value="Very Poor"> Very Poor</label>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label for="service_delivery">5.Were you able to easily identify the appropriate staff member to assist with your
                                                                needs? <span class="text-danger">*</span></label>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label><input type="radio" name="feedback_si5" value="Strongly Agree"> Strongly Agree</label> &nbsp;
                                                            <label><input type="radio" name="feedback_si5" value="Agree"> Agree</label> &nbsp;
                                                            <label><input type="radio" name="feedback_si5" value="Neutral"> Neutral</label> &nbsp;
                                                            <label><input type="radio" name="feedback_si5" value="Disagree"> Disagree</label> &nbsp;
                                                            <label><input type="radio" name="feedback_si5" value="Strongly Disagree"> Strongly Disagree</label>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <button type="submit" name="Step_Four" class="btn btn-primary mt-3">Save and proceed <em class="icon ni ni-last"></em> </button>
                                    </div>
                                    <br><br>
                                </div>
                            </form>
                        <?php } else if ($_GET['page'] == '3') { ?>
                            <form method="post" enctype="multipart/form-data">
                                <div class="nk-block">
                                    <div class="nk-block">
                                        <div class="row g-gs">
                                            <div class="col-md-12">
                                                <input type="hidden" name="feedback_id" value="<?php echo $_SESSION['feedback_id']; ?>">
                                                <fieldset class="border col-12 border p-3 rounded ">
                                                    <legend class="w-auto text-danger">Section 3: Efficiency and Timeliness</legend>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label for="service_delivery">1. How satisfied are you with the time it took to complete your transaction or request? <span class="text-danger">*</span></label>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label><input type="radio" name="feedback_et1" value="Very Satisfied"> Very Satisfied</label> &nbsp;
                                                            <label><input type="radio" name="feedback_et1" value="Satisfied"> Satisfied</label> &nbsp;
                                                            <label><input type="radio" name="feedback_et1" value="Neutral"> Neutral</label> &nbsp;
                                                            <label><input type="radio" name="feedback_et1" value="Dissatisfied"> Dissatisfied</label> &nbsp;
                                                            <label><input type="radio" name="feedback_et1" value="Very Dissatisfied"> Very Dissatisfied</label>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label for="service_delivery">2. Were there any unnecessary delays in the service delivery process?
                                                                <span class="text-danger">*</span></label>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label><input type="radio" name="feedback_et2" value="Very Efficient">Very Efficient</label> &nbsp;
                                                            <label><input type="radio" name="feedback_et2" value="Efficient"> Efficient</label> &nbsp;
                                                            <label><input type="radio" name="feedback_et2" value="Neutral"> Neutral</label> &nbsp;
                                                            <label><input type="radio" name="feedback_et2" value="Inefficient"> Inefficient</label> &nbsp;
                                                            <label><input type="radio" name="feedback_et2" value="Very Inefficient"> Very Inefficient</label>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label for="service_delivery">3. How would you rate the efficiency of the processes at the office? <span class="text-danger">*</span></label>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label><input type="radio" name="feedback_et3" value="Very Efficient">Very Efficient</label> &nbsp;
                                                            <label><input type="radio" name="feedback_et3" value="Efficient"> Efficient</label> &nbsp;
                                                            <label><input type="radio" name="feedback_et3" value="Neutral"> Neutral</label> &nbsp;
                                                            <label><input type="radio" name="feedback_et3" value="Inefficient"> Inefficient</label> &nbsp;
                                                            <label><input type="radio" name="feedback_et3" value="Very Inefficient"> Very Inefficient</label>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label for="service_delivery">4. Were you informed of any waiting times or delays in advance? <span class="text-danger">*</span></label>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label><input type="radio" name="feedback_et4" value="Very Satisfied"> Very Satisfied</label> &nbsp;
                                                            <label><input type="radio" name="feedback_et4" value="Satisfied"> Satisfied</label> &nbsp;
                                                            <label><input type="radio" name="feedback_et4" value="Neutral"> Neutral</label> &nbsp;
                                                            <label><input type="radio" name="feedback_et4" value="Dissatisfied"> Dissatisfied</label> &nbsp;
                                                            <label><input type="radio" name="feedback_et4" value="Very Dissatisfied"> Very Dissatisfied</label>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label for="service_delivery">5. Did the office meet the promised deadlines for your requests? <span class="text-danger">*</span></label>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label><input type="radio" name="feedback_et5" value="Strongly Agree"> Strongly Agree</label> &nbsp;
                                                            <label><input type="radio" name="feedback_et5" value="Agree"> Agree</label> &nbsp;
                                                            <label><input type="radio" name="feedback_et5" value="Neutral"> Neutral</label> &nbsp;
                                                            <label><input type="radio" name="feedback_et5" value="Disagree"> Disagree</label> &nbsp;
                                                            <label><input type="radio" name="feedback_et5" value="Strongly Disagree"> Strongly Disagree</label>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <button type="submit" name="Step_Five" class="btn btn-primary mt-3">Save and proceed <em class="icon ni ni-last"></em> </button>
                                    </div>
                                    <br><br>
                                </div>
                            </form>
                        <?php } else if ($_GET['page'] == '4') { ?>
                            <form method="post" enctype="multipart/form-data">
                                <div class="nk-block">
                                    <div class="nk-block">
                                        <div class="row g-gs">
                                            <div class="col-md-12">
                                                <input type="hidden" name="feedback_id" value="<?php echo $_SESSION['feedback_id']; ?>">
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
                                                            <label><input type="radio" name="feedback_ac1" value="Very Easy"> Very Easy</label> &nbsp;
                                                            <label><input type="radio" name="feedback_ac1" value="Easy"> Easy</label> &nbsp;
                                                            <label><input type="radio" name="feedback_ac1" value="Neutral"> Neutral</label> &nbsp;
                                                            <label><input type="radio" name="feedback_ac1" value="Difficult"> Difficult</label> &nbsp;
                                                            <label><input type="radio" name="feedback_ac1" value="Very Difficult"> Very Difficult</label>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label for="service_delivery">2. Were the office facilities accessible and user-friendly (e.g., signage, seating, and
                                                                waiting areas)?
                                                                <span class="text-danger">*</span></label>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label><input type="radio" name="feedback_ac2" value="Excellent">Excellent</label> &nbsp;
                                                            <label><input type="radio" name="feedback_ac2" value="Good"> Good</label> &nbsp;
                                                            <label><input type="radio" name="feedback_ac2" value="Neutral"> Neutral</label> &nbsp;
                                                            <label><input type="radio" name="feedback_ac2" value="Poor"> Poor</label> &nbsp;
                                                            <label><input type="radio" name="feedback_ac2" value="Very Poor"> Very Poor</label>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label for="service_delivery">3. How would you rate the availability of online services? <span class="text-danger">*</span></label>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label><input type="radio" name="feedback_ac3" value="Excellent">Excellent</label> &nbsp;
                                                            <label><input type="radio" name="feedback_ac3" value="Good"> Good</label> &nbsp;
                                                            <label><input type="radio" name="feedback_ac3" value="Neutral"> Neutral</label> &nbsp;
                                                            <label><input type="radio" name="feedback_ac3" value="Poor"> Poor</label> &nbsp;
                                                            <label><input type="radio" name="feedback_ac3" value="Very Poor"> Very Poor</label>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label for="service_delivery">4. Were you able to access the information or services you needed without difficulty? <span class="text-danger">*</span></label>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label><input type="radio" name="feedback_ac4" value="Very Easy"> Very Easy</label> &nbsp;
                                                            <label><input type="radio" name="feedback_ac4" value="Easy"> Easy</label> &nbsp;
                                                            <label><input type="radio" name="feedback_ac4" value="Neutral"> Neutral</label> &nbsp;
                                                            <label><input type="radio" name="feedback_ac4" value="Difficult"> Difficult</label> &nbsp;
                                                            <label><input type="radio" name="feedback_ac4" value="Very Difficult"> Very Difficult</label>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label for="service_delivery">5. How convenient was the payment process? <span class="text-danger">*</span></label>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label><input type="radio" name="feedback_ac5" value="Very Convenient"> Very Convenient</label> &nbsp;
                                                            <label><input type="radio" name="feedback_ac5" value="Convenient"> Convenient</label> &nbsp;
                                                            <label><input type="radio" name="feedback_ac5" value="Neutral"> Neutral</label> &nbsp;
                                                            <label><input type="radio" name="feedback_ac5" value="Inconvenient"> Inconvenient</label> &nbsp;
                                                            <label><input type="radio" name="feedback_ac5" value="Very Inconvenient"> Very Inconvenient</label>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <button type="submit" name="Step_Six" class="btn btn-primary mt-3">Save and proceed <em class="icon ni ni-last"></em> </button>
                                    </div>
                                    <br><br>
                                </div>
                            </form>
                        <?php } else if ($_GET['page'] == '5') { ?>
                            <form method="post" enctype="multipart/form-data">
                                <div class="nk-block">
                                    <div class="nk-block">
                                        <div class="row g-gs">
                                            <div class="col-md-12">
                                                <input type="hidden" name="feedback_id" value="<?php echo $_SESSION['feedback_id']; ?>">
                                                <input type="hidden" name="feedback_type" value="<?php echo $_SESSION['feedback_type']; ?>">
                                                <input type="hidden" name="feedback_directorate" value="<?php echo $_SESSION['feedback_directorate']; ?>">
                                                <input type="hidden" name="feedback_department" value="<?php echo $_SESSION['feedback_department']; ?>">
                                                <input type="hidden" name="department_email" value="<?php echo $_SESSION['department_email']; ?>">
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
                                                            <textarea name="feedback_is1" class="form-control" rows="3" required></textarea>
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
                                                            <textarea name="feedback_is2" class="form-control" rows="3" required></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label for="service_delivery">3. What additional services or information would you like the office to provide? <span class="text-danger">*</span></label>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <textarea name="feedback_is3" class="form-control" rows="3" required></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label for="service_delivery">4.How likely are you to recommend the Pharmacy and Poisons Board Kenya office to
                                                                others? <span class="text-danger">*</span></label>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label><input type="radio" name="feedback_is4" value="Very Likely"> Very Likely</label> &nbsp;
                                                            <label><input type="radio" name="feedback_is4" value="Likely"> Likely</label> &nbsp;
                                                            <label><input type="radio" name="feedback_is4" value="Neutral"> Neutral</label> &nbsp;
                                                            <label><input type="radio" name="feedback_is4" value="Unlikely"> Unlikely</label> &nbsp;
                                                            <label><input type="radio" name="feedback_is4" value="Very Unlikely"> Very Unlikely</label>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label for="service_delivery">5. Any other comments or feedback you would like to share? <span class="text-danger">*</span></label>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <textarea name="feedback_is5" class="form-control" rows="3" required></textarea>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="form-group form-check">
                                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                        <label class="form-check-label" for="exampleCheck1">Submit my response anonymously</label>
                                                    </div>

                                                    <div class="row" id="Personal_Data">
                                                        <div class="form-group col-md-12">
                                                            <label>Full names<span class="text-danger">*</span></label>
                                                            <input type="text" name="feedback_owner_name" class="form-control">
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <label>Email address<span class="text-danger">*</span></label>
                                                            <input type="email" name="feedback_owner_email" class="form-control">
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <label>Contacts / Phone Number<span class="text-danger">*</span></label>
                                                            <input type="text" name="feedback_owner_contact" placeholder="0712345678" class="form-control" pattern="07[0-9]{8}" title="Phone number must be in the format 0712345678">
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <button type="submit" name="Step_Seven" class="btn btn-primary mt-3">Submit <em class="icon ni ni-last"></em> </button>
                                    </div>
                                    <br><br>
                                </div>
                            </form>
                        <?php }  ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- app-root @e -->
    <!-- JavaScript -->
    <?php require_once('../partials/backoffice_scripts.php'); ?>
    <script>
        document.getElementById("exampleCheck1").addEventListener("change", function() {
            const personalData = document.getElementById("Personal_Data");
            personalData.style.display = this.checked ? "none" : "block";
        });
    </script>
</body>


</html>