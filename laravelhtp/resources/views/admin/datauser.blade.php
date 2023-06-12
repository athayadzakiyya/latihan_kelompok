 @extends('admin.layouts.index')


 @section('content')
     <div class="content-wrapper">
         <!-- Content -->

         <div class="container-xxl flex-grow-1 container-p-y">
             <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Data User Terdaftar</h4>

             <!-- Basic Bootstrap Table -->
             <div class="card">
                 <h5 class="card-header">Table Basic</h5>
                 <div class="table-responsive text-nowrap">
                     <table class="table">
                         <thead>
                             <tr>
                                 <th>Nama</th>
                                 <th>Email</th>
                                 <th>Jenis Kelamin</th>
                                 <th>Tempat Lahir</th>
                                 <th>Alamat</th>
                                 <th>Tanggal Lahir</th>
                                 <th>Tahun Ajar</th>
                                 <th>Foto Anak</th>
                                 <th>fc ijazah</th>
                                 <th>fc SKHUN</th>
                                 <th>FC NISN</th>
                                 <th>FC BPJS</th>
                                 <th>FC KK</th>
                                 <th>FC AKTE LAHIR</th>
                                 <th>FC KTP ORANG TUA</th>
                                 <th>FOTO SURAT SEHAT</th>
                                
                             </tr>
                         </thead>
                         <tbody class="table-border-bottom-0">
                             <tr>
                                 <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Angular Project</strong>
                                 </td>
                                 <td>laniwambuliga@gmail.com</td>
                                 <td>laki-laki</td>
                                 <td>sombu</td>
                                 <td>desa sombu</td>
                                 <td>27-02-2003</td>
                                 <td>2020</td>
                                 <td>
                                    <img src="" alt="foto anak">
                                 </td>
                                 
                                 <td>
                                    <img src="" alt="fc ijazah">
                                 </td>
                                 
                                 <td>
                                    <img src="" alt="fc skhun">
                                 </td>
                                 
                                 <td>
                                    <img src="" alt="fc nisn">
                                 </td>
                                 
                                 <td>
                                    <img src="" alt="fc bpjs">
                                 </td>
                                 
                                 <td>
                                    <img src="" alt="fc kk">
                                 </td>
                                 
                                 <td>
                                    <img src="" alt="fc akte lahir">
                                 </td>
                                 
                                 <td>
                                    <img src="" alt="fc ktp orang tua">
                                 </td>
                                 
                                 <td>
                                    <img src="" alt="foto surat sehat">
                                 </td>
                                 
                                 
                             </tr>       
                         </tbody>
                     </table>
                 </div>
             </div>
         @endsection
