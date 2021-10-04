@extends('base')

@section('content')
<br><br><br>
<div class="container mt-3">
    <div class="mb-1" style="float: right;">
        <a href="{{url('dashboard/item')}}" class="btn btn-primary p-3">
          Add New Item
        </a>
      </div>
    <h1 class="text-white">List of Items</h1>
    <table class="table table-striped table-hover text-white">
        <thead style="font-size: 1.2em;">
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach($items as $item)
            <tr>
                <td>{{$item->name}}</td>
                <td>{{$item->description}}</td>
                <td>{{$item->price}}</td>
                <td>{{$item->quantity}}</td>
                <td style="width: 150px;">
                    <a href="{{ url('dashboard/item/edit/' . $item->id) }}" style="margin-right: 5px;" class="btn btn-primary btn-sm d-inline">
                        Edit
                    </a>
                    <a href="{{ url('dashboard/item/delete/' . $item->id) }}" class="btn btn-danger btn-sm" type="submit">
                        Delete
                    </a>
                </td>
            </tr>
    
            @endforeach
        </tbody>
    </table>
</div>

@endsection