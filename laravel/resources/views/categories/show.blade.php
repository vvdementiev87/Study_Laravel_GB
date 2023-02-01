@extends('layouts.main')
@section('categories')
    <div class="nav py-1 mb-2 align-items-center flex justify-content-center">
        <nav class="nav d-flex flex-lg-wrap justify-content-center">
                <a class="p-2 link-secondary text-decoration-none" href="{{route('categories.index')}}">{{$category->title}}</a>
        </nav>
    </div>
@endsection
@section('content')
    <div class="row mb-2">
        @foreach($category->news as $n)
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-300 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-success">Category</strong>
                        <h3 class="mb-0">{{$n->title}}</h3>
                        <div class="mb-1 d-flex justify-content-between text-muted">
                            <div class="text-muted">{{$n->author}}</div>&#9679
                            <div class="text-muted">{{$n->created_at}}</div>
                        </div>
                        <p class="mb-auto">{{$n->description}}</p>
                        <a href="{{route('news.show', ['news'=>$n])}}" class="stretched-link">Продолжение ...</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <svg class="bd-placeholder-img" width="200" height="300" xmlns="http://www.w3.org/2000/svg"
                             role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                             focusable="false"><title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c"/>
                            <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                        </svg>
                    </div>
                </div>
            </div>

        @endforeach
    </div>
@endsection


