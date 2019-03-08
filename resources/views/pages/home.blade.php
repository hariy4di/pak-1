@extends('layouts.default')
@section('content')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page">Home</li>
  </ol>
</nav>
<div class="row">
  <div class="col-sm-3 col-md-3 col-xs-12">
    <div class="card">
      <img src="{{ auth()->user()->photoUrl == null ? asset('dupakFiles/avatar_employee.png') : asset('dupakFiles/' . auth()->user()->photoUrl )}}" class="card-img-top img-thumbnail" alt="Responsive image">
    </div>
  </div>
  <div class="col-sm-9 col-md-9 col-xs-12">
    <div class="card">
      <div class="card-header">
        <h3>{{auth()->user()->id}} - <small class="text-muted">{{auth()->user()->nama}}</small></h3>   
      </div>
      <table class="table">
        <tbody>
          <tr>
            <th scope="row">Nomor Serial Kartu</th>
            <td>{{auth()->user()->CardSerialNumber}}</td>
          </tr>
          <tr>
            <th scope="row">Email</th>
            <td>{{auth()->user()->email}}</td>
          </tr>
          <tr>
            <th scope="row">Tempat, tanggal lahir</th>
            <td>{{auth()->user()->birth_place}}, {{auth()->user()->birth_date}}</td>
          </tr>
          <tr>
            <th scope="row">Jenis Kelamin</th>
            <td>{{auth()->user()->gender == null ? 'Jenis kelamin belum diatur' : auth()->user()->gender}}</td>
          </tr>
          <tr>
            <th scope="row">Jabatan Pranata Komputer</th>
            <td>{{$positionName->group}} - {{$positionName->position}}</td>
          </tr>
          <tr>
            <th scope="row">Alamat</th>
            <td>{{auth()->user()->address}}</td>
          </tr>

          <tr>
            <th scope="row">Angka Kredit</th>
            <td>{{auth()->user()->credit}}</td>
          </tr>
        </tbody>
      </table>

    </div>




  </div>
</div>
<br>
@if(auth()->user()->hasRole('admin'))<!-- Icon Cards-->
Dashboard Admin

@endif


<div class="list-group">
  @if ($informations->count() != null)
  <h3>Informasi</h3>
  @foreach ($informations as $information)
  <a href="{{ route('detail_information',$information->id) }}" class="list-group-item list-group-item-action flex-column align-items-start">
    <div class="d-flex w-100 justify-content-between">
      <h4 class="mb-1"><strong>{{ $information->information_title }}</strong></h4>
      <small>{{ \Carbon\Carbon::parse($information->created_at)->format('d/M/Y H:i') }}</small>
    </div>
    <p class="mb-1">{{ strlen($information->information_content) >=50 ? str_limit($information->information_content, $limit = 50, $end = '...') : $information->information_content }}</p>
    <small>{{ $information->nip==null ? "" : "Oleh : ".$information->nip }}</small>
  </a>
  @endforeach
  @else
  <!-- Page Content -->
  <div class="text-center text-dark"><h3>Belum ada informasi</h3></div>

  @endif

</div>  
<br>
@stop