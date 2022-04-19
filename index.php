<?php require_once('sidebar.php'); ?>
        <!--**********************************
            Sidebar end
        ***********************************-->
		
		<!--**********************************
            Content body start
        ***********************************-->

								<?php 	
						    //affiliate id
            $q="SELECT * FROM wp_uap_affiliates WHERE uid='$user_id'";
            $q=mysqli_query($conn,$q);
            while($row=mysqli_fetch_assoc($q)){
     $affiliate_id=   $row['id'];
          
			}
			
			
			//all paid
						$q="SELECT SUM(amount) as amount FROM wp_uap_referrals WHERE payment='2' AND affiliate_id='$affiliate_id'";
			$q=mysqli_query($conn,$q);
			
		$all_paid=mysqli_num_rows($q);
		while($row=mysqli_fetch_assoc($q)){
			$all_paid_amount=$row['amount'];
			
		}
		
		
		//all unpaid
						$q="SELECT SUM(amount) as amount FROM wp_uap_referrals WHERE payment='0' AND affiliate_id='$affiliate_id'";
			$q=mysqli_query($conn,$q);
			
		 $all_paid=mysqli_num_rows($q);
		
		while($row=mysqli_fetch_assoc($q)){
			$all_un_paid_amount=$row['amount'];
			
		}
		
		
		//all referral
				$q="SELECT * FROM wp_uap_referrals WHERE affiliate_id='$affiliate_id' AND source='User register'";
		
			$q=mysqli_query($conn,$q);
				$total_referral=mysqli_num_rows($q);
			while($row=mysqli_fetch_assoc($q)){
				  $affiliate_id=$row['affiliate_id'];
				//print_r($row);
				
			}


	

$membership = $_SESSION['display_name'];
			?>

			
			
        <div class="content-body">
            <!-- row -->
             <center>	

              <img src="../2.jpeg" width="300px" height="300px" alt="Author"><br><br>
<strong><button  class="btn btn-primary" style="  font-size:17px;">Welcome User <?php echo $_SESSION['user_login'];?><br>
Membership plan: <?php echo $membership; ?> <br>
 <?php
   $membership = $_SESSION['display_name'];

if($membership ==='premium'){      

echo 'Scheduled Cashout Date:';                     
  echo $_SESSION['user_activation_key'];

}
                                            ?>
 </button></strong> <br>

              </center>
			<div class="container-fluid">
                <div class="row">



					<div class="col-xl-6">
						<div class="card">
							<div class="card-body">
								<div class="media distance-bx align-items-center">
									<span class="icon bg-warning shadow-warning mr-3">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<g clip-path="url(#clip1)">
											<path d="M0.988957 17.0741C0.328275 17.2007 -0.104585 17.8386 0.0219823 18.4993C0.133362 19.0815 0.644694 19.4865 1.21678 19.4865C1.29272 19.4865 1.37119 19.4789 1.44713 19.4637L6.4592 18.5018C6.74524 18.4461 7.00091 18.2917 7.18316 18.0639L9.33481 15.3503L8.61593 14.9832C8.08435 14.7149 7.71475 14.2289 7.58818 13.6391L5.55804 16.1983L0.988957 17.0741Z" fill="white"/>
											<path d="M18.84 6.49306C20.3135 6.49306 21.508 5.29854 21.508 3.82502C21.508 2.3515 20.3135 1.15698 18.84 1.15698C17.3665 1.15698 16.1719 2.3515 16.1719 3.82502C16.1719 5.29854 17.3665 6.49306 18.84 6.49306Z" fill="white"/>
											<path d="M13.0179 3.15677C12.7369 2.86819 12.4762 2.75428 12.1902 2.75428C12.0864 2.75428 11.9826 2.76947 11.8712 2.79479L7.29203 3.88073C6.6592 4.03008 6.26937 4.66545 6.41872 5.29576C6.54782 5.83746 7.02877 6.20198 7.56289 6.20198C7.65404 6.20198 7.74514 6.19185 7.8363 6.16907L11.7371 5.24513C11.9902 5.52611 13.2584 6.90063 13.4888 7.14364C11.8763 8.87002 10.2639 10.5939 8.65137 12.3202C8.62605 12.3481 8.60329 12.3759 8.58049 12.4038C8.10966 13.0037 8.25397 13.9454 8.96275 14.3023L13.9064 16.826L11.3397 20.985C10.9878 21.5571 11.165 22.3064 11.7371 22.6608C11.9371 22.7848 12.1573 22.843 12.375 22.843C12.7825 22.843 13.1824 22.638 13.4128 22.2659L16.6732 16.983C16.8529 16.6919 16.901 16.34 16.8074 16.0135C16.7137 15.6844 16.4884 15.411 16.1821 15.2566L12.8331 13.553L16.3543 9.78636L19.0122 12.0393C19.2324 12.2266 19.5032 12.3177 19.7716 12.3177C20.0601 12.3177 20.3487 12.2114 20.574 12.0038L23.6243 9.16112C24.1002 8.71814 24.128 7.97392 23.685 7.49803C23.4521 7.24996 23.1383 7.12339 22.8244 7.12339C22.5383 7.12339 22.2497 7.22717 22.0245 7.43727L19.7412 9.56107C19.7386 9.56361 14.0178 4.18196 13.0179 3.15677Z" fill="white"/>
											</g>
											<defs>
											<clipPath id="clip1">
											<rect width="24" height="24" fill="white"/>
											</clipPath>
											</defs>
										</svg>
									</span>
									<div class="media-body">
										<h6 class="fs-18 text-black mb-3">Survey Earnings
											<span class="pull-right fs-14 text-dark"><span style="font-size: 20px;"><?php echo $points;?></span>
										</h6>
										<div class="progress" style="height:9px;">
											<div class="progress-bar bg-primary progress-animated" style="width: 90%; height:9px;" role="progressbar">
												<span class="sr-only">55% Complete</span>
												<span class="bg-primary arrow"></span>
												
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>






	<div class="col-xl-6">
						<div class="card">
							<div class="card-body">
								<div class="media distance-bx align-items-center">
									<span class="icon bg-warning shadow-warning mr-3">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<g clip-path="url(#clip1)">
											<path d="M0.988957 17.0741C0.328275 17.2007 -0.104585 17.8386 0.0219823 18.4993C0.133362 19.0815 0.644694 19.4865 1.21678 19.4865C1.29272 19.4865 1.37119 19.4789 1.44713 19.4637L6.4592 18.5018C6.74524 18.4461 7.00091 18.2917 7.18316 18.0639L9.33481 15.3503L8.61593 14.9832C8.08435 14.7149 7.71475 14.2289 7.58818 13.6391L5.55804 16.1983L0.988957 17.0741Z" fill="white"/>
											<path d="M18.84 6.49306C20.3135 6.49306 21.508 5.29854 21.508 3.82502C21.508 2.3515 20.3135 1.15698 18.84 1.15698C17.3665 1.15698 16.1719 2.3515 16.1719 3.82502C16.1719 5.29854 17.3665 6.49306 18.84 6.49306Z" fill="white"/>
											<path d="M13.0179 3.15677C12.7369 2.86819 12.4762 2.75428 12.1902 2.75428C12.0864 2.75428 11.9826 2.76947 11.8712 2.79479L7.29203 3.88073C6.6592 4.03008 6.26937 4.66545 6.41872 5.29576C6.54782 5.83746 7.02877 6.20198 7.56289 6.20198C7.65404 6.20198 7.74514 6.19185 7.8363 6.16907L11.7371 5.24513C11.9902 5.52611 13.2584 6.90063 13.4888 7.14364C11.8763 8.87002 10.2639 10.5939 8.65137 12.3202C8.62605 12.3481 8.60329 12.3759 8.58049 12.4038C8.10966 13.0037 8.25397 13.9454 8.96275 14.3023L13.9064 16.826L11.3397 20.985C10.9878 21.5571 11.165 22.3064 11.7371 22.6608C11.9371 22.7848 12.1573 22.843 12.375 22.843C12.7825 22.843 13.1824 22.638 13.4128 22.2659L16.6732 16.983C16.8529 16.6919 16.901 16.34 16.8074 16.0135C16.7137 15.6844 16.4884 15.411 16.1821 15.2566L12.8331 13.553L16.3543 9.78636L19.0122 12.0393C19.2324 12.2266 19.5032 12.3177 19.7716 12.3177C20.0601 12.3177 20.3487 12.2114 20.574 12.0038L23.6243 9.16112C24.1002 8.71814 24.128 7.97392 23.685 7.49803C23.4521 7.24996 23.1383 7.12339 22.8244 7.12339C22.5383 7.12339 22.2497 7.22717 22.0245 7.43727L19.7412 9.56107C19.7386 9.56361 14.0178 4.18196 13.0179 3.15677Z" fill="white"/>
											</g>
											<defs>
											<clipPath id="clip1">
											<rect width="24" height="24" fill="white"/>
											</clipPath>
											</defs>
										</svg>
									</span>
									<div class="media-body">
										<h6 class="fs-18 text-black mb-3">Paid Earnings
											<span class="pull-right fs-14 text-dark"><span style="font-size: 20px;">	<?php if(empty($all_paid_amount)){?>
										 	<h4 style="color:white;">0 </h4>
								
										<?php	}else{
										echo $all_paid_amount;
										
									} ?></span>
										</h6>
										<div class="progress" style="height:9px;">
											<div class="progress-bar bg-primary progress-animated" style="width: 90%; height:9px;" role="progressbar">
												<span class="sr-only">55% Complete</span>
												<span class="bg-primary arrow"></span>
												
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>




					<div class="col-xl-6">
						<div class="card">
							<div class="card-body">
								<div class="media distance-bx align-items-center">
									<span class="icon bg-warning shadow-warning mr-3">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<g clip-path="url(#clip1)">
											<path d="M0.988957 17.0741C0.328275 17.2007 -0.104585 17.8386 0.0219823 18.4993C0.133362 19.0815 0.644694 19.4865 1.21678 19.4865C1.29272 19.4865 1.37119 19.4789 1.44713 19.4637L6.4592 18.5018C6.74524 18.4461 7.00091 18.2917 7.18316 18.0639L9.33481 15.3503L8.61593 14.9832C8.08435 14.7149 7.71475 14.2289 7.58818 13.6391L5.55804 16.1983L0.988957 17.0741Z" fill="white"/>
											<path d="M18.84 6.49306C20.3135 6.49306 21.508 5.29854 21.508 3.82502C21.508 2.3515 20.3135 1.15698 18.84 1.15698C17.3665 1.15698 16.1719 2.3515 16.1719 3.82502C16.1719 5.29854 17.3665 6.49306 18.84 6.49306Z" fill="white"/>
											<path d="M13.0179 3.15677C12.7369 2.86819 12.4762 2.75428 12.1902 2.75428C12.0864 2.75428 11.9826 2.76947 11.8712 2.79479L7.29203 3.88073C6.6592 4.03008 6.26937 4.66545 6.41872 5.29576C6.54782 5.83746 7.02877 6.20198 7.56289 6.20198C7.65404 6.20198 7.74514 6.19185 7.8363 6.16907L11.7371 5.24513C11.9902 5.52611 13.2584 6.90063 13.4888 7.14364C11.8763 8.87002 10.2639 10.5939 8.65137 12.3202C8.62605 12.3481 8.60329 12.3759 8.58049 12.4038C8.10966 13.0037 8.25397 13.9454 8.96275 14.3023L13.9064 16.826L11.3397 20.985C10.9878 21.5571 11.165 22.3064 11.7371 22.6608C11.9371 22.7848 12.1573 22.843 12.375 22.843C12.7825 22.843 13.1824 22.638 13.4128 22.2659L16.6732 16.983C16.8529 16.6919 16.901 16.34 16.8074 16.0135C16.7137 15.6844 16.4884 15.411 16.1821 15.2566L12.8331 13.553L16.3543 9.78636L19.0122 12.0393C19.2324 12.2266 19.5032 12.3177 19.7716 12.3177C20.0601 12.3177 20.3487 12.2114 20.574 12.0038L23.6243 9.16112C24.1002 8.71814 24.128 7.97392 23.685 7.49803C23.4521 7.24996 23.1383 7.12339 22.8244 7.12339C22.5383 7.12339 22.2497 7.22717 22.0245 7.43727L19.7412 9.56107C19.7386 9.56361 14.0178 4.18196 13.0179 3.15677Z" fill="white"/>
											</g>
											<defs>
											<clipPath id="clip1">
											<rect width="24" height="24" fill="white"/>
											</clipPath>
											</defs>
										</svg>
									</span>
									<div class="media-body">
										<h6 class="fs-18 text-black mb-3">Unpaid Earnings
											<span class="pull-right fs-14 text-dark"><span style="font-size: 20px;">	<?php if(empty($all_un_paid_amount)){?> </h4>
										<?php	}else{
										echo $all_un_paid_amount;
										
									} ?></span>
										</h6>
										<div class="progress" style="height:9px;">
											<div class="progress-bar bg-primary progress-animated" style="width: 90%; height:9px;" role="progressbar">
												<span class="sr-only">55% Complete</span>
												<span class="bg-primary arrow"></span>
												
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
	


				
				
				
				
								<div class="col-xl-6">
						<div class="card">
							<div class="card-body">
								<div class="media distance-bx align-items-center">
									<span class="icon bg-warning shadow-warning mr-3">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<g clip-path="url(#clip1)">
											<path d="M0.988957 17.0741C0.328275 17.2007 -0.104585 17.8386 0.0219823 18.4993C0.133362 19.0815 0.644694 19.4865 1.21678 19.4865C1.29272 19.4865 1.37119 19.4789 1.44713 19.4637L6.4592 18.5018C6.74524 18.4461 7.00091 18.2917 7.18316 18.0639L9.33481 15.3503L8.61593 14.9832C8.08435 14.7149 7.71475 14.2289 7.58818 13.6391L5.55804 16.1983L0.988957 17.0741Z" fill="white"/>
											<path d="M18.84 6.49306C20.3135 6.49306 21.508 5.29854 21.508 3.82502C21.508 2.3515 20.3135 1.15698 18.84 1.15698C17.3665 1.15698 16.1719 2.3515 16.1719 3.82502C16.1719 5.29854 17.3665 6.49306 18.84 6.49306Z" fill="white"/>
											<path d="M13.0179 3.15677C12.7369 2.86819 12.4762 2.75428 12.1902 2.75428C12.0864 2.75428 11.9826 2.76947 11.8712 2.79479L7.29203 3.88073C6.6592 4.03008 6.26937 4.66545 6.41872 5.29576C6.54782 5.83746 7.02877 6.20198 7.56289 6.20198C7.65404 6.20198 7.74514 6.19185 7.8363 6.16907L11.7371 5.24513C11.9902 5.52611 13.2584 6.90063 13.4888 7.14364C11.8763 8.87002 10.2639 10.5939 8.65137 12.3202C8.62605 12.3481 8.60329 12.3759 8.58049 12.4038C8.10966 13.0037 8.25397 13.9454 8.96275 14.3023L13.9064 16.826L11.3397 20.985C10.9878 21.5571 11.165 22.3064 11.7371 22.6608C11.9371 22.7848 12.1573 22.843 12.375 22.843C12.7825 22.843 13.1824 22.638 13.4128 22.2659L16.6732 16.983C16.8529 16.6919 16.901 16.34 16.8074 16.0135C16.7137 15.6844 16.4884 15.411 16.1821 15.2566L12.8331 13.553L16.3543 9.78636L19.0122 12.0393C19.2324 12.2266 19.5032 12.3177 19.7716 12.3177C20.0601 12.3177 20.3487 12.2114 20.574 12.0038L23.6243 9.16112C24.1002 8.71814 24.128 7.97392 23.685 7.49803C23.4521 7.24996 23.1383 7.12339 22.8244 7.12339C22.5383 7.12339 22.2497 7.22717 22.0245 7.43727L19.7412 9.56107C19.7386 9.56361 14.0178 4.18196 13.0179 3.15677Z" fill="white"/>
											</g>
											<defs>
											<clipPath id="clip1">
											<rect width="24" height="24" fill="white"/>
											</clipPath>
											</defs>
										</svg>
									</span>
									<div class="media-body">
										<h6 class="fs-18 text-black mb-3">Total Referrals
											<span class="pull-right fs-14 text-dark"><span style="font-size: 20px;">	<?php echo $total_referral; ?></span>
										</h6>
										<div class="progress" style="height:9px;">
											<div class="progress-bar bg-primary progress-animated" style="width: 90%; height:9px;" role="progressbar">
												<span class="sr-only">55% Complete</span>
												<span class="bg-primary arrow"></span>
												
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
	

				
				
				
				
				<video controls="">
					<source src="v4.mp4" type="video/mp4" width="100px" height="100px">
				</video>
				
				
				
				
				 <div class="col-xl-12">
                        <div class="card">
                       
                            <div class="card-body">
                                <!-- Default accordion -->
                                <div id="accordion-one" class="accordion accordion-primary">
                                    <div class="accordion__item">
                                        <div class="accordion__header rounded-lg" data-toggle="collapse" data-target="#default_collapseOne">
                                            <span class="accordion__header--text">Referral Link</span>
                                            <span class="accordion__header--indicator"></span>
                                        </div>
                                        <div id="default_collapseOne" class="collapse accordion__body show" data-parent="#accordion-one">
                                            <div class="accordion__body--text">
                                            <h4  style="color:black; font-size:20px;"><a href="https://naijaopinion.com.ng/register.php?id=<?php echo $user_id; ?>" style="color: black;">https://naijaopinion.com.ng/register.php?id=<?php echo $user_id; ?></a></h4>
                                            </div>
                                        </div>
                                    </div>
                               
                                
                                </div>
                            </div>
                        </div>
                    </div>
				



					
					
				</div>
				
				<h3>User Workflow</h3>
				 <div class="row">
				


				<?php

$membership = $_SESSION['display_name'];

if($membership ==='premium'){?>


                      <div class="col-xl-6">
                        <div class="card text-white bg-warning">
                            <div class="card-header">
                                <h5 class="card-title text-white">Earnings withdrawal | Premium Users</h5>
                            </div>
                            <div class="card-body mb-0">
                                <p class="card-text"> This is where you withdraw your Survey Earnings.</p><a href="withdraw-survey-premium.php" class="btn btn-primary light btn-card" disabled > Withdraw Earnings | premium users
                                    </a>
                            </div>
                         
                        </div>
                    </div>	

<?php
}else{
                    ?>
				
					        <div class="col-xl-6">
                        <div class="card text-white bg-primary">
                            <div class="card-header">
                                <h5 class="card-title text-white">Survey earnings withdrawal</h5>
                            </div>
                            <div class="card-body mb-0">
                                <p class="card-text">This is where you withdraw your Survey Earnings.</p><a href="withdraw.php" class="btn btn-primary light btn-card">
                                    Withdraw Survey Earnings</a>
                            </div>
                          
                        </div>
                    </div>
				
				<?php 
}
				?>


								                  <?php

if($membership ==='regular'){ ?>
					        <div class="col-xl-6">
                        <div class="card text-white bg-warning">
                            <div class="card-header">
                                <h5 class="card-title text-white">Referral Withdrawal</h5>
                            </div>
                            <div class="card-body mb-0">
                                <p class="card-text">This is where you withdraw referral earnings</p><a href="withdraw_ref.php" class="btn btn-primary light btn-card">Withdraw Referral Earnings
                                    </a>
                            </div>
                         
                        </div>
                    </div>	

                    <?php
                }
                    ?>
				
				                  <?php

if($membership ==='premium'){?>
				
					        <div class="col-xl-6">
                        <div class="card text-white bg-warning">
                            <div class="card-header">
                                <h5 class="card-title text-white">Daily Task</h5>
                            </div>
                            <div class="card-body mb-0">
                                <p class="card-text"> Check out today's task and give us your opinion. Kindly note that you are expected to get up to the threshold within 15 days.</p><a href="read-news-premium.php" class="btn btn-primary light btn-card">Go to daily task
                                    </a>
                            </div>
                         
                        </div>
                    </div>	

                    <?php
}else{  ?>


		        <div class="col-xl-6">
                        <div class="card text-white bg-warning">
                            <div class="card-header">
                                <h5 class="card-title text-white">Daily Task</h5>
                            </div>
                            <div class="card-body mb-0">
                                <p class="card-text"> Check out today's task and give us your opinion.</p><a href="read-news.php" class="btn btn-primary light btn-card">Go to daily task
                                    </a>
                            </div>
                         
                        </div>
                    </div>


                    <?php 

                }

                ?>










                            <div class="col-xl-6">
                        <div class="card text-white bg-warning">
                            <div class="card-header">
                                <h5 class="card-title text-white">Advertisement</h5>
                            </div>
                            <div class="card-body mb-0">
                                <p class="card-text"> Check out today's advertisement and share on your social media</p><a href="advert-section.php" class="btn btn-primary light btn-card" disabled >Go to advertisement
                                    </a>
                            </div>
                         
                        </div>
                    </div>	

                    <?php

if($membership !='premium'){?>

      <div class="col-xl-6">
                        <div class="card text-white bg-warning">
                            <div class="card-header">
                                <h5 class="card-title text-white">Upgrade Membership</h5>
                            </div>
                            <div class="card-body mb-0">
                                <p class="card-text"> You need to upgrade your membership to premium.</p><a href="upgrade.php" class="btn btn-primary light btn-card" disabled >Click to Upgrade
                                    </a>
                            </div>
                         
                        </div>
                    </div>

                    <?php
}
                    ?>	

<?php

if($membership ==='premium'){?>


                      <div class="col-xl-6">
                        <div class="card text-white bg-warning">
                            <div class="card-header">
                                <h5 class="card-title text-white">Renew Membership</h5>
                            </div>
                            <div class="card-body mb-0">
                                <p class="card-text"> You need to renew your membership so as to be able to get money from survey earnings again.</p><a href="renew.php" class="btn btn-primary light btn-card" disabled >Click to renew
                                    </a>
                            </div>
                         
                        </div>
                    </div>	

<?php
}
                    ?>
				
            </div>
			</div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Naija Opinion</p>
                
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="./vendor/global/global.min.js"></script>
	<script src="./vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="./vendor/chart.js/Chart.bundle.min.js"></script>
    <script src="./js/custom.min.js"></script>
	<script src="./js/deznav-init.js"></script>
</body>
</html>