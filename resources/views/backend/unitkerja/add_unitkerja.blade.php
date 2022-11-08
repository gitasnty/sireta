@extends('admin.admin_master')
@section('admin')


<div class="content-wrapper">
	  <div class="container-full">
		<!-- Main content -->
		<section class="content">

		 <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Tambah Unit Kerja</h4>
			  <!-- <h6 class="box-subtitle">Bootstrap Form Validation check the <a class="text-warning" href="http://reactiveraven.github.io/jqBootstrapValidation/">official website </a></h6> -->
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">
					<form method="post" action="{{ route('unitkerja.store') }}">
						@csrf
					  <div class="row">
						<div class="col-6">
							<div class="form-group">
								<h5>Tipe Unit Kerja<span class="text-danger">*</span></h5>
								<div class="controls">
									<select name="usertype" id="usertype" class="form-control">
										<option value="" selected="" disabled="">Pilih Tipe</option>
										<option value="admin">Admin</option>
										<option value="user">Unit Kerja</option>
									</select>
								</div>
							</div>
						</div>
						<div class="col-6">
							<div class="form-group">
								<h5>Nama Unit Kerja<span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="text" name="name" class="form-control" required=""> </div>
							</div>
						</div>
						<div class="col-12">
                            <div class="form-group">
								<h5>Penanggung Jawab<span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="text" name="pj" class="form-control" required=""> </div>
							</div>
						</div>
						<div class="col-6">
                            <div class="form-group">
								<h5>Username (email)<span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="email" name="email" class="form-control" required=""> </div>
							</div>
						</div>
						<div class="col-6">
                            <div class="form-group">
								<h5>Password<span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="password" name="password" class="form-control" required=""> </div>
							</div>
						</div>
					  </div>
						<div class="text-xs-right">
							<input type="submit" class="btn btn-rounded btn-info">
						</div>
					</form>

				</div>
				<!-- /.col -->
			  </div>
			  <!-- /.row -->
			</div>
			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->

		</section>
		<!-- /.content -->
	  </div>
  </div>


@endsection
