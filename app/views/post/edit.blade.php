@extends('layouts.default')
@section('content')
    <div class="row">
        <div class="col-md-12">
            @include('includes.alert')
            <section class="panel">
                <header class="panel-heading">
                    {{ $title }}
                    <span class="pull-right">

                            <a class="btn btn-success btn-sm btn-new-user" href="{{ URL::route('post.index') }}">All Posts</a>
                            
					</span>
                </header>
                <div class="panel-body">
                   

                    {{Form::model($post,['route' => ['post.update',$post->id], 'class' => 'form-horizontal', 'method' => 'put', 'files' => true ])}}

                    

                      <div class="form-group">
                        {{ Form::label('title', 'Title : ', array('class' => 'col-md-2 control-label')) }}
                        <div class="col-md-4">
                            {{ Form::text('title', null, array('class' => 'form-control',  'placeholder' => 'Title', 'required')) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('description', 'Description : ', array('class' => 'col-md-2 control-label')) }}
                        <div class="col-md-4">
                            {{ Form::textarea('description', null, array('class' => 'form-control',  'placeholder' => 'Description', 'required')) }}
                        </div>
                    </div>
                    

                    <div class="form-group">
                        {{ Form::label('photo', "Upload An Image : ", array('class' => 'col-md-2 control-label')) }}
                        <div class="col-md-4">
                            <div id="preimg">
                                {{ HTML::image($post->photo, $post->title, [ 'class'=> 'img-responsive', 'width' => '230' , 'height' => '236']) }}<br>
                            </div>
                        
                                {{ Form::file('photo', array( 'class' => 'file-loading' , 'multiple'=>false, 'id' => 'input-4' )) }}
                            
                        </div>
                    </div>

                     <div class="form-group">
                        {{ Form::label('category', 'Category : ', array('class' => 'col-md-2 control-label')) }}
                        <div class="col-md-4">
                            {{ Form::select('category_id', $categories, null, array('class' => 'form-control', 'id'=>'category')) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('', '', array('class' => 'col-md-2 control-label')) }}
                        <div class="col-md-4">
                            {{ Form::select('sub_category_id', $sub_categories, null, array('class' => 'form-control', 'id'=>'subcategory')) }}
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            {{ Form::submit('Update', array('class' => 'btn btn-primary')) }}
                        </div>
                    </div>

                    {{ Form::close() }}
                       

                </div>
            </section>
        </div>
    </div>
@stop

@section('style')
    {{ HTML::style('css/chosen_dropdown/chosen.css') }}
    {{ HTML::style('rename/css/fileinput.min.css') }}

@stop

@section('script')

    {{ HTML::script('js/chosen_dropdown/chosen.jquery.min.js') }}
    {{ HTML::script('js/ckeditor/ckeditor.js') }}
    {{ HTML::script('rename/js/plugins/canvas-to-blob.min.js') }}
    {{ HTML::script('rename/js/fileinput_locale_<lang>.js') }}
    {{ HTML::script('rename/js/fileinput.min.js') }}

    <<script>
    $(document).on('ready', function() {
        $("#input-4").fileinput({showCaption: false});
    });
    </script>

    <script>
        $(document).on('ready', function() {
            $("#input-4").click(function(){
                $("#preimg").fadeOut("1000");
                
              //  $("#div2").fadeOut("slow");
             //   $("#div3").fadeOut(3000);
            });
        });
    </script>

@stop