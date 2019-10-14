@extends('layouts.sigma')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <label>Edit Book</label>
            <span class="pull-right"><a href="{{url('/books')}}">Back to book List</a></span>
            <form method="post" action="{{ route('books.update', $book->id) }}">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="form-group">
                    <label>Book name</label>
                    <input type="text" name="name" value="{{$book->name}}" class="form-control" placeholder="Enter book name">
                </div>
                <div class="form-group">
                    <label>Book quantity</label>
                    <input type="number" name="quantity" value="{{$book->quantity}}" class="form-control" placeholder="Enter book quantity">
                </div>
                <div class="form-group">
                    <label>Category</label>
                    <select class="form-control" name="category">
                        @if(isset($categories) && count($categories) > 0)
                            @foreach($categories as $category)
                                <option value="{{$category->id}}" {{ $category->id == $book->category ? 'selected' : ''}}>{{$category->name}}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
                <input type="submit" value="Update" class="btn btn-primary">
            </form>
        </div> 
    </div>
</div>
@endsection
