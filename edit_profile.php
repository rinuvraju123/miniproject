<?php
include 'connection.php';

						$id		=	$_SESSION['id'];
						$sql1	=	"Select * from tbl_registration where id='$id'";
						$result1=mysqli_query($con,$sql1);
						$row	=	mysqli_fetch_array($result1);
					?>
                    <?php
			  if(isset($_POST['submit']))
			  {
				  $name=$_POST["name"];
				  $age=$_POST["age"];
				  $gen=$_POST["gender"];
				  $case=$_POST["case"];
				  $city=$_POST["city"];

				  $email=$_POST["email"];
				  $phone=$_POST["phone"];
				   $sql1=("update tbl_registration set name='".$name."',age=".$age.",gender='".$gen."',case_history='".$case."',city='".$city."',phone='".$phone."' where id=".$id);
				   $result=mysqli_query($con,$sql1);
					 echo "<script>alert('data updated Successful.')</script>";

				  /*echo $sql1;*/
				  /*echo "<script>window.location='myaccount.php'</script>";*/

			  }
			  ?>
				<script type="text/javascript">
				/*function check_email(){

				var email = $("#email").val();
				//alert("");

				if(email.length > 2){
				$('#Loading').show();
				//alert("haii");
				$.post("autocomplete.php", {
				email: $('#email').val(),
				}, function(response){
				$('#Info').fadeOut();
				$('#Loading').hide();
				setTimeout("finishAjax('Info', '"+escape(response)+"')", 450);
				});
				return false;
				}
				}
				function finishAjax(id, response){
				$('#'+id).html(unescape(response));
				$('#'+id).fadeIn(1000);

				}*/


				</script>
				</head>



					<div class="wrapper">
                    <link href="style.css" rel="stylesheet" type="text/css" />

        <div class="innerpage_content">
        	<div class="page_title">Edit Profile</div>
            <!--<div class="page_banner"><img src="images/pbanner.jpg" /></div>-->
            <div class="page_content"><p>
            	<div class="my_left">
                	<ul>
                    	<li><a href="edit_profile.php">EDIT PROFILE</a></li>
                        <li><a href="edit_password.php">CHANGE PASSWORD</a></li>
                        <li><a href="step1.php">TAKE TEST</a></li>

                    </ul>
                </div>
                <div class="my_right">

                 <form name="myForm" action="#" onsubmit="return validateForm();" method="post">
                	<table height="536">
<tr>
                        	<td>Name</td>
                            <td><input type="text" name="name"  id="name"  onchange="fname()"   value="<?php echo $row['name'] ?>" required /></td>
                        </tr>
                        <tr>
                        	<td>Age</td>
													<td><input type="text" name="age" id="age"  size="35" onchange="agee()" value="<?php echo $row['age'] ?>" required /></td>

                          </tr>
                        <tr>
                        	<td>Gender</td>
                            <td><input type="radio" name="gender" value="Male" <?php if($row['gender']=="Male"){ ?> checked="checked" <?php } ?> required/> Male<input type="radio" name="gender" value="Female" <?php if($row['gender']=="Female"){ ?>checked="checked" <?php } ?>/> Female</td>
                        </tr>
                        <tr>
                        	<td>Case History</td>
                            <td><textarea name="case" id="case"  onchange="casee()"><?php echo $row['case_history'] ?></textarea></td>
                        </tr>

                        <tr>
                        	<td>City</td>
                            <td><input type="text" name="city"    id="city"  onchange="cityy()"  value="<?php echo $row['city'] ?>" /></td>
                        </tr>
												<!--<tr>
													<td>State</td>
												<td><div><select name="state" class="form-control" required>
															<option value="">Select</option>
															<option value="Andra Pradesh">Andra Pradesh</option>
															<option value="Arunachal Pradesht">Arunachal Pradesh</option>
															<option value="Assam">Assam</option>
															<option value="Bihar">Bihar</option>
															<option value="Chhattisgarh">Chhattisgarh</option>
															<option value="Goa">Goa</option>

															<option value="Gujarat">Gujarat</option>
															<option value="Haryana">Haryana</option>
															<option value="Himachal Pradesh">Himachal Pradesh</option>
															<option value="Jharkhandr">Jharkhand</option>
															<option value="Karnataka">Karnataka</option>
															<option value="Kerala">Kerala</option>

															<option value="Madya Pradesh">Madya Pradesh</option>
															<option value="Maharashtra">Maharashtra</option>
															<option value="Manipur">Manipur</option>
															<option value="Meghalaya">Meghalaya</option>
															<option value="Mizoram">Mizoram</option>
															<option value="Nagaland">Nagaland</option>

															<option value="Orissa">Orissa</option>
															<option value="Punjab">Punjab</option>
															<option value="Rajasthan">Rajasthan</option>
															<option value="Sikkim">Sikkim</option>
															<option value="Tamil Nadu">Tamil Nadu</option>
															<option value="Tripura">Tripura</option>

															<option value="Uttaranchal">Uttaranchal</option>
															<option value="Uttar Pradesh">Uttar Pradesh</option>
															<option value="West Bengal">West Bengal</option>
                             <?php echo $row['state'] ?> "required/></td>-->
															</select>
															</div>
															</td>
												</tr
		                        <?php echo $row['state'] ?> "required/></td>
                        </tr>
                        <tr>
                        	<td>Email</td>
                            <td><input type="text" name="email" id="email" onchange="efn()" value="<?php echo $row['email'] ?>" required/></td>
                        </tr>
                        <tr>
                        	<td>Phone</td>
                            <td><input type="text" name="phone"  id="phone"  value="<?php echo $row['phone'] ?>"value="" pattern="[789][0-9]{9}" title=" use valid Mobile number" required/></td>
                        </tr>

                        <tr>
                        	<td></td>
                            <td><input type="submit" name="submit" value="submit" class="btn" /></td>
                        </tr>
                    </table>
										<script src="jquery-3.2.1.min.js"></script>
								    <script src="js/validation.js"></script>
              </form>
							<script src="jquery-3.2.1.min.js"></script>
							<script src="js/validation.js"></script>
              </div>
            </p></div>
        </div>

    </div>
