@extends('master')
@section('content')
<div class="container">
    <table class="table table-striped">
        <tbody>
        <tr>
            <td>Amount</td>
            <td>$ {{$total}}</td>       
        </tr>
        <tr>
            <td>Tax</td>
            <td>$ 0</td>  
        </tr>
        <tr>
            <td>Delivery charge</td>
            <td>$ 10</td>
        </tr>
        <tr>
            <td>Total Amount</td>
            <td>$  {{$total+10}}</td>
        </tr>
        </tbody>
  </table>

    <div>
        <form action="/orderplace">
            @csrf
        <div class="form-group">
            <textarea name="address" placeholder="Enter your address" class="form-control"></textarea>
        </div><br>
        <div class="form-group">
            <label for="pwd">Payment Method</label> <br> <br>  
            <input type="radio" value="cash" name="payment"> <span>Online payment</span> <br><br>  
            <input type="radio" value="cash" name="payment"> <span>EMI payment</span> <br><br> 
            <input type="radio" value="cash" name="payment"> <span>Payment on Delivery</span> <br><br>  
        </div>
        <button type="submit" class="btn btn-success">Order Now</button>
        </form> 
    </div>
</div>
@endsection           