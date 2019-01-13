@extends('admin.home') 
@section('title','| Semua Pesanan') 
@section('breadcumb',' Semua Pesanan') 
@section('content')
<div class="columns">
  <div class="column">
    @if(Session::has('success'))
    <!-- Message -->
    <article class="message msg-success" style="margin-top:20px;">
      <h4 class="message-header">
        <span>Berhasil !</span>
      </h4>
      <div class="message-body">
        {{Session::get('success')}}
      </div>
    </article>
    <!-- Message -->
    @endif @if(count($errors) > 0)
    <!-- Message -->
    <article class="message msg-danger" style="margin-top:20px;">
      <h4 class="message-header">
        <span>Error !</span>
        <span class="delete" aria-label="delete"></span>
      </h4>
      <div class="message-body">
        @foreach($errors->all() as $error)
        <ul>
          <li>
            {{$error}}
          </li>
        </ul>
        @endforeach
      </div>
    </article>
    @endif
  </div>
</div>

<div class="content">
  <div class="columns">
    <div class="column is-10" style="margin-top:50px;">
      <h1 class="title is-1 is-spaced">Pesanan</h1>
    </div>
  </div>
  <div class="column is-12">
    <hr>
  </div>
  <table class="responsive-table is-secondary mb-40">
    <tbody>
      <tr>
        <th class="light-text">User ID</th>
        <th class="light-text">Nama</th>
        <th class="light-text">Telepon</th>
        <th class="light-text">Email</th>
        <th class="light-text">Foto</th>
        <th class="light-text">Tanggal Pesan</th>
        <th class="light-text">Aksi</th>
      </tr>
      @foreach($pesanans as $pesanan)
      <tr>
        <td data-th="ID" class="">{{$pesanan->user_id}}</td>
        <td data-th="Nama">{{$pesanan->nama}}</td>
        <td>{{$pesanan->telp}}</td>
        <td>{{ $pesanan->email}}</td>
        <td>{{$pesanan->nm_file}}</td>
        <td>{{date('l, j M, Y H:i:s',strtotime($pesanan->created_at))}}</td>
        <td>
          <form action="{{ route('pesanan.destroy', $pesanan->id) }}" method="POST">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <a href="{{route('pesanan.show',$pesanan->id)}}" class="button">Lihat</a>
            <input type="submit" class="button is-danger" value="Delete"></form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <div class="has-text-centered">
    <div class="columns" style="margin-top:20px;">{!! $pesanans->links()!!}</div>
  </div>
@endsection