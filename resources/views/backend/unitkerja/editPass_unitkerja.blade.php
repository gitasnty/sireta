@extends('admin.admin_master')
@section('admin')


<div class="content-wrapper">
	  <div class="container-full">
		<!-- Main content -->
		<section class="content">

		 <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Ganti Password Unit Kerja</h4>
			  <!-- <h6 class="box-subtitle">Bootstrap Form Validation check the <a class="text-warning" href="http://reactiveraven.github.io/jqBootstrapValidation/">official website </a></h6> -->
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">
					<form method="post" action="{{ route('unitkerja.updatePass', $editPass->id)}}">
					{{-- <form method="post" action=""> --}}
						@csrf
					  <div class="row">
						<div class="col-12">
							<div class="form-group">
								<h5>Nama Unit Kerja<span class="text-danger">*</span></h5>
								<div class="controls">
                                    <select name="unitKerja" id="select" required class="form-control">
                                        {{-- @foreach($data as $d) --}}

                                        {{-- <option name="unitKerja" value={{ $d->id }}>{{ $d->name }}</option> --}}
                                        <option name="unitKerja" value={{ $editPass->name }}>{{ $editPass->name }}</option>
                                        {{-- @endforeach --}}
                                    </select>
									{{-- <input type="text" name="name" class="form-control" value="{{ $editData->name }}"> --}}
                                </div>
							</div>
						</div>
						<div class="col-12">
                            <div class="form-group">
								<h5>New Password<span class="text-danger"></span></h5>
								<div class="controls">
									<input type="password" name="password" class="form-control" required="">
                                </div>
							</div>
						</div>
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
