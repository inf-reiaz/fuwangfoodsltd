@extends('admin.layout.app')

@section('title')
   Product
@endsection

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/css/jasny-bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
@endsection

@section('content')

  <!-- Content Wrapper-->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Products
          <small>Add new Product</small>
        </h1>
        <ol class="breadcrumb">
          <li>
              <a href=""><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li><a href="">Products</a></li>
          <li class="active">Add New Product</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
            
            
            {!! Form::model($shareprice, [
                'method' => 'PUT',
                'route'  => ['share-price.update',$shareprice->id],
                'files'  => TRUE,
                'id' => 'share-price-form'
            ]) !!}
                
                <div class="col-xs-12">
                    
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Share Name</h3>
                        </div>
                        <div class="box-body">
                            <div class="form-group {{ $errors->has('totla') ? 'has-error' : '' }}">
                                {!! Form::text('product_name', null, ['class' => 'form-control','placeholder' => 'product_name']) !!}
                                @if($errors->has('product_name'))
                                    <span class="help-block">{{ $errors->first('product_name') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Share Price</h3>
                        </div>
                        <div class="box-body">
                            <div class="form-group {{ $errors->has('price') ? 'has-error' : '' }}">
                                {!! Form::number('price', null, ['class' => 'form-control','placeholder' => 'price']) !!}
                                @if($errors->has('price'))
                                    <span class="help-block">{{ $errors->first('price') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    
                    <div class="box">
                        <div class="box-footer clearfix">
                            <div class="pull-left">
                                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                            </div>
                        </div>
                    </div>
                </div>
                
                

            {!! Form::close() !!}
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>
  <!-- /.content-wrapper -->
  
@endsection



@section('js')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.14.1/moment-with-locales.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js"></script>


    <script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>

    <script type="text/javascript">
        $('ul.pagination').addClass('no-margin pagination-sm');
        
        $('#name').on('blur', function() {
            var theTitle = this.value.toLowerCase().trim(),
                slugInput = $('#slug'),
                theSlug = theTitle.replace(/&/g, '-and-')
                                  .replace(/[^a-z0-9-]+/g, '-')
                                  .replace(/\-\-+/g, '-')
                                  .replace(/^-+|-+$/g, '');

            slugInput.val(theSlug);
        });

        var simplemde1 = new SimpleMDE({ element: $("#excerpt")[0] });
        var simplemde2 = new SimpleMDE({ element: $("#body")[0] });

        $('#datetimepicker1').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            showClear: true
        });

        $('#draft-btn').click(function(e) {
            e.preventDefault();
            $('#published_at').val("");
            $('#post-form').submit();
        });
        
    </script>
@endsection
        

