<x-layout>
    <x-slot:judul>{{$title}}</x-slot:judul>

    <style>
        * {
            color: black;
        }

        table,
        th,
        td {
            border: 2px solid black;
            padding: 8px;
            text-align: center;
        }
    </style>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>kelas</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>tanggal lahir</th>
                <th>gender</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
            <tr>
                <td>{{ $loop -> iteration }}</td>
                <td>{{ $student['name'] }}</td>
                <td>{{$student->classroom->name}}</td>
                <td>{{ $student['email'] }}</td>
                <td>{{ $student['alamat'] }}</td>
                <td>{{$student['birthday']}}</td>
                <td>{{$student['gender']}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>