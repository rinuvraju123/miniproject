<?php include_once("header.php"); ?>

    <div class="wrapper">

        <div class="innerpage_content">
        	<div class="page_title">Edit Profile</div>
            <!--<div class="page_banner"><img src="images/pbanner.jpg" /></div>-->
  <div class="page_content"><p>
            	<div class="my_left">
                	<ul>
                    	<li><a href="edit_profile.php">EDIT PROFILE</a></li>
                        <li><a href="edit_password.php">CHANGE PASSWORD</a></li>
                        <li><a href="step1.php">TAKE TEST</a></li>
                        <li><a href="view_testdetails.php">VIEW TEST</a></li>
                  </ul>
                </div>

                <?php

                   $i=$_SESSION['id'];
                   echo $i;

        $sql1=mysqli_query($con,"SELECT  `user_id`, `outbox`, `ear`, `125hz`, `250hz`, `500hz`, `1k`, `2k`, `4k`, `8k`, `date` FROM `hearing_test` WHERE `user_id`='$i'");
          //$res=mysqli_query($con,$sql1);
          $num	=	mysqli_num_rows($sql1);
          while($row	=	mysqli_fetch_array($res)){

					?>

                    	<a href="view_testdetails.php?id=<?php echo $row['id']; ?>"><?php echo $row['date']; ?></a><br />


                    <?php
						}
						if($num==""){
							echo "No Test Taken";
						}
					?>

              </div>
            </p></div>
        </div>

    </div>

 <?php include_once("footer.php"); ?>
