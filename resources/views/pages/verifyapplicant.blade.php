@extends('layouts.default')
@section('content')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page">Verifikasi Pemohon Baru</li>
  </ol>
</nav>
@if(session()->has('result'))
    <div class="alert alert-success">
      {{ session()->get('result') }}
    </div>
  @endif
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Cari dengan nama..">
<div class="table-responsive">
<table id="myTable" class="table table-striped">
        <thead>
                <tr>
                        <th scope="col">No
                            </th>
                            <th scope="col">NIP
                            </th>
                            <th scope="col">Nama
                            </th>
                            <th scope="col">Email
                            </th>
                            <th scope="col">Angka Kredit
                                </th>
                            <th scope="col">Action
                            </th>
                </tr>
              </thead>
              <tbody>
                    @foreach ($users as $user)
                    <tr>
                          <th  scope="row">{{$loop->iteration}}</th >
                          <td>{{$user->id}}</td>
                          <td>{{$user->nama}}</td>
                          <td>{{$user->email}}</td>
                          <td>{{$user->credit}}</td>
                          <td align="center">  
                              <form action="{{ route('detail_Aplicant',$user->id) }}"><input class="btn btn-info" type="submit" value="Detail" /></form>
                          </td>
                    </tr>
                    @endforeach
                  </tbody>
  
  
</table>
</div>


  
      <script>
            function myFunction() {
              // Declare variables 
              var input, filter, table, tr, td, i, txtValue;
              input = document.getElementById("myInput");
              filter = input.value.toUpperCase();
              table = document.getElementById("myTable");
              tr = table.getElementsByTagName("tr");
            
              // Loop through all table rows, and hide those who don't match the search query
              for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[1];
                if (td) {
                  txtValue = td.textContent || td.innerText;
                  if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                  } else {
                    tr[i].style.display = "none";
                  }
                } 
              }
            }
            </script>
    
    
       

@stop

