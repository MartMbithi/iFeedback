<div class="modal fade" id="view_<?php echo $return_results['feedback_id']; ?>">
    <div class="modal-dialog  modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Complain Details - Submitted on <?php echo  date('d M Y g:ia', strtotime($return_results['feedback_sumbitted_on'])); ?></h4>
                <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
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
                                        <br>
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>