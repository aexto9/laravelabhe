@php
$nama = "Budi";
$nilai = 79.99;
@endphp

{{-- struktur kendali if --}}
@if ($nilai >= 60)
    @php $ket = "Lulus"; @endphp
@else
    @php $ket = "Gagal"; @endphp
@endif

<h1>{{$ket}}</h1>