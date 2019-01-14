@extends('admin.home') 
@section('title','| Konfig Rekening') 
@section('breadcumb',' Konfig Rekening') 
@section('content')

<!-- Plain fields -->

<div class="flex-card light-bordered light-raised">

    <div class="content has-text-centered mt-20">
        <h3>Edit Rekening</h3>
    </div>
    @if(Session::has('success'))
    <!-- Message -->
    <article class="message" style="margin-top:20px;margin-right:100px;margin-left:100px;">
        <div class="message-body">
            {{Session::get('success')}}
        </div>
    </article>
    <!-- Message -->
    @endif @if(count($errors) > 0)
    <!-- Message -->
    <article class="message msg-danger" style="margin-top:20px;margin-right:100px;margin-left:100px;">
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
    <div class="card-body">
        <form action="{{ route('konfig.update') }}" method="POST" class="padding-20">
            <input type="hidden" name="_method" value="PUT"> {{ csrf_field() }}
            <div class="field">
                <label class="form-label">Bank</label>
                <div class="control">
                    <input type="text" id="bank" name="bank" class="input is-medium is-secondary-focus" value="{{$konfig->bank}}">
                </div>
            </div>
            <div class="field mt-20">
                <label class="form-label">Nama</label>
                <div class="control">
                    <input type="text" id="nama" name="nama" class="input is-medium is-secondary-focus" value="{{$konfig->nama}}">
                </div>
            </div>
            <div class="field mt-20">
                <label class="form-label">No. Rekening</label>
                <div class="control">
                    <input type="text" id="norek" name="norek" class="input is-medium is-secondary-focus" value="{{$konfig->no_rek}}">
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