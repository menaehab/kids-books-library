@extends('partials.master')
@section('page-title', __('keywords.content_browse'))
@section('content')
    <div class="container mt-4" dir=rtl>
        <div class="row justify-content-center">
            @if ($contents->count() > 0)
                @foreach ($contents as $content)
                    <x-content-card :title="$content->name" :image="$content->getFirstMediaUrl('images')" :url="route('show', $content->slug)" :description="$content->description" />
                @endforeach
            @else
                <div class="alert alert-danger" role="alert">{{ __('keywords.no_contents') }}</div>
            @endif
        </div>
    </div>
@endsection
