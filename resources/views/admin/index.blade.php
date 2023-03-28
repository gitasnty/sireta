@extends('admin.admin_master')
@section('admin')

  <div class="content-wrapper">
    <div class="container-full">

      <!-- Main content -->
      <section class="content">
        {{-- <h1>{{ Auth::user()->name }}</h1> --}}
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
                        <th>Delete</th>

                    </tr>
                </thead>
                <tbody>
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
                        <td>
                            <div class="d-flex justify-content-center">

                                <a href="" type="button" class="btn btn-circle btn-primary" data-toggle="modal" data-document-id='{{ $document->id }}' data-target="#uploadDoc-{{ $document->id }}"><i class="glyphicon glyphicon-open"></i></a>
                                <a href="{{ route('dashboard.delete', $document->id) }}" type="button" class="btn btn-circle btn-danger" id="delete"><i class="fa fa-trash"></i></a>

                            </div>

                        </td>

                    </tr>

                    @endforeach
                </tbody>

            </table>
        <div>
          {{-- <div class="row">
              <div class="col-xl-4 col-6">
                  <div class="box overflow-hidden pull-up">
                      <div class="box-body">
                          <div class="icon bg-primary-light rounded w-60 h-60">
                              <i class="text-primary mr-0 font-size-24 mdi mdi-account-multiple"></i>
                          </div>
                          <div>
                              <h3 class="text-mute">Standar A</h3>
                          </div>
                          <div class="progress">
                            <div class="progress-bar progress-bar-primary progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                              <span class="sr-only">60% Complete</span>
                            </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-xl-4 col-6">
                  <div class="box overflow-hidden pull-up">
                      <div class="box-body">
                          <div class="icon bg-primary-light rounded w-60 h-60">
                              <i class="text-primary mr-0 font-size-24 mdi mdi-account-multiple"></i>
                          </div>
                          <div>
                              <h3 class="text-mute">Standar B</h3>
                          </div>
                          <div class="progress">
                            <div class="progress-bar progress-bar-danger progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                              <span class="sr-only">30% Complete</span>
                            </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-xl-4 col-6">
                  <div class="box overflow-hidden pull-up">
                      <div class="box-body">
                          <div class="icon bg-primary-light rounded w-60 h-60">
                              <i class="text-primary mr-0 font-size-24 mdi mdi-account-multiple"></i>
                          </div>
                          <div>
                              <h3 class="text-mute">Standar C</h3>
                          </div>
                          <div class="progress">
                            <div class="progress-bar progress-bar-success progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                              <span class="sr-only">90% Complete</span>
                            </div>
                          </div>
                      </div>
                  </div>
              </div>


              <div class="col-12">
                  <div class="box">
                      <div class="box-header">
                          <h4 class="box-title align-items-start flex-column">
                              Files Uploaded
                              <small class="subtitle">Latest document uploaded</small>
                          </h4>
                      </div>
                      <div class="box-body">
                          <div class="table-responsive">
                              <table class="table no-border">
                                  <thead>
                                      <tr class="text-uppercase bg-lightest">
                                          <th style="min-width: 300px"><span class="text-white">Instrumen</span></th>
                                          <th style="min-width: 150px"><span class="text-fade">Standar</span></th>
                                          <th style="min-width: 150px"><span class="text-fade">Unit Kerja</span></th>
                                          <th style="min-width: 130px"><span class="text-fade">status</span></th>
                                          <th style="min-width: 120px"></th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr>
                                          <td class="pl-0 py-8">
                                              <div class="d-flex align-items-center">
                                                  <div class="flex-shrink-0 mr-20">
                                                      <div class="bg-img h-50 w-50" style="background-image: url({{ asset('backend/images/gallery/creative/img-5.jpg')}})"></div>
                                                  </div>

                                                  <div>
                                                      <a href="#" class="text-white font-weight-600 hover-primary mb-1 font-size-16">Prestasi</a>
                                                      <span class="text-fade d-block">Bidang Akademis</span>
                                                  </div>
                                              </div>
                                          </td>
                                          <td>
                                              <span class="text-white font-weight-600 d-block font-size-16">
                                                  Standar A
                                              </span>
                                          </td>
                                          <td>
                                              <span class="text-white font-weight-600 d-block font-size-16">
                                                  Unit Kerja A
                                              </span>
                                          </td>
                                          <td>
                                              <span class="badge badge-success-light badge-lg">Success</span>
                                          </td>
                                          <td class="text-right">
                                              <a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-bookmark-plus"></span></a>
                                              <a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-arrow-right"></span></a>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td class="pl-0 py-8">
                                              <div class="d-flex align-items-center">
                                                  <div class="flex-shrink-0 mr-20">
                                                      <div class="bg-img h-50 w-50" style="background-image: url({{ asset('backend/images/gallery/creative/img-1.jpg')}})"></div>
                                                  </div>

                                                  <div>
                                                      <a href="#" class="text-white font-weight-600 hover-primary mb-1 font-size-16">Prestasi</a>
                                                      <span class="text-fade d-block">Bidang Akademis</span>
                                                  </div>
                                              </div>
                                          </td>
                                          <td>
                                              <span class="text-white font-weight-600 d-block font-size-16">
                                                  Standar A
                                              </span>
                                          </td>
                                          <td>
                                              <span class="text-white font-weight-600 d-block font-size-16">
                                                  Unit Kerja A
                                              </span>
                                          </td>
                                          <td>
                                              <span class="badge badge-primary-light badge-lg">Approved</span>
                                          </td>
                                          <td class="text-right">
                                              <a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-bookmark-plus"></span></a>
                                              <a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-arrow-right"></span></a>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td class="pl-0 py-8">
                                              <div class="d-flex align-items-center">
                                                  <div class="flex-shrink-0 mr-20">
                                                      <div class="bg-img h-50 w-50" style="background-image: url({{ asset('backend/images/gallery/creative/img-3.jpg')}})"></div>
                                                  </div>

                                                  <div>
                                                      <a href="#" class="text-white font-weight-600 hover-primary mb-1 font-size-16">Prestasi</a>
                                                      <span class="text-fade d-block">Bidang Akademis</span>
                                                  </div>
                                              </div>
                                          </td>
                                          <td>
                                              <span class="text-white font-weight-600 d-block font-size-16">
                                                  Standar A
                                              </span>
                                          </td>
                                          <td>
                                              <span class="text-white font-weight-600 d-block font-size-16">
                                                  Unit Kerja A
                                              </span>
                                          </td>
                                          <td>
                                              <span class="badge badge-warning-light badge-lg">In Progress</span>
                                          </td>
                                          <td class="text-right">
                                              <a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-bookmark-plus"></span></a>
                                              <a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-arrow-right"></span></a>
                                          </td>
                                      </tr>

                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>
              </div>
          </div> --}}
      </section>
      <!-- /.content -->
    </div>
</div>

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
