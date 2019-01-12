@extends('layout.utama') 
@section('title','| Lihat Post') 
@section('konten')
<div class="columns" style="margin-top:15px;">
    <div class="column is-8">
        <div class="card" style="padding-left:20px;padding-right:20px;padding-bottom:20px;padding-top:20px;">
            <img src="{{asset('images/' . $post->gambar)}}" />
            <h1 class="title">{{$post->judul}}</h1>
            <hr> <strong>Tags : </strong>@foreach($post->tag as $tag)
            <span class="tag is-primary"> {{$tag->nama}}</span> @endforeach
            <br><br>
            <section class="section">{!!$post->isi!!}</section>
        </div>
        <hr>
        <h1 class="subtitle is-4 has-text-centered"> Komentar <small>({{ $post->komentar()->count() }} total</small>)</h1>
        <hr>
        <div class="columns">
            <div class="column">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Isi Komentar</th>
                            <th width="70px"></th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($post->komentar as $komentar)
                        <tr>
                            <td>{{ $komentar->nama }}</td>
                            <td>{{ $komentar->email }}</td>
                            <td>{{ str_limit($komentar->isi_komentar,20) }}</td>
                            <td>
                                <a href="{{ route('komentars.edit', $komentar->id) }}" class="btn btn-xs btn-primary"><span class="fa fa-pencil"></span></a>
                                <a href="{{ route('komentars.delete', $komentar->id) }}" class="btn btn-xs btn-danger"><span class="fa fa-trash"></span></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="column is-4">
        <article class="message is-dark">
            <div class="message-body">
                <div class="">
                    <label>URL:</label> {{-- "{{url('belajar/'.$post->slug)}}" bisa juga diganti menjadi "{{route('belajar.tunggal',$post->slug)"}}
                    --}}
                    <p class="subtitle is-6"><a href="{{url('belajar/'.$post->slug)}}">{{url('belajar/'.$post->slug)}}</a></p>
                    <label>Kategori :</label>
                    <p>{{$post->kategori->nama}}</p>
                    <label>Dibuat :</label>
                    <p>{{date('j M, Y H:i',strtotime($post->created_at))}}</p>
                </div>
                <div>
                    <div class="">Diperbarui :</div>
                    <div>{{date('j M, Y H:i',strtotime($post->updated_at))}}</div>
                </div>
                <hr>
                <center>
                    <div class="columns">
                        <div class="column is-6">
                            <input type="button" class="button is-primary is-fullwidth is-outlined" value="Edit" onclick="window.location='{{route('posts.edit', $post->id)}}';"></a>
                        </div>
                        <div class="column is-6">
                            {!!Form::open(['route'=>['posts.destroy',$post->id],'method'=>'DELETE'])!!} {!!Form::submit('Hapus',['class'=>'button is-danger
                            is-outlined is-fullwidth']) !!} {!!Form::close()!!}
                        </div>
                    </div>
                    <div class="column is-12"> <input type="button" class="button is-outlined is-fullwidth is-dark" value="<< Lihat Semua Post" onclick="window.location='{{route('posts.index', $post->id)}}';"></a>
                    </div>
                </center>
            </div>
        </article>
    </div>
</div>
@endsection