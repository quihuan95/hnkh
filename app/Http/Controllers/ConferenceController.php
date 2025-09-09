<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConferenceController extends Controller
{
  public function index()
  {
    $conferenceData = [
      'title' => 'HỘI NGHỊ KHOA HỌC',
      'subtitle' => 'CHÀO MỪNG KỶ NIỆM 105 NĂM LỊCH SỬ HÌNH THÀNH VÀ 55 NĂM NGÀY SÁP NHẬP BỆNH VIỆN ĐA KHOA XANH PÔN',
      'date' => 'Ngày 15-16 tháng 12 năm 2024',
      'location' => 'Bệnh viện Đa khoa Xanh Pôn, Hà Nội',

      'sections' => [
        [
          'title' => 'Thông tin chung',
          'icon' => 'info',
          'items' => [
            [
              'title' => 'Sơ đồ Hội nghị',
              'icon' => 'map',
              'url' => '#',
              'description' => 'Bản đồ và hướng dẫn di chuyển trong hội nghị'
            ],
            [
              'title' => 'Hướng dẫn tham dự hội nghị',
              'icon' => 'guide',
              'url' => '#',
              'description' => 'Quy trình đăng ký và tham dự hội nghị'
            ],
            [
              'title' => 'Địa điểm tổ chức',
              'icon' => 'location',
              'url' => '#',
              'description' => 'Thông tin chi tiết về địa điểm tổ chức'
            ]
          ]
        ],
        [
          'title' => 'Chương trình và tài liệu hội nghị',
          'icon' => 'document',
          'items' => [
            [
              'title' => 'Tài liệu tóm tắt nội dung Hội nghị',
              'icon' => 'file-text',
              'url' => '#',
              'description' => 'Tài liệu tổng hợp các nội dung chính'
            ],
            [
              'title' => 'Chương trình tổng thể',
              'icon' => 'calendar',
              'url' => '#',
              'description' => 'Lịch trình tổng quan của hội nghị'
            ],
            [
              'title' => 'Chương trình chi tiết',
              'icon' => 'list',
              'url' => '#',
              'description' => 'Chi tiết từng phiên họp và hoạt động'
            ]
          ]
        ],
        [
          'title' => 'Hội trường',
          'icon' => 'building',
          'items' => [
            [
              'title' => 'Phiên toàn thể: Tổng quan về Y học dự phòng',
              'icon' => 'users',
              'url' => '#',
              'description' => 'Phiên họp chính với tất cả đại biểu'
            ],
            [
              'title' => 'Phiên chuyên đề 1: Vắc xin và phòng bệnh bằng vắc xin',
              'icon' => 'shield',
              'url' => '#',
              'description' => 'Chuyên đề về vắc xin và phòng chống bệnh tật'
            ],
            [
              'title' => 'Phiên chuyên đề 2: Bệnh truyền nhiễm, bệnh mới nổi',
              'icon' => 'alert-triangle',
              'url' => '#',
              'description' => 'Thảo luận về các bệnh truyền nhiễm và mới nổi'
            ],
            [
              'title' => 'Phiên chuyên đề 3: Bệnh không lây nhiễm, dinh dưỡng',
              'icon' => 'heart',
              'url' => '#',
              'description' => 'Chuyên đề về bệnh không lây và dinh dưỡng'
            ],
            [
              'title' => 'Phiên chuyên đề 4: Sức khỏe nghề nghiệp và môi trường',
              'icon' => 'leaf',
              'url' => '#',
              'description' => 'Sức khỏe nghề nghiệp và tác động môi trường'
            ],
            [
              'title' => 'Phiên chuyên đề 5: Đào tạo Y học dự phòng',
              'icon' => 'graduation-cap',
              'url' => '#',
              'description' => 'Đào tạo và phát triển nguồn nhân lực'
            ],
            [
              'title' => 'Phiên chuyên đề 6: Trình bày Poster',
              'icon' => 'image',
              'url' => '#',
              'description' => 'Triển lãm và trình bày các nghiên cứu'
            ]
          ]
        ]
      ],

      'program' => [
        [
          'time' => '10:00 - 10:30',
          'title' => 'Đón tiếp đại biểu',
          'type' => 'welcome',
          'description' => 'Đăng ký và đón tiếp các đại biểu tham dự'
        ],
        [
          'time' => '10:30 - 17:00',
          'title' => 'HỘI NGHỊ KHOA HỌC',
          'type' => 'main',
          'description' => 'CHÀO MỪNG KỶ NIỆM 105 NĂM LỊCH SỬ HÌNH THÀNH VÀ 55 NĂM NGÀY SÁP NHẬP BỆNH VIỆN ĐA KHOA XANH PÔN'
        ],
        [
          'time' => '10:30 - 10:45',
          'title' => 'Khai mạc chương trình',
          'type' => 'opening',
          'description' => 'Phát biểu khai mạc và giới thiệu chương trình'
        ],
        [
          'time' => '10:45 - 12:00',
          'title' => 'PHIÊN KHOA HỌC TOÀN THỂ',
          'type' => 'plenary',
          'description' => 'Phiên họp chính với tất cả đại biểu'
        ],
        [
          'time' => '12:00 - 13:30',
          'title' => 'Nghỉ trưa - Tiệc buffet',
          'type' => 'break',
          'description' => 'Nghỉ ngơi và giao lưu giữa các đại biểu'
        ],
        [
          'time' => '13:30 - 17:00',
          'title' => 'CÁC PHIÊN KHOA HỌC CHUYÊN ĐỀ',
          'type' => 'specialized',
          'description' => 'Các phiên họp chuyên đề song song',
          'sub_sessions' => [
            'Hội trường 1: Chuyên đề Ngoại khoa 1: Ngoại Tiêu hóa, Ngoại Tiết niệu, Tim mạch lồng ngực',
            'Hội trường 2: Chuyên đề Ngoại khoa 2: Chấn thương chỉnh hình, Phẫu thuật tạo hình, Phẫu thuật thần kinh',
            'Hội trường 3: Chuyên đề Nội tổng hợp',
            'Hội trường 4: Chuyên đề Nội nhi - Ngoại nhi',
            'Hội trường 5: Chuyên đề Gây mê hồi sức, Hồi sức tích cực & Chống độc',
            'Hội trường 6: Chuyên đề Chẩn đoán hình ảnh',
            'Hội trường 7: Chuyên đề Dược lâm sàng',
            'Hội trường 8: Chuyên đề Điều dưỡng',
            'Hội trường 9: Chuyên đề Chuyển đổi số'
          ]
        ]
      ],

      'sponsors' => [
        [
          'name' => 'Bệnh viện Đa khoa Xanh Pôn',
          'logo' => 'https://placehold.co/600x200.png',
          'type' => 'main'
        ],
        [
          'name' => 'Bộ Y tế',
          'logo' => 'https://placehold.co/600x200.png',
          'type' => 'government'
        ],
        [
          'name' => 'Hội Y học Dự phòng Việt Nam',
          'logo' => 'https://placehold.co/600x200.png',
          'type' => 'association'
        ],
        [
          'name' => 'Đại học Y Hà Nội',
          'logo' => 'https://placehold.co/600x200.png',
          'type' => 'university'
        ]
      ]
    ];

    return view('conference.index', compact('conferenceData'));
  }
}
