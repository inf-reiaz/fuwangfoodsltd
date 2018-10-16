@extends('admin.layout.app')

@section('title')
   Share Price
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
        <li><a href="">Share Price</a></li>
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
                        <th>name</th>
                        <th>Price</th>
                      </tr>
                  </thead>
                  <tbody>
                    <tr>
                        <td width="10">{{ $share->id }}</td>
                        <td width="100">
                            <a title="Edit" class="btn btn-xs btn-default edit-row" href="{{ route('share-price.edit',$share->id) }}">
                                <i class="fa fa-edit"></i>
                            </a>
                        </td>
                        <td width="10">{{ $share->product_name }}</td>
                        <td width="150">{{ $share->price }}</td>
                      </tr>
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
        