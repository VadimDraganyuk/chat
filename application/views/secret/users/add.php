
<div class="page-content">
	<!-- BEGIN PAGE CONTAINER-->
	<div class="container-fluid">
		<!-- BEGIN PAGE HEADER-->
		<div class="row-fluid">
			<div class="span12">
				<!-- BEGIN PAGE TITLE & BREADCRUMB-->
				<h3 class="page-title">Користувачі
					<small>Створення і редагування</small>
				</h3>
				<!-- END PAGE TITLE & BREADCRUMB-->
			</div>
		</div>
		<!-- END PAGE HEADER-->
			<div class="row-fluid">
			<div class="span12">
			<!-- BEGIN SAMPLE FORM PORTLET-->
			<div class="portlet box blue">
			<div class="portlet-title">
				<h4></h4>
				<div class="tools">
				</div>
			</div>
			<div class="portlet-body form">


			<!-- BEGIN FORM-->
			<form action="/secret/user/save<?php echo (isset($users->id)) ? '/' . $users->id : '' ?>" id="form_sample_2" method="post" enctype="multipart/form-data" class="form-horizontal" >
				<?php if(!empty($errors))
				foreach ($errors as $error) {
					print_r('
				<div class="alert alert-error">
					<button class="close" data-dismiss="alert"></button>
					'.$error.'
				</div>');
				}
				?>
				<div class="alert alert-error hide">
					<button class="close" data-dismiss="alert"></button>
					You have some form errors. Please check below.
				</div>
				<div class="alert alert-success hide">
					<button class="close" data-dismiss="alert"></button>
					Your form validation is successful!
				</div>
				<div class="control-group">
					<label class="control-label">Username<span class="required">*</span></label>
					<div class="controls">
						<input value="<?php echo (isset($users->username)) ? $users->username : '' ?>" type="text" name="username" data-required="1" class="span6 m-wrap"/>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label">email<span class="required">*</span></label>
					<div class="controls">
						<input value="<?php echo (isset($users->email)) ? $users->email : '' ?>" type="text" name="email" data-required="1" class="span6 m-wrap"/>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">password<span class="required">*</span></label>
					<div class="controls">
						<input value="<?php echo (isset($users->password)) ? $users->password : '' ?>" type="text" name="password" data-required="1" class="span6 m-wrap"/>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">Image Upload</label>
					<div class="controls">
						<div class="fileupload fileupload-new" data-provides="fileupload">
							<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
								<?php if (isset($users->avatar)) {
								?>
										<img width="200" height="200" src="/content/users_avatar/<?php echo $users->avatar?>">
									<?php
								}else{ ?>
									<img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" />
								<?php }?>
							</div>
							<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
							<div>
                                       <span class="btn btn-file"><span class="fileupload-new">Select image</span>
                                       <span class="fileupload-exists">Change</span>
                                       <input name="avatar" type="file" class="default" /></span>
								<a href="#" class="btn fileupload-exists"   data-dismiss="fileupload">Remove</a>
							</div>
						</div>
						<span class="label label-important">NOTE!</span>
                                 <span>
                                 Attached image thumbnail is
                                 supported in Latest Firefox, Chrome, Opera,
                                 Safari and Internet Explorer 10 only
                                 </span>
					</div>
				</div>

			<div class="form-actions">
				<button type="submit" class="btn blue">Submit</button>
				<button type="button" onclick="history.go(-1)" class="btn">Cancel</button>
			</div>
			</form>
			<!-- END FORM-->



			</div>
			</div>
			<!-- END SAMPLE FORM PORTLET-->
			</div>
			</div>
		<div id="dashboard">
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- END PAGE CONTAINER-->
</div>





