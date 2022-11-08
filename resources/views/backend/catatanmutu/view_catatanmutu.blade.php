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
                            @foreach($data as $key=>$document)


                            <tr>
								<td>{{ $document->code }}</td>
								<td>{{ $document->name }}</td>
								<td>{{ $document->User->name}}</td>
								{{-- <td><div><input type="file" class="btn btn-app btn-primary "></div></td> --}}
								<td>{{ ucfirst($document->standard) }}</td>
								{{-- <td></td> --}}
								<td>{{ $document->period }}</td>
								<td>
                                    <div class="d-flex justify-content-center">


                                    @if($document->file_path != null)

                                    <a href="{{ route('catatanmutu.download', $document) }}" type="button" class="btn btn-circle btn-info"><i class="fas fa-download"></i></a>
                                    @else
                                        Tidak ada file
                                    @endif
                                </div>

                                    {{-- <a href="{{ route('catatanmutu.download', ['path' => $document->file_path ]) }}" type="button" class="btn btn-circle btn-info">Download</a> --}}
                                </td>
								<td>
                                    <a href="" type="button" class="btn btn-circle btn-primary" data-toggle="modal" data-document-id='{{ $document->id }}' data-target="#uploadDoc-{{ $document->id }}"><i class="glyphicon glyphicon-open"></i></a>
                                    {{-- <a href=# type="button" class="btn btn-dark"><i class="glyphicon glyphicon-download-alt"></i></a> --}}
                                    <a href=# type="button" class="btn btn-circle btn-danger"><i class="fa fa-trash"></i></a>


                                    {{-- <button href="#" type="button" class="btn btn-circle btn-light btn-sm mb-5"><i class="glyphicon glyphicon-download-alt"></button><button href="#" type="button" class="btn btn-circle btn-danger btn-sm mb-5"><i class="glyphicon glyphicon-trash"></button> --}}
                                </td>
								{{-- <td><button href="#" type="button" class="btn btn-circle btn-danger btn-sm mb-5"><i class="glyphicon glyphicon-trash"></button></td> --}}

							</tr>
                            @endforeach
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
   @foreach( $data as $d)
   <div class="modal fade" id="{{ 'uploadDoc-'.$d->id  }}" tabindex="-1" aria-labelledby="uploadDoclabel" aria-hidden="true">
    <div class="modal-dialog">
    <form method="post" enctype="multipart/form-data" action="{{ route('catatanmutu.upload') }}">
        @csrf
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="uploadDoclabel">Upload File</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <input name='id' value="{{ $d->id }}" hidden/>
            <div><input name="file_path" type="file" class="btn btn-app btn-primary "></div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <input type="submit" class="btn btn-primary">
        </div>
      </div>
    </form>
    </div>
  </div>
  @endforeach
  <!-- EndModal -->
<script>
document.getElementById('uploadDoc').addEventListener('show.bs.modal', function (e) {
    var docId = e.relatedTarget.data('document-id');
    console.log(e)
})
</script>

@endsection

