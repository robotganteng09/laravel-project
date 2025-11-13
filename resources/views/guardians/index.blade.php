<x-admin.layout>
    <style>
        
        table,
        th,
        td {
            border: 2px solid black;
            padding: 8px;
            text-align: center;
        }
    </style>

    <div class="p-6">
        <h1 class="text-xl font-bold mb-4">Daftar Wali</h1>

        <a href="{{ route('guardians.create') }}" 
           class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded mb-4 inline-block">
           + Tambah Wali
        </a>

        <table class="w-full">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Pekerjaan</th>
                    <th>Telepon</th>
                    <th>Email</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($guardians as $walis)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $walis->name }}</td>
                    <td>{{ $walis->job }}</td>
                    <td>{{ $walis->phone }}</td>
                    <td>{{ $walis->email }}</td>
                    <td>
                        <a href="{{ route('guardians.edit', $walis->id) }}" class="text-blue-500">Edit</a> |
                        <form action="{{ route('guardians.destroy', $walis->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button class="text-red-500" onclick="return confirm('Yakin ingin hapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-admin.layout>
