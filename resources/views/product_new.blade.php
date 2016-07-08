@extends('shared.master')
@section('title', '')

@section('content')
    <h3>Add a Product</h3>
    <form method="post" action="/product/add">
        {!! csrf_field() !!}
        Product Name
        <input type="text" name="name" value="{{ old('name') }}" /> 
        <br />
        Category
        <select name="category">
            <option>{{ old('category') }}</option>
            <option>Electronics</option>
            <option>Gadgets</option>
        </select>
        <br />
        Description
        <input type="text" name="description" value="{{ old('description') }}" /> 
        <br />
        Price
        <input type="text" name="price" value="{{ old('price') }}" /> 
        <br />
        <button type="submit">Add Product</button>
    </form>
@endsection
