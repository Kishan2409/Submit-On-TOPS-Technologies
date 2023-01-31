<?php 
if(!isset($_SESSION["a_id"]))
{
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
            Manage Profile
        </h3>
        <hr>

        <table id="example" class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Password</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($showadmin as $row) {
                    ?>
                    <tr>
                        <td><?php echo $row['a_id']; ?></td>
                        <td>
                            <?php echo $row['a_nm']; ?>
                        </td>
                        <td><?php echo $row['a_pass']; ?></td>
                    </tr>
                <?php
                } ?>
            </tbody>
        </table>
    </div>
</div>