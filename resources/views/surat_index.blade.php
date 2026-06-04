<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <title>Hello, world!</title>
    </head>
    <body>
    
    <div class="card p-4">
        <h3>Daftar Pengajuan Surat Keluarahan</h3>
        <table class="table table-striped table-bordered mt-3">
            <thead>             
                <tr>                 
                    <th>No Surat</th>                 
                    <th>Jenis Surat</th>                 
                    <th>Nama Pemohon</th>                 
                    <th>NIK Pemohon</th>                 
                    <th>Tanggal Ajuan</th>             
                </tr>         
            </thead>         
            <tbody>             
            @foreach($semuaSurat as $s)             
            <tr>                 
                <td>{{ $s->nomor_surat }}</td>                 
                <td>{{ $s->jenis_surat }}</td>                 
                <td>{{ $s->penduduk->nama }}</td>                 
                <td>{{ $s->penduduk->nik }}</td>                 
                <td>{{ $s->tanggal_ajuan }}</td>             
            </tr>             
            @endforeach         
            </tbody>     
        </table> 
    </div> 

</body>
</html>