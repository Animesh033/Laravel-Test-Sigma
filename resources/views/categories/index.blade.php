@extends('layouts.sigma')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label>Categoty Lists</label>
                <ul>
                    @if(isset($categories) && count($categories) > 0)
                        @foreach($categories as $category)
                        <li><a href="#">{{$category->name}}</a></li>
                        @endforeach
                    @endif
                </ul>
            </div>
            {{$categories->links()}}
        </div> 
    </div>
</div>
@endsection
