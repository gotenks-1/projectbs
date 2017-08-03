<?php
include "dbconn.php";
    $query="SELECT * From job_vacancy Where job_id = '".$_POST["id"]."'";
    if ($result = mysqli_query($conn, $query)) {
      while ($row = mysqli_fetch_assoc($result))
      {
        ?>
        <div class="container" style="margin-left:10px;">
          <div class="row">
            <div class="col l12 m12 s12">
                <span style="font-weight:bold;">Company Name : </span><?php echo $row['company_name'];?>
            </div>
            <div class="col l12 m12 s12">
                <span style="font-weight:bold;">Job Profile : </span><?php echo $row['job_profile'];?>
            </div>
            <div class="col l12 m12 s12">
                <span style="font-weight:bold;">Job Location : </span><?php echo $row['job_location'];?>
            </div>
            <div class="col l12 m12 s12">
                <span style="font-weight:bold;">Eligiblity Criteria : </span><?php echo $row['eligiblity_criteria'];?>
            </div>
            <div class="col l12 m12 s12">
                <span style="font-weight:bold;">Company Description : </span><?php echo $row['company_description'];?>
            </div>
            <div class="col l12 m12 s12">
                <span style="font-weight:bold;">Job Description : </span><?php echo $row['job_description'];?>
            </div>
            <div class="col l12 m12 s12">
                <span style="font-weight:bold;">Required Skills : </span><?php echo $row['required_skills'];?>
            </div>
            <div class="col l12 m12 s12">
                <span style="font-weight:bold;">Last Date To Apply : </span><?php echo $row['last_date_to_apply'];?>
            </div>
          </div>
        </div>
        <?php
      }
    }
 ?>
