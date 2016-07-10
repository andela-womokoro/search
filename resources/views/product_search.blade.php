@extends('shared.master')
@section('title', '')

@section('content')
    <h3>Search for a Product</h3>
    <form method="get" action="/search/results">
        {!! csrf_field() !!}
        <input type="text" name="phrase" value="" />
        <button type="submit">Search</button>
    </form>
    <br />

    @if(isset($products))
        <table width="700" align="center" cellpadding="3" border="1">
            <tr align="left">
                <th>Product</th>
                <th>Category</th>
                <th>Description</th>
                <th>Price</th>
            </tr>
           @foreach($products as $product)
           <tr align="left">
                <td>{{ $product->name }}</td>
                <td>{{ $product->category }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->price }}</td>
            </tr>
           @endforeach
        </table>

        {!! $products->appends(['phrase'=>$phrase])->render() !!}

    @endif
@endsection
