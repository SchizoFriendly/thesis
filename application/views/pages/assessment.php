<div class="container-fluid">
  <div class="row">

    <img src="<?php echo base_url("_assets/img/logo3.png"); ?>">
      <!-- </div> -->
      
      <p class="header"> <a href='<?php print(base_url().'index.php/NewCon/logout') ?>'> Logout</a></p>


  </div>
</div>

<!--SIDEBAR-->
    <div class="col-lg-2 col-lg-offset-1">
      <div>
        <img name="student_photo" src="<?php echo base_url("_assets/img/facebook-default-no-profile-pic2.jpg"); ?>" class="under1">
        <p class="over" name="student_name"></p>
        <img src="<?php echo base_url("_assets/img/img-f2.png"); ?>" class="under">
      </div>
      <div class="sidebar">
        <ul class="nav">
          <li class="li2"><a href="<?php print(base_url().'index.php/NewCon/getProfile') ?>"><b>Profile</b></a></li>
          <li class="li2"><a href="<?php print(base_url().'index.php/NewCon/getGrades') ?>"><b>Grades</b></a></li>
          <li class="li2"><a href="<?php print(base_url().'index.php/NewCon/getClearance') ?>"><b>Clearance</b></a></li>
          <li class="li2"><a href="<?php print(base_url().'index.php/NewCon/getInc') ?>"><b>INC Grade Monitor</b></a></li>
          <li class="li2"><a href="<?php print(base_url().'index.php/NewCon/getSchedule') ?>"><b>Class Schedule</b></a></li>
          <li class="li2"><a href="<?php print(base_url().'index.php/NewCon/getAssessment') ?>"><b>Assessment of Fees</b></a></li>
          <li class="li2"><a href="<?php print(base_url().'index.php/NewCon/checkadreq') ?>"><b>Admission Requirements</b></a></li>
        </ul>
      </div> 
    </div> <!-- end of col-lg-2 -->
        
<div class="col-lg-8 main">
<div id="list" class="well">
   <div class="minhead">
                        <h3><span class="glyphicon glyphicons-podium"></span>ASSESSMENT OF FEES</h3>
                    </div>
                    <br><br>
                    <table class="table table-bordered">
                    <tr>
                        <th>SUBJCODE</th>
                        <th>AMOUNT</th>
                    </tr>
                    <?php foreach ($query as $row){ ?>

                  <tr>
                  <td> <?php echo $row->subjectcode;?> <br></td>
                  <td> <?php echo $row->price;?><br></td>
                  </tr>
    <?php } ?>  
    <?php foreach ($totalAssessment as $row){ ?>

                  <tr>
                  <td><b> TOTAL SUBJECT FEE: <?php echo $row->total_tuition;?> <br></td>
                  </tr>
    <?php } ?> 
    <?php foreach ($totalMiscfee as $row){ ?>

                  <tr>
                  <td><b> TOTAL MISCFEE: <?php echo $row->miscfee;?> <br></td>
                  </tr>
    <?php } ?>
    <?php foreach ($totalTuition as $row){ ?>

                  <tr>
                  <td><b> TOTAL TUITION: <?php echo $row->total_tuition;?> <br></td>
                  </tr>
    <?php } ?>
                  </table>


    </div>
</div>