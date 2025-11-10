<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Service;
use App\Models\Banner;
use App\Models\Client;
use App\Models\ClientReview;
use App\Models\Project;
use App\Models\SocialMedia;

class AllSeeder extends Seeder
{
    public function run(): void
    {
        // =====================
        // 1. USERS
        // =====================
        User::create([
            'name' => 'Admin Portfolio',
            'email' => 'admin@example.com',
            'password' => Hash::make('password123'),
            'is_admin' => true,
        ]);

        User::create([
            'name' => 'User Biasa',
            'email' => 'user@example.com',
            'password' => Hash::make('password123'),
            'is_admin' => false,
        ]);

        // =====================
        // 2. SERVICES
        // =====================
        $services = [
            ['title' => 'Web Development', 'image' => 'services/web-dev.png', 'description' => 'Membuat website modern dan responsive.'],
            ['title' => 'Mobile App', 'image' => 'services/mobile-app.png', 'description' => 'Membuat aplikasi Android & iOS.'],
            ['title' => 'UI/UX Design', 'image' => 'services/ui-ux.png', 'description' => 'Desain antarmuka yang menarik dan intuitif.'],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }

        // =====================
        // 3. BANNERS
        // =====================
        $banners = [
            ['title' => 'Selamat Datang', 'url_image' => 'banners/banner1.jpg', 'description' => 'Portfolio terbaik kami.'],
            ['title' => 'Proyek Terbaru', 'url_image' => 'banners/banner2.jpg', 'description' => 'Proyek-proyek unggulan kami.'],
        ];

        foreach ($banners as $banner) {
            Banner::create($banner);
        }

        // =====================
        // 4. CLIENTS
        // =====================
        $client1 = Client::create([
            'name' => 'PT. Contoh Client',
            'logo' => 'clients/client1.png',
            'website' => 'https://client1.com',
        ]);

        $client2 = Client::create([
            'name' => 'CV. Demo Client',
            'logo' => 'clients/client2.png',
            'website' => 'https://client2.com',
        ]);

        // =====================
        // 5. CLIENT REVIEWS
        // =====================
        ClientReview::create([
            'client_id' => $client1->id,
            'reviewer_name' => 'John Doe',
            'position' => 'CEO',
            'review' => 'Layanan profesional dan cepat!',
            'rating' => 5,
            'avatar' => 'reviews/john.png',
        ]);

        ClientReview::create([
            'client_id' => $client2->id,
            'reviewer_name' => 'Jane Smith',
            'position' => 'Manager',
            'review' => 'Hasil memuaskan dan tepat waktu.',
            'rating' => 4,
            'avatar' => 'reviews/jane.png',
        ]);

        // =====================
        // 6. PROJECTS
        // =====================
        Project::create([
            'title' => 'Website Company Profile',
            'slug' => 'website-company-profile',
            'description' => 'Website profile untuk perusahaan klien.',
            'image' => 'projects/project1.png',
            'technologies' => 'Laravel, Vue.js',
            'link' => 'https://project1.com',
            'client_id' => $client1->id,
            'platform' => 'Web',
        ]);

        Project::create([
            'title' => 'Mobile App Demo',
            'slug' => 'mobile-app-demo',
            'description' => 'Aplikasi mobile untuk demo produk.',
            'image' => 'projects/project2.png',
            'technologies' => 'Flutter, Firebase',
            'link' => 'https://project2.com',
            'client_id' => $client2->id,
            'platform' => 'Mobile',
        ]);

        // =====================
        // 7. SOCIAL MEDIAS
        // =====================
        $socials = [
            ['platform' => 'Facebook', 'url' => 'https://facebook.com/portfolio', 'icon_class' => 'fab fa-facebook-f'],
            ['platform' => 'Instagram', 'url' => 'https://instagram.com/portfolio', 'icon_class' => 'fab fa-instagram'],
            ['platform' => 'LinkedIn', 'url' => 'https://linkedin.com/company/portfolio', 'icon_class' => 'fab fa-linkedin-in'],
        ];

        foreach ($socials as $social) {
            SocialMedia::create($social);
        }
    }
}
