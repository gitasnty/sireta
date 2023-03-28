@extends('admin.admin_master')
@section('admin')


<div class="content-wrapper">
	  <div class="container-full">
		<!-- Main content -->
		<section class="content">

		 <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Tambah Dokumen Lain Lain </h4>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">
					<form method="POST" action="{{ route('lainlain.store') }}">
                         @csrf
					  <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <h5>Jenis Dokumen</h5>
                                    <div class="controls">
                                        <input type="text" name="doctype" class="form-control" required data-validation-required-message="This field is required" value="Lain Lain" disabled="true">
                                        {{-- <select name="doctype" id="select" required class="form-control">

                                            <option value="Struktur Organisasi">Struktur Organisasi</option>
                                            <option value="Program Kerja">Program Kerja</option>
                                            <option value="Sasaran Mutu">Sasaran Mutu</option>
                                            <option value="Lain Lain">Lainnya</option>

                                        </select> --}}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5>Nomor Dokumen</h5>
                                    <div class="controls">
                                        <input type="text" name="code" class="form-control" required data-validation-required-message="This field is required"> </div>
                                    {{-- <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div> --}}
                                </div>

                                <div class="form-group">
                                    <h5>Nama Dokumen</h5>
                                        <input type="text" name="name" class="form-control" required data-validation-required-message="This field is required"> 

                                        {{-- <input type="text" name="name" id="lainnya" class="form-control" style='display:none; margin-top:10px'> --}}

                                    {{-- <div class="controls">
                                        <select name="name" id="select" required class="form-control" onchange='Check(this.value)';>
                                            <option value="Struktur Organisasi">Struktur Organisasi</option>
                                            <option value="Program Kerja">Program Kerja</option>
                                            <option value="Sasaran Mutu">Sasaran Mutu</option>
                                            <option value="Lainnya">Lainnya</option>
                                        </select>
                                    </div> --}}
                                </div>
                                <div class="form-group">
                                    <script type="text/javascript">
                                        function Check(val){
                                        var element=document.getElementById('lainnya');
                                        if(val=="Lainnya")
                                        element.style.display='block';
                                        else
                                        element.style.display='none';
                                    }
                                    </script>
                                        <input type="text" name="lainnya" id="lainnya" class="form-control" style='display:none; margin-top:10px'>
                                </div>

                                <div class="form-group" style="margin-top: 10px;">
                                    <h5>Unit Kerja</h5>
                                    <div class="controls">
                                        <select name="unitKerja" id="select" required class="form-control">
                                            @foreach($data as $d)
                                            <option name="unitKerja" value={{ $d->id }}>{{ $d->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <h5>Periode</h5>
                                    <div class="controls">
                                        <input type="year" name="period" class="form-control" required data-validation-required-message="This field is required"> </div>
                                        {{-- <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div> --}}
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
