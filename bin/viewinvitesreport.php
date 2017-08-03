<?php
include 'dbconn.php';

$qry="select distinct(cid) from invites";
$rs=$conn->query($qry);

while($r=$rs->fetch_assoc()): ?>
<div class="row z-depth-1 xhover" data-value=<?php echo $r["cid"]; ?>>
  <div class="col s6">
    <span><b>Drive id:</b></span>
  </div>
  <div class="col s6">
    <span><b><?php echo  $r["cid"];?></b></span>
  </div>

  <div class="col s6">
    <span>Total invites:</span>
  </div>
  <?php $qry1="select count(*) as maxcount from invites where cid='".$r["cid"]."'";
        $rs1=$conn->query($qry1);
        $r1=$rs1->fetch_assoc();
        $total=$r1["maxcount"];
  ?>
  <div class="col s6">
    <span><?php echo  $r1["maxcount"]; ?></span>
  </div>

  <div class="col s6">
    <span>Read:</span>
  </div>
  <?php $qry1="select count(*) as maxcount from invites where cid='".$r["cid"]."' and seen=1";
        $rs1=$conn->query($qry1);
        $r1=$rs1->fetch_assoc();
        $total=$r1["maxcount"];
  ?>
  <div class="col s6">
    <span><?php echo  $r1["maxcount"]; ?></span>
  </div>

  <div class="col s6">
    <span>Accepted:</span>
  </div>
  <?php $qry1="select count(*) as maxcount from invites where cid='".$r["cid"]."' and accepted=1";
        $rs1=$conn->query($qry1);
        $r1=$rs1->fetch_assoc();
        $total=$r1["maxcount"];
  ?>
  <div class="col s6">
    <span><?php echo  $r1["maxcount"];  ?></span>
  </div>
</div>
<?php endwhile; ?>

<script type="text/javascript">
  $(document).ready(function() {
    $(".xhover").on('mouseenter',function(event) {
      event.preventDefault();
      $(this).removeClass('z-depth-1');
      $(this).addClass('z-depth-2');
    });

    $(".xhover").on('mouseleave',function(event) {
      event.preventDefault();
      $(this).removeClass('z-depth-2');
      $(this).addClass('z-depth-1');
    });

    $(".xhover").on("click",function(event){
      $.post("detailedreport.php",{
        driveid:$(this).data("value")
      },function(data){
        $("#maincontainer").html(data);
      });
    });

  });
</script>
