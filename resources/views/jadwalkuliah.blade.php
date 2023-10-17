<?php
use App\Models\jadwalkuliah;
?>

@extends('layouts.app2')
{{-- <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> --}}
    {{-- <style>
        th {
            border: 1px solid;
            text-align: center;
            padding: 12px;
        }
        td {
            border: 1px solid;
            text-align: center;
            padding: 12px;
        }
    </style> --}}
@section('title','Jadwal Kuliah')
@section('content')
<div class= "container">
    <p style= "font-size: 48px ; font-weight: bold ; text-align: center ; margin: 40px 0 0 0 ; text-decoration: underline">DATA MAHASISWA</p>
    {{-- <table style= "margin-right:auto ; margin-left:auto"> --}}
    <table class="table table-bordered table-hover">
        <tr>
            <th>ID</th>
            <th>Kode Mata Kuliah</th>
            <th>Kode Term</th>
            <th>Kode Dosen</th>
            <th>day</th>
            <th>Jam Mulai</th>
            <th>Jam Selesai</th>
            <th>Ruangan</th>

        </tr>
        <tr>
                @foreach ($jadwalkuliahs as $jadwalkuliah)
                    <tr>
                        <td>
                            {{$jadwalkuliah->id}}
                        </td>
                        <td>
                            {{$jadwalkuliah->kode_matakuliah}}
                        </td>
                        <td>
                            {{$jadwalkuliah->kode_term}}
                        </td>
                        <td>
                            {{$jadwalkuliah->kode_dosen}}
                        </td>
                        <td>
                            {{$jadwalkuliah->day}}
                        </td>
                        <td>
                            {{$jadwalkuliah->jam_mulai}}
                        </td>
                        <td>
                            {{$jadwalkuliah->jam_selesai}}
                        </td>
                        <td>
                            {{$jadwalkuliah->ruangan}}
                        </td>
                    </tr>
                @endforeach
        </tr>
    </table>
</div>
@endsection
