@extends('layouts.app')

@section('content')
@include('partials.hero', ['stats' => $stats])
@include('partials.profil', ['misi' => $misi, 'keunggulan' => $keunggulan])
@include('partials.mata-pelajaran', ['mataPelajaran' => $mataPelajaran])
@include('partials.fasilitas')
@include('partials.peluang-kerja', ['peluangKerja' => $peluangKerja])
@include('partials.guru', ['guru' => $guru])
@include('partials.kontak', ['kontak' => $kontak])
@endsection