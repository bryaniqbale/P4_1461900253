<head>
    <meta name='viewport' content="width=device-width,
    initial=scale=1">
    <title>Data Perpus</title>
    <style>
        table{
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
            border: 1px solid #ddd;
        }
        thead{
            background-color: #f2f2f2;
        }
        th, td{
            text-align: left;
            padding: 8px;
        }
        tr:nth-child(even){background-color: #f2f2f2}
        .tambah{
            padding: 8px 16px;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="content">

        
    <div class="card card-info card-outline">
        <div class="card-header"><a href="{{ url('/perpusexport') }}" class="btn btn-success">EXPORT EXCEL</a></div>
        <div class="card-body">


        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Tahun</th>
                    <th>Jenis</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1 ?>
                @foreach ($perpus as $pps)
                    
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $pps->judul }}</td>
                    <td>{{ $pps->tahun_terbit }}</td>
                    <td>{{ $pps->jenis }}</td>
                    <td>
                        
                        
                        </form>
                    </td>
                </tr>

                @endforeach
            </tbody>
        </table>
    </div>
</body>