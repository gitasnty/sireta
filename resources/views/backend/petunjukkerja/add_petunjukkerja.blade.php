@extends('admin.admin_master')
@section('admin')


<div class="content-wrapper">
	  <div class="container-full">
		<!-- Main content -->
		<section class="content">

		 <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Tambah Dokumen Petunjuk Kerja </h4>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">
					<form method="POST" action="{{ route('petunjukkerja.store') }}">
                        @csrf
					  <div class="row">
						<div class="col-12">
							<div class="form-group">
								<h5>Jenis Dokumen</h5>
								<div class="controls">
									<input type="text" name="doctype" text="Manual Mutu" class="form-control" required data-validation-required-message="This field is required" value="Petunjuk Kerja" disabled="true"></div>
								{{-- <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div> --}}
							</div>
							<div class="form-group">
								<h5>Nomor Dokumen</h5>
								<div class="controls">
									<input type="text" name="code" class="form-control" required data-validation-required-message="This field is required"> </div>
								{{-- <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div> --}}
							</div>
                            <div class="form-group">
								<h5>Nama Dokumen</h5>
								<div class="controls">
									<input type="text" name="name" class="form-control" required data-validation-required-message="This field is required"> </div>
								{{-- <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div> --}}
							</div>
                            <div class="form-group">
                                <h5>Unit Kerja</h5>
                                <div class="controls">
                                    <select name="unitKerja" id="select" required class="form-control">
                                        @foreach($data as $d)
                                        <option name="unitKerja" value={{ $d->id }}>{{ $d->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <h5>Standar</h5>
                                <div class="controls">
                                    <select name="standard" id="select" required class="form-control">

                                        <option value="Standar 1">Standar 1</option>
                                        <option value="Standar 2">Standar 2</option>
                                        <option value="Standar 3">Standar 3</option>
                                        <option value="Standar 4">Standar 4</option>
                                        <option value="Standar 5">Standar 5</option>
                                        <option value="Standar 6">Standar 6</option>
                                        <option value="Standar 7">Standar 7</option>
                                        <option value="Standar 8">Standar 8</option>

                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
								<h5>Periode</h5>
								<div class="controls">
									<input type="year" name="period" class="form-control" required data-validation-required-message="This field is required"> </div>
								{{-- <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div> --}}
							</div>

						</div>
					  </div>
						<div class="text-xs-right">
							<button type="submit" class="btn btn-rounded btn-info">Submit</button>
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
