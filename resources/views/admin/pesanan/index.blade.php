@extends('admin.home') 
@section('title','| Semua Pesanan') 
@section('breadcumb',' Semua Pesanan') 
@section('content') @if(Session::has('success'))
<article class="message is-success" style="margin-top:20px;">
  <div class="message-header">
    <p>Berhasil!</p>
  </div>
  <div class="message-body">
    {{Session::get('success')}}
  </div>
</article>
@endif @if(count($errors) > 0)
<article class="message is-danger" style="margin-top:20px;">
  <div class="message-header">
    <p>Error!</p>
  </div>
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
        <th>User ID</th>
        <th>Nama</th>
        <th>Telepon</th>
        <th>Email</th>
        <th>Foto</th>
        <th>Tanggal Pesan</th>
        <th>Aksi</th>
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
            <a href="{{route('pesanan.show',$pesanan->id)}}" class="button">Lihat</a>
            <a href="{{route('pesanan.edit',$pesanan->id)}}" class="button is-info">Edit</a>
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