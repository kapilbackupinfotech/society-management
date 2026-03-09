@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Society Dashboard</h1>
@stop

@section('content')

<div class="row">

<div class="col-lg-3 col-6">
<div class="small-box bg-info">
<div class="inner">
<h3>{{ $flats }}</h3>
<p>Total Flats</p>
</div>
<div class="icon">
<i class="fas fa-building"></i>
</div>
</div>
</div>

<div class="col-lg-3 col-6">
<div class="small-box bg-success">
<div class="inner">
<h3>{{ $members }}</h3>
<p>Total Members</p>
</div>
<div class="icon">
<i class="fas fa-users"></i>
</div>
</div>
</div>

<div class="col-lg-3 col-6">
<div class="small-box bg-warning">
<div class="inner">
<h3>{{ $maintenance }}</h3>
<p>Maintenance Collected</p>
</div>
<div class="icon">
<i class="fas fa-money-bill"></i>
</div>
</div>
</div>

<div class="col-lg-3 col-6">
<div class="small-box bg-danger">
<div class="inner">
<h3>{{ $complaints }}</h3>
<p>Pending Complaints</p>
</div>
<div class="icon">
<i class="fas fa-exclamation-triangle"></i>
</div>
</div>
</div>

</div>

@stop