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
				  <h3 class="box-title">Dokumen Manual Mutu</h3>
                  @if(auth()->user()->usertype == "admin")
                    <a href="{{ route('manualmutu.add')}}" style="float:right" class="btn btn-rounded btn-success mb-5">Tambah Dokumen</a>
                  @endif
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
                        @if(auth()->user()->usertype == "admin")
					  <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                        @endif
                        @if(auth()->user()->usertype == "user")
					  <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                        @endif
                        @if(auth()->user()->usertype == "guest")
                            <table id="example1" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                        @endif
						<thead style="text-align: center">
							<tr>
								<th>Nomor</th>
								<th>Nama Dokumen</th>
								<th>Unit Kerja</th>
								<th>Standar</th>
								<th>Periode</th>
								<th>File</th>
                                @if(auth()->user()->usertype == "admin")
								<th>Action</th>
                                @endif

							</tr>
						</thead>
						<tbody style="text-align: center">

                            @foreach($data as $key=>$document)


                            <tr>
								<td>{{ $document->code }}</td>
								<td>{{ $document->name }}</td>
								<td>{{ $document->User->name}}</td>
								<td>{{ ucfirst($document->standard) }}</td>
								<td>{{ $document->period }}</td>
                                @if(auth()->user()->usertype == "admin")
								<td>
                                    <div class="d-flex justify-content-center">
                                        @if($document->file_path != null)
                                            <a href="{{ route('manualmutu.download', $document) }}" type="button" class="btn btn-circle btn-info"><i class="glyphicon glyphicon-download-alt"></i></a>
                                        @else
                                            Tidak ada file
                                        @endif
                                     </div>
                                </td>
                                @endif
                                @if(auth()->user()->usertype == "user")
								<td>
                                    <div class="d-flex justify-content-center">
                                        @if($document->file_path != null)
                                            <a href="{{ route('manualmutu.download', $document) }}" type="button" class="btn btn-circle btn-info"><i class="glyphicon glyphicon-download-alt"></i></a>
                                        @else
                                            Tidak ada file
                                        @endif
                                     </div>
                                </td>
                                @endif
                                @if(auth()->user()->usertype == "guest")
                                <td>
                                    <div class="d-flex justify-content-center">
                                        @if($document->file_path != null)
                                            <a href="{{ route('preview', $document) }}" type="button" class="btn btn-circle btn-info"><i class="glyphicon glyphicon-download-alt"></i></a>
                                        @else
                                            Tidak ada file
                                        @endif
                                     </div>
                                </td>
                                @endif
                                @if(auth()->user()->usertype == "admin")
								<td>
                                    <div class="d-flex justify-content-center">
                                        <a href="" type="button" class="btn btn-circle btn-primary" data-toggle="modal" data-document-id='{{ $document->id }}' data-target="#uploadDoc-{{ $document->id }}"><i class="glyphicon glyphicon-open"></i></a>
                                        <a href="{{ route('manualmutu.delete', $document->id) }}" type="button" class="btn btn-circle btn-danger" id="delete"><i class="fa fa-trash"></i></a>
                                    </div>

                                </td>
                                @endif
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
    <form method="post" enctype="multipart/form-data" action="{{ route('manualmutu.upload') }}">
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

