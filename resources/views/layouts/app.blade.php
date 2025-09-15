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

  <!-- Alpine.js CDN -->
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

  @stack('styles')
</head>

<body class="font-sans antialiased bg-green-50">
  <!-- Main Content -->
  <main class="min-h-screen">
    @yield('content')
  </main>

  <!-- Footer -->
  <footer class="bg-gradient-to-r from-green-300 to-green-400 text-white">
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
