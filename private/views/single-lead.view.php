<?php $this->view('includes/header')?>
<?php $this->view('includes/nav')?>
	
	<div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px;">
		<?php $this->view('includes/crumbs',['crumbs'=>$crumbs])?>

		<?php if($row):?>
 
		<div class="row">
	 	<center><h4><?=esc(ucwords($row->lead))?></h4></center>
			<table class="table table-hover table-striped table-bordered">
				<tr><th>Created by:</th><td><?=esc($row->user->firstname)?> <?=esc($row->user->lastname)?></td>
				<th>Date Created:</th><td><?=get_date($row->date)?></td></tr>

			</table>
 		</div>
 		 
			<ul class="nav nav-tabs">
				<?php if(Auth::access('admin')):?>

				  <li class="nav-item">
				    <a class="nav-link <?=$page_tab=='assigned_users'?'active':'';?> " href="<?=ROOT?>/single_lead/<?=$row->lead_id?>?tab=assigned_users">Assigned Users</a>
				  </li>
				<?php endif;?>

			  <li class="nav-item">
			    <a class="nav-link <?=$page_tab=='contacts'?'active':'';?> " href="<?=ROOT?>/single_lead/<?=$row->lead_id?>?tab=contacts">Contacts</a>
			  </li>

			  <?php if(Auth::access('admin')):?>
				  <li class="nav-item">
				    <a class="nav-link <?=$page_tab=='team'?'active':'';?> " href="<?=ROOT?>/single_lead/<?=$row->lead_id?>?tab=team">Teams</a>
				  </li>
		 		<?php endif;?>

			</ul>

			

		 		<?php

		 			switch ($page_tab) {
		 				case 'assigned_users':
		 					// code...
		 					if(Auth::access('admin')){
		 						include(views_path('lead-tab-assigned_users'));
		 					}else{
		 						include(views_path('access-denied'));
		 					}
		 					break;

		 				case 'contacts':
		 					// code...
		 					include(views_path('lead-tab-contacts'));
		 					break;

		 				case 'team':
		 					// code...
		 					if(Auth::access('admin')){
		 						include(views_path('lead-tab-team'));
		 					}else{
		 						include(views_path('access-denied'));
		 					}
		 					break;

		 				case 'team-add':
		 					// code...
		 					if(Auth::access('admin')){
		 						include(views_path('lead-tab-team-add'));
		 					}else{
		 						include(views_path('access-denied'));
		 					}

		 					break;

		 				case 'team-edit':
		 					// code...
		 					include(views_path('lead-tab-team-edit'));
		 					break;

		 				case 'team-delete':
		 					// code...
		 					include(views_path('lead-tab-team-delete'));
		 					break;

		 					
		 				case 'assigned_users-add':
		 					// code...
		 					if(Auth::access('admin')){
		 						include(views_path('lead-tab-assigned_users-add'));
			 				}else{
		 						include(views_path('access-denied'));
		 					}

		 					break;
		 				case 'contacts-add':
		 					// code...
		 					if(Auth::access('admin')){
		 						include(views_path('lead-tab-contacts-add'));
			 				}else{
		 						include(views_path('access-denied'));
		 					}

		 					break;
		 					
		 				case 'assigned_users-remove':
		 					// code...
		 					include(views_path('lead-tab-assigned_users-remove'));

		 					break;
		 				case 'contacts-remove':
		 					// code...
		 					if(Auth::access('admin')){
		 						include(views_path('lead-tab-contacts-remove'));
		 					}else{
		 						include(views_path('access-denied'));
		 					}


		 					break;
		 					
		 				case 'contacts-add':
		 					// code...
		 					if(Auth::access('lecturer')){
		 						include(views_path('lead-tab-contacts-add'));
		 					}else{
		 						include(views_path('access-denied'));
		 					}

		 					break;
		 				case 'team-add':
		 					// code...
		 					include(views_path('lead-tab-team-add'));

		 					break;
		 				
		 				default:
		 					// code...
		 					break;
		 			}


		 		?>
		 
		<?php else:?>
			<center><h4>That lead was not found!</h4></center>
		<?php endif;?>

	</div>

<?php $this->view('includes/footer')?>
