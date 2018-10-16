@extends('admin.layout.app')

@section('title')
   Career
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
        <li><a href="">Career</a></li>
        <li class="active">All Career</li>
      </ol>
    </section>

    <!-- Main content --> 
    <section class="content">
        <div class="row">
          <div class="col-xs-12">
              
            <div class="box">
                <div class="box-header">
                    <div class="pull-left">
                        <a title="Add New Product" class="btn btn-success" href="{{ route('career.create') }}"><i class="fa fa-plus-circle"></i> Add New Career</a>
                    </div>
                </div>
            
              <div class="box-body table-responsive">
                <table class="table table-bordered table-condesed">
                  <thead>
                      <tr>
                        <th>serial</th>
                        <th>Action</th>
                        <th>Recruitment Type</th>
                        <th>Career Title</th>
                      </tr>
                  </thead>
                  <tbody>
                    <?php $i=1;?>
                    @foreach($careers as $p)
                    
                    <tr>
                        <td width="10">{{ $i++ }}</td>
                        <td width="100">
                            
                            {!! Form::open(['method' => 'DELETE', 'route' => ['career.destroy',$p->id]]) !!}
                            
                                <a title="Edit" class="btn btn-xs btn-default edit-row" href="{{ route('career.edit',$p->id) }}">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-xs btn-danger">
                                    <i class="fa fa-trash"></i>
                                </button>
                            {!! Form::close() !!}
        
                        </td>
                        <td width="250">
                          @if($p->ctg == 'A')
                          EMPLOYEE RECRUITMENT
                          @else
                          DISTRIBUTOR RECRUITMENT
                          @endif
                        </td>
                        <td>{{ $p->title }}</td>
                    </tr>
                    
                    @endforeach
                   </tbody>
                </table>
              </div>
            </div>
            
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
        