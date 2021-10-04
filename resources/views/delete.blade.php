@extends('base')

@section('content')

<div class="row mt-5">
    <div class="col-md-4 offset-4">
        <div class="card">
            <div class="card-header text-center bg-danger text-white">
                <h3>Delete Item</h3>
            </div>
            <div class="card-body">
                <form action="{{url('/dashboard/item/delete/' . $item->id)}}" method="post">
                    @csrf
                    @method('delete')
                    <h5 class="mb-3">Are you sure delete to this item: {{ $item->name }}? </h5>
                    
                    <div class="text-center">
                        <button class="btn btn-danger px-5" type="submit">Delete</button>
                        <a href="{{ url('/dashboard') }}" class="btn btn-primary text-white px-5">Cancel</a>   
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection