<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HỘI Y HỌC DỰ PHÒNG VIỆT NAM</title>
  <meta name="description" content="@yield('description', 'Hội nghị Khoa học chào mừng kỷ niệm 105 năm lịch sử hình thành và 55 năm ngày sáp nhập Bệnh viện Đa khoa Xanh Pôn')">

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

  <!-- Scripts -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  @stack('styles')
</head>

<body class="font-sans antialiased bg-green-50">
  <!-- Header -->
  {{-- <header class="bg-white shadow-lg">
    <div class="container mx-auto px-4">
      <div class="flex items-center justify-between h-16">
        <!-- Logo -->
        <div class="flex items-center space-x-4">
          <div class="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center">
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
            </svg>
          </div>
          <div>
            <h1 class="text-xl font-bold text-blue-900">Bệnh viện Đa khoa Xanh Pôn</h1>
            <p class="text-sm text-gray-600">Hội nghị Khoa học 2024</p>
          </div>
        </div>

        <!-- Navigation -->
        <nav class="hidden md:flex items-center space-x-8">
          <a href="{{ route('conference.index') }}" class="text-blue-600 hover:text-blue-800 font-medium transition-colors">
            Trang chủ
          </a>
          <a href="#program" class="text-gray-600 hover:text-blue-600 font-medium transition-colors">
            Chương trình
          </a>
          <a href="#sections" class="text-gray-600 hover:text-blue-600 font-medium transition-colors">
            Thông tin
          </a>
          <a href="#sponsors" class="text-gray-600 hover:text-blue-600 font-medium transition-colors">
            Đối tác
          </a>
        </nav>

        <!-- Mobile menu button -->
        <button class="md:hidden p-2 rounded-md text-gray-600 hover:text-blue-600 hover:bg-gray-100">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>
      </div>
    </div>
  </header> --}}

  <!-- Main Content -->
  <main class="min-h-screen">
    @yield('content')
  </main>

  <!-- Footer -->
  <footer class="bg-green-600 text-white">
    <div class="container mx-auto px-4 py-8">
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Organization Info -->
        <div>
          <h3 class="text-lg font-bold mb-4 text-gray-900">HỘI Y HỌC DỰ PHÒNG VIỆT NAM</h3>
          <p class="text-sm text-gray-800 mb-2 font-semibold">VIETNAM ASSOCIATION OF PREVENTIVE MEDICINE</p>
          <div class="text-sm text-gray-700 font-medium">
            <p class="mb-1">Địa chỉ: Số 1 – Phố Yecxanh – Phường Hai Bà Trưng – Hà Nội</p>
            <p class="mb-1">Tel: (84-24) 3.821.2563 – 0911036700</p>
          </div>
        </div>

        <!-- Contact Info -->
        <div>
          <h3 class="text-lg font-bold mb-4 text-gray-900">Liên hệ</h3>
          <div class="text-sm text-gray-700 space-y-2 font-medium">
            <p>Website: <a href="https://hoiyhocduphong.vn" class="text-gray-800 hover:text-gray-900 underline font-semibold" target="_blank">hoiyhocduphong.vn</a></p>
            <p>Email: <a href="mailto:hoiyhocduphongvn@gmail.com" class="text-gray-800 hover:text-gray-900 underline font-semibold">hoiyhocduphongvn@gmail.com</a></p>
          </div>
        </div>

        <!-- Copyright -->
        <div class="md:col-span-2 lg:col-span-1">
          <div class="text-sm text-gray-700 font-medium">
            <p class="mb-2">&copy; {{ date('Y') }} Hội Y học Dự phòng Việt Nam. Tất cả quyền được bảo lưu.</p>
            <p class="text-xs text-gray-600 font-semibold">Powered by <a href="https://hoiyhocduphong.vn" class="hover:text-gray-800 underline"
                target="_blank">hoiyhocduphong.vn</a>
            </p>
          </div>
        </div>
      </div>

      <!-- Bottom border -->
      <div class="border-t border-green-500 mt-8 pt-4 text-center">
        <p class="text-xs text-gray-600 font-semibold">Hội nghị Khoa học Y học Dự phòng Toàn quốc năm 2025</p>
      </div>
    </div>
  </footer>

  @stack('scripts')
</body>

</html>
