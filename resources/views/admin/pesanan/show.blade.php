@extends('admin.home') 
@section('title','| Lihat Pesanan') 
@section('breadcumb') Pesanan
<li>Lihat Pesanan</li>
@endsection
 
@section('content')
<div class="columns" style="margin-top:15px;">
    <div class="column is-8">
        <div class="card" style="padding-left:20px;padding-right:20px;padding-bottom:20px;padding-top:20px;">
            <img src="{{asset('images/' . $pesanan->nm_file)}}" />
            <h1 class="title">NAMA PEMESAN : {{$pesanan->nama}}</h1>
            <hr>
            <h1 class="">TELEPON : {{$pesanan->telp}}</h1>
            <h1 class="">EMAIL : {{$pesanan->email}}</h1>
            <br><br>
            <h1 class="title">Tanggal Pesan : {{date('j M, Y H:i',strtotime($pesanan->created_at))}}</h1>
        </div>
        <hr>
        <h1 class="subtitle is-4 has-text-centered"> Jumlah pesanan user ID {{$pesanan->user_id}} <small>({{ $counts }} total</small>)</h1>
        <hr> {{--
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
                        @foreach ($pesanan->komentar as $komentar)
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
        </div> --}}
    </div>
    <div class="column is-4">
        {{--
        <article class="message is-dark">
            <div class="message-body">
                <div class="">
                    <label>URL:</label> {{-- "{{url('belajar/'.$pesanan->slug)}}" bisa juga diganti menjadi "{{route('belajar.tunggal',$pesanan->slug)"}}

                    <p class="subtitle is-6"><a href="{{url('belajar/'.$pesanan->slug)}}">{{url('belajar/'.$pesanan->slug)}}</a></p>
                    <label>Kategori :</label>
                    <p>{{$pesanan->kategori->nama}}</p>
                    <label>Dibuat :</label>
                    <p>{{date('j M, Y H:i',strtotime($pesanan->created_at))}}</p>
                </div>
                <div>
                    <div class="">Diperbarui :</div>
                    <div>{{date('j M, Y H:i',strtotime($pesanan->updated_at))}}</div>
                </div> --}}
                <hr>
                <center>
                    <div class="columns">
                        <div class="column is-6 is-offset-3">
                            <form action="{{ route('pesanan.destroy', $pesanan->id) }}" method="POST">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="submit" value="Hapus" class="button is-danger is-outlined is-fullwidth">
                            </form>
                        </div>
                    </div>
                    <div class="column is-12"> <input type="button" class="button is-outlined is-fullwidth is-dark" value="<< Lihat Semua Pesanan" onclick="window.location='{{route('pesanan.index', $pesanan->id)}}';"></a>
                    </div>
                </center>
            </div>
        </article>
    </div>
</div>
@endsection