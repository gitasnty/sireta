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
				  <h3 class="box-title">Dokumen Lain Lain</h3>
                  <a href="{{ route('lainlain.add')}}" style="float:right" class="btn btn-rounded btn-success mb-5">Tambah Dokumen</a>
				  <!-- <h6 class="box-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6> -->
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
						<thead>
							<tr>
								<th>Nomor Dokumen</th>
								<th>Nama Dokumen</th>
								<th>Unit Kerja</th>
								<th>Upload</th>
								<th>Standar</th>
								<th>Periode</th>
								<th>Delete</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Tiger Nixon</td>
								<td>System Architect</td>
								<td>Edinburgh</td>
								<td><div><input type="file" class="btn btn-app btn-primary"></div></td>
								<td>done</td>
								<td>2011/04/25</td>
								<td><button href="#" type="button" class="btn btn-social-icon btn-google">Delete</button></td>
							</tr>
							<tr>
								<td>Tiger Nixon</td>
								<td>System Architect</td>
								<td>adinburgh</td>
								<td><div><input type="file" class="btn btn-app btn-primary "></div></td>
								<td>done</td>
								<td>4011/04/25</td>
								<td><button href="#" type="button" class="btn btn-social-icon btn-google">Delete</button></td>
							</tr>
						</tbody>			  
						<tfoot>
							<tr>
                                <th>Nomor Dokumen</th>
								<th>Nama Dokumen</th>
								<th>Unit Kerja</th>
								<th>Upload</th>
								<th>Standar</th>
								<th>Periode</th>
								<th>Delete</th>
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