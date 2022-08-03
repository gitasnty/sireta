@extends('admin.admin_master')
@section('admin')


<div class="content-wrapper">
	  <div class="container-full">
		<!-- Main content -->
		<section class="content">

		 <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Tambah Dokumen Manual Mutu </h4>
			  <!-- <h6 class="box-subtitle">Bootstrap Form Validation check the <a class="text-warning" href="http://reactiveraven.github.io/jqBootstrapValidation/">official website </a></h6> -->
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">
					<form novalidate>
					  <div class="row">
						<div class="col-12">						
							<div class="form-group">
								<h5>Jenis Dokumen<span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="text" name="text" text="Manual Mutu" class="form-control" required data-validation-required-message="This field is required"></div>
								<div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>
							</div>
							<div class="form-group">
								<h5>Nomor Dokumen<span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="text" name="text" class="form-control" required data-validation-required-message="This field is required"> </div>
								<div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>
							</div>
                            <div class="form-group">
								<h5>Nama Dokumen<span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="text" name="text" class="form-control" required data-validation-required-message="This field is required"> </div>
								<div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>
							</div>
                            <div class="form-group">
                                <h5>Unit Kerja<span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <select name="select" id="select" required class="form-control">
                                        <option value="">Pilihan Unit Kerja</option>
                                        <option value="1">Unit Kerja 1</option>
                                        <option value="2">Unit Kerja  2</option>
                                        <option value="3">Unit Kerja  3</option>
                                        <option value="4">Unit Kerja  4</option>
                                        <option value="5">Unit Kerja  5</option>
                                        <option value="6">Unit Kerja  6</option>
                                        <option value="7">Unit Kerja  7</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <h5>Standar <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <select name="select" id="select" required class="form-control">
                                        <option value="">Pilihan Standar </option>
                                        <option value="1">Standar 1</option>
                                        <option value="2">Standar 2</option>
                                        <option value="3">Standar 3</option>
                                        <option value="4">Standar 4</option>
                                        <option value="5">Standar 5</option>
                                        <option value="6">Standar 6</option>
                                        <option value="7">Standar 7</option>
                                        <option value="8">Standar </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
								<h5>Periode<span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="text" name="text" class="form-control" required data-validation-required-message="This field is required"> </div>
								<div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>
							</div>
                            <div class="form-group">
                                <h5>Uplaod<span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="file" name="file" class="form-control" required> </div>
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