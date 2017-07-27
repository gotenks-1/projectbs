<?php
session_start();
$arr=array();
$arr["abcd"]="yo";
 ?>
<div class="z-depth-4">

  <div class="row">
    <div class="col s8">
      <span>Selected Drive:</span>
    </div>
    <div class="col s4">
      <span id="spancid"><?php echo $_POST["did"]; ?></span><a href="#" id="changeoption">(change)</a>
    </div>
  </div>
<br><br>
<span style="margin-left:10px">Choose filters:</span>
  <div class="divider"></div>
  <div class="row" style="margin-bottom:0px">
    <div class="row" style="margin-bottom:0px">
      <ul class="tabs">
        <li class="tab col s4"><a href="#coursefilterdiv">Course</a></li>
        <li class="tab col s4"><a href="#branchfilterdiv">Branch</a></li>
        <li class="tab col s4"><a href="#marksfilterdiv">Marks</a></li>
      </ul>
    </div>

    <div class="row" id="branchfilterdiv" style="margin-bottom:0px">
      <span>**only applicable if appropriate course filter is applied</span>
      <div class="row">
        <div class="col s3 offset-s1">
          <p>
            <input type="checkbox" id="cscb" value="cse" class="branchcb"/>
            <label for="cscb">C.S</label>
          </p>
          <p>
            <input type="checkbox" id="ececb" value="ece" class="branchcb"/>
            <label for="ececb">ECE</label>
          </p>
          <p>
            <input type="checkbox" id="civilcb" value="ce" class="branchcb"/>
            <label for="civilcb">Civil</label>
          </p>
        </div>
        <div class="col s3">
          <p>
            <input type="checkbox" id="mechcb" value="me" class="branchcb"/>
            <label for="mechcb">Mech.</label>
          </p>
        </div>
        <div class="col s3">
          <p><a href="#" class="btn" id="bapply">&nbspApply&nbsp&nbsp</a></p>
          <p><a href="#" class="btn" id="bcancel">Cancel</a></p>
        </div>

      </div>
    </div>



    <div class="row" id="coursefilterdiv" style="margin-bottom:0px">
      <div class="col s12">
        <div class="row">
          <div class="col s12">
            select courses:
          </div>
        </div>
        <div class="row">
          <div class="col s3 offset-s1">
            <p>
              <input type="checkbox" id="btechcb" value="btech" class="coursecb"/>
              <label for="btechcb">B.Tech</label>
            </p>
            <p>
              <input type="checkbox" id="bcacb" value="bca" class="coursecb"/>
              <label for="bcacb">BCA</label>
            </p>
            <p>
              <input type="checkbox" id="bpharmacb" value="bpharma" class="coursecb"/>
              <label for="bpharmacb">B.Pharma</label>
            </p>
          </div>
          <div class="col s3">
            <p>
              <input type="checkbox" id="polycb" value="polytech" class="coursecb"/>
              <label for="polycb">Polytech</label>
            </p>
          </div>
          <div class="col s3">
            <p><a href="#" class="btn" id="courseapply">&nbspApply&nbsp&nbsp</a></p>
            <p><a href="#" class="btn" id="coursecancel">Cancel</a></p>
          </div>
        </div>
      </div>
    </div>

    <div class="row" id="marksfilterdiv" style="margin-bottom:0px">
      <div class="row">
        <div class="input-field col s12">
          <input type="number" id="minfilter" value="0.0">
          <label for="minfilter" class="active">Enter min marks</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s3 offset-s3">
          <a href="#" id="mmapply" class="btn">Apply</a>
        </div>
        <div class="input-field col s3">
          <a href="#" id="mmcancel" class="btn">Cancel</a>
        </div>
      </div>
    </div>
  </div>
  <div class="divider"></div>


  <div class="row" id="studentslist" style="height:500px;overflow-y:scroll">
    <span>Select students</span>
    <div class="col s12">
      <table class="highlight">
        <thead>
          <tr>
            <th>S.No</th>
            <th>Username</th>
            <th>Roll No</th>
            <th>Name</th>
            <th>Sendto</th>
          </tr>
        </thead>
        <tbody id="tableBody">

        </tbody>
      </table>
    </div>
  </div>
  <div class="divider"></div>

  <div class="row">
    <div class="col s12" style="width:100%">
      <a class="btn" href="#" style="width:100%" id="invitessend">Send Invites</a>
    </div>
  </div>

</div>




<script type="text/javascript">
var usernamelist=new Object();
var flagcoursefilter=false;
var flagbranchfilter=false;
var flagmarksfilter=false;

var listCourse=new Object();
listCourse.btech=0;
listCourse.bca=0;
listCourse.bpharma=0;
listCourse.polytech=0;
var listBranch=new Object();
listBranch.cse=0;



function addAllRowsToTable(){
  usernamelist=new Object();
  var i=1;
  $("#tableBody").empty();
  // console.log("i am here");
if(flagcoursefilter){
  $.each(listCourse,function(key, value) {
    if(value==1){
      $.post('generatejson.php',{
        branch:key,
        marksfilter:flagmarksfilter,
        marks:$("#minfilter").val(),
        branchfilter:flagbranchfilter,
        brancharr:listBranch
      }, function(data) {
        console.log(data);
        $.each(data,function(key,value){
          addNewRowToTable(value,i);
          // console.log(value);
          i++;
        });
      },"json");
    }
  });
}else {
  $.each(listCourse,function(key, value) {
    if(true){
      $.post('generatejson.php',{
        branch:key,
        marksfilter:flagmarksfilter,
        marks:$("#minfilter").val(),
        branchfilter:flagbranchfilter,
        brancharr:listBranch
      }, function(data) {
        console.log(data);
        $.each(data,function(key,value){
          addNewRowToTable(value,i);
          // console.log(value);
          i++;
        });
      },"json");
    }
  });
}


}

addAllRowsToTable();

function addNewRowToTable(x,i){
  $("#tableBody").append("<tr>"+
  "<td>"+i+"</td>"+
  "<td>"+x.username+"</td>"+
  "<td>"+x.roll+"</td>"+
  "<td>"+x.name+"</td>"+
  "<td><input type='checkbox' class='sendtocb' id='"+x.username+"cb"+"' checked/>"+
  "<label for='"+x.username+"cb"+"'></label>"+
  "</td>"+
  "</tr>");

  usernamelist[x.username]=1;

  $("#"+x.username+"cb").click(function(event) {
    if($("#"+x.username+"cb")[0].checked){
      usernamelist[x.username]=1;
    }else {
      delete usernamelist[x.username];
    }
    console.log(usernamelist);
  });

}

  $(document).ready(function(event){

    $("#invitessend").click(function(){

      $.each(usernamelist,function(key, value) {
        $.post('insertinvite.php',{
          user:key,
          cid:$("#spancid").text()
        }, function(data) {
          console.log(data);

        });
      });

      alert("invites send successfully");
      $("#changeoption").trigger("click");
    });

    $("#bcancel").click(function(event) {
      flagbranchfilter=false;
      addAllRowsToTable();

    });

    $("#bapply").click(function(event) {

      if(flagcoursefilter==true){
        flagbranchfilter=true;
        addAllRowsToTable();
      }else {
        alert("apply branch filter first");
      }
    });



  $("#mmcancel").click(function(event) {
    flagmarksfilter=false;
    addAllRowsToTable();
  });

  $("#mmapply").click(function(event) {
    flagmarksfilter=true;
    addAllRowsToTable();
  });

  $("#courseapply").click(function(event) {
    flagcoursefilter=true;
    addAllRowsToTable();
  });

  $("#coursecancel").click(function(event) {
    flagcoursefilter=false;
    addAllRowsToTable();
  });



  $('ul.tabs').tabs();

  $("select").material_select();

  $("#changeoption").click(function(event) {
    $("#maincontainer").load("sendinvitestouser.php");
  });

  $(".coursecb").click(function(event) {
    if($(this)[0].checked){
      listCourse[$(this).val()]=1;
    }
    else {
      listCourse[$(this).val()]=0;
    }
    console.log(listCourse);
  });

  $(".branchcb").click(function(event) {
    if($(this)[0].checked){
      listBranch[$(this).val()]=1;
    }
    else {
      delete listBranch[$(this).val()];
    }
    console.log(listBranch);
  });


});



</script>
