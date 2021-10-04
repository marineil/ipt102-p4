@extends('base')

@section('content')
<div class="container">
    <div class="row mt-2 mb-2">
        <div class="col-md-4 offset-4">
            <div class="mt-2 mb-1"><a href="{{ url('/dashboard') }}" class="btn btn-primary text-white">Back</a></div>
            <div class="card">
                <div class="card-header text-center bg-light text-dark">
                    <h3>Edit Item</h3>
                </div>
            <div class="card-body">
                <form action="{{url('/dashboard/item/edit/' . $item->id)}}" method="post">
                    @csrf
                    @method('patch')
                    <div class="mb-3">
                        <label for="name">Name</label>
                        <input type="text" name="name"  value="{{$item->name}}" id="name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="description">Description</label>
                        <input type="text" name="description" value="{{$item->description}}" id="description" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="price">Price</label>
                        <input type="text" name="price" value="{{$item->price}}" id="price" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="quantity">Quantity</label>
                        <input type="text" name="quantity" value="{{$item->quantity}}" id="quantity" class="form-control">
                    </div>
                    <div class="mb3">
                        <button class="btn btn-primary w-100" type="submit">Done Item</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection