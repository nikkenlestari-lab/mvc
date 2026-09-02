<!DOCTYPE html>
<html>
<head>
    <title>Jadwal Kereta</title>
</head>

<body>

    <h1>Jadwal Kereta</h1>

    <table border="1" cellpadding="10">
        <tr>
            <th>Nama Kereta</th>
            <th>Asal</th>
            <th>Tujuan</th>
            <th>Jam Berangkat</th>
            <th>Jam Tiba</th>
        </tr>

        @foreach($trains as $train)
        <tr>
            <td>{{ $train->nama_kereta }}</td>
            <td>{{ $train->asal }}</td>
            <td>{{ $train->tujuan }}</td>
            <td>{{ $train->jam_berangkat }}</td>
            <td>{{ $train->jam_tiba }}</td>
        </tr>
        @endforeach

    </table>

</body>
</html>