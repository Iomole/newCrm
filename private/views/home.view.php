<?php $this->view('includes/header')?>
<?php $this->view('includes/nav')?>

<style>
	h1{
		font-size: 80px;
		color: limegreen;
	}

	a{
		text-decoration: none;
	}

	.card-header{
		font-weight: bold;
	}

	.card{
		min-width: 250px;
	}
</style>
	<div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px;">
	 
	 	<div class="row justify-content-center ">

	 		<?php if(Auth::access('super_admin')):?>
		 		<div class="card col-3 shadow rounded m-4 p-0 border">
	 				<a href="<?=ROOT?>/schools">
		 			<div class="card-header">CRMS</div>
		 			<h1 class="text-center">
		 				<i class="fa fa-graduation-cap"></i>
		 			</h1>
		 			<div class="card-footer">View all CRMs</div>
	 				</a>
		 		</div>
		 	<?php endif;?>

		 	<?php if(Auth::access('admin')):?>
		 		<div class="card col-3 shadow rounded m-4 p-0 border">
	 				<a href="<?=ROOT?>/users">
		 			<div class="card-header">USERS</div>
		 			<h1 class="text-center">
		 				<i class="fa fa-chalkboard-teacher"></i>
		 			</h1>
		 			<div class="card-footer">View all users</div>
		 			</a>
		 		</div>
		 	<?php endif;?>

		 	<?php if(Auth::access('reception')):?>
		 		<div class="card col-3 shadow rounded m-4 p-0 border">
	 				<a href="<?=ROOT?>/accounts">
		 			<div class="card-header">ACCOUNTS</div>
		 			<h1 class="text-center">
		 				<i class="fa fa-user-graduate"></i>
		 			</h1>
		 			<div class="card-footer">View all accounts</div>
		 			</a>
		 		</div>
		 	<?php endif;?>

		 		<div class="card col-3 shadow rounded m-4 p-0 border">
	 				<a href="<?=ROOT?>/classes">
		 			<div class="card-header">CONTACTS</div>
		 			<h1 class="text-center">
		 				<i class="fa fa-university"></i>
		 			</h1>
		 			<div class="card-footer">View all contacts</div>
		 			</a>
		 		</div>

		 		<div class="card col-3 shadow rounded m-4 p-0 border">
	 				<a href="<?=ROOT?>/tests">
		 			<div class="card-header">LEADS</div>
		 			<h1 class="text-center">
		 				<i class="fa fa-file-signature"></i>
		 			</h1>
		 			<div class="card-footer">View all leads</div>
		 			</a>
		 		</div>

		 		<?php if(Auth::access('admin')):?>
		 		<div class="card col-3 shadow rounded m-4 p-0 border">
	 				<a href="<?=ROOT?>/statistics">
		 			<div class="card-header">REPORTS</div>
		 			<h1 class="text-center">
		 				<i class="fa fa-chart-pie"></i>
		 			</h1>
		 			<div class="card-footer">View account reports</div>
		 			</a>
		 		</div>

		 		<div class="card col-3 shadow rounded m-4 p-0 border">
	 				<a href="<?=ROOT?>/settings">
		 			<div class="card-header">SETTINGS</div>
		 			<h1 class="text-center">
		 				<i class="fa fa-cogs"></i>
		 			</h1>
		 			<div class="card-footer">View app settings</div>
		 			</a>
		 		</div>
		 		<?php endif;?>

		 		<div class="card col-3 shadow rounded m-4 p-0 border">
	 				<a href="<?=ROOT?>/profile">
		 			<div class="card-header">PROFILE</div>
		 			<h1 class="text-center">
		 				<i class="fa fa-id-card"></i>
		 			</h1>
		 			<div class="card-footer">View your profile</div>
		 			</a>
		 		</div>

		 		<div class="card col-3 shadow rounded m-4 p-0 border">
	 				<a href="<?=ROOT?>/logout">
		 			<div class="card-header">LOGOUT</div>
		 			<h1 class="text-center">
		 				<i class="fa fa-sign-out-alt"></i>
		 			</h1>
		 			<div class="card-footer">Logout from the system</div>
	 				</a>
		 		</div>

	 	</div>
	</div>
 
<?php $this->view('includes/footer')?>
