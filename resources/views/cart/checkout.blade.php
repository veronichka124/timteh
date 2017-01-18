@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Checkout</h2>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Item</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Lipstick</td>
            <td>16$</td>
            <td>2</td>
            <td>32$</td>
        </tr>
        </tbody>
    </table>
</div>

    @endsection