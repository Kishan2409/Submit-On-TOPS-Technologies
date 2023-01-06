<div class="col-md-12">
    <div class="row">
        <!-- this is main -->
        <div class="col-md-12 mainfile">
            <div class="container">
                <br>
                <h3>
                    Manage Blood's
                </h3>
            </div>
            <hr>
            <div class="container">
                <br>
                <div class="row">
                    <div class="col-md-12">
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
                        <h3>Add Blood Details Here</h3>
                        <form method="post">
                            <div class="form-group m-2">
                                <input type="text" name="bloodgroup" class="form-control us"
                                    placeholder="Enter Blood Group" required>
                            </div>
                            <div class="form-group m-2">
                                <input type="text" name="donate" class="form-control pass" placeholder="Donate Only"
                                    required>
                            </div>
                            <div class="form-group m-2">
                                <input type="text" name="receive" class="form-control pass" placeholder="Receive Only"
                                    required>
                            </div>
                            <div class="form-group m-2">
                                <input type="submit" name="adblood" class="bt-red" value="Add Blood">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>