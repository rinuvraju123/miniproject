<?php include 'header.php' ?>

    <div class="wrapper">

        <div class="innerpage_content">
        	<div class="page_title">Hearing Aid</div>
            <div class="page_content">
            <?php
					$sql	=	"SELECT * FROM tbl_aid order by id DESC";
					$res	=	mysqli_query($con,$sql);
					while($row	=	mysqli_fetch_array($res)){
				?>
            	<div class="hbox">
                	<div class="himg"><img src="admin/uploads/<?php echo $row['image1']; ?>"></div>
                    <div class="htitle"><?php echo $row['title']; ?></div>
                    <div class="hdesc"><?php echo $row['description']; ?></div>
                    <div class="price">Rs. <?php echo $row['price']; ?></div>
                </div>

                <?php
				 	}
				 ?>
            </div>
        
        </div>

    </div>


 <?php include_once("footer.php"); ?>
