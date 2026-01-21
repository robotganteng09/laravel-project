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
                <th>subject</th>
                <th>desc</th>
                
               
            </tr>
        </thead>
        <tbody>
            @foreach ($subject as $pelajaran)
            <tr>
                <td>{{ $loop -> iteration }}</td>
                <td>{{ $pelajaran['name'] }}</td>
                <td>{{$pelajaran['description']}}</td>
               
               
            </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>