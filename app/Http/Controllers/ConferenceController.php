<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class ConferenceController extends Controller
{
  public function index()
  {
    // Cache conference data for 24 hours
    $conferenceData = Cache::remember('conference_data', 86400, function () {
      return $this->getConferenceData();
    });

    return view('conference.index', compact('conferenceData'));
  }

  private function getConferenceData()
  {
    return [
      'title' => 'HỘI NGHỊ KHOA HỌC',
      'subtitle' => 'CHÀO MỪNG KỶ NIỆM 105 NĂM LỊCH SỬ HÌNH THÀNH VÀ 55 NĂM NGÀY SÁP NHẬP BỆNH VIỆN ĐA KHOA XANH PÔN',
      'date' => 'Ngày 15-16 tháng 12 năm 2024',
      'location' => 'Bệnh viện Đa khoa Xanh Pôn, Hà Nội',

      'sections' => [
        [
          'title' => 'Đăng ký tham dự',
          'icon' => 'document',
          'items' => [
            [
              'title' => 'Đăng ký tham dự',
              'icon' => 'file-text',
              'url' => 'https://docs.google.com/forms/u/0/d/1bhejTLqRdO1txFF61t3dhZssdo1RvRs6Xm_zZnyzarw/viewform?usp=drive_web&edit_requested=true',
              'type' => 'url',
              'description' => 'Đăng ký tham dự tại đây'
            ],
          ]
        ],
        [
          'title' => 'Hướng dẫn',
          'icon' => 'info',
          'items' => [
            [
              'title' => 'Hướng dẫn Tham dự Lễ Kỉ niệm (02/10/2025)',
              'icon' => 'guide',
              'url' => 'files/Sổ tay hướng dẫn đại biểu tham dự LKN 2.10.2025.pdf',
              'type' => 'file'
            ],
            [
              'title' => 'Địa điểm',
              'icon' => 'map',
              'url' => 'https://maps.app.goo.gl/HR6Tj5SqEPfJFms97',
              'type' => 'url'
            ],
            [
              'title' => 'Hướng dẫn Tham dự Hội nghị khoa học (03/10/2025)',
              'icon' => 'guide',
              'url' => 'files/Sổ tay hướng dẫn đại biểu tham dự HNKH 2025.pdf',
              'type' => 'file'
            ],
            [
              'title' => 'Địa điểm',
              'icon' => 'location',
              'url' => 'https://maps.app.goo.gl/CGmGQQmDJN461y5eA',
              'type' => 'url'
            ],
            [
              'title' => 'Sơ đồ Hội trường',
              'icon' => 'map',
              'url' => 'files/SƠ ĐỒ MẶT BẰNG - Y HỌC DỰ PHÒNG 2025.pdf',
              'type' => 'file'
            ],
            [
              'title' => 'Hướng dẫn Tham Dự Chủ tọa | Báo cáo viên',
              'icon' => 'map',
              'url' => 'files/HNKH YHDP 2025_Vai tro dieu hanh cac phien HNKH.pdf',
              'type' => 'file'
            ]
          ]
        ],
        [
          'title' => 'Chương trình',
          'icon' => 'document',
          'items' => [
            [
              'title' => 'Chương trình tổng thể',
              'icon' => 'calendar',
              'url' => 'files/Thu moi EVENT_Hoi YHDP_0918_v3.pdf'
            ],
            [
              'title' => 'Chương trình Lễ Kỉ niệm (02/10/2025)',
              'icon' => 'calendar',
              'url' => 'files/Chương trình lễ kỷ niệm 2.10.pdf'
            ],
            [
              'title' => 'Chương trình Hội nghị khoa học (03/10/2025)',
              'icon' => 'calendar',
              'url' => 'files/chuong-trinh-hoi-nghi-khoa-hoc-3-10.pdf'
            ]
          ]
        ],
        [
          'title' => 'Tài liệu',
          'icon' => 'building',
          'items' => [
            [
              'title' => 'Lễ Kỉ niệm',
              'icon' => 'file',
              'url' => 'images/conference/2. Phiên toàn thể.jpg',
              'type' => 'file'
            ],
            [
              'title' => 'Hội nghị khoa học',
              'icon' => 'file',
              'url' => '#',
              'type' => 'parent',
              'children' => [
                [
                  'title' => '1. Tóm tắt',
                  'icon' => 'shield',
                  'url' => 'files/Tài liệu tóm tắt VAPM 1002 new.pdf',
                  'type' => 'file',
                ],
                [
                  'title' => '2. Toàn văn',
                  'icon' => 'shield',
                  'url' => 'files/TCYHDP so 6PB_2025.pdf',
                  'type' => 'file',
                ],
              ]
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
  }

  public function clearCache()
  {
    Cache::forget('conference_data');
    Cache::forget('file_metadata');
    return response()->json(['message' => 'Cache cleared successfully']);
  }
}
