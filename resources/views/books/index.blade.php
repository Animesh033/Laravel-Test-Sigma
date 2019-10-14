@extends('layouts.sigma')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            @include('errors.errors')
            <label>Add Book</label>
            <form method="post" action="{{ route('books.store') }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label>Book name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter book name">
                </div>
                <div class="form-group">
                    <label>Book quantity</label>
                    <input type="number" name="quantity" class="form-control" placeholder="Enter book quantity">
                </div>
                <div class="form-group">
                    <label>Category</label>
                    <select class="form-control" name="category">
                        @if(isset($categories) && count($categories) > 0)
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
                <input type="submit" value="Create" class="btn btn-primary">
            </form>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Book Lists</label>
                <ul>
                    @if(isset($books) && count($books) > 0)
                        @foreach($books as $book)
                        <li><a href="{{route('books.edit', $book->id)}}">{{$book->name}}</a></li>
                        @endforeach
                    @endif
                </ul>
            </div>
            {{$books->links()}}
        </div>  
    </div>
</div>
@endsection
