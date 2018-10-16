@extends('admin.layout.app')

@section('title')
   Admin
@endsection


@section('content')

  <!-- Content Wrapper-->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dasbhboard
      </h1>
      <ol class="breadcrumb">
        <li><a href=""><i class="fa fa-dashboard"></i> Dasbhboard</a></li>
        <li><a href="">Resume</a></li>
      </ol>
    </section>

    <!-- Main content --> 
    <section class="content">
        <div class="row">
          <div class="col-xs-12">
              
            <div class="box">
                <div class="box-header">
                </div>
              <!-- /.box-header -->
              <div class="box-body table-responsive">
                <table class="table table-bordered table-condesed">
                  <thead>
                      <tr>
                        <th>serial</th>
                        <th>Action</th>
                        <th>Recruitment</th>
                        <th>Name</th>
                        <th>Mobile Number</th>
                      </tr>
                  </thead>
                  <tbody>
                    @foreach($resumes as $r)
                    <tr>
                        <td width="10">{{ $r->id }}</td>
                        <td width="100">
                            <a class="btn btn-xs btn-default edit-row" href="{{ $r->cv }}" download>
                                <i class="fa fa-download"></i>
                            </a>
                        </td>
                        <td width="10"> @if($r->recruitment == 'employee_recruitment') Employee Recruitment @else Distributor Recruitment @endif</td>
                        <td width="150">{{ $r->name }}</td>
                        <td width="150">{{ $r->mob_number }}</td>
                      </tr>
                    @endforeach
                   </tbody>
                </table>
              </div>
              <!-- /.box-body -->
              <div class="box-footer clearfix">

                   
                </div>
            </div>
            <!-- /.box -->

          </div>
        </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection


@section('js')

    <script type="text/javascript">
        $('ul.pagination').addClass('no-margin pagination-sm');
    </script>
@endsection
        