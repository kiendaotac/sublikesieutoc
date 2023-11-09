<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'parent_id'   => null,
                'name'        => 'Dịch Vụ FaceBook',
                'slug'        => 'dich-vu-facebook',
                'type'        => 'FACEBOOK',
                'icon'        => '<i class="ki-duotone ki- facebook">
                                 <span class="path1"></span>
                                 <span class="path2"></span>
                                </i>',
                'price'       => 0,
                'extra_data'  => null,
                'description' => 'Dịch Vụ FaceBook',
                'status'      => 'active',
            ],
            [
                'parent_id'   => 1,
                'name'        => 'Like Facebook Fanpage',
                'slug'        => 'like-facebook-fanpage',
                'type'        => 'FACEBOOK_LIKE_PAGE',
                'icon'        => '<i class="ki-duotone ki- like">
                                 <span class="path1"></span>
                                 <span class="path2"></span>
                                </i>',
                'price'       => 1000,
                'extra_data'  => null,
                'description' => 'Like Facebook Fanpage',
                'status'      => 'active',
            ],
        ];
        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
