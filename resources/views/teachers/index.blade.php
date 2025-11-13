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

        <a href="{{ route('teachers.create') }}" 
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
                @foreach ($teachers as $guru)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $guru->name }}</td>
                        <td>{{ $guru->subject->name ?? '-' }}</td>
                        <td>{{ $guru->phone }}</td>
                        <td>{{ $guru->email }}</td>
                        <td>
                            <a href="{{ route('teachers.edit', $guru->id) }}" 
                               class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded">
                               Edit
                            </a>
                            
                            <form action="{{ route('teachers.destroy', $guru->id) }}" 
                                  method="POST" 
                                  class="inline"
                                  onsubmit="return confirm('Yakin ingin hapus data ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" 
                                        class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-admin.layout>
