<div class="col-md-12">
    <div class="row">
        <!-- this is main -->
        <div class="col-md-12 mainfile">
            <div class="container">
                <br>
                <h3>
                    User
                </h3>
            </div>
            <hr>
            <div class="container">
                <br>
                <div class="row">
                    <table id="example" class="table">
                        <thead>
                            <tr>
                                <th>
                                    id
                                </th>
                                <th>
                                    Photo
                                </th>
                                <th>
                                    First Name
                                </th>
                                <th>
                                    User Name
                                </th>
                                <th>
                                    Date Of Birth
                                </th>
                                <th>
                                    Gender
                                </th>
                                <th>
                                    Email
                                </th>
                                <th>
                                    Password
                                </th>
                                <th>
                                    Blood Group
                                </th>
                                <th>
                                    Mobile Number
                                </th>
                                <th>
                                    City
                                </th>
                                <th>
                                    Pincode
                                </th>
                                <th>
                                    Address
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($showuser as $row) {
                                ?>
                                <tr>
                                    <td>
                                        <?php echo $row['u_id']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['photo']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['fnm']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['unm']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['dob']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['gender']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['email']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['pass']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['bloodgroup']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['mobile']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['city']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['pincode']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['address']; ?>
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>