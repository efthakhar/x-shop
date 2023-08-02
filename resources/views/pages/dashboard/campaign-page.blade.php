@extends('layout.sidenav-layout')
@section('content')
    @include('components.campaign.campaign-list')
    @include('components.campaign.campaign-delete')
    @include('components.campaign.campaign-create')
@endsection
