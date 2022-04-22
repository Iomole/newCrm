<?php $this->view('includes/header')?>
<?php $this->view('includes/nav')?>
	
	<div class="container-fluid p-4 shadow mx-auto" style="max-width: 1500px;">
		<?php $this->view('includes/crumbs',['crumbs'=>$crumbs])?>

		
 <form method="post">


		<div class="row">



				<div class="col-sm-4 col-md-3">
			
				<h3 class="text-center"><a href="<?=ROOT?>/leads">Leads</a> Create </h3>
				<br>

					<?php if(count($errors) > 0):?>
				<div class="alert alert-warning alert-dismissible fade show p-1" role="alert">
				  <strong>Errors:</strong>
				   <?php foreach($errors as $error):?>
				  	<br><?=$error?>
				  <?php endforeach;?>
				  <span  type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </span>
				</div>
				<?php endif;?>


				<div class="text-center">
						<input class="btn btn-primary float-end" type="submit" value="Create">
					</a>
					<a href="<?=ROOT?>/accounts">
						<button type="button" class="btn-sm btn btn-danger">Cancel</button>
					</a>
				</div>
				
			</div>


			<div class="col-sm-8 col-md-9 bg-light p-4">
				

				<table class="table">

							<tr>

								<td><label>Name*</label>
										<div class="input-group">
									
   										 <select data-name="salutationName" class="form-control">
           								 <option value=""></option><option value="Mr.">Mr.</option><option value="Ms.">Ms.</option><option value="Mrs.">Mrs.</option><option value="Dr.">Dr.</option>
       									 </select>
									<input class="form-control form-control-lg" value="<?=get_var('firstname')?>" type="text" name="firstname" placeholder="Firtname" aria-label=".form-control-lg example">
									<input class="form-control form-control-lg" value="<?=get_var('lastname')?>" type="text" name="lastname" placeholder="Lastname" aria-label=".form-control-lg example">
									</div>
									
									
								</td>

								<td><label>Account</label>
									<input class="form-control form-control-lg" value="<?=get_var('account')?>" type="text" name="account"
							</tr>

							<tr></tr>

							<tr>


								<td><label>Email</label>
									<input class="form-control form-control-lg" value="<?=get_var('email')?>" type="text" name="email" placeholder="@" aria-label=".form-control-lg example">
									
								</td>


								<td><label>Phone</label>
									
									<input class="form-control form-control-lg" value="<?=get_var('phone')?>" type="text" name="phone" placeholder="" aria-label=".form-control-lg example">
								</td>
							</tr>



							<tr>


								<td><label>Title</label>
									<input class="form-control form-control-lg" value="<?=get_var('tile')?>" type="text" name="title" placeholder="" aria-label=".form-control-lg example">
									
								</td>


								<td><label>Website</label>
									
									<input class="form-control form-control-lg" value="<?=get_var('website')?>" type="text" name="website" placeholder="" aria-label=".form-control-md example">
								</td>
							</tr>


							<tr>

								<td><label>Address</label>
									<input class="form-control form-control-lg" value="<?=get_var('b_address')?>" type="text" name="b_address" placeholder="Street" aria-label=".form-control-lg example">
									<div class="input-group">
									<input class="form-control form-control-lg" value="<?=get_var('b_city')?>" type="text" name="b_city" placeholder="city" aria-label=".form-control-lg example">
									<input class="form-control form-control-lg" value="<?=get_var('b_state')?>" type="text" name="b_state" placeholder="state" aria-label=".form-control-lg example">
									<input class="form-control form-control-lg" value="<?=get_var('b_pcode')?>" type="text" name="b_pcode" placeholder="postal code" aria-label=".form-control-lg example">
									</div>
									<input class="form-control form-control-lg" value="<?=get_var('b_country')?>" type="text" name="b_country" placeholder="country" aria-label=".form-control-lg example">
									
								</td>

								
							</tr>


							<tr>

								<td><label>Status</label>
									<select class="form-select form-select-lg" aria-label="Default select example" name="type">
	 										 <option <?=get_select('status','')?> selected></option>
	 										 <option <?=get_select('status','New')?>  value="New">New</option>
	 										 <option <?=get_select('status','Assigned')?>  value="Assigned">Assigned</option>
	 										 <option <?=get_select('status','In Process')?>  value="In Process">In Process</option>
	 										 <option <?=get_select('status','Converted')?>  value="Converted">Converted</option>
	 										 <option <?=get_select('status','Recycled')?>  value="Recycled">Recycled</option>
	 										 <option <?=get_select('status','Dead')?>  value="Dead">Dead</option>
								    </select>
									
								</td>

								<td><label>Source</label>
									<select class="form-select form-select-lg" aria-label="Default select example" name="type">
	 										 <option <?=get_select('Source','None')?> value="None">None</option>
	 										 <option <?=get_select('Source','Call')?>  value="Call">Call</option>
	 										 <option <?=get_select('Source','Email')?>  value="Email">Email</option>
	 										 <option <?=get_select('Source','Existing Customer')?>  value="Existing Customer">Existing Customer</option>
	 										 <option <?=get_select('Source','Partner')?>  value="Partner">Partner</option>
	 										 <option <?=get_select('Source','Public Relations')?>  value="Public Relations">Public Relations</option>
	 										 <option <?=get_select('Source','Web Site')?>  value="Web Site">Web Site</option>
	 										 <option <?=get_select('Source','Other')?>  value="Other">Other</option>
								    </select>
									
								</td>

								<td><label>Industry</label>
									<select class="form-select form-select-lg" aria-label="Default select example" name="industry">
	 										 <option <?=get_select('industry','')?>  selected></option>
	 										 <option <?=get_select('industry','Advertising')?>  value="Advertising">Advertising</option>
	 										 <option <?=get_select('industry','Aerospace')?>  value="Aerospace">Aerospace</option>
	 										 <option <?=get_select('industry','Agriculture')?>  value="Agriculture">Agriculture</option>
	 										 <option <?=get_select('industry','Apparel')?>  value="Apparel &amp; Accessories">Apparel &amp; Accessories</option>
	 										 <option <?=get_select('industry','Architecture')?>  value="Architecture">Architecture</option>
	 										 <option <?=get_select('industry','Automotive')?>  value="Automotive">Automotive</option>
	 										 <option <?=get_select('industry','Banking')?>  value="Banking">Banking</option>
	 										 <option <?=get_select('industry','Biotechnology')?>  value="Biotechnology">Biotechnology</option>
	 										 <option <?=get_select('industry','Building')?>  value="Building Materials &amp; Equipment">Building Materials &amp; Equipment</option>
	 										 <option <?=get_select('industry','Chemical')?>  value="Chemical">Chemical</option>
	 										 <option <?=get_select('industry','Computer')?>  value="Computer">Computer</option>
	 										 <option <?=get_select('industry','Construction')?>  value="Construction">Construction</option>
	 										 <option <?=get_select('industry','Consulting')?>  value="Consulting">Consulting</option>
	 										 <option <?=get_select('industry','Creative')?>  value="Creative">Creative</option>
	 										 <option <?=get_select('industry','Culture')?>  value="Culture">Culture</option>
	 										 <option <?=get_select('industry','Defense')?>  value="Defense">Defense</option>
	 										 <option <?=get_select('industry','Education')?>  value="Education">Education</option>
	 										 <option <?=get_select('industry','Electric Power')?>  value="Electric Power">Electric Power</option>
	 										 <option <?=get_select('industry','Electronics')?>  value="Electronics">Electronics</option>
	 										 <option <?=get_select('industry','Energy')?>  value="Energy">Energy</option>
	 										 <option <?=get_select('industry','Entertainment')?>  value="Entertainment &amp; Leisure">Entertainment &amp; Leisure</option>
	 										 <option <?=get_select('industry','Finance')?>  value="Finance">Finance</option>
	 										 <option <?=get_select('industry','Beverage')?>  value="Food &amp; Beverage">Food &amp; Beverage</option>
	 										 <option <?=get_select('industry','Grocery')?>  value="Grocery">Grocery</option>
	 										 <option <?=get_select('industry','Healthcare')?>  value="Healthcare">Healthcare</option>
	 										 <option <?=get_select('industry','Hospitality')?>  value="Hospitality">Hospitality</option>
	 										 <option <?=get_select('industry','Insurance')?>  value="Insurance">Insurance</option>
	 										 <option <?=get_select('industry','Legal')?>  value="Legal">Legal</option>
	 										 <option <?=get_select('industry','Manufacturing')?>  value="Manufacturing">Manufacturing</option>
	 										 <option <?=get_select('industry','Marketing')?>  value="Marketing">Marketing</option>
	 										 <option <?=get_select('industry','Mass Media')?>  value="Mass Media">Mass Media</option>
	 										 <option <?=get_select('industry','Mining')?>  value="Mining">Mining</option>
	 										 <option <?=get_select('industry','Music')?>  value="Music">Music</option>
	 										 <option <?=get_select('industry','Petroleum')?>  value="Petroleum">Petroleum</option>
	 										 <option <?=get_select('industry','Publishing')?>  value="Publishing">Publishing</option>
	 										 <option <?=get_select('industry','Real Estate')?>  value="Real Estate">Real Estate</option>
	 										 <option <?=get_select('industry','Retail')?>  value="Retail">Retail</option>
	 										 <option <?=get_select('industry','Service')?>  value="Service">Service</option>
	 										 <option <?=get_select('industry','Shipping')?>  value="Shipping">Shipping</option>
	 										 <option <?=get_select('industry','Software')?>  value="Software">Software</option>
	 										 <option <?=get_select('industry','Sports')?>  value="Sports">Sports</option>
	 										 <option <?=get_select('industry','Support')?>  value="Support">Support</option>
	 										 <option <?=get_select('industry','Technology')?>  value="Technology">Technology</option>
	 										 <option <?=get_select('industry','Telecommunications')?>  value="Telecommunications">Telecommunications</option>
	 										 <option <?=get_select('industry','Television')?>  value="Television">Television</option>
	 										 <option <?=get_select('industry','Testing, Inspection & Certification')?>  value="Testing, Inspection &amp; Certification">Testing, Inspection &amp; Certification</option>
	 										 <option <?=get_select('industry','Transportation')?>  value="Transportation">Transportation</option>
	 										 <option <?=get_select('industry','Travel')?>  value="Travel">Travel</option>
	 										 <option <?=get_select('industry','Venture Capital')?>  value="Venture Capital">Venture Capital</option>
	 										 <option <?=get_select('industry','Water')?>  value="Water">Water</option>
	 										 <option <?=get_select('industry','Wholesale')?>  value="Wholesale">Wholesale</option>
								    </select>

								</td>
							</tr>


							<tr>
							<td>
							  	<div class="cell form-group col-sm-6 col-md-12" data-name="assignedUser">
        						<label class="control-label" data-name="assignedUser">
            						<span class="label-text">Assigned User</span>
      						  </label>
       						 <div class="field" data-name="assignedUser">
       						 <div class="input-group">
   						 <select class="form-select form-select-lg" aria-label="Default select example" name="assigned_userId">
	 										 <option <?=get_select('assigned_userId','')?>   value="<?=$_SESSION['USER']->user_id ?>"><?=$_SESSION['USER']->firstname ?> <?=$_SESSION['USER']->lastname ?></option>
	 										 
	 										 <?php foreach($rows2 as $output):?>
											 <option <?=get_select('assigned_userId','staff.staff')?> value="<?=$output->user_id?>"><?=$output->firstname ?>  <?=$output->lastname ?></option>
											 <?php endforeach;?>
								    </select>

      		  
 				   </span>
						</div>
						

        						</div>
   						 </div>
									
								</td>
								<td><div class="cell form-group col-sm-6 col-md-12" data-name="teams">
                                    <label class="control-label" data-name="teams">
            						<span class="label-text">Teams</span>
       								 </label>
       								 <div class="field" data-name="teams">
        							<div class="link-container list-group"></div>

										<div class="input-group add-team">
   										 <select class="form-select form-select-lg" aria-label="Default select example" name="team">
	 										 <option <?=get_select('team','')?> selected></option>
	 										 <option <?=get_select('team','Sales')?> value="Sales">Sales</option>
	 										 <option <?=get_select('team','Presales')?> value="Presales">Presales</option>
	 										 <option <?=get_select('team','Admin')?> value="Admin">Admin</option>
	 										 <option <?=get_select('team','accountant')?> value="Accountant">Accountant</option>
	 										 
								   	 </select>

   										 </span>
										</div></td>

										<td><div class=" form-control col-sm-6 form-group" data-name="opportunityAmount">
                       						 <label class="control-label" data-name="opportunityAmount"><span class="label-text">Opportunity Amount</span></label>
                    					    <div class="field" data-name="opportunityAmount"><div class="input-group">
   											 <input type="text" class="main-element form-control" data-name="opportunityAmount" value="" autocomplete="espo-opportunityAmount" pattern="[\-]?[0-9,.]*">
   											 <span class="input-group-btn">
       										 <select data-name="opportunityAmountCurrency" class="form-control">
            								<option value="USD" selected="">USD</option><option value="NGN">NGN</option>
      								  </select>
   							 </span>
							</div>
							</div>
                    </div></td>

							</tr>


						</table>

						<div class="cell col-sm-12 form-group" data-name="description">
                                <label class="control-label" data-name="description"><span class="label-text" >Description</span></label>
                                <div class="field" data-name="description">
								<textarea class="main-element form-control auto-height" value="<?=get_var('description')?> data-name="description" rows="2" autocomplete="espo-description" name="description"></textarea>
							  </div>

        </div>
    </div>

			</div>


		</div>
					
		</form>	

	
	</div>
 
<?php $this->view('includes/footer')?>