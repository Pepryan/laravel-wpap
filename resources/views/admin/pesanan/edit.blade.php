@extends('layout.utama') 
@section('title', '| Edit Blog Post') 
@section('stylesheets') {!!Html::style('css/select2.min.css')!!}
<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
<script>
    tinymce.init({ 
        selector:'textarea',
        plugins: [
                        "advlist autolink autosave link image lists charmap print preview hr anchor pagebreak ",
                        "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime  nonbreaking",
                        "table contextmenu template textcolor paste fullpage textcolor"
                ],

                toolbar1: "undo redo | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | bullist numlist | outdent indent",
                toolbar2: "image link table | cut copy paste | searchreplace |  blockquote |  code | inserttime preview | forecolor backcolor",
                toolbar3: "| hr removeformat | subscript superscript | charmap | print fullscreen | template pagebreak restoredraft | styleselect fontselect fontsizeselect",
        menubar: false       
    });

</script>
@endsection
 
@section('konten') {!! Form::model($post, ['route'=>['posts.show',$post->id], 'method'=>'PUT', 'files'=>true])!!}

<center>
    <h1 class="title is-1"><b>Ubah Post</b></h1>
    <hr>
</center> {{csrf_field()}}
<div class="columns" style="margin-top:15px;">
    <div class="column is-8">
        <div class="field">
            {{Form::label('judul', 'Judul : ',['class'=>'label'])}} <br>
            <p class="control has-icon has-icon-left">
                <span class="icon user"><i class="fa fa-pencil"></i></span> {{Form::text('judul', null, ['class'=>'input'])}}
            </p>
        </div>
        <div class="field">
            {{Form::label('slug', 'Slug : ',['class'=>'label'])}}
            <p class="control has-icon has-icon-left">
                {{Form::text('slug', null, ['class'=>'input'])}}
            </p>
        </div>
        <div class="field">
            {{Form::label('kategori', 'Kategori : ',['class'=>'label'])}}
            <div class="control">
                <div class="select is-primary" name="kategori_id" id="kategori">{{Form::select('kategori_id',$kategori2, null, ['class'=>'select'])}}</div>
            </div>
        </div>
        <div class="field">
            {{Form::label('tags', 'Tags : ', ['class'=>'label'])}}
            <div class="control">
                {{Form::select('tags[]', $tags, null, ['class'=>' select2-multi','multiple'=>'multiple','style'=>'width:500px;','id'=>'tags'])}}
            </div>
        </div>
        <div class="field">
            {{Form::label('tags', 'Perbarui Gambar Post : ', ['class'=>'label'])}}
            <div class="file" name="gambar_fitur">
                {{Form::file('gambar_fitur')}}
            </div>
        </div>
        <hr> {{Form::label('isi','Isi : ', ['class'=>'label'])}}
        <p class="control has-icon has-icon-left">

            {{Form::textarea('isi', null, ['class'=>'textarea', 'style' => 'height:400px;'])}}
        </p>
    </div>
    <div class="column is-4">
        <article class="message is-dark">
            <div class="message-body">
                <div class="columns">
                    <div class="column has-text-right">Dibuat :</div>
                    <div class="column">{{date('j M, Y H:i',strtotime($post->created_at))}}</div>
                </div>
                <div class="columns">
                    <div class="column has-text-right">Diperbarui :</div>
                    <div class="column">{{date('j M, Y H:i',strtotime($post->updated_at))}}</div>
                </div>
                <hr>
                <center>
                    <input type="button" class="button is-outlined is-dark" value="Kembali" onclick="window.location='{{route('posts.show', $post->id)}}';"></a>
                    {{Form::submit('Simpan', ['class'=>'button is-outlined is-primary'])}}
                </center>
            </div>
        </article>
    </div>
</div>

{!! Form::close() !!}
@endsection
 
@section('scripts') {!!Html::script('js/select2.full.min.js')!!}
<script type="text/javascript">
    $('.select2-multi').select2();
    $('.select2-multi').select2().val({!! json_encode($post->tag()->allRelatedIds())!!});

</script>
@endsection