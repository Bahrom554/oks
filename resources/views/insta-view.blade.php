@extends('layout')

@section('section')
    <div class="instant-view single-content" style="width: 1px;height: 1px; overflow: hidden">
        <article>
            <img class="section-backgroundImage"
                 src="{{ $main_image }}" alt="{{ $title }}">
            <h1>{{ $title }}</h1>
            <h2>
                {!! $content !!}
            </h2>
        </article>
    </div>
@endsection
