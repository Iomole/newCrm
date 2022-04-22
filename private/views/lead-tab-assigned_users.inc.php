	<nav class="navbar navbar-light bg-light">
	  <form class="form-inline">
	    <div class="input-group">
	      <div class="input-group-prepend">
	        <span class="input-group-text" id="basic-addon1"><i class="fa fa-search"></i>&nbsp</span>
	      </div>
	      <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="basic-addon1">
	    </div>
	  </form>

	  	<div>

	  		<?php if(Auth::access('admin')):?>
		 	
			<a href="<?=ROOT?>/single_lead/assignedUseradd/<?=$row->lead_id?>?select=true">
				<button class="btn btn-sm btn-primary"><i class="fa fa-plus"></i>Assign User</button>
			</a>			
			<a href="<?=ROOT?>/single_lead/lecturerremove/<?=$row->lead_id?>?select=true">
				<button class="btn btn-sm btn-primary"><i class="fa fa-minus"></i>Remove</button>
			</a>
 			<?php endif;?>
 			
		</div>
			
	</nav>

<div class="card-group justify-content-center">
	<?php if(is_array($assigned_users)):?>
		<?php foreach($assigned_users as $assigned_user):?>
			
			<?php 
				$row = $assigned_user->user;
				include(views_path('user'));

			?>
		<?php endforeach;?>
	<?php else:?>
		<center><h4>No assigned users were found in this lead</h4></center>

	<?php endif;?>
 </div>
 <?php $pager->display()?>