@extends('admin.admin_master')
@section('admin')

<div class="content-wrapper">
	  <div class="container-full">

		<!-- Main content -->
		<section class="content">
		  <div class="row">
			<div class="col-12">
			  <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Program Kerja</h3>
				  <!-- <h6 class="box-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6> -->
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
						<thead>
							<tr>
								<th>Kode Unit Kerja</th>
								<th>Nama Unit Kerja</th>
								<th>Upload</th>
								<th>Periode</th>
								<th>Edit/Delete</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>uk_03</td>
								<td>WK 2</td>
								<td><div><input type="file" class="btn btn-app btn-primary"></div></td>
								<td>2022</td>
								<td>
									<button href="#" type="button" class="btn btn-info"><i class="fa fa-edit"></i></button>
                                    <button href="#" type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                            </td>
							</tr>
							<tr>
								<td>uk_04</td>
								<td>WK 3</td>
								<td><div><input type="file" class="btn btn-app btn-primary"></div></td>
								<td>2022</td>
								<td>
                                    <button href="#" type="button" class="btn btn-info"><i class="fa fa-edit"></i></button>
                                    <button href="#" type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                            </td>
							</tr>
						</tbody>			  
						<tfoot>
							<tr>
                                <th>Kode Unit Kerja</th>
								<th>Nama Unit Kerja</th>
								<th>Upload</th>
								<th>Periode</th>
								<th>Edit/Delete</th>
							</tr>
						</tfoot>

					</table>
					<div>

			
		</div>
					</div>              
				</div>
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
  </div>


@endsection