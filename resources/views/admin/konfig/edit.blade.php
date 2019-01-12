@extends('admin.home') 
@section('title','| Konfig Rekening') 
@section('breadcumb',' Konfig Rekening') 
@section('content')
@if(Session::has('success'))
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
<!-- Plain fields -->

<div class="flex-card light-bordered light-raised">
    <div class="content has-text-centered mt-20">
        <h3>Edit Rekening</h3>
    </div>
    <div class="card-body">
        <form class="padding-20">
            <div class="field">
                <label class="form-label">Bank</label>
                <div class="control">
                    <input type="text" class="input is-medium">
                </div>
            </div>
            <div class="field mt-20">
                <label class="form-label">Nama</label>
                <div class="control">
                    <input type="text" class="input is-medium">
                </div>
            </div>
            <div class="field mt-20">
                <label class="form-label">No. Rekening</label>
                <div class="control">
                    <input type="email" class="input is-medium is-primary-focus">
                </div>
            </div>

            <div class="mt-20 has-text-right">
                <button type="submit" class="button btn-align info-btn raised">Simpan</button>
            </div>
        </form>
    </div>
</div>

<!-- /Plain fields -->
@endsection