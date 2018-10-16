@extends('admin.layout.app')

@section('title')
   Product
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
        <li><a href="">Director</a></li>
        <li class="active">All Director</li>
      </ol>
    </section>

    <!-- Main content --> 
    <section class="content">
        <div class="row">
          <div class="col-xs-12">
              
            <div class="box">
                <div class="box-header">
                    <div class="pull-left">
                        <a title="Add New Product" class="btn btn-success" href="{{ route('director.create') }}"><i class="fa fa-plus-circle"></i> Add New</a>
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
                        <th>Category</th>
                        <th>Name</th>
                        <th>Other Status & Address</th>
                        <th>Popup Text </th>
                        <th>Image</th>
                        
                      </tr>
                  </thead>
                  <tbody>
                    <?php $i=1;?>
                    @foreach($directors as $d)
                    <tr>
                        <td width="10">{{ $i++ }}</td>
                        <td width="100">
                            
                            
                            {!! Form::open(['method' => 'DELETE', 'route' => ['director.destroy',$d->id]]) !!}
                            
                                <a title="Edit" class="btn btn-xs btn-default edit-row" href="{{ route('director.edit',$d->id) }}">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <button type="submit" onclick="return confirm(' Are you sure?')" class="btn btn-xs btn-danger">
                                    <i class="fa fa-trash"></i>
                                </button>
                            {!! Form::close() !!}
                            
        
                        </td>
                        <td>
                          @if($d->ctg == "A")
                            FWF TOP MANAGEMENT
                          @elseif($d->ctg == "B")
                            BOARD OF DIRECTORS
                          @elseif($d->ctg == "C") 
                            BOARD OF DIRECTORS COMMITTE- AUDIT COMMITTEE
                          @else
                            BOARD OF DIRECTORS COMMITTE- NOMINATION AND REMUNERATION COMMITTEE
                          @endif
                        </td>
                        <td>{{ $d->name_title }}</td>
                        <td>{{ $d->other }}</td>
                        <td>{{ $d->popup }}</td>
                        <td><img src="{{ $d->photo }}" height="50px" width="50px" alt="..."></td>
                        
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
        