@extends('shared.master')
@section('title', '')

@section('content')
    <h3>Add a Product</h3>
    <form method="post" action="/product/add">
        {!! csrf_field() !!}

        <table align="center" border="0">
            <tr align="left">
                <td width="100">Product Name</td>
                <td><input type="text" name="name" value="{{ old('name') }}" /> </td>
            </tr>
            <tr align="left">
                <td>Category</td>
                <td>
                    <select name="category">
                        <option>{{ old('category') }}</option>
                        <option>Electronics</option>
                        <option>Gadgets</option>
                        <option>Other</option>
                    </select>
                </td>
            </tr>
            <tr align="left">
                <td>Description</td>
                <td><input type="text" name="description" value="{{ old('description') }}" /> </td>
            </tr>
            <tr align="left">
                <td>Price</td>
                <td><input type="text" name="price" value="{{ old('price') }}" /> </td>
            </tr>
        </table>
        <br />
        <button type="submit">Add Product</button>
    </form>
    <br />
@endsection
