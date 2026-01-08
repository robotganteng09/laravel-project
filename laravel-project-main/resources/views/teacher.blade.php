<x-layout>
    <x-slot:judul>apa aja</x-slot:judul>

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
                <th>subject</th>
                <th>phone</th>
                
                <th>alamat</th>
               
            </tr>
        </thead>
        <tbody>
            @foreach ($teacher as $guru)
            <tr>
                <td>{{ $loop -> iteration }}</td>
                <td>{{ $guru['name'] }}</td>
                <td>{{$guru->subject->name}}</td>
                <td>{{ $guru['phone'] }}</td>
               
                <td>{{ $guru['address'] }}</td>
               
            </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>