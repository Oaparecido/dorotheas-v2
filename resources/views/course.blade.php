@extends('layouts.pages')

@section('content')
    <div>
        <div class="pages-course-header d-flex justify-content-center align-items-center align-self-end">
            <img src="{!! asset('assets/icon_project_black.svg') !!}" alt="">
            <h1>orotheas</h1>
        </div>

        <div class="pages-course-main d-flex flex-wrap">
            @foreach($courses as $course)
                @include('components.card-pages-courses')
            @endforeach
        </div>
    </div>
    @include('components.menu-pages')
    @include('components.modals.register-course')
@endsection
