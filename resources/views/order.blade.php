@extends('master')

@section('content')
<div class="custom-product">
    <h1 class="mb-4">Order Summary</h1>
    <table class="table">
        <tbody>
            <tr>
                <th>Price</th>
                <td>₹{{ $total }}</td>
            </tr>
            <tr>
                <th>Tax</th>
                <td>₹0</td>
            </tr>
            <tr>
                <th>Delivery</th>
                <td>₹100</td>
            </tr>
            <tr>
                <th>Total Amount</th>
                <td>₹{{ $total + 100 }}</td>
            </tr>
        </tbody>
    </table>
    
    <form action="" method="POST">
        @csrf
        <div class="form-group">
            <textarea class="form-control" placeholder="Address"></textarea>
        </div>
        
        <div class="form-group">
            <label for="">Payment Method</label>
            <p>
                <input type="radio" name="payment" id="online">
                <label for="online">Online Payment</label>
            </p>
            <p>
            <input type="radio" name="payment" id="emi">
            <label for="emi">EMI Payment</label>
            </p>
            <p>
            <input type="radio" name="payment" id="delivery">
            <label for="delivery">Payment On Delivery</label>
            </p>
        </div>
        <button type="submit" class="btn btn-primary">Confirm Order</button>
    </form>
</div>
@endsection

<style>
    .custom-product {
        padding: 40px;
        background-color: #f4f4f4;
    }
    .table {
        background-color: white;
        border-radius: 5px;
        overflow: hidden;
    }
    button {
        margin-top: 20px;
        width: 100%;
    }
</style>
