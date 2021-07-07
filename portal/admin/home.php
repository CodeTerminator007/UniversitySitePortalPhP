<h1>Welcome to <?php echo $_settings->info('name') ?></h1>


<?php

										$conn = mysqli_connect("localhost", "root", "", "hussnainnasaruniversity");
										 
										// Check connection
										if($conn === false){
											die("ERROR: Could not connect. "
												. mysqli_connect_error());
										}
										
										$i =1;
										$qry = $conn->query("SELECT * from admission_form");
										$rows_count_value = mysqli_num_rows($qry);
                                        
										while($row=$qry->fetch_assoc()):
																				
										?>
                                        <p> You have <?php echo $rows_count_value ?> admission forms</p>							

<div class="alert alert-warning" role="alert">
admission form from <?php echo $row['email'] ?>
                                        </b></b></b><button type="button" class="btn btn-primary">check it</button>
</div>
<?php endwhile; ?>	