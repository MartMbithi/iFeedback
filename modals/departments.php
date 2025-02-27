<div class="modal fade" id="update_<?php echo $rows['department_id']; ?>">
    <div class="modal-dialog  modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Fill All Required Fields</h4>
                <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" enctype="multipart/form-data">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Department Name<span class="text-danger">*</span></label>
                            <input type="hidden" value="<?php echo $rows['department_id']; ?>" name="department_id" required class="form-control">
                            <input type="text" value="<?php echo $rows['department_name']; ?>" name="department_name" required class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Department Email<span class="text-danger">*</span></label>
                            <input type="email" value="<?php echo $rows['department_email']; ?>" name="department_email" required class="form-control">
                        </div>
                    </div>
                    <br><br>
                    <div class="text-right">
                        <button name="Update_Department" class="btn btn-primary" type="submit">
                            <em class="icon ni ni-save"></em> Save
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete_<?php echo $rows['department_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form method="POST">
                <div class="modal-body text-center text-danger">
                    <img src='../public/images/logo.png' height="80px">
                    <h4>Delete?</h4>
                    <p>
                        Are you sure you want to delete <?php echo $rows['department_name']; ?> Department?
                    </p>
                    <input type="hidden" name="department_id" value="<?php echo $rows['department_id']; ?>">
                    <button type="button" class="text-center btn btn-success" data-dismiss="modal">No</button>
                    <input type="submit" name="Delete_Department" value="Yes, Delete" class="text-center btn btn-warning">
                </div>
            </form>
        </div>
    </div>
</div>