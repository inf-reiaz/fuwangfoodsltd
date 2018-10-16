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
            
            {!! Form::model($financial, [
                'method' => 'PUT',
                'route'  => ['our-financial.update',$financial->id],
                'files'  => TRUE,
                'id' => 'our-financial-form'
            ]) !!}
            
            
                <div class="col-xs-12">
                  <div class="box">
                    <div class="box-body ">
                        
                        <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                            {!! Form::label('title') !!}
                            {!! Form::text('title', null, ['class' => 'form-control','placeholder'=>'FINANCIAL YEAR']) !!}
    
                            @if($errors->has('title'))
                                <span class="help-block">{{ $errors->first('title') }}</span>
                            @endif
                        </div>
                        
                        <div class="form-group {{ $errors->has('first') ? 'has-error' : '' }}">
                            {!! Form::label('First Quarter') !!}
                            {!! Form::text('first', null, ['class' => 'form-control','placeholder'=>'First Quarter year']) !!}
    
                            @if($errors->has('first'))
                                <span class="help-block">{{ $errors->first('first') }}</span>
                            @endif
                        </div>
                        
                        
                        <div class="form-group {{ $errors->has('first_pdf') ? 'has-error' : '' }}">
                            {!! Form::label('First Quarter Pdf') !!}
                            <br>
                            <a href="{{ $financial->first_pdf }}" target="_blank">View Pdf</a>
                            {!! Form::file('first_pdf') !!}
    
                            @if($errors->has('first_pdf'))
                                <span class="help-block">{{ $errors->first('first_pdf') }}</span>
                            @endif
                        </div>
                        
                            
                        
                        <div class="form-group {{ $errors->has('half') ? 'has-error' : '' }}">
                            {!! Form::label('Half Quarter') !!}
                            {!! Form::text('half', null, ['class' => 'form-control','placeholder'=>'Half Quarter year']) !!}
    
                            @if($errors->has('first'))
                                <span class="help-block">{{ $errors->first('first') }}</span>
                            @endif
                        </div>
                        
                        
                        <div class="form-group {{ $errors->has('half_pdf') ? 'has-error' : '' }}">
                            {!! Form::label('Half Quarter Pdf') !!} 
                            <br>
                            <a href="{{ $financial->half_pdf }}" target="_blank">View Pdf</a>
                            {!! Form::file('half_pdf') !!}
    
                            @if($errors->has('half_pdf'))
                                <span class="help-block">{{ $errors->first('half_pdf') }}</span>
                            @endif
                        </div>
                        
                        <div class="form-group {{ $errors->has('third') ? 'has-error' : '' }}">
                            {!! Form::label('3rd Quarter') !!}
                            {!! Form::text('third', null, ['class' => 'form-control','placeholder'=>'3rd Quarter year']) !!}
    
                            @if($errors->has('first'))
                                <span class="help-block">{{ $errors->first('first') }}</span>
                            @endif
                        </div>
                        
                        
                        <div class="form-group {{ $errors->has('third_pdf') ? 'has-error' : '' }}">
                            {!! Form::label('3rd Quarter Pdf') !!}
                            
                            <br>
                            <a href="{{ $financial->third_pdf }}" target="_blank">View Pdf</a>
                            {!! Form::file('third_pdf') !!}
    
                            @if($errors->has('third_pdf'))
                                <span class="help-block">{{ $errors->first('third_pdf') }}</span>
                            @endif
                        </div>
                        
                        
                        <div class="form-group {{ $errors->has('anual_report') ? 'has-error' : '' }}">
                            {!! Form::label('Anual Report') !!}
                            {!! Form::text('anual_report', null, ['class' => 'form-control','placeholder'=>'Anual Report']) !!}
    
                            @if($errors->has('first'))
                                <span class="help-block">{{ $errors->first('first') }}</span>
                            @endif
                        </div>
                        
                        
                        <div class="form-group {{ $errors->has('anual_report_pdf') ? 'has-error' : '' }}">
                            {!! Form::label('Anual Report Pdf') !!}
                            {!! Form::file('anual_report_pdf') !!}
    
                            @if($errors->has('anual_report_pdf'))
                                <span class="help-block">{{ $errors->first('anual_report_pdf') }}</span>
                            @endif
                        </div>
                        
                        <div class="box">
                            <div class="box-body">
                                <div class="form-group">
                                  <button class="btn btn-lg btn-block btn-primary" style="margin: 0 auto;display: block;" type="submit">Save</button>
                                </div>
                            </div>
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
        

