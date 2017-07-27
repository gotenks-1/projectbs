<div class="row">
  <div class="col s8">
    <span><b>Drive ID :- </b></span>
    <span><b><?php echo $_POST["driveid"];?></b></span>
  </div>
  <div class="col s4" style="display:flex;flex-direction:row-reverse">
    <span><a href="#" id="goback">BACK</a></span>
  </div>
</div>

<table class="highlight">
  <thead>
    <tr>
    <th>S.No</th>
    <th>Username</th>
    <th>Read</th>
    <th>Interested</th>
    <tr>
  </thead>
  <tbody>
    <?php
      include 'dbconn.php';
      $qry="select * from invites where cid='".$_POST["driveid"]."'";
      $rs=$conn->query($qry);
      $i=1;
     ?>
     <?php while($r=$rs->fetch_assoc()): ?>
       <tr>
         <td><?php echo $i++; ?></td>
         <td><?php echo $r["username"]; ?></td>
         <td><?php echo ($r["seen"]==1)?"<i class='material-icons'>check</i>":"<i class='material-icons'>clear</i>"; ?></td>
         <td><?php echo ($r["accepted"]==1)?"<i class='material-icons'>check</i>":"<i class='material-icons'>clear</i>; ?></td>
       </tr>
     <?php endwhile; ?>
  </tbody>
</table>



<script type="text/javascript">
  $(document).ready(function() {

    $("#goback").click(function(event) {
      $("#maincontainer").load("viewinvitesreport.php");
    });

  });
</script>
