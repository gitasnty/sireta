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
				  <h3 class="box-title">Dokumen Unit Kerja</h3>
                  <a href="{{ route('unitkerja.add')}}" style="float:right" class="btn btn-rounded btn-success mb-5">Tambah Unit Kerja</a>
				  <!-- <h6 class="box-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6> -->
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama Unit Kerja</th>
								<th>Penanggung Jawab</th>
								<th>Email</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($allData as $key=>$user)

							<tr>
								<td width=5% >{{ $key+1 }}</td>
								<td width=25%>{{ $user->name }}</td>
								<td width=25%>{{ $user->pj }}</td>
								<td width=25%>{{ $user->email }}</td>
								<td width=15%>
									<a href="{{ route('unitkerja.edit', $user->id) }}" type="button" class="btn btn-info"><i class="fa fa-edit"></i></a>
                                    <a href="{{ route('unitkerja.delete', $user->id) }}" type="button" class="btn btn-danger" id="delete"><i class="fa fa-trash"></i></button>
                            	</td>
							</tr>


							@endforeach
						</tbody>
						<tfoot>
							<tr>
								<th>No</th>
								<th>Nama Unit Kerja</th>
								<th>Penanggung Jawab</th>
								<th>Email</th>
								<th>Action</th>
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
