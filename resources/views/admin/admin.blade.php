@extends('admin.home') 
@section('breadcumb',' Dashboard') 
@section('content')
<!-- Tile -->
<div class="column is-3">
    <div class="flex-card card-overflow light-bordered light-raised">
        <div class="icon-header">
            <i class="material-icons primary">account_balance_wallet</i>
        </div>
        <div class="content">
            <div class="card-title is-tile has-text-right">
                Jumlah pesanan
                <div class="card-stat primary has-text-right">{{$count}} <span class="stat-type">pesanan</span></div>
            </div>
        </div>
        <div class="more">
            <a class="primary" href="{{route('pesanan.index')}}">See all</a>
        </div>
    </div>
</div>
<!-- Tile -->
<div class="column is-3">
    <div class="flex-card card-overflow light-bordered light-raised">
        <div class="icon-header">
            <i class="material-icons primary">account_balance</i>
        </div>
        <div class="content">
            <div class="card-title is-tile has-text-right">
                Jumlah User
                <div class="card-stat primary has-text-right">{{$countuser}}<span class="stat-type">User</span></div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- /Stat tiles -->
@endsection