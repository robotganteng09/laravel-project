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
               
            </tr>
        </thead>
        <tbody>
            @foreach ($classrooms as $class)
            <tr>
                <td>{{ $loop -> iteration }}</td>
                <td>{{ $class['name'] }}</td>
              
            </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>