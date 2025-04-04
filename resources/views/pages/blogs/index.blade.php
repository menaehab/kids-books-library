@extends('partials.master')
@section('page-title', __('keywords.categories'))
@section('content')
    <div class="container mt-4" dir=rtl>
        <h1 class="text-center mb-4">{{ __('keywords.blogs') }}</h1>
        @if (session('success'))
            <div class="alert alert-success" role="alert">{{ session('success') }}</div>
        @endif
        <a href="{{ route('blogs.create') }}" class="btn btn-success mb-4">{{ __('keywords.add_blog') }}</a>
        @if ($blogs->count() > 0)
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">{{ __('keywords.blog_name') }}</th>
                        <th class="text-center" scope="col">{{ __('keywords.opertions') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($blogs as $key => $blog)
                        <tr>
                            <th scope="row">{{ $blogs->firstItem() + $key }}</th>
                            <td>{{ $blog->name }}</td>
                            <td class="text-center">
                                <a href="{{ route('blogs.show', $blog->slug) }}" class="btn btn-sm btn-info"><i
                                        class="fa fa-eye"></i></a>
                                <a href="{{ route('blogs.edit', $blog->slug) }}" class="btn btn-sm btn-primary"><i
                                        class="fa fa-edit"></i></a>
                                <form id="delete-form-{{ $blog->slug }}"
                                    action="{{ route('blogs.destroy', $blog->slug) }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                                <a href="javascript:void(0);" class="btn btn-sm btn-danger delete-form"
                                    data-slug="{{ $blog->slug }}">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $blogs->links('pagination::bootstrap-5') }}
        @else
            <div class="alert alert-danger" role="alert">{{ __('keywords.no_blogs') }}</div>
        @endif
    </div>
@endsection
