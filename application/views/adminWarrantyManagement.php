<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">مدیریت کارت گارنتی های صادرشده</h3>
				</div>

				<!--<a href="<?php echo base_url() . "index.php/UserController/baseProductGroupForm" ?>"
				   class="btn btn-success"
                   style="margin-left:50px;float: left">افزودن دسته جدید</a>
                     -->

				<!-- /.box-header -->
				<div class="box-body">
					<table id="example2" class="table table-bordered table-hover">
						<thead>
						<tr>
							<th>محصول</th>
							<th>نام سرویس کار</th>
                            <th>کد گارانتی</th>
                            <th>تاریخ صدور</th>
                            <th>تاریخ انقضا</th>
                            <th>نام کاربری سایت</th>
                            <th>نام-نام خانوادگی</th>
                            <th>تصویرکارت</th>
                            <th>وضعیت گارانتی</th>



						</tr>
						</thead>
						<tbody>
						<?php foreach ($warrantyAndProductsTitle as $oneWarrantyCard): ?>
							<tr>
								<td><?php echo $oneWarrantyCard['products']['title'] ?></td>
								<td> <?php echo $baseProduct[0]['description'] ?>    </td>
								<td>
									<a href="<? echo base_url() . "index.php/UserController/baseProductsGroupManagement2/"
										. $baseProduct['id'] ?>">زیردسته ها</a></td>

								<td><a href="" class="btn btn-primary">ویرایش</a></td>
								<td><a href="" class="btn btn-danger">حذف</a></td>
							</tr>
						<?php endforeach; ?>
						</tbody>
						<tfoot>
						<tr>
							<th>موتور رندر</th>
							<th>مرورگر</th>
							<th>سیستم عامل</th>
							<th>ورژن</th>
							<th>امتیاز</th>
						</tr>
						</tfoot>
					</table>
				</div>
				<!-- /.box-body -->
			</div>
			<!-- /.box -->


			<!-- /.box-body -->
		</div>
		<!-- /.box -->
	</div>
	<!-- /.col -->
	</div>
	<!-- /.row -->
</section>
<!-- /.content -->
</div>
