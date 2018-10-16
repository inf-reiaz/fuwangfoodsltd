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
        <li><a href="">Products</a></li>
        <li class="active">All Products</li>
      </ol>
    </section>

    <!-- Main content --> 
    <section class="content">
        <div class="row">
          <div class="col-xs-12">
              
            <div class="box">
                <div class="box-header">
                    <div class="pull-left">
                        <a title="Add New Product" class="btn btn-success" href=""><i class="fa fa-plus-circle"></i> Add New Product</a>
                    </div>
                    <div class="pull-right">
                        <form accept-charset="utf-8" method="post" class="form-inline" id="form-filter" action="#">
                            <div class="input-group">
                                <input type="hidden" name="search">
                                <input type="text" name="keywords" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search..." value="">
                                <div class="input-group-btn">
                                    <button class="btn btn-sm btn-default search-btn" type="button"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
              <!-- /.box-header -->
              <div class="box-body table-responsive">
                <table class="table table-bordered table-condesed">
                  <thead>
                      <tr>
                        <th>serial</th>
                        <th>Action</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Sub Category</th>
                        <th>Image</th>
                        <th>Price</th>
                        <th>Discount Price</th>
                        <th>Total Amount</th>
                        <th>Available</th>
                        <th>Publish Date</th>
                      </tr>
                  </thead>
                  <tbody>
                    <tr>
                        <td width="10">1</td>
                        <td width="100">
                            
                            
                            {!! Form::open(['method' => 'DELETE', 'route' => ['products.destroy',1]]) !!}
                            
                                <a title="Edit" class="btn btn-xs btn-default edit-row" href="{{ route('products.edit',1) }}">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <button type="submit" onclick="return confirm('You are about to delete a post permanently. Are you sure?')" class="btn btn-xs btn-danger">
                                    <i class="fa fa-trash"></i>
                                </button>
                            {!! Form::close() !!}
                            
        
                        </td>
                        <td width="150">name</td>
                        <td><img src="" height="50px" width="50px" alt="..."></td>
                        <td>$ 60</td>
                        <td>$ 44</td>
                        <td>12</td>
                        <td>11</td>
                        <td><abbr title="">dare</abbr></td>
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
        