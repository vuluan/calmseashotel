<script type="text/javascript" src="<?=PATH_URL.'assets/js/admin/'?>jquery.slugit.js"></script>
<script type="text/javascript" src="<?=PATH_URL.'assets/js/admin/'?>jquery.number.js"></script>
<script type="text/javascript" src="<?=PATH_URL.'assets/editor/scripts/innovaeditor.js'?>"></script>
<script type="text/javascript" src="<?=PATH_URL.'assets/editor/scripts/innovamanager.js'?>"></script>
<script type="text/javascript">
$(document).ready( function() {
	$("#nameAdmincp").slugIt({
		events: 'keyup blur',
		output: '#slugAdmincp',
		space: '-'
	});

	$('#contentAdmincp').liveEdit({
		height: 350,
		css: ['<?=PATH_URL?>assets/editor/bootstrap/css/bootstrap.min.css', '<?=PATH_URL?>assets/editor/bootstrap/bootstrap_extend.css','<?=PATH_URL?>assets/css/styles.css'] /* Apply bootstrap css into the editing area */,
		fileBrowser: '<?=PATH_URL?>assets/editor/assetmanager/asset.php',
		returnKeyMode: 3,
		groups: [
				["group1", "", ["Bold", "Italic", "Underline", "ForeColor", "RemoveFormat"]],
				["group2", "", ["Bullets", "Numbering", "Indent", "Outdent", "JustifyLeft", "JustifyCenter", "JustifyRight"]],
				["group3", "", ["Paragraph", "FontSize", "FontDialog", "TextDialog"]],
				["group4", "", ["LinkDialog", "ImageDialog", "TableDialog"]],
				["group5", "", ["Undo", "Redo", "FullScreen", "SourceDialog"]],
				["group6", "", ["Left", "Center", "Right"]]
				] /* Toolbar configuration */
	});
	$('#contentAdmincp').data('liveEdit').startedit();
	//english
	$('#content_enAdmincp').liveEdit({
		height: 350,
		css: ['<?=PATH_URL?>assets/editor/bootstrap/css/bootstrap.min.css', '<?=PATH_URL?>assets/editor/bootstrap/bootstrap_extend.css','<?=PATH_URL?>assets/css/styles.css'] /* Apply bootstrap css into the editing area */,
		fileBrowser: '<?=PATH_URL?>assets/editor/assetmanager/asset.php',
		returnKeyMode: 3,
		groups: [
				["group1", "", ["Bold", "Italic", "Underline", "ForeColor", "RemoveFormat"]],
				["group2", "", ["Bullets", "Numbering", "Indent", "Outdent", "JustifyLeft", "JustifyCenter", "JustifyRight"]],
				["group3", "", ["Paragraph", "FontSize", "FontDialog", "TextDialog"]],
				["group4", "", ["LinkDialog", "ImageDialog", "TableDialog"]],
				["group5", "", ["Undo", "Redo", "FullScreen", "SourceDialog"]],
				["group6", "", ["Left", "Center", "Right"]]
				] /* Toolbar configuration */
	});
	$('#content_enAdmincp').data('liveEdit').startedit();
	// $('.formatNumber').number(true,0);
});

function save(){
	var options = {
		beforeSubmit:  showRequest,  // pre-submit callback 
		success:       showResponse  // post-submit callback 
    };
	$('#contentAdmincp').val($('#contentAdmincp').data('liveEdit').getXHTMLBody());
	$('#content_enAdmincp').val($('#content_enAdmincp').data('liveEdit').getXHTMLBody());
	$('#frmManagement').ajaxSubmit(options);
}

function showRequest(formData, jqForm, options) {
	var form = jqForm[0];

	<?php if($id==0){ ?>
        if($('#imageAdmincp').val() == ''){
            $('#txt_error').html('Please choose image.');
            show_perm_denied();
            return false;
        }
    <?php } ?>
	
	if(form.nameAdmincp.value == '' || $('#contentAdmincp').val() == '<br>' || $('#contentAdmincp').val() == '' || ($('#contentAdmincp').val().charCodeAt(0)==10 && isNaN($('#contentAdmincp').val().charCodeAt(1)))){
		$('#txt_error').html('Please enter information.');
		show_perm_denied();
		return false;
	}

	if(form.name_enAdmincp.value == '' || $('#content_enAdmincp').val() == '<br>' || $('#content_enAdmincp').val() == '' || ($('#content_enAdmincp').val().charCodeAt(0)==10 && isNaN($('#content_enAdmincp').val().charCodeAt(1)))){
		$('#txt_error').html('Please enter information.');
		show_perm_denied();
		return false;
	}

	// if(form.seo_nameAdmincp.value == '' || form.seo_keywordsAdmincp.value == '' || form.seo_descriptionAdmincp.value == ''){
	// 	$('#txt_error').html('Please enter SEO information.');
	// 	show_perm_denied();
	// 	return false;
	// }
}

function showResponse(responseText, statusText, xhr, $form) {
	var module_url = '<?=PATH_URL_ADMIN.$module?>';
	responseText = responseText.split(".");
	token_value  = responseText[1];
	$('#csrf_token').val(token_value);
	if(responseText[0]=='success'){
		show_perm_success();
	}

	if(responseText[0]=='redirect'){
		window.location = module_url;
	}
	
	if(responseText[0]=='error-name-exists'){
		$('#txt_error').html('name already exists.');
		show_perm_denied();
		return false;
	}

	if(responseText[0]=='error-slug-exists'){
		$('#txt_error').html('Slug already exists.');
		show_perm_denied();
		return false;
	}

	if(responseText[0]=='permission-denied'){
		$('#txt_error').html('Permission denied.');
		show_perm_denied();
		return false;
	}
}
</script>
<!-- BEGIN PAGE HEADER-->
<h3 class="page-name"><?=$this->session->userdata('Name_Module')?></h3>
<div class="page-bar">
	<ul class="page-breadcrumb">
		<li><i class="fa fa-home"></i><a href="<?=PATH_URL_ADMIN?>">Home</a><i class="fa fa-angle-right"></i></li>
		<li><a href="<?=PATH_URL_ADMIN.$module?>"><?=$this->session->userdata('Name_Module')?></a><i class="fa fa-angle-right"></i></li>
		<li><?php ($this->uri->segment(4)=='') ? print 'Add new' : print 'Edit' ?></li>
	</ul>
</div>
<!-- END PAGE HEADER-->
<!-- BEGIN PAGE CONTENT-->
<div class="row">
	<div class="col-md-12">
		<!-- BEGIN EXAMPLE TABLE PORTLET-->
		<div class="portlet light bordered">
			<div class="portlet-name">
				<div class="caption">
                    <i class="icon-paper-plane font-green-haze"></i>
                    <span class="caption-subject bold font-green-haze uppercase">Form Input</span>
                </div>
			</div>
			
			<div class="portlet-body form">
				<div class="form-body notification" style="display:none">
					<div class="alert alert-success" style="display:none">
						<strong>Success!</strong> The page has been saved.
					</div>
					
					<div class="alert alert-danger" style="display:none">
						<strong>Error!</strong> <span id="txt_error"></span>
					</div>
				</div>
				
				<!-- BEGIN FORM-->
				<form id="frmManagement" action="<?=PATH_URL_ADMIN.$module.'/save/'?>" method="post" enctype="multipart/form-data" class="form-horizontal form-row-seperated">
					<input type="hidden" value="<?=$this->security->get_csrf_hash()?>" id="csrf_token" name="csrf_token" />
					<input type="hidden" value="<?=$id?>" name="hiddenIdAdmincp" />
					<div class="form-body">
						<div class="form-group">
							<label class="control-label col-md-2">Status:</label>
							<div class="col-md-10">
								<label class="radio-inline"><input type="radio" name="statusAdmincp" value="0" <?= isset($result->status) ? $result->status == 0 ? 'checked' : '' : '' ?> > Blocked</label>
								<label class="radio-inline"><input type="radio" name="statusAdmincp" value="1" <?= isset($result->status) ? $result->status == 1 ? 'checked' : '' : 'checked' ?> > Approved</label>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-2">HighLight:</label>
							<div class="col-md-10">
								<label class="radio-inline"><input type="radio" name="highlightAdmincp" value="0" <?= isset($result->status) ? $result->status == 0 ? 'checked' : '' : '' ?> > Blocked</label>
								<label class="radio-inline"><input type="radio" name="highlightAdmincp" value="1" <?= isset($result->status) ? $result->status == 1 ? 'checked' : '' : 'checked' ?> > Approved</label>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-2">Image (370x235): <span class="required" aria-required="true">*</span></label>
							<div class="col-md-3">
								<div class="fileinput fileinput-new" data-provides="fileinput">
									<?php if(isset($result->images)){ if($result->images!=''){ ?>
									<div class="fileinput-new thumbnail" style="width: 150px; height: 150px;">
										<img src="<?=resizeImage(PATH_URL.DIR_UPLOAD_ROOMS.$result->images,150, 150)?>" />
									</div>
									<?php }} ?>
									<div class="input-group input-large">
										<div class="form-control uneditable-input input-fixed input-medium" data-trigger="fileinput">
											<i class="fa fa-file fileinput-exists"></i>&nbsp; <span class="fileinput-filename">
											</span>
										</div>
										<span class="input-group-addon btn default btn-file">
										<span class="fileinput-new">
										Select file </span>
										<span class="fileinput-exists">
										Change </span>
										<input type="file" id="imageAdmincp" name="fileAdmincp[image]">
										</span>
										<a href="javascript:;" class="input-group-addon btn red fileinput-exists" data-dismiss="fileinput">
										Remove </a>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-2">Name: <span class="required" aria-required="true">*</span></label>
							<div class="col-md-4"><input value="<?php if(isset($result->name_vn)) { print $result->name_vn; }else{ print '';} ?>" type="text" name="nameAdmincp" id="nameAdmincp" class="form-control"/></div>
							<!-- english -->
							<label class="control-label col-md-2">Name_en: <span class="required" aria-required="true">*</span></label>
							<div class="col-md-4"><input value="<?php if(isset($result->name_en)) { print $result->name_en; }else{ print '';} ?>" type="text" name="name_enAdmincp" id="name_enAdmincp" class="form-control"/></div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-2">Slug: <span class="required" aria-required="true">*</span></label>
							<div class="col-md-10"><input value="<?php if(isset($result->slug)) { print $result->slug; }else{ print '';} ?>" type="text" name="slugAdmincp" id="slugAdmincp" class="form-control"/></div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-2">Size: <span class="required" aria-required="true">*</span></label>
							<div class="col-md-4"><input value="<?php if(isset($result->size)) { print $result->size; }else{ print '';} ?>" type="text" name="sizeAdmincp" id="sizeAdmincp" class="form-control formatNumber"/></div>
							<label class="control-label col-md-2">Bedding: <span class="required" aria-required="true">*</span></label>
							<div class="col-md-4"><input value="<?php if(isset($result->bedding)) { print $result->bedding; }else{ print '';} ?>" type="text" name="beddingAdmincp" id="beddingAdmincp" class="form-control formatNumber"/></div>
						</div>


						<div class="form-group">
							<label class="control-label col-md-2">View: <span class="required" aria-required="true">*</span></label>
							<div class="col-md-4"><input value="<?php if(isset($result->view)) { print $result->view; }else{ print '';} ?>" type="text" name="viewAdmincp" id="viewAdmincp" class="form-control"/></div>
							<label class="control-label col-md-2">Standard price: <span class="required" aria-required="true">*</span></label>
							<div class="col-md-4"><input value="<?php if(isset($result->price)) { print $result->price; }else{ print '';} ?>" type="text" name="priceAdmincp" id="priceAdmincp" class="form-control formatNumber"/></div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-2">Max Adult: <span class="required" aria-required="true">*</span></label>
							<div class="col-md-4"><input value="<?php if(isset($result->occupancyAdult)) { print $result->occupancyAdult; }else{ print '';} ?>" type="text" name="occupancyAdultAdmincp" id="occupancyAdultAdmincp" class="form-control formatNumber"/></div>
							<label class="control-label col-md-2">Max Child: <span class="required" aria-required="true">*</span></label>
							<div class="col-md-4"><input value="<?php if(isset($result->occupancyChild)) { print $result->occupancyChild; }else{ print '';} ?>" type="text" name="occupancyChildAdmincp" id="occupancyChildAdmincp" class="form-control formatNumber"/></div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-2">Limit number rooms: <span class="required" aria-required="true">*</span></label>
							<div class="col-md-10"><input value="<?php if(isset($result->amount)) { print $result->amount; }else{ print '';} ?>" type="text" name="amountAdmincp" id="amountAdmincp" class="form-control formatNumber"/></div>
						</div>
						<div class="form-group last">
							<label class="control-label col-md-2">Description_vn: <span class="required" aria-required="true">*</span></label>
							<div class="col-md-10"><textarea name="descriptionAdmincp" id="descriptionAdmincp" cols="" rows="5" class="form-control"><?php if(isset($result->description_vn)) { print $result->description_vn; }else{ print '';} ?></textarea></div>
						</div>
						<div class="form-group last">
							<label class="control-label col-md-2">Description_en: <span class="required" aria-required="true">*</span></label>
							<div class="col-md-10"><textarea name="description_enAdmincp" id="description_enAdmincp" cols="" rows="5" class="form-control"><?php if(isset($result->description_en)) { print $result->description_en; }else{ print '';} ?></textarea></div>
						</div>

						<div class="form-group last">
							<label class="control-label col-md-2">Amenities_vn: <span class="required" aria-required="true">*</span></label>
							<div class="col-md-10"><textarea name="contentAdmincp" id="contentAdmincp" cols="" rows="8"><?php if(isset($result->amenities_vn)) { print $result->amenities_vn; }else{ print '';} ?></textarea></div>
						</div>
						<div class="form-group last">
							<label class="control-label col-md-2">Amenities_vn: <span class="required" aria-required="true">*</span></label>
							<div class="col-md-10"><textarea name="content_enAdmincp" id="content_enAdmincp" cols="" rows="8"><?php if(isset($result->amenities_en)) { print $result->amenities_en; }else{ print '';} ?></textarea></div>
						</div>
					</div>
					<div class="form-actions">
						<div class="row">
							<div class="col-md-offset-2 col-md-9">
								<button onclick="save()" type="button" class="btn green"><i class="fa fa-pencil"></i> Save</button>
								<a href="<?=PATH_URL_ADMIN.$module.'/#/back'?>"><button type="button" class="btn default">Cancel</button></a>
							</div>
						</div>
					</div>
				</form>
				<!-- END FORM-->
			</div>
		</div>
		<!-- END EXAMPLE TABLE PORTLET-->
	</div>
</div>
<!-- END PAGE CONTENT-->