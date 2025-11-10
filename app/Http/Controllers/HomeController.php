<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Client;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\ClientReview;
use App\Models\Service;
use App\Models\SocialMedia;

class HomeController extends Controller
{
    public function index()
    {
        $projects = Project::with('client')->get();
        $clientReviews = ClientReview::all();
        $banners = Banner::all();
        $clients = Client::all();
        $socialMedias = SocialMedia::all();
        $services = Service::all();

        // Tambahkan count untuk overview card
        $clientsCount = $clients->count();
        $projectsCount = $projects->count();
        $reviewsCount = $clientReviews->count();

        return view('home', compact(
            'services',
            'projects',
            'clientReviews',
            'socialMedias',
            'clients',
            'banners',
            'clientsCount',
            'projectsCount',
            'reviewsCount'
        ));
    }
}
