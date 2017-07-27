<?php
  session_start();

  include 'dbconn.php';

  $rs=$conn->query("select * from vacnacy");

?>
<div class="container">
  <div class="row">
    <div class="input-field col s12">
      <label class="active">Select vacnacy</label>
      <select id="vselect">
        <?php while($r=$rs->fetch_assoc()): ?>
         <option value="<?php echo $r['id'];?>"><?php echo $r["id"]; ?></option>
       <?php endwhile; ?>
      </select>
    </div>
  </div>

  <div class="row">
    <div class="col s12" id="drivedetail">

    </div>
  </div>

  <div class="row">
    <div class="col 12" style="width:100%">
      <a class="btn" style="width:100%" id="sendbtn">Send invite for this drive</a>
    </div>
  </div>

</div>


<div class="container">
  <div class="row">
    <div class="col s12">

    </div>
  </div>
</div>


<script type="text/javascript">
  $(document).ready(function() {

     $('select').material_select();

     $.post("drivedetail.php",{
       id:$("#vselect").val()
     },function(data){
       $("#drivedetail").html(data);
     });


     $("#sendbtn").click(function(event) {
       $.post("sendinvitefilter.php",{
         did:$("#vselect").val()
       },function(data){
         $("#maincontainer").html(data);
       });
     });


     $("#vselect").change(function(event) {
        $.post("drivedetail.php",{
          id:$("#vselect").val()
        },function(data){
          $("#drivedetail").html(data);
        });
     });

  });
</script>
