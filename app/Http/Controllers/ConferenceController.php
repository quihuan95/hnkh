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
              'url' => 'files/SƠ ĐỒ MẶT BẰNG - Y HỌC DỰ PHÒNG 2025.pdf',
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

      'sponsors' => [
        // Diamond Sponsors (KC - Kim Cương)
        [
          'logo' => 'images/logo/1 kc.png',
          'name' => 'Nhà tài trợ Kim Cương 1',
          'category' => 'Diamond Sponsor',
          'type' => 'diamond'
        ],
        [
          'logo' => 'images/logo/2 kc.png',
          'name' => 'Nhà tài trợ Kim Cương 2',
          'category' => 'Diamond Sponsor',
          'type' => 'diamond'
        ],
        [
          'logo' => 'images/logo/3 kc.png',
          'name' => 'Nhà tài trợ Kim Cương 3',
          'category' => 'Diamond Sponsor',
          'type' => 'diamond'
        ],

        // Gold Sponsors (Vàng)
        [
          'logo' => 'images/logo/4 vàng.png',
          'name' => 'Nhà tài trợ Vàng 1',
          'category' => 'Gold Sponsor',
          'type' => 'gold'
        ],
        [
          'logo' => 'images/logo/5 vàng.png',
          'name' => 'Nhà tài trợ Vàng 2',
          'category' => 'Gold Sponsor',
          'type' => 'gold'
        ],
        [
          'logo' => 'images/logo/6 vàng.png',
          'name' => 'Nhà tài trợ Vàng 3',
          'category' => 'Gold Sponsor',
          'type' => 'gold'
        ],

        // Silver Sponsors (Bạc)
        [
          'logo' => 'images/logo/7 bạc.png',
          'name' => 'Nhà tài trợ Bạc 1',
          'category' => 'Silver Sponsor',
          'type' => 'silver'
        ],
        [
          'logo' => 'images/logo/8 bạc.png',
          'name' => 'Nhà tài trợ Bạc 2',
          'category' => 'Silver Sponsor',
          'type' => 'silver'
        ],
        [
          'logo' => 'images/logo/9 bạc.png',
          'name' => 'Nhà tài trợ Bạc 3',
          'category' => 'Silver Sponsor',
          'type' => 'silver'
        ],

        // Bronze Sponsors (Đồng)
        [
          'logo' => 'images/logo/10 đồng.png',
          'name' => 'Nhà tài trợ Đồng 1',
          'category' => 'Bronze Sponsor',
          'type' => 'bronze'
        ],

        // Copper Sponsors (Đồng TT)
        [
          'logo' => 'images/logo/11 đồng tt.png',
          'name' => 'Nhà tài trợ Đồng TT 1',
          'category' => 'Copper Sponsor',
          'type' => 'copper'
        ],
        [
          'logo' => 'images/logo/12 đồng tt.png',
          'name' => 'Nhà tài trợ Đồng TT 2',
          'category' => 'Copper Sponsor',
          'type' => 'copper'
        ],
        [
          'logo' => 'images/logo/13 đồng tt.png',
          'name' => 'Nhà tài trợ Đồng TT 3',
          'category' => 'Copper Sponsor',
          'type' => 'copper'
        ]
      ]
    ];

    return view('conference.index', compact('conferenceData'));
  }
}