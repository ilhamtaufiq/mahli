<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hasil Pencarian</title>

    <style>
         * {
            outline: none;
        }

        html,
        body {
            height: 100%;
            min-height: 100%;
        }

        body {
            margin: 0;
            background-color: #ffd8d8;
        }
    </style>
</head>

<body>
    @include('sweetalert::alert')
    <h3>Hasil Pencarian: <b>{{$q}}</b></h3>
    <table class="table">
        <thead class="table-dark">
            <tr>
                <td>Sub Kegiatan</td>
                <td>Nama Pekerjaan</td>
                <td>Nama Pelaksana</td>
                <td>Nomor Kontrak</td>
                <td>Nilai Kontrak</td>
                <td>Masa Pelaksanaan</td>
                <td>Kode RUP</td>
                <td>Kode Paket</td>
            </tr>
        </thead>
        <tbody>
            @foreach($keg as $item)
                <tr>
                    <td>{{$item->sub_kegiatan}}</td>
                    <td>{{ $item->nama_pekerjaan }}</td>
                    <td>{{ $item->pelaksana }}</td>
                    <td>{{ $item->spk }}</td>
                    <td>{{ number_format($item->nilai_kontrak,'2',',','.') }}
                    </td>
                    <td>{{ date('m-Y', strtotime($item->tgl_mulai)) }} -
                        {{ date('m-Y', strtotime($item->tgl_selesai)) }}
                        {{ $item->masa_pelaksanaan }} Hari Kalender</td>
                    <td>{{ $item->kode_rup }}</td>
                    <td>{{ $item->kode_paket }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="row">
        <div class="col-lg-12">
            <button class="btn btn-sm btn-success" onclick="history.back()">Kembali</button>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>
