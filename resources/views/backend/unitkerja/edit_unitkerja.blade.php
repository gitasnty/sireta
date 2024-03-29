@extends('admin.admin_master')
@section('admin')


<div class="content-wrapper">
	  <div class="container-full">
		<!-- Main content -->
		<section class="content">

		 <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Edit Unit Kerja</h4>
			  <!-- <h6 class="box-subtitle">Bootstrap Form Validation check the <a class="text-warning" href="http://reactiveraven.github.io/jqBootstrapValidation/">official website </a></h6> -->
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">
					<form method="post" action="{{ route('unitkerja.update', $editData->id) }}">
						@csrf
					  <div class="row">
						<div class="col-6">
							<div class="form-group">
								<h5>Tipe Unit Kerja<span class="text-danger">*</span></h5>
								<div class="controls">
									<select name="usertype" id="usertype" class="form-control">
										<option value="" selected="" disabled="">Pilih Tipe</option>
										<option value="admin" {{ ($editData->usertype == "admin" ? "selected" : "") }}>Admin</option>
										<option value="user" {{ ($editData->usertype == "user" ? "selected" : "") }}>Unit Kerja</option>
									</select>
								</div>
							</div>
						</div>
						<div class="col-6">
							<div class="form-group">
								<h5>Nama Unit Kerja<span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="text" name="name" class="form-control" value="{{ $editData->name }}"> </div>
							</div>
						</div>
						<div class="col-6">
                            <div class="form-group">
								<h5>Penanggung Jawab<span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="text" name="pj" class="form-control" value="{{ $editData->pj }}"> </div>
							</div>
						</div>
						<div class="col-6">
                            <div class="form-group">
								<h5>Username<span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="text" name="email" class="form-control" value="{{ $editData->email }}"> </div>
							</div>
						</div>
						{{-- <div class="col-12">
                            <div class="form-group">
								<h5>New Password<span class="text-danger"></span></h5>
								<div class="controls">
									<input type="password" name="password" class="form-control" value="" placeholder="tidak perlu diisi bila tidak ingin mengubah password"> </div>
							</div>
						</div> --}}
                    </div>
                        <div>

                            <a href="{{ route('unitkerja.editPass', $editData->id) }}" style="float:right" class="text-info">Ganti Password</a>
                            
                        </div>
						<div class="text-xs-right">
							<input type="submit" class="btn btn-rounded btn-info" value="Update">
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
