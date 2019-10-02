<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Tutorial Laravel #22 : SoftDeletes Laravel - www.malasngoding.com</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    CRUD Data Mahasiswa - <a href="https://www.malasngoding.com/category/laravel" target="_blank">www.malasngoding.com</a>
                </div>
                <div class="card-body">
                    <a href="/mahasiswa/" class="btn btn-info">Data Mahasiswa</a>
                    <a href="/mahasiswa/tambah" class="btn btn-primary">Input Mahasiswa Baru</a>
                    <a href="/mahasiswa/trash"  class="btn btn-danger">Tong Sampah</a>
                    <br/>
                    <br/>
                    <a href="/mahasiswa/kembalikan_semua">Kembalikan Semua</a>
                    |
                    <a href="/mahasiswa/hapus_permanen_semua">Hapus Permanen Semua</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($mahasiswa as $p)
                            <tr>
                                <td>{{ $p->nama }}</td>
                                <td>{{ $p->alamat }}</td>
                                <td>
                                    <a href="/mahasiswa/kembalikan/{{ $p->id }}" class="btn btn-success btn-sm">Restore</a>
                                    <a href="/mahasiswa/hapus_permanen/{{ $p->id }}" class="btn btn-danger btn-sm">Hapus Permanen</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>