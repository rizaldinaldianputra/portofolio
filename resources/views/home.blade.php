@extends('layouts.app')

@section('content')
    @include('sections.banner', ['banners' => $banners])
    @include('sections.service', ['services' => $services])

    @include('sections.clients', ['clients' => $clients])
    @include('sections.portfolio', ['projects' => $projects])
    @include('sections.clientReviews', ['clientReviews' => $clientReviews])
    @include('sections.overview')

    @include('sections.social', ['socialMedias' => $socialMedias])
@endsection
