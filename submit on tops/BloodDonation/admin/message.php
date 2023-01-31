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
      Manage Message's
    </h3>
    <hr>
    <div class="col-md-12" style="overflow: auto;">
      <table class="table" id="example">
        <thead>
          <tr>
            <th>id</th>
            <th>User Name</th>
            <th>Email</th>
            <th>Subject</th>
            <th>Message</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($showmessage as $row) {
          ?>
          <tr>
            <td><?php echo $row['id']; ?>
            </td>
            <td><?php echo $row['un']; ?>
            </td>
            <td><?php echo $row['email']; ?>
            </td>
            <td><?php echo $row['sub']; ?>
            </td>
            <td><?php echo $row['message']; ?>
            </td>
            <td>
            <a href="#"><i class="bi bi-eye"></i></a> |
                                    <a href="<?php echo $mainurl; ?>message?deletemessage=<?php echo $row['id'];?>" onclick="return confirm('Are you sure to Delete data ?')"><i class="bi bi-trash"></i></a>
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