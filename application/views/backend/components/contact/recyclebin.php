<div class="content-wrapper">
	<section class="content-header">
		<h1><i class="glyphicon glyphicon-text-background"></i> Thùng rác mail</h1>
		<div class="breadcrumb">
			<a class="btn btn-primary btn-sm" href="admin/contact" role="button">
				<span class="glyphicon glyphicon-remove do_nos"></span> Thoát
			</a>
		</div>
	</section>
	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box" id="view">
					<div class="box-header with-border">
						<!-- Search Limit -->
						<section class="content-search">
							<div class="form-inline">
								<div class="input-group">
									<span class="input-group-addon" id="basic-addon1">Tìm kiếm</span>
									<input type="text" name="search" onkeypress="FEnter(event);" id="search" class="form-control">
									<span class="input-group-addon"><i onclick="FChange();" class="glyphicon glyphicon-search"></i></span>
								</div>
								<div class="input-group">
									<span class="input-group-addon" id="basic-addon1">Hiển thị</span>
									<select name="limit" id="limit" onchange="FChange();" class="form-control">
										<option value="10">10</option>
										<option value="20">20</option>
										<option value="30">30</option>
										<option value="40">40</option>
										<option value="50">50</option>
										<option value="100">100</option>
										<option value="all">Tất cả</option>
									</select>
								</div>
							</div>
						</section>
						<!--./Search Limit -->
						<!-- <div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
						</div> -->
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<?php  if($this->session->flashdata('success')):?>
	                        <div class="row">
	                            <div class="alert alert-success">
	                                <?php echo $this->session->flashdata('success'); ?>
	                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	                            </div>
	                        </div>
	                    <?php  endif;?>
						<div class="row" style='padding:0px; margin:0px;'>
							<!--ND-->
							<div class="table-responsive">
								<table class="table table-hover table-bordered">
									<thead>
										<tr>
											<th class="text-center" style="width:20px">ID</th>
											<th>Tên bài viết</th>
											<th>nội dụng</th>
											<th>Họ tên</th>
											<th class="text-center" style="width:90px">Khôi phục</th>
											<th class="text-center" style="width:90px">Xóa VV</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($list as $val): ?>
										<tr>
											<td class="text-center"><?php echo $val['id'] ?></td>
											<td>
												<a href="<?php echo base_url() ?>admin/contact/update/<?php echo $val['id'] ?>"><?php echo $val['tieude'] ?></a>	
											</td>
											<td><?php echo $val['content'] ?></td>
											<td>
												<a href="<?php echo base_url() ?>admin/contact/update/<?php echo $val['id'] ?>"><?php echo $val['title'] ?></a>	
											</td>s
											<td class="text-center">
												<a class="btn btn-success btn-xs" href="admin/contact/restore/<?php echo $val['id'] ?>" role = "button">
													<span class="glyphicon glyphicon-edit"></span>Khôi phục
												</a>
											</td>
											<?php  
												$cpnDel='';
												if($user['role']==1){
													$cpnDel.='
														<td class="text-center">
															<a class="btn btn-danger btn-xs" href="admin/content/delete/'.$val['id'].'" role = "button">
																<span class="glyphicon glyphicon-trash"></span>Xóa VV
															</a>
														</td>
													';

												}else{
													$cpnDel.='
														<td class="text-center">
															<p class="fa fa-lock" style="color:red"> Không đủ quyền</p>
														</td>';
												}
												echo $cpnDel;
											?>
										</tr>
									<?php endforeach; ?>
									</tbody>
								</table>
							</div>
							<div class="row">
								<div class="col-md-12 text-center">
									<ul class="pagination">
										<?php echo $strphantrang ?>
									</ul>
								</div>
							</div>
							<!-- /.ND -->
						</div>
					</div><!-- ./box-body -->
				</div><!-- /.box -->
		</div>
		<!-- /.col -->
	  </div>
	  <!-- /.row -->
	</section>
<!-- /.content -->
</div><!-- /.content-wrapper -->