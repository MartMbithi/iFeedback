<div class="modal fade" id="update_<?php echo $rows['directorate_id']; ?>">
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
                        <div class="form-group col-md-12">
                            <label>Directorate Name<span class="text-danger">*</span></label>
                            <input type="hidden" name="directorate_id" value="<?php echo $rows['directorate_id']; ?>" required class="form-control">
                            <input type="text" name="directorate_name" value="<?php echo $rows['directorate_name']; ?>" required class="form-control">
                        </div>
                    </div>
                    <br><br>
                    <div class="text-right">
                        <button name="Update_Directorate" class="btn btn-primary" type="submit">
                            <em class="icon ni ni-save"></em> Save
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete_<?php echo $rows['directorate_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form method="POST">
                <div class="modal-body text-center text-danger">
                    <img src='../public/images/logo.png' height="80px">
                    <h4>Delete?</h4>
                    <p>
                        Are you sure you want to delete <?php echo $rows['directorate_name']; ?>?
                    </p>
                    <input type="hidden" name="directorate_id" value="<?php echo $rows['directorate_id']; ?>">
                    <button type="button" class="text-center btn btn-success" data-dismiss="modal">No, </button>
                    <input type="submit" name="Delete_Directorate" value="Yes, Delete" class="text-center btn btn-warning">
                </div>
            </form>
        </div>
    </div>
</div>