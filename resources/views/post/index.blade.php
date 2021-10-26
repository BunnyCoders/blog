@extends('layouts.admin')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2></h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('post.create') }}"> Create New Post</a>
            </div>
        </div>
    </div>



    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif



    <table class="table table-bordered">
        <tr>
            <th>H1 Heading</th>
            <th>Featured Image</th>
            <th>Featured Image Alt Text</th>
            <th>Body Content</th>
            <th>Meta Title</th>
            <th>Meta Description</th>
            <th>Slug</th>
            <th>Category</th>
            <th width="400px">Action</th>
        </tr>

        @foreach ($post as $pst)
        <tr>
            <td>{{ $pst->title }}</td>
            <td><img src="{{asset('/').$pst->image}}" width="100" height="100"></td>
            <td>{{$pst->altText}}</td>
            <td><div style = "width: 400px; overflow: hidden; height: 100px;">{!! $pst->content !!}</div></td>
            <td>{{ $pst->metatitle }}</td>
            <td>{{$pst->meta_description}}</td>
            <td>{{$pst->slug}}</td>
            <td>{{ $pst->categories_id }}</td>
            <td>

                <form action="{{ route('post.destroy',$pst->id) }}" method="POST">
                    <!--<a class="btn btn-info" href="{{ route('post.show',$pst->id) }}">Show</a>-->
                    <a class="btn btn-primary" href="{{ route('post.edit',$pst->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>

                </form>

            </td>

        </tr>

        @endforeach

    </table>



    {{-- {!! $post->links() !!} --}}



@endsection
