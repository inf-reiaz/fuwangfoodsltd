@extends('admin.layout.app')

@section('title')
   Bord
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
          Bord
          <small>Add new </small>
        </h1>
        <ol class="breadcrumb">
          <li>
              <a href=""><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li><a href="">Bord</a></li>
          <li class="active">Add New </li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
            
            {!! Form::model($bord, [
                'method' => 'PUT',
                'route'  => ['board.update',$bord->id],
                'files'  => TRUE
            ]) !!}
            
                
                
                
                
                
                <div class="col-xs-12">
                  <div class="box">
                    <div class="box-body ">
                        
                        
                        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                            {!! Form::label('Director Name ') !!}
                            {!! Form::text('name', null, ['class' => 'form-control']) !!}
    
                            @if($errors->has('name'))
                                <span class="help-block">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                        
                        
                        <div class="form-group {{ $errors->has('designation') ? 'has-error' : '' }}">
                            {!! Form::label('Director Designation') !!}
                            {!! Form::text('designation', null, ['class' => 'form-control']) !!}
    
                            @if($errors->has('designation'))
                                <span class="help-block">{{ $errors->first('designation') }}</span>
                            @endif
                        </div>
                        
                        
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Photo</h3>
                        </div>
                        <div class="box-body text-center">
                            <div class="form-group {{ $errors->has('photo') ? 'has-error' : '' }}">
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                  <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                    <img src="{{ $bord->photo }}" alt="...">
                                  </div>
                                  <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                                  <div>
                                    <span class="btn btn-default btn-file">
                                        <span class="fileinput-new">Select Photo</span>
                                        <span class="fileinput-exists">Change</span>
                                        {!! Form::file('photo') !!}
                                    </span>
                                    <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                  </div>
                                </div>
    
                                @if($errors->has('photo'))
                                    <span class="help-block">{{ $errors->first('photo') }}</span>
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
                    <!-- /.box-body -->
                  </div>
                  <!-- /.box -->
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


@endsection
        

