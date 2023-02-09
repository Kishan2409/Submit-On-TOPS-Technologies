<!-- main screen -->
<div class="row mt-2">
    <div class="col-md-12 main">
        <br>

        <h3>Update Hospital Details Here</h3>
        <hr>
        <div>
        <form method="post">
            <div class="form-group m-2">
                <input type="text" name="hnm" value="<?php echo $updhospital[0]['h_nm'];?>" class="form-control" placeholder="Enter Hospital Name" required>
            </div>
            <div class="form-group m-2">
                <input type="text" name="number" value="<?php echo $updhospital[0]['h_phone'];?>" class="form-control" placeholder="Hospital Number" required>
            </div>
            <div class="form-group m-2">
                <!-- <input type="text" name="add" class="form-control" placeholder="Hospital Address" required> -->
                <textarea name="add" class="form-control" placeholder="Hospital Address" required><?php echo $updhospital[0]['h_add'];?></textarea>
            </div>
            <div class="form-group m-2">
                <input type="submit" name="updhospital" class="bt-red" value="Update Hospital">
            </div>
        </form>
        </div>

    </div>
</div>
