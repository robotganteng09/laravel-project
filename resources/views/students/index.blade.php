<x-admin.layout>
    <div class="p-6">
        <h1 class="text-2xl font-bold mb-4">Daftar Siswa</h1>

        @if(session('success'))
            <div class="bg-green-100 text-green-700 p-2 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('students.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-3 inline-block">Tambah Siswa</a>

        <table class="w-full border border-gray-300 mt-3">
            <thead>
                <tr class="bg-gray-100">
                    <th class="border p-2">Nama</th>
                    <th class="border p-2">Email</th>
                    <th class="border p-2">Kelas</th>
                    <th class="border p-2">Alamat</th>
                    <th class="border p-2">Tanggal Lahir</th>
                    <th class="border p-2">Gender</th>
                    <th class="border p-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($students as $student)
                <tr>
                    <td class="border p-2">{{ $student->name }}</td>
                    <td class="border p-2">{{ $student->email }}</td>
                    <td class="border p-2">{{ $student->classroom->name ?? '-' }}</td>
                    <td class="border p-2">{{ $student->alamat }}</td>
                    <td class="border p-2">{{ $student->birthday }}</td>
                    <td class="border p-2">{{ ucfirst($student->gender) }}</td>
                    <td class="border p-2">
                        <a href="{{ route('students.edit', $student->id) }}" class="text-blue-500">Edit</a> |
                        <form action="{{ route('students.destroy', $student->id) }}" method="POST" class="inline">
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
