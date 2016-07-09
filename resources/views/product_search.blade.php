@extends('shared.master')
@section('title', '')

@section('content')
    <h3>Search for a Product</h3>
    <form method="post" action="/search">
        {!! csrf_field() !!}
        <input type="text" name="phrase" value="" />
        <button type="submit">Search</button>
    </form>
    <br />

    @if(isset($products))
        <table width="700" align="center" border="1">
            <tr>
                <th>Product</th>
                <th>Category</th>
                <th>Description</th>
                <th>Price</th>
            </tr>
           @foreach($products as $product)
           <tr>
                <th>{{ $product->name }}</th>
                <th>{{ $product->category }}</th>
                <th>{{ $product->description }}</th>
                <th>{{ $product->price }}</th>
            </tr>
           @endforeach
        </table>

        {!! $products->render() !!}

    @endif
@endsection
