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
                        <a title="Add New Product" class="btn btn-success" href="{{ route('products.create') }}"><i class="fa fa-plus-circle"></i> Add New Product</a>
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
                        <th>Category</th>
                        <th>Product Name</th>
                        <th>Product Image</th>
                        <th>SKU</th>
                        <th>PKT</th>
                        <th>CTN</th>
                        <th>MRP</th>
                      </tr>
                  </thead>
                  <tbody>
                    <?php $i=1;?>
                    @foreach($products as $product)
                    <tr>
                        <td width="10">{{ $i++ }}</td>
                        <td width="100">
                            
                            
                            {!! Form::open(['method' => 'DELETE', 'route' => ['products.destroy',$product->id]]) !!}
                            
                                <a title="Edit" class="btn btn-xs btn-default edit-row" href="{{ route('products.edit',$product->id) }}">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <button type="submit" onclick="return confirm('You are about to delete a post permanently. Are you sure?')" class="btn btn-xs btn-danger">
                                    <i class="fa fa-trash"></i>
                                </button>
                            {!! Form::close() !!}
                            
        
                        </td>
                        <td width="150">{{ $product->cat_name  }}</td>
                        <td>{{ $product->product_name }}</td>
                        <td><img src="{{ $product->product_image }}" height="50px" width="50px" alt="..."></td>
                        <td>{{ $product->sku }}</td>
                        <td>{{ $product->pkt }}</td>
                        <td>{{ $product->ctn }}</td>
                        <td>{{ $product->mrp }}</td>
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
        