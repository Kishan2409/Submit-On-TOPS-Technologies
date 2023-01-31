<?php
if (!isset($_SESSION["a_id"])) {
    echo "<script>
    window.location='./';
  </script>";
}
?>

<!-- main screen -->
<div class="row mt-2">
    <div class="col-md-12 main">
        <br>
        <h3>
            Manage Blood's
        </h3>
        <hr>
        <div class="row">
            <div class="col-md-12" style="overflow: auto;">
                <table id="example" class="table">
                    <thead>
                        <tr>
                            <th>
                                id
                            </th>
                            <th>
                                Blood Group
                            </th>
                            <th>
                                Donate Only
                            </th>
                            <th>
                                Receive Only
                            </th>
                            <th>
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($showblood as $row) {
                            ?>
                            <tr>
                                <td>
                                    <?php
                                    echo $row["bg_id"];
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    echo $row["bloodgroup"];
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    echo $row["donate"];
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    echo $row["receive"];
                                    ?>
                                </td>
                                <td>
                                    <a href="#"><i class="bi bi-pen"></i></a> |
                                    <a href="<?php echo $mainurl; ?>blood?deleteblood=<?php echo $row['bg_id'];?>" onclick="return confirm('Are you sure to Delete data ?')"><i class="bi bi-trash"></i></a>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>

            <div class="col-md-12">
                <hr>
                <hr>
                <h3>Add Blood Details Here</h3>
                <form method="post">
                    <div class="form-group m-2">
                        <input type="text" name="bloodgroup" class="form-control us" placeholder="Enter Blood Group"
                            required>
                    </div>
                    <div class="form-group m-2">
                        <input type="text" name="donate" class="form-control pass" placeholder="Donate Only" required>
                    </div>
                    <div class="form-group m-2">
                        <input type="text" name="receive" class="form-control pass" placeholder="Receive Only" required>
                    </div>
                    <div class="form-group m-2">
                        <input type="submit" name="adblood" class="bt-red" value="Add Blood">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
