@extends('admin.admin_master')
@section('admin')

@if(auth()->user()->usertype == "admin")
<div class="content-wrapper">
    <div class="container-full">

      <section class="content">
        <div class="row">
			<div class="col-12">
			  <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Dokumen Penjaminan Mutu Internal</h3>
                </div>
                <div class="box-body">
                    <div class="table-responsive">
                    <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                        <thead style="text-align: center">
                            <tr>
                                <th >Nomor</th>
                                <th >Nama Dokumen</th>
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
                                <td>
                                    <div class="d-flex justify-content-center">
                                        @if($document->file_path != null)
                                            <a href="{{ route('dashboard.download', $document) }}" type="button" class="btn btn-circle btn-info"><i class="glyphicon glyphicon-download-alt"></i></a>
                                        @else
                                            Tidak ada file
                                        @endif
                                    </div>
                                </td>
                                @if(auth()->user()->usertype == "admin")
                                <td>
                                    <div class="d-flex justify-content-center">

                                        <a href="" type="button" class="btn btn-circle btn-primary" data-toggle="modal" data-document-id='{{ $document->id }}' data-target="#uploadDoc-{{ $document->id }}"><i class="glyphicon glyphicon-open"></i></a>
                                        <a href="{{ route('dashboard.delete', $document->id) }}" type="button" class="btn btn-circle btn-danger" id="delete"><i class="fa fa-trash"></i></a>
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

      </section>
      <!-- /.content -->
    </div>
</div>
@endif
@if(auth()->user()->usertype == "user")
<div class="content-wrapper">
    <div class="container-full">

      <!-- Main content -->
      <section class="content">
        <div class="row">
			<div class="col-12">
			  <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Dokumen Penjaminan Mutu Internal</h3>
                </div>
                <div class="box-body">
                    <div class="table-responsive">
                    <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                        <thead style="text-align: center">
                            <tr>
                                <th >Nomor</th>
                                <th >Nama Dokumen</th>
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
                                <td>
                                    <div class="d-flex justify-content-center">
                                        @if($document->file_path != null)
                                            <a href="{{ route('dashboard.download', $document) }}" type="button" class="btn btn-circle btn-info"><i class="glyphicon glyphicon-download-alt"></i></a>
                                        @else
                                            Tidak ada file
                                        @endif
                                    </div>
                                </td>
                                @if(auth()->user()->usertype == "admin")
                                <td>
                                    <div class="d-flex justify-content-center">

                                        <a href="" type="button" class="btn btn-circle btn-primary" data-toggle="modal" data-document-id='{{ $document->id }}' data-target="#uploadDoc-{{ $document->id }}"><i class="glyphicon glyphicon-open"></i></a>
                                        <a href="{{ route('dashboard.delete', $document->id) }}" type="button" class="btn btn-circle btn-danger" id="delete"><i class="fa fa-trash"></i></a>
                                    </div>

                                </td>
                                @endif

                            </tr>

                            @endforeach
                        </tbody>

                    </table>
                <div>
              <div>
            </div>
        </div>
      </section>
      <!-- /.content -->
    </div>
</div>
@endif
@if(auth()->user()->usertype == "guest")
{{-- <div class="content-wrapper">
    <div class="container-full">

      <section class="content">

        <div class="box-header with-border">
            <h3 class="box-title">Dokumen Penjaminan Mutu Internal</h3>
        </div>
        <div class="box-body">
            <div class="table-responsive">
              <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                <thead style="text-align: center">
                    <tr>
                        <th >Nomor</th>
                        <th >Nama Dokumen</th>
                        <th>Unit Kerja</th>
                        <th>Standar</th>
                        <th>Periode</th>
                        <th>File</th>

                    </tr>
                </thead>
                <tbody style="text-align: center">
                    @foreach($guest as $key=>$document)
                    <tr>
                        <td>{{ $document->code }}</td>
                        <td>{{ $document->name }}</td>
                        <td>{{ $document->User->name}}</td>
                        <td>{{ ucfirst($document->standard) }}</td>
                        <td>{{ $document->period }}</td>
                        <td>
                            <div class="d-flex justify-content-center">
                                @if($document->file_path != null)
                                    <a href="{{ route('dashboard.download', $document) }}" type="button" class="btn btn-circle btn-info"><i class="glyphicon glyphicon-download-alt"></i></a>
                                @else
                                    Tidak ada file
                                @endif
                            </div>
                        </td>


                    </tr>

                    @endforeach
                </tbody>

            </table>
        <div>

      </section>
      <!-- /.content -->
    </div>
</div> --}}
<div class="content-wrapper">
    <div class="container-full">

      <section class="content">

        <div class="box-header with-border">
            <h3 class="box-title">Selamat Datang di Sistem Penjaminan Mutu Internal</h3>
            <h4>SMK Negeri 2 Magelang</h4>
        </div>
      </section>
    </div>
</div>
@endif

   <!-- Modal -->
   @foreach( $data as $d)
   <div class="modal fade" id="{{ 'uploadDoc-'.$d->id  }}" tabindex="-1" aria-labelledby="uploadDoclabel" aria-hidden="true">
    <div class="modal-dialog">
    <form method="post" enctype="multipart/form-data" action="{{ route('dashboard.upload') }}">
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
