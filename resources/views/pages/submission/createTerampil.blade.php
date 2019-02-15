@extends('layouts.default')
@section('content')
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item active" aria-current="page">Berkas Pengajuan Terampil</li>
    </ol>
  </nav>
  <div class="card">
    <div class="card-header">
            <h3>Berkas Administrasi</small></h3>   
    </div>
    <table class="table">
                <tbody>
                  <tr>
                    <td>1</td>
                    <th scope="row">SK Terakhir</th>
                    <td class="text-right"><button type="button" class="btn btn-info">Upload</button></td>
                  </tr>
                  <tr>
                        <td>2</td>
                    <th scope="row">SK CPNS</th>
                    <td class="text-right"><button type="button" class="btn btn-info">Upload</button></td>
                  </tr>
                  <tr>
                        <td>3</td>
                    <th scope="row">KARPEG</th>
                    <td class="text-right"><button type="button" class="btn btn-info">Upload</button></td>
                  </tr>
                  <tr>
                        <td>4</td>
                    <th scope="row">SKP 2 tahun terakhir</th>
                    <td class="text-right"><button type="button" class="btn btn-info">Upload</button></td>
                  </tr>
                  <tr>
                        <td>5</td>
                    <th scope="row">DUPAK</th>
                    <td class="text-right"><button type="button" class="btn btn-info">Upload</button></td>
                  </tr>
                  <tr>
                        <td>6</td>
                    <th scope="row">PAK</th>
                    <td class="text-right"><button type="button" class="btn btn-info">Upload</button></td>
                  </tr>
                </tbody>
              </table>
  </div>
  <br><br>
  <div class="accordion" id="accordionExample">
        <div class="card">
          <div class="card-header" id="headingOne">
            <h2 class="mb-0">
              <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                I . Pendidikan
              </button>
            </h2>
          </div>
      
          <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
                    {{-- Table A --}}
                    <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">A . Pendidikan sekolah dan memperoleh ijazah/gelar</li>
                    </ol>
                    </nav>
                    <div class="table-responsive">
                            <table class="table table-hover">
                                    <thead>
                                            <tr>
                                              <th scope="col">No</th>
                                              <th scope="col">Butir Kegiatan</th>
                                              <th scope="col">Satuan Hasil</th>
                                              <th class="text-right" scope="col">Angka Kredit</th>
                                              <th scope="col">Batas Penilaian</th>
                                              <th scope="col">Pelaksana</th>
                                              <th scope="col">Bukti Fisik</th>
                                              <th class="text-center" scope="col">File</th>
                                              <th class="text-center" scope="col">Info</th>
                                            </tr>
                                          </thead>
                                    <tbody>
                                    @foreach ($butir_terampil1A as $butir)
                                      <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <th scope="row">{{$butir->item_name}}</th>
                                        <td scope="row">{{$butir->unitResult}}</td>
                                        <td class="text-right">{{$butir->point}}</td>
                                        <td scope="row">{{$butir->assessmentLimits}}</td>
                                        <td scope="row">{{$butir->executor}}</td>
                                        <td scope="row">{{$butir->physicalEvidence}}</td>
                                        <td scope="row">
                                            <label class="btn btn-dark">
                                                <input title="Upload File" value="{{ old($butir->id) }}" name="{{$butir->id}}" type="file" id="{{$butir->id}}" accept="application/pdf" type="file">
                                            </label>
                                        </td>
                                        <td scope="row"><button class="btn btn-dark">Info</button></td>
                                      </tr>
                                    @endforeach
                                    </tbody>
                                  </table>
                            </div>
                    {{-- akhir --}}
                    <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active" aria-current="page">B . Pendidikan dan Pelatihan fungsional dibidang kepranataan komputer dan memperoleh surat tanda tamat pendidikan dan pelatihan</li>
                            </ol>
                            </nav>
                            <div class="table-responsive">
                                    <table class="table table-hover">
                                            <thead>
                                                    <tr>
                                                      <th scope="col">No</th>
                                                      <th scope="col">Butir Kegiatan</th>
                                                      <th class="text-right" scope="col">Angka Kredit</th>
                                                      <th  class="text-right" scope="col">Action</th>
                                                    </tr>
                                                  </thead>
                                            <tbody>
                                            @foreach ($butir_terampil1B as $butirB)
                                              <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <th scope="row">{{$butirB->item_name}}</th>
                                                <td class="text-right">{{$butirB->point}}</td>
                                                <td class="text-right"><button type="button" class="btn btn-info">Upload</button></td>
                                              </tr>
                                            @endforeach
                                            </tbody>
                                          </table>
                                    </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingTwo">
            <h2 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                II . Operasi Teknologi Informasi
              </button>
            </h2>
          </div>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
            <div class="card-body">
              {{-- Table A --}}
              <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">A . Pengoperasian Komputer</li>
                    </ol>
                    </nav>
                    <div class="table-responsive">
                            <table class="table table-hover">
                                    <thead>
                                            <tr>
                                              <th scope="col">No</th>
                                              <th scope="col">Butir Kegiatan</th>
                                              <th class="text-right" scope="col">Angka Kredit</th>
                                              <th  class="text-right" scope="col">Action</th>
                                            </tr>
                                          </thead>
                                    <tbody>
                                    @foreach ($butir_terampil2A as $butir)
                                      <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <th scope="row">{{$butir->item_name}}</th>
                                        <td class="text-right">{{$butir->point}}</td>
                                        <td class="text-right"><button type="button" class="btn btn-info">Upload</button></td>
                                      </tr>
                                    @endforeach
                                    </tbody>
                                  </table>
                            </div>
                    {{-- akhir --}}
                    {{-- Table B --}}
              <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">B . Perekaman Data</li>
                    </ol>
                    </nav>
                    <div class="table-responsive">
                            <table class="table table-hover">
                                    <thead>
                                            <tr>
                                              <th scope="col">No</th>
                                              <th scope="col">Butir Kegiatan</th>
                                              <th class="text-right" scope="col">Angka Kredit</th>
                                              <th  class="text-right" scope="col">Action</th>
                                            </tr>
                                          </thead>
                                    <tbody>
                                    @foreach ($butir_terampil2B as $butir)
                                      <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <th scope="row">{{$butir->item_name}}</th>
                                        <td class="text-right">{{$butir->point}}</td>
                                        <td class="text-right"><button type="button" class="btn btn-info">Upload</button></td>
                                      </tr>
                                    @endforeach
                                    </tbody>
                                  </table>
                            </div>
                    {{-- akhir --}}
                     {{-- Table C --}}
              <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">C . Pemasangan dan Pemeliharaan Sistem Komputer dan Sistem Jaringan Komputer</li>
                    </ol>
                    </nav>
                    <div class="table-responsive">
                            <table class="table table-hover">
                                    <thead>
                                            <tr>
                                              <th scope="col">No</th>
                                              <th scope="col">Butir Kegiatan</th>
                                              <th class="text-right" scope="col">Angka Kredit</th>
                                              <th  class="text-right" scope="col">Action</th>
                                            </tr>
                                          </thead>
                                    <tbody>
                                    @foreach ($butir_terampil2C as $butir)
                                      <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <th scope="row">{{$butir->item_name}}</th>
                                        <td class="text-right">{{$butir->point}}</td>
                                        <td class="text-right"><button type="button" class="btn btn-info">Upload</button></td>
                                      </tr>
                                    @endforeach
                                    </tbody>
                                  </table>
                            </div>
                    {{-- akhir --}}
                   
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingThree">
            <h2 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                III . Implementasi Teknologi Informasi
              </button>
            </h2>
          </div>
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-body">
              {{-- Table A --}}
              <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">A . Pemrograman Dasar</li>
                    </ol>
                    </nav>
                    <div class="table-responsive">
                            <table class="table table-hover">
                                    <thead>
                                            <tr>
                                              <th scope="col">No</th>
                                              <th scope="col">Butir Kegiatan</th>
                                              <th class="text-right" scope="col">Angka Kredit</th>
                                              <th  class="text-right" scope="col">Action</th>
                                            </tr>
                                          </thead>
                                    <tbody>
                                    @foreach ($butir_terampil3A as $butir)
                                      <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <th scope="row">{{$butir->item_name}}</th>
                                        <td class="text-right">{{$butir->point}}</td>
                                        <td class="text-right"><button type="button" class="btn btn-info">Upload</button></td>
                                      </tr>
                                    @endforeach
                                    </tbody>
                                  </table>
                            </div>
                    {{-- akhir --}}
                    {{-- Table B --}}
              <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">B . Pemrograman Menengah</li>
                    </ol>
                    </nav>
                    <div class="table-responsive">
                            <table class="table table-hover">
                                    <thead>
                                            <tr>
                                              <th scope="col">No</th>
                                              <th scope="col">Butir Kegiatan</th>
                                              <th class="text-right" scope="col">Angka Kredit</th>
                                              <th  class="text-right" scope="col">Action</th>
                                            </tr>
                                          </thead>
                                    <tbody>
                                    @foreach ($butir_terampil3B as $butir)
                                      <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <th scope="row">{{$butir->item_name}}</th>
                                        <td class="text-right">{{$butir->point}}</td>
                                        <td class="text-right"><button type="button" class="btn btn-info">Upload</button></td>
                                      </tr>
                                    @endforeach
                                    </tbody>
                                  </table>
                            </div>
                    {{-- akhir --}}
                    {{-- Table C --}}
              <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">C . Pemrograman Lanjutan</li>
                    </ol>
                    </nav>
                    <div class="table-responsive">
                            <table class="table table-hover">
                                    <thead>
                                            <tr>
                                              <th scope="col">No</th>
                                              <th scope="col">Butir Kegiatan</th>
                                              <th class="text-right" scope="col">Angka Kredit</th>
                                              <th  class="text-right" scope="col">Action</th>
                                            </tr>
                                          </thead>
                                    <tbody>
                                    @foreach ($butir_terampil3C as $butir)
                                      <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <th scope="row">{{$butir->item_name}}</th>
                                        <td class="text-right">{{$butir->point}}</td>
                                        <td class="text-right"><button type="button" class="btn btn-info">Upload</button></td>
                                      </tr>
                                    @endforeach
                                    </tbody>
                                  </table>
                            </div>
                    {{-- akhir --}}
                    {{-- Table D --}}
              <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">D . Penerapan Sistem Komputer</li>
                    </ol>
                    </nav>
                    <div class="table-responsive">
                            <table class="table table-hover">
                                    <thead>
                                            <tr>
                                              <th scope="col">No</th>
                                              <th scope="col">Butir Kegiatan</th>
                                              <th class="text-right" scope="col">Angka Kredit</th>
                                              <th  class="text-right" scope="col">Action</th>
                                            </tr>
                                          </thead>
                                    <tbody>
                                    @foreach ($butir_terampil3D as $butir)
                                      <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <th scope="row">{{$butir->item_name}}</th>
                                        <td class="text-right">{{$butir->point}}</td>
                                        <td class="text-right"><button type="button" class="btn btn-info">Upload</button></td>
                                      </tr>
                                    @endforeach
                                    </tbody>
                                  </table>
                            </div>
                    {{-- akhir --}}
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingFour">
            <h2 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                IV . Pengembangan Profesi
              </button>
            </h2>
          </div>
          <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
            <div class="card-body">
               {{-- Table A --}}
               <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">A . Pembuatan Karya Tulis / Karya Ilmiah dibidang Teknologi Informasi</li>
                    </ol>
                    </nav>
                    <div class="table-responsive">
                            <table class="table table-hover">
                                    <thead>
                                            <tr>
                                              <th scope="col">No</th>
                                              <th scope="col">Butir Kegiatan</th>
                                              <th class="text-right" scope="col">Angka Kredit</th>
                                              <th  class="text-right" scope="col">Action</th>
                                            </tr>
                                          </thead>
                                    <tbody>
                                    @foreach ($butir_terampil4A as $butir)
                                      <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <th scope="row">{{$butir->item_name}}</th>
                                        <td class="text-right">{{$butir->point}}</td>
                                        <td class="text-right"><button type="button" class="btn btn-info">Upload</button></td>
                                      </tr>
                                    @endforeach
                                    </tbody>
                                  </table>
                            </div>
                    {{-- akhir --}}
                    {{-- Table B --}}
               <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">B . Penyusunan Petunjuk Teknis Pelaksanaan Pengelolaan Kegiatan Teknologi Informasi</li>
                    </ol>
                    </nav>
                    <div class="table-responsive">
                            <table class="table table-hover">
                                    <thead>
                                            <tr>
                                              <th scope="col">No</th>
                                              <th scope="col">Butir Kegiatan</th>
                                              <th class="text-right" scope="col">Angka Kredit</th>
                                              <th  class="text-right" scope="col">Action</th>
                                            </tr>
                                          </thead>
                                    <tbody>
                                    @foreach ($butir_terampil4B as $butir)
                                      <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <th scope="row">{{$butir->item_name}}</th>
                                        <td class="text-right">{{$butir->point}}</td>
                                        <td class="text-right"><button type="button" class="btn btn-info">Upload</button></td>
                                      </tr>
                                    @endforeach
                                    </tbody>
                                  </table>
                            </div>
                    {{-- akhir --}}
                     {{-- Table C --}}
               <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">C . Penerjemahan / Penyaduran Buku dan Bahan-Bahan Lain di Bidang Kegiatan Teknologi Informasi</li>
                    </ol>
                    </nav>
                    <div class="table-responsive">
                            <table class="table table-hover">
                                    <thead>
                                            <tr>
                                              <th scope="col">No</th>
                                              <th scope="col">Butir Kegiatan</th>
                                              <th class="text-right" scope="col">Angka Kredit</th>
                                              <th  class="text-right" scope="col">Action</th>
                                            </tr>
                                          </thead>
                                    <tbody>
                                    @foreach ($butir_terampil4C as $butir)
                                      <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <th scope="row">{{$butir->item_name}}</th>
                                        <td class="text-right">{{$butir->point}}</td>
                                        <td class="text-right"><button type="button" class="btn btn-info">Upload</button></td>
                                      </tr>
                                    @endforeach
                                    </tbody>
                                  </table>
                            </div>
                    {{-- akhir --}}
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingFive">
            <h2 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                V . Pendukung Kegiatan Pranata Komputer
              </button>
            </h2>
          </div>
          <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
            <div class="card-body">
               {{-- Table A --}}
               <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">A . Mengajar atau Melatih dibidang Teknologi Informasi</li>
                    </ol>
                    </nav>
                    <div class="table-responsive">
                            <table class="table table-hover">
                                    <thead>
                                            <tr>
                                              <th scope="col">No</th>
                                              <th scope="col">Butir Kegiatan</th>
                                              <th class="text-right" scope="col">Angka Kredit</th>
                                              <th  class="text-right" scope="col">Action</th>
                                            </tr>
                                          </thead>
                                    <tbody>
                                    @foreach ($butir_terampil5A as $butir)
                                      <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <th scope="row">{{$butir->item_name}}</th>
                                        <td class="text-right">{{$butir->point}}</td>
                                        <td class="text-right"><button type="button" class="btn btn-info">Upload</button></td>
                                      </tr>
                                    @endforeach
                                    </tbody>
                                  </table>
                            </div>
                    {{-- akhir --}}
                     {{-- Table B --}}
               <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">B . Peran serta dalam Seminar / Lokakarya / Konferensi</li>
                    </ol>
                    </nav>
                    <div class="table-responsive">
                            <table class="table table-hover">
                                    <thead>
                                            <tr>
                                              <th scope="col">No</th>
                                              <th scope="col">Butir Kegiatan</th>
                                              <th class="text-right" scope="col">Angka Kredit</th>
                                              <th  class="text-right" scope="col">Action</th>
                                            </tr>
                                          </thead>
                                    <tbody>
                                    @foreach ($butir_terampil5B as $butir)
                                      <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <th scope="row">{{$butir->item_name}}</th>
                                        <td class="text-right">{{$butir->point}}</td>
                                        <td class="text-right"><button type="button" class="btn btn-info">Upload</button></td>
                                      </tr>
                                    @endforeach
                                    </tbody>
                                  </table>
                            </div>
                    {{-- akhir --}}
                     {{-- Table C --}}
               <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">C . Keanggotaan dalam Tim Penilai JFPK</li>
                    </ol>
                    </nav>
                    <div class="table-responsive">
                            <table class="table table-hover">
                                    <thead>
                                            <tr>
                                              <th scope="col">No</th>
                                              <th scope="col">Butir Kegiatan</th>
                                              <th class="text-right" scope="col">Angka Kredit</th>
                                              <th  class="text-right" scope="col">Action</th>
                                            </tr>
                                          </thead>
                                    <tbody>
                                    @foreach ($butir_terampil5C as $butir)
                                      <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <th scope="row">{{$butir->item_name}}</th>
                                        <td class="text-right">{{$butir->point}}</td>
                                        <td class="text-right"><button type="button" class="btn btn-info">Upload</button></td>
                                      </tr>
                                    @endforeach
                                    </tbody>
                                  </table>
                            </div>
                    {{-- akhir --}}
                     {{-- Table D --}}
               <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">D . Keanggotaan dalam Organisasi Profesi</li>
                    </ol>
                    </nav>
                    <div class="table-responsive">
                            <table class="table table-hover">
                                    <thead>
                                            <tr>
                                              <th scope="col">No</th>
                                              <th scope="col">Butir Kegiatan</th>
                                              <th class="text-right" scope="col">Angka Kredit</th>
                                              <th  class="text-right" scope="col">Action</th>
                                            </tr>
                                          </thead>
                                    <tbody>
                                    @foreach ($butir_terampil5D as $butir)
                                      <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <th scope="row">{{$butir->item_name}}</th>
                                        <td class="text-right">{{$butir->point}}</td>
                                        <td class="text-right"><button type="button" class="btn btn-info">Upload</button></td>
                                      </tr>
                                    @endforeach
                                    </tbody>
                                  </table>
                            </div>
                    {{-- akhir --}}
                      {{-- Table E --}}
               <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">E . Perolehan Piagam Kehormatan</li>
                    </ol>
                    </nav>
                    <div class="table-responsive">
                            <table class="table table-hover">
                                    <thead>
                                            <tr>
                                              <th scope="col">No</th>
                                              <th scope="col">Butir Kegiatan</th>
                                              <th class="text-right" scope="col">Angka Kredit</th>
                                              <th  class="text-right" scope="col">Action</th>
                                            </tr>
                                          </thead>
                                    <tbody>
                                    @foreach ($butir_terampil5E as $butir)
                                      <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <th scope="row">{{$butir->item_name}}</th>
                                        <td class="text-right">{{$butir->point}}</td>
                                        <td class="text-right"><button type="button" class="btn btn-info">Upload</button></td>
                                      </tr>
                                    @endforeach
                                    </tbody>
                                  </table>
                            </div>
                    {{-- akhir --}}
                    {{-- Table F --}}
               <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">F . Perolehan Gelar Kesarjanaan lainnya</li>
                    </ol>
                    </nav>
                    <div class="table-responsive">
                            <table class="table table-hover">
                                    <thead>
                                            <tr>
                                              <th scope="col">No</th>
                                              <th scope="col">Butir Kegiatan</th>
                                              <th class="text-right" scope="col">Angka Kredit</th>
                                              <th  class="text-right" scope="col">Action</th>
                                            </tr>
                                          </thead>
                                    <tbody>
                                    @foreach ($butir_terampil5F as $butir)
                                      <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <th scope="row">{{$butir->item_name}}</th>
                                        <td class="text-right">{{$butir->point}}</td>
                                        <td class="text-right"><button type="button" class="btn btn-info">Upload</button></td>
                                      </tr>
                                    @endforeach
                                    </tbody>
                                  </table>
                            </div>
                    {{-- akhir --}}
            </div>
          </div>
        </div>
      </div>
@stop