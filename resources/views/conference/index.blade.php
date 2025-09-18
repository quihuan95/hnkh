@extends('layouts.app')

@section('title', 'Hội Nghị Khoa Học Y Học Dự Phòng Toàn Quốc Năm 2025')
@section('description', 'Lễ Kỷ Niệm 80 Năm Ngày Truyền Thống Viện Vệ Sinh Dịch Tễ Trung Ương & Hội Nghị Khoa Học Y Học
Dự Phòng Toàn Quốc Năm 2025')

@section('content')
{{-- @include('components.hero-section') --}}
@include('components.conference-sections')
{{-- @include('components.program-schedule') --}}
@include('components.sponsors-section')
@endsection