@extends('layouts.app2')
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        font-family: 'Nunito', sans-serif;
        th {
            border: 1px solid;
            text-align: center;
            padding: 10px;
        }
        td {
            border: 1px solid;
            text-align: center;
            padding: 10px;
        }
        td, th{
            border: 1px solid;
        }
    </style>
@section('title','Profil')
@section('content')
    <p style= "font-size: 48px ; font-weight: bold ; text-align: center ; margin: 40px 0 0 0 ; text-decoration: underline">DATA MAHASISWA</p>
{{-- <table style= "margin-right:auto ; margin-left:auto"> --}}
        <table class="table table-bordered table-hover">
        <tr>
            <th>Nama</th>
            <td>Jefferson Luckianto</td>
        </tr>
        <tr>
            <th>Nim</th>
            <td>03081210033</td>
        </tr>
        <tr>
            <th>Prodi</th>
            <td>Sistem Informasi</td>
        </tr>
        <tr>
            <th>Mata Kuliah</th>
            <td>Pemrograman Aplikasi Bisnis</td>
        </tr>
    </table>
@endsection
