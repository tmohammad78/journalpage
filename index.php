<?php include "include/db.php";  ?>
<html>
<head>
	<link rel="stylesheet" href="css/bootstrap-4.0.0.css">
	<link rel="stylesheet" href="style.css">
	<title>registration site</title>
</head>	
<body>
	<div class="conatainer-fluid register" >
		<div class="row">
			<div class="col-xl-3 col-lg-3 col-3 col-sm-12 col-xs-12 register-left">
				<h3>You can read every journal</h3>
				<p>This is perfect chance for reading and be accomplished</p>
				<input type="text" class="btn btn-sm" value="Login">
			</div>
	<div class="col-xl-9 col-lg-9 col-9 col-sm-12 col-xs-12 register-right h-auto">
		<ul class="nav nav-tabs nav-justified " id="mytab" role="tablist">
			<li class=nav-item>
				<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Docter</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Other</a>
			</li>
		</ul>
		<div class="clearfix"></div>
					
		<div class="tab-content"  id="#mytabcontent">
			<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab" >
				<div class="clearfix" style="height: 10px;"></div>
				<h4 class="register-heading">Register as Docter</h4>
				<div class="clearfix" style="height: 40px;"></div>
				<div class="row">
				<div class="col-2"></div>
				<div class="col-8">
				<form class="form-group" method="post" action="register.php">
					<div class="row">
						<div class="form-group col-12">
							<div class="form-row">
								<div class="form-group col-6">
									<input type="text" class="form-control" name="firstname" placeholder="Your FirstName *">
								</div>
								<div class="form-group col-6">
									<input type="text" class="form-control" name="lastname" placeholder="Your LastName">
								</div>
								<div class="form-group col-12 m-0">
									<input type="email" class="form-group form-control" name="email" placeholder="Your Email">	
								</div>
								<div class="form-group col-6">
									<input type="password" class="form-control" name="password" placeholder="Your password *">
								</div>
								<div class="form-group col-6">
									<input type="password" class="form-control" placeholder="Confirm Your password *">
								</div>
								<div class="form-group col-6">
									<input type="text" class="form-control" name="mobile" placeholder="Your Mobile Numebr">
								</div>
								<div class="form-group col-6">
									<select name="major" id="" class="form-control">
										<option value="">major</option>
										<option value="computer_sience">computer sience</option>
										<option value="math">math</option>
										<option value="sience">sience</option>
										<option value="history">history</option>
									</select>
								</div>
								<button type="text" class="btn btn-block btn-info" name="btnregister" value="Register">
							</div>
					   </div>
					</div>
				</form>
			</div>	
				<div class="col-2"></div>
				</div>
			</div>
			<div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab" >
				<div class="clearfix" style="height: 10px;"></div>
				<h4 class="register-heading">Register as Docter</h4>
				<div class="clearfix" style="height: 40px;"></div>
				<div class="row">
				<div class="col-2"></div>
				<div class="col-8">
				<div class="form-group">
					<div class="row">
						<div class="form-group col-12">
							<div class="form-row">
								<div class="form-group col-6">
									<input type="text" class="form-control" placeholder="Your FirstName *">
								</div>
								<div class="form-group col-6">
									<input type="text" class="form-control" placeholder="Your LastName">
								</div>
								<div class="form-group col-12 m-0">
									<input type="email" class="form-group form-control" placeholder="Your Email">	
								</div>
								<div class="form-group col-6">
									<input type="password" class="form-control" placeholder="Your password *">
								</div>
								<div class="form-group col-6">
									<input type="password" class="form-control" placeholder="Confirm Your password *">
								</div>
								<div class="form-group col-6">
									<input type="text" class="form-control" placeholder="Your Mobile Numebr">
								</div>
								<div class="form-group col-6">
									<select name="" id="" class="form-control">
										<option value="">major</option>
										<option value="computer_sience">computer sience</option>
										<option value="math">math</option>
										<option value="sience">sience</option>
										<option value="history">history</option>
									</select>
								</div>
								<input type="submit" class="btn btn-block btn-info"  value="Register">
							</div>
					   </div>
					</div>
				</div>
			</div>	
				<div class="col-2"></div>
				</div>
			</div>
		</div>	
	</div>	
	</div>
	</div>
</body>
</html>