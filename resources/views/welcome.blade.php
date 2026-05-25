@extends('layouts.app')

@section('content')

@include('components.hero')

<div class="h-px w-3/4 mx-auto bg-gradient-to-r from-transparent via-indigo-500/20 to-transparent"></div>
@include('components.about')

<div class="h-px w-3/4 mx-auto bg-gradient-to-r from-transparent via-indigo-500/20 to-transparent"></div>
@include('components.skills')

<div class="h-px w-3/4 mx-auto bg-gradient-to-r from-transparent via-indigo-500/20 to-transparent"></div>
@include('components.projects')

<div class="h-px w-3/4 mx-auto bg-gradient-to-r from-transparent via-indigo-500/20 to-transparent"></div>
@include('components.experience')

<div class="h-px w-3/4 mx-auto bg-gradient-to-r from-transparent via-indigo-500/20 to-transparent"></div>
@include('components.colaborasi', ['members' => $members])

<div class="h-px w-3/4 mx-auto bg-gradient-to-r from-transparent via-indigo-500/20 to-transparent"></div>
@include('components.contact')

@endsection