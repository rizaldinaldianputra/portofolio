@extends('layouts.app')

@section('header')
    @include('header.menu')
@endsection

@section('content')
    @include('sections.banner', ['banners' => $banners])
    @include('sections.clients', ['clients' => $clients])
    @include('sections.portfolio', ['projects' => $projects])
    @include('sections.overview')
    @include('sections.clientReviews', ['clientReviews' => $clientReviews])
    @include('sections.social', ['socialMedias' => $socialMedias])
@endsection
