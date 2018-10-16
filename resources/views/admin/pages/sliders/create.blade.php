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
            
            {!! Form::open(['route' => 'products.store']) !!}
            
                
                <div class="col-xs-9">
                  <div class="box">
                    <div class="box-body ">
                        
                        <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                            {!! Form::label('name') !!}
                            {!! Form::text('name', null, ['class' => 'form-control']) !!}
    
                            @if($errors->has('name'))
                                <span class="help-block">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                        
                        <div class="form-group {{ $errors->has('slug') ? 'has-error' : '' }}">
                            {!! Form::label('slug') !!}
                            {!! Form::text('slug', null, ['class' => 'form-control']) !!}
    
                            @if($errors->has('slug'))
                                <span class="help-block">{{ $errors->first('slug') }}</span>
                            @endif
                        </div>
                        
                        <div class="form-group {{ $errors->has('excerpt') ? 'has-error' : '' }}">
                            {!! Form::label('excerpt') !!}
                            {!! Form::textarea('excerpt', null, ['class' => 'form-control']) !!}
                        </div>
                        
                        <div class="form-group {{ $errors->has('body') ? 'has-error' : '' }}">
                            {!! Form::label('body') !!}
                            {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
    
                            @if($errors->has('body'))
                                <span class="help-block">{{ $errors->first('body') }}</span>
                            @endif
                        </div>
                        
                    </div>
                    <!-- /.box-body -->
                  </div>
                  <!-- /.box -->
                </div>
                <div class="col-xs-3">
    
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Feature Image</h3>
                        </div>
                        <div class="box-body text-center">
                            <div class="form-group {{ $errors->has('image') ? 'has-error' : '' }}">
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
    
                                @if($errors->has('image'))
                                    <span class="help-block">{{ $errors->first('image') }}</span>
                                @endif
                            </div>
                            
                        </div>
                    </div>
                    
                    
                    
                    
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Price $</h3>
                        </div>
                        <div class="box-body">
                            <div class="form-group {{ $errors->has('price') ? 'has-error' : '' }}">
                                {!! Form::number('price', null, ['class' => 'form-control','placeholder' => 'Insert Price value']) !!}
                                @if($errors->has('price'))
                                    <span class="help-block">{{ $errors->first('price') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Discount Price $</h3>
                        </div>
                        <div class="box-body">
                            <div class="form-group {{ $errors->has('discount_price') ? 'has-error' : '' }}">
                                {!! Form::number('discount_price', null, ['class' => 'form-control','placeholder' => 'Insert Discount Price value']) !!}
                                @if($errors->has('discount_price'))
                                    <span class="help-block">{{ $errors->first('discount_price') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Total Product</h3>
                        </div>
                        <div class="box-body">
                            <div class="form-group {{ $errors->has('totla') ? 'has-error' : '' }}">
                                {!! Form::number('totla', null, ['class' => 'form-control','placeholder' => 'Insert Totla Product Quantaty ']) !!}
                                @if($errors->has('totla'))
                                    <span class="help-block">{{ $errors->first('totla') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Publish</h3>
                        </div>
                        <div class="box-body">
                            <div class="form-group {{ $errors->has('published_at') ? 'has-error' : '' }}">
                                {!! Form::label('published_at', 'Publish Date') !!}
                                <div class='input-group date' id='datetimepicker1'>
                                    {!! Form::text('published_at', null, ['class' => 'form-control', 'placeholder' => 'Y-m-d H:i:s']) !!}
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
    
    
                                @if($errors->has('published_at'))
                                    <span class="help-block">{{ $errors->first('published_at') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="box-footer clearfix">
                            <div class="pull-left">
                                <!--<a id="draft-btn" class="btn btn-default">Save Draft</a>-->
                            </div>
                            <div class="pull-right">
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
        

