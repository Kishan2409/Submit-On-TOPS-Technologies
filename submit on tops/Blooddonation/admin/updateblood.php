<!-- main screen -->
<div class="row mt-2">
    <div class="col-md-12 main">
        <br>

        <h3>Update Blood Details Here</h3>
        <hr>
        <div>
            <form method="post">
                <div class="form-group m-2">
                    <input type="text" name="bloodgroup" value="<?php echo $updblood[0]['bloodgroup']; ?>"
                        class="form-control us" placeholder="Enter Blood Group" required>
                </div>
                <div class="form-group m-2">
                    <input type="text" name="donate" value="<?php echo $updblood[0]['donate']; ?>"
                        class="form-control pass" placeholder="Donate Only" required>
                </div>
                <div class="form-group m-2">
                    <input type="text" name="receive" value="<?php echo $updblood[0]['receive']; ?>"
                        class="form-control pass" placeholder="Receive Only" required>
                </div>
                <div class="form-group m-2">
                    <input type="submit" name="updblood" class="bt-red" value="Update Blood">
                </div>
            </form>
        </div>

    </div>
</div>
