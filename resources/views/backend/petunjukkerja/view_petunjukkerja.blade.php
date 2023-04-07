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
				  <h3 class="box-title">Dokumen Petunjuk Kerja</h3>
                  @if(auth()->user()->usertype == "admin")
                    <a href="{{ route('petunjukkerja.add')}}" style="float:right" class="btn btn-rounded btn-success mb-5">Tambah Dokumen</a>
                  @endif
                </div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
						<thead style="text-align: center">
							<tr>
								<th>Nomor</th>
								<th>Nama Dokumen</th>
								<th>Unit Kerja</th>
								<th>Standar</th>
								<th>Periode</th>
								<th>File</th>
								<th>Action</th>

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
								<td>
                                    <div class="d-flex justify-content-center">
                                        @if($document->file_path != null)
                                            <a href="{{ route('petunjukkerja.download', $document) }}" type="button" class="btn btn-circle btn-info"><i class="glyphicon glyphicon-download-alt"></i></a>
                                        @else
                                            Tidak ada file
                                        @endif
                                    </div>
                                </td>
								<td>
                                    <div class="d-flex justify-content-center">

                                        <a href="" type="button" class="btn btn-circle btn-primary" data-toggle="modal" data-document-id='{{ $document->id }}' data-target="#uploadDoc-{{ $document->id }}"><i class="glyphicon glyphicon-open"></i></a>
                                        @if(auth()->user()->usertype == "admin")
                                        <a href="{{ route('petunjukkerja.delete', $document->id) }}" type="button" class="btn btn-circle btn-danger" id="delete"><i class="fa fa-trash"></i></a>
                                        @endif
                                    </div>

                                </td>

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
    <form method="post" enctype="multipart/form-data" action="{{ route('petunjukkerja.upload') }}">
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

