@extends('layouts.admin')
@section('content')
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Список новостей</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
        </div>
        <a class="nav-link" href="{{route('admin.news.create')}}">
            <span data-feather="shopping-cart" class="align-text-bottom"></span>
            Создать новость
        </a>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Category</th>
                <th>Title</th>
                <th>Description</th>
                <th>Author</th>
                <th>Status</th>
                <th>Date</th>
                <th>CRUD</th>
            </tr>
            </thead>
            <tbody>
            @forelse($newsList as $news)
                <tr>
                    <td>{{$news->id}}</td>
                    <td>{{$news->categories->map(fn($item)=>$item->title)->implode(', ')}}</td>
                    <td>{{$news->title}}</td>
                    <td>{{$news->description}}</td>
                    <td>{{$news->author}}</td>
                    <td>{{$news->status}}</td>
                    <td>{{$news->created_at}}</td>
                    <td>
                        <a href="{{ route('admin.news.edit',['news'=>$news]) }}">Change</a>
                        <a href="">Delete</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7">No records available</td>
                </tr>
            @endforelse
            </tbody>
        </table>
        {{$newsList->links()}}
    </div>
@endsection
