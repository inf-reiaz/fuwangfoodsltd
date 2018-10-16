@extends('admin.layout.app')

@section('title')
   Financials
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
        <li><a href="">Financials</a></li>
      </ol>
    </section>

    <!-- Main content --> 
    <section class="content">
        <div class="row">
          <div class="col-xs-12">
              
            <div class="box">
                <div class="box-header">
                    <div class="pull-left">
                        <a class="btn btn-success" href="{{ route('our-financial.create') }}"><i class="fa fa-plus-circle"></i> Add New Financial</a>
                    </div>
                    <div class="pull-right">
                     
                    </div>
                </div>
              <!-- /.box-header -->
              <div class="box-body table-responsive">
                <table class="table table-bordered table-condesed">
                  <thead>
                      <tr>
                        <th>serial</th>
                        <th>Action</th>
                        <th>Title</th>
                        <th>First Quarter</th>
                        <th>PDF link</th>
                        <th>Half Yearly</th>
                        <th>PDF link</th>
                        <th>3rd Quarterly</th>
                        <th>PDF link</th>
                        <th>Anual Report</th>
                        <th>PDF link</th>
                      </tr>
                  </thead>
                  <tbody>
                    <?php $i=1;?>
                    @foreach($financials as $financial)
                    <tr>
                        <td width="10">{{ $i++ }}</td>
                        <td width="100">
                            
                            {!! Form::open(['method' => 'DELETE', 'route' => ['our-financial.destroy',$financial->id]]) !!}
                            
                                <a title="Edit" class="btn btn-xs btn-default edit-row" href="{{ route('our-financial.edit',$financial->id) }}">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <button type="submit" onclick="return confirm('You are about to delete a post permanently. Are you sure?')" class="btn btn-xs btn-danger">
                                    <i class="fa fa-trash"></i>
                                </button>
                            {!! Form::close() !!}
                            
                        </td>
                        <td width="150">{{ $financial->title  }}</td>
                        <td>{{ $financial->first }}</td>
                        <td> <a href="{{ $financial->first_pdf }}">Pdf</a> </td>
                        <td>{{ $financial->half }}</td>
                        <td> <a href="{{ $financial->half_pdf }}">Pdf</a> </td>
                        <td>{{ $financial->third }}</td>
                        <td> <a href="{{ $financial->third_pdf }}">Pdf</a> </td>
                        <td>{{ $financial->anual_report }}</td>
                        <td> <a href="{{ $financial->anual_report_pdf }}">Pdf</a> </td>
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
        