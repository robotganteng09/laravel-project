<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Profile siswa</h1>
    <p>nama : {{$nama}}</>
    <p>absen: {{$absen}}</p>
    <p>kelas : {{$kelas}}</p>
</body>
</html>
 -->

 <x-layout>
    <x-slot:judul>{{$title}}</x-slot>
    <h2>Profile Siswa</h2>
    <p>{{$nama}}</p>
    <p>{{$absen}}</p>
    <p>{{$kelas}}</p>
 </x-layout>