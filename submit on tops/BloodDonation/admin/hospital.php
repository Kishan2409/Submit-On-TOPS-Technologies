<div class="col-md-12">
    <div class="row">
        <!-- this is main -->
        <div class="col-md-12 mainfile">
            <div class="container">
                <br>
                <h3>
                    Manage Hospital
                </h3>
            </div>
            <hr>
            <div class="container">
                <br>
                <div class="row">
                <div class="col-md-12">
                <table class="table" id="example">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Hospital Name</th>
                            <th>Number</th>
                            <th>Address</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($showhospital as $row) {
                        ?>
                        <tr>
                            <th><?php echo $row['h_id'];?></th>
                            <td><?php echo $row['h_nm'];?></td>
                            <td><?php echo $row['h_phone'];?></td>
                            <td><?php echo $row['h_add'];?></td>
                            <td>
                            <a href="#"><i class="bi bi-pen"></i></a> | <a href="#"><i
                                                    class="bi bi-eye"></i></a> | <a href="#"><i class="bi bi-trash"></i></a>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                    </tbody>
                </table>
                </div>
                <div class="col-md-12 mt-5">
                        <hr>
                        <hr>
                        <h3>Add Hospital Details Here</h3>
                        <form method="post">
                            <div class="form-group m-2">
                                <input type="text" name="hnm" class="form-control"
                                    placeholder="Enter Hospital Name" required>
                            </div>
                            <div class="form-group m-2">
                                <input type="text" name="number" class="form-control" placeholder="Hospital Number"
                                    required>
                            </div>
                            <div class="form-group m-2">
                                    <input type="text" name="add" class="form-control" placeholder="Hospital Address"> 
                                    
                            </div>
                            <div class="form-group m-2">
                                <input type="submit" name="adhospital" class="bt-red" value="Add Hospital">
                            </div>
                        </form>
                    </div>
                    </div>
            </div>
        </div>
    </div>