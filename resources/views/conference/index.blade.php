@extends('layouts.app')

@section('title', 'Hội nghị Khoa học - Bệnh viện Đa khoa Xanh Pôn')
@section('description', 'Hội nghị Khoa học chào mừng kỷ niệm 105 năm lịch sử hình thành và 55 năm ngày sáp nhập Bệnh viện Đa khoa Xanh Pôn')

@section('content')
  {{-- @include('components.hero-section') --}}
  @include('components.conference-sections')
  {{-- @include('components.program-schedule') --}}
  @include('components.sponsors-section')
@endsection
