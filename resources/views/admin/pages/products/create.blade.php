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
            
            {!! Form::model($product, [
                'method' => 'POST',
                'route'  => 'products.store',
                'files'  => TRUE,
                'id' => 'roles-form'
            ]) !!}
                
                
                <div class="col-xs-8">
                  <div class="box">
                    <div class="box-body ">
                        
                        <div class="form-group {{ $errors->has('cat_name') ? 'has-error' : '' }}">
                            {!! Form::label('Category Name') !!}
                            {!! Form::select('cat_name', ['bread' => 'Bread', 'biscuit_chanachur' => 'Biscuit & Chanachur','toast' => 'Toast','cake' => 'Cake','choclate' => 'Choclate','others_drinks' => 'Others & Drinks','noodles' => 'Noodles'], null, ['placeholder' => 'Select Category Name','class' => 'form-control']) !!}
                     
    
                            @if($errors->has('cat_name'))
                                <span class="help-block">{{ $errors->first('cat_name') }}</span>
                            @endif
                        </div>
                        
                        <div class="form-group {{ $errors->has('product_name') ? 'has-error' : '' }}">
                            {!! Form::label('product_name') !!}
                            {!! Form::text('product_name', null, ['class' => 'form-control']) !!}
    
                            @if($errors->has('product_name'))
                                <span class="help-block">{{ $errors->first('product_name') }}</span>
                            @endif
                        </div>
                        
                        <div class="form-group {{ $errors->has('slug') ? 'has-error' : '' }}">
                            {!! Form::label('slug') !!}
                            {!! Form::text('slug', null, ['class' => 'form-control']) !!}
    
                            @if($errors->has('slug'))
                                <span class="help-block">{{ $errors->first('slug') }}</span>
                            @endif
                        </div>
                        
                        <div class="form-group {{ $errors->has('product_description') ? 'has-error' : '' }}">
                            {!! Form::label('Product Description') !!}
                            {!! Form::textarea('product_description', null, ['class' => 'form-control']) !!}
    
                            @if($errors->has('product_description'))
                                <span class="help-block">{{ $errors->first('product_description') }}</span>
                            @endif
                        </div>
                        
                    </div>
                    <!-- /.box-body -->
                  </div>
                  <!-- /.box -->
                </div>
                <div class="col-xs-4">
    
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Product Image</h3>
                        </div>
                        <div class="box-body text-center">
                            <div class="form-group {{ $errors->has('product_image') ? 'has-error' : '' }}">
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                  <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                    <img src="http://placehold.it/200x150&text=No+Image}" alt="...">
                                  </div>
                                  <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                                  <div>
                                    <span class="btn btn-default btn-file">
                                        <span class="fileinput-new">Select image</span>
                                        <span class="fileinput-exists">Change</span>
                                        {!! Form::file('product_photo_input') !!}
                                    </span>
                                    <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                  </div>
                                </div>
    
                                @if($errors->has('product_photo_input'))
                                    <span class="help-block">{{ $errors->first('product_photo_input') }}</span>
                                @endif
                            </div>
                            
                        </div>
                    </div>
                    
                    
                    
                    
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Product Chart </h3>
                        </div>
                        <div class="box-header with-border">
                            <h3 class="box-title">Name of Sku </h3>
                        </div>
                        <div class="box-body">
                            <div class="form-group {{ $errors->has('sku') ? 'has-error' : '' }}">
                                {!! Form::text('sku', null, ['class' => 'form-control','placeholder' => 'Name of Sku']) !!}
                                @if($errors->has('sku'))
                                    <span class="help-block">{{ $errors->first('sku') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="box-header with-border">
                            <h3 class="box-title">WT/PKT </h3>
                        </div>
                        <div class="box-body">
                            <div class="form-group {{ $errors->has('pkt') ? 'has-error' : '' }}">
                                {!! Form::text('pkt', null, ['class' => 'form-control','placeholder' => 'WT/PKT']) !!}
                                @if($errors->has('pkt'))
                                    <span class="help-block">{{ $errors->first('pkt') }}</span>
                                @endif
                            </div>
                        </div>
                        
                        
                        <div class="box-header with-border">
                            <h3 class="box-title">PKT/CTN </h3>
                        </div>
                        <div class="box-body">
                            <div class="form-group {{ $errors->has('ctn') ? 'has-error' : '' }}">
                                {!! Form::text('ctn', null, ['class' => 'form-control','placeholder' => 'PKT/CTN']) !!}
                                @if($errors->has('ctn'))
                                    <span class="help-block">{{ $errors->first('ctn') }}</span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="box-header with-border">
                            <h3 class="box-title">MRP/PKT </h3>
                        </div>
                        <div class="box-body">
                            <div class="form-group {{ $errors->has('mrp') ? 'has-error' : '' }}">
                                {!! Form::text('mrp', null, ['class' => 'form-control','placeholder' => 'MRP/PKT']) !!}
                                @if($errors->has('mrp'))
                                    <span class="help-block">{{ $errors->first('mrp') }}</span>
                                @endif
                            </div>
                        </div>
                        
                    </div>
                    
                    <div class="box">
                        <div class="box-body">
                            <div class="form-group">
                              <button class="btn btn-lg btn-block btn-primary" style="margin: 0 auto;display: block;" type="submit">Save</button>
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
        
        $('#product_name').on('blur', function() {
            var theTitle = this.value.toLowerCase().trim(),
                slugInput = $('#slug'),
                theSlug = theTitle.replace(/&/g, '-and-')
                                  .replace(/[^a-z0-9-]+/g, '-')
                                  .replace(/\-\-+/g, '-')
                                  .replace(/^-+|-+$/g, '');

            slugInput.val(theSlug);
        });

        
        var simplemde2 = new SimpleMDE({ element: $("#product_description")[0] });

        
    </script>
@endsection
        

