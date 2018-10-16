@extends('admin.layout.app')

@section('title')
   Career
@endsection

@section('css')
<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/css/jasny-bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
@endsection

@section('content')

  <!-- Content Wrapper-->
    <div class="content-wrapper">
      
      <section class="content-header">
        <h1>
          Career
          <small>Add new Career</small>
        </h1>
        <ol class="breadcrumb">
          <li>
              <a href=""><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li><a href="">Career</a></li>
          <li class="active">Add New Career</li>
        </ol>
      </section>

      
      <section class="content">
          <div class="row">
            
            {!! Form::model($career, [
                'method' => 'POST',
                'route'  => 'career.store',
                'files'  => TRUE,
                'id' => 'roles-form'
            ]) !!}
                
                
                <div class="col-xs-12">
                  <div class="box">
                    <div class="box-body ">
                        
                        
                        <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                            {!! Form::label('Recruitment Type') !!}

                            {!! Form::select('ctg', ['A' => 'EMPLOYEE RECRUITMENT', 'B' => 'DISTRIBUTOR RECRUITMENT'], null, ['class' => 'form-control','placeholder' => 'Select....'])  !!}
    
                            @if($errors->has('title'))
                                <span class="help-block">{{ $errors->first('title') }}</span>
                            @endif
                        </div>
                        
                        <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                            {!! Form::label('Title') !!}
                            {!! Form::text('title', null, ['class' => 'form-control','required']) !!}
    
                            @if($errors->has('title'))
                                <span class="help-block">{{ $errors->first('title') }}</span>
                            @endif
                        </div>
                        
                        <div class="form-group {{ $errors->has('deadline') ? 'has-error' : '' }}">
                            {!! Form::label('Deadline') !!}
                            {!! Form::text('deadline', null, ['class' => 'form-control','required','id' => 'line']) !!}
    
                            @if($errors->has('deadline'))
                                <span class="help-block">{{ $errors->first('deadline') }}</span>
                            @endif
                        </div>
                        
                        <div class="form-group {{ $errors->has('product_description') ? 'has-error' : '' }}">
                            {!! Form::label('Press Description') !!}
                            {!! Form::textarea('description', null, ['class' => 'form-control','required']) !!}
    
                            @if($errors->has('description'))
                                <span class="help-block">{{ $errors->first('description') }}</span>
                            @endif
                        </div>
                        
                        <div class="form-group {{ $errors->has('bd_jobs_link') ? 'has-error' : '' }}">
                            {!! Form::label('BD Job Link (if any) ') !!}
                            {!! Form::text('bd_jobs_link', null, ['class' => 'form-control','required']) !!}
    
                            @if($errors->has('bd_jobs_link'))
                                <span class="help-block">{{ $errors->first('bd_jobs_link') }}</span>
                            @endif
                        </div>
                        
                        <div class="form-group">
                          <button class="btn btn-lg btn-block btn-primary" style="margin: 0 auto;display: block;" type="submit">Save</button>
                        </div>
                        
                    </div>
                    <!-- /.box-body -->
                  </div>
                  <!-- /.box -->
                </div>
                
                

            {!! Form::close() !!}
          </div>
        <!-- ./row -->
      </section>
      
      
      
    </div>
  <!-- /.content-wrapper -->
  
@endsection



@section('js')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.14.1/moment-with-locales.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js"></script>


    <script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>



    <script type="text/javascript">
        $(function () {
            $('#line').datetimepicker();
        });
    </script>
    
    

@endsection
        

