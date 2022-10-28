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
				  <h3 class="box-title">Dokumen Catatan Mutu</h3>
                  <a href="{{ route('catatanmutu.add')}}" style="float:right" class="btn btn-rounded btn-success mb-5">Tambah Dokumen</a>
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
								<th>Standar</th>
								<th>Periode</th>
								<th>File</th>
								<th>Action</th>
								{{-- <th>Delete</th> --}}
							</tr>
						</thead>
						<tbody>
							{{-- @foreach($allData as $key=>$user)

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


							@endforeach --}}
							<tr>
								<td>C10982</td>
								<td>Prestasi Akademik</td>
								<td>WKS 1</td>
								{{-- <td><div><input type="file" class="btn btn-app btn-primary "></div></td> --}}
								<td>standar 1</td>
								<td>2021</td>
								<td>
                                    {{-- <a href="" type="button" class="btn btn-circle btn-info">View</a> --}}
                                </td>
								<td>
                                    <a href=""type="button" class="btn btn-circle btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="glyphicon glyphicon-open"></i></a>
                                    {{-- <a href=# type="button" class="btn btn-dark"><i class="glyphicon glyphicon-download-alt"></i></a> --}}
                                    <a href=# type="button" class="btn btn-circle btn-danger"><i class="fa fa-trash"></i></a>


                                    {{-- <button href="#" type="button" class="btn btn-circle btn-light btn-sm mb-5"><i class="glyphicon glyphicon-download-alt"></button><button href="#" type="button" class="btn btn-circle btn-danger btn-sm mb-5"><i class="glyphicon glyphicon-trash"></button> --}}
                                </td>
								{{-- <td><button href="#" type="button" class="btn btn-circle btn-danger btn-sm mb-5"><i class="glyphicon glyphicon-trash"></button></td> --}}

							</tr>
						</tbody>

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
          <!-- Button trigger modal -->

		</section>
		<!-- /.content -->


	  </div>
  </div>

   <!-- Modal -->
   <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div><input type="file" class="btn btn-app btn-primary "></div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
  <!-- EndModal -->


@endsection


