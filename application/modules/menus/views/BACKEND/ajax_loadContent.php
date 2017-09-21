<script type="text/javascript">token_value = '<?=$this->security->get_csrf_hash()?>';</script>
<div class="dataTables_wrapper no-footer">
	
	<?php if($result){ ?>
	<div class="row">
		<div class="col-md-5 col-sm-12">
			<?php if(($start+$per_page)<$total){ ?>
			<div class="dataTables_info" style="padding-left:0;margin-top:3px">Showing <?=$start+1?> to <?=$start+$per_page?> of <?=$total?> entries</div>
			<?php }else{ ?>
			<div class="dataTables_info" style="padding-left:0;margin-top:3px">Showing <?=$start+1?> to <?=$total?> of <?=$total?> entries</div>
			<?php } ?>
		</div>

		<div class="col-md-7 col-sm-12">
			<div class="dataTables_paginate paging_bootstrap_full_number" style="margin-top:3px">
				<ul class="pagination" style="visibility: visible;">
					<?=$this->adminpagination->create_links();?>
				</ul>
			</div>
		</div>
	</div>
	<?php } ?>
	<div class="table-scrollable">
		<table class="table table-striped table-bordered table-hover dataTable no-footer">
			<thead>
				<tr role="row">
					<th class="table-checkbox sorting_disabled" width="25"><input type="checkbox" id="selectAllItems" onclick="selectAllItems(<?=count($result)?>)"></th>
					<th class="center sorting_disabled" width="35">No.</th>
					<th class="sorting" onclick="sort('name')" id="name">Name</th>
					<th class="sorting" onclick="sort('url')" id="url">Url</th>
					<th class="sorting" onclick="sort('order')" id="order">Order</th>
					<th class="sorting" onclick="sort('parent_name')" id="parent_name">Parent</th>
					<th class="center sorting" width="60" onclick="sort('status')" id="status">Status</th>
					<th class="center sorting" width="80" onclick="sort('created')" id="created">Created</th>
				</tr>
			</thead>
			<tbody>
				<?php
					if($result){
						$i=0;
						foreach($result as $k=>$v){
							if($v->delete==0){
				?>
				<tr class="item_row<?=$i?> gradeX <?php ($k%2==0) ? print 'odd' : print 'even' ?>" role="row">
					<td><input type="checkbox" id="item<?=$i?>" onclick="selectItem(<?=$i?>)" value="<?=$v->id?>"></td>
					<td class="center"><?=$k+1+$start?></td>
					<td><a href="<?=PATH_URL_ADMIN.$module.'/update/'.$v->id?>"><?= cutText($v->name, 20); ?></a></td>
					<td><a href="<?=PATH_URL_ADMIN.$module.'/update/'.$v->id?>"><?= cutText($v->url, 20); ?></a></td>
					<td><a href="<?=PATH_URL_ADMIN.$module.'/update/'.$v->id?>"><?= $v->order; ?></a></td>
					<td><a href="<?=PATH_URL_ADMIN.$module.'/update/'.$v->id?>"><?= cutText($v->parent_name, 20); ?></a></td>
					<td class="center" id="loadStatusID_<?=$v->id?>"><a class="no_underline" href="javascript:void(0)" onclick="updateStatus(<?=$v->id?>,<?=$v->status?>,'<?=$module?>')"><?php ($v->status==0) ? print '<span class="label label-sm label-default status-blocked">Blocked</span>' : print '<span class="label label-sm label-success status-approved">Approved</span>' ?></a></td>
					<td class="center"><?=date('Y-m-d H:i:s',strtotime($v->created))?></td>
				</tr>
				<?php $i++;}
				else{?>
					<tr style="background:#c6c6c6;" class="item_row<?=$i?> gradeX" role="row">
						<td><input type="checkbox" id="item<?=$i?>" onclick="selectItem(<?=$i?>)" value="<?=$v->id?>"></td>
						<td class="center"><?=$k+1+$start?></td>
						<td><?= cutText($v->name, 20); ?></td>
						<td><?= cutText($v->url, 20); ?></td>
						<td><?= $v->order; ?></td>
						<td><?= cutText($v->parent_name, 20); ?></td>
						<td class="center" id="loadStatusID_<?=$v->id?>"><span class="label label-sm label-default status-deleted">Deleted</span></td>
						<td class="center"><?=date('Y-m-d H:i:s',strtotime($v->created))?></td>
					</tr>
				<?php $i++;}
				}}else{ ?>
				<tr class="gradeX odd" role="row">
					<td class="center no-record" colspan="20">No record</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>

	<?php if($result){ ?>
	<div class="row">
		<div class="col-md-5 col-sm-12">
			<?php if(($start+$per_page)<$total){ ?>
			<div class="dataTables_info" style="padding-left:0;margin-top:3px">Showing <?=$start+1?> to <?=$start+$per_page?> of <?=$total?> entries</div>
			<?php }else{ ?>
			<div class="dataTables_info" style="padding-left:0;margin-top:3px">Showing <?=$start+1?> to <?=$total?> of <?=$total?> entries</div>
			<?php } ?>
		</div>

		<div class="col-md-7 col-sm-12">
			<div class="dataTables_paginate paging_bootstrap_full_number" style="margin-top:3px">
				<ul class="pagination" style="visibility: visible;">
					<?=$this->adminpagination->create_links();?>
				</ul>
			</div>
		</div>
	</div>
	<?php } ?>
</div>