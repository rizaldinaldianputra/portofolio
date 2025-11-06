<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Client;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\ClientReview;
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


        return view('home', compact('projects', 'clientReviews', 'socialMedias', 'clients', 'banners'));
    }
}
