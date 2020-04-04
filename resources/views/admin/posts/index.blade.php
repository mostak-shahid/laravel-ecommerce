@extends('layouts.neon')
@section('title');
    Neon | All Post
@endsection
@section('content')
    @if($posts->count()>0)
        <table class="table table-bordered responsive">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Category</th>
                    <th>Tags</th>
                    <th>Comments</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td>{{$post->id}}</td>
                        <td>{{$post->title}}</td>
                        <td>{{$post->user->name}}</td>
                        <td>Category Name</td>
                        <td>Tags Name</td>
                        <td>0</td>
                        <td>{{$post->created_at->format('d/m/Y')}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{$posts->links()}}
    @endif
@endsection
@section('style')
    <!-- Imported styles on this page -->
    <link rel="stylesheet" href="{{asset('assets/js/zurb-responsive-tables/responsive-tables.css')}}">
@endsection
@section('script')
    <!-- Imported scripts on this page -->
    <script src="{{asset('assets/js/zurb-responsive-tables/responsive-tables.js')}}"></script>
@endsection