@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-lg-8">
            <center><h1>All Items</h1></center>
            <form method="get" class="form">
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <input type="text" name="student_search" id="search_query" class="form-control" placeholder="Search Item ">
                        </div>

                        <div class="col-md-3">
                            <button type="submit" name="search_student" id="search-btn" class="btn btn-primary">Search</button>
                        </div>
                    </div>
                </div>
            </form>

            <table class="table">
                <tr>
                    <th>Item Name</th>
                    <th>Price</th>
                    <th>Extra</th>
                    <th>Action</th>
                </tr>

                <tr>
                    <td>Lights 1</td>
                    <td>ksh 2000</td>
                    <td>Made in India</td>
                    <td>
                        <button class="btn btn-success">Edit</button>
                        <button class="btn btn-primary">Add to Cart</button>
                        <button class="btn btn-danger">Delete</button>
                    </td>
                </tr>

                <tr>
                    <td>Lights 1</td>
                    <td>ksh 2000</td>
                    <td>Made in India</td>
                    <td>
                        <button class="btn btn-success">Edit</button>
                        <button class="btn btn-primary">Add to Cart</button>
                        <button class="btn btn-danger">Delete</button>
                    </td>
                </tr>
            </table>
        </div>

        <div class="col-lg-4">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h1>Cart Items</h1>
                </div>
            </div>

            <div class="panel-body">
                <table class="table">
                    <tr>
                        <th>Item Name</th>
                        <th>Quantity</th>
                        <th>Item price</th>
                        <th>Total Price</th>
                        <th>Remove</th>
                    </tr>

                    <tr>
                        <td>Item 1</td>
                        <td>
                            <input type="number" value="1" class="form-control">
                        </td>
                        <td>100</td>
                        <td>300</td>
                        <td><button class="btn btn-success">Remove</button></td>
                    </tr>

                    <tr>
                        <td>Item 1</td>
                        <td>
                            <input type="number" value="1" class="form-control">
                        </td>
                        <td>100</td>
                        <td>300</td>
                        <td><button class="btn btn-success">Remove</button></td>
                    </tr>
                </table>

                <b>Total Price:</b> <input type="text" value="800" class="form-control" readonly><br>
                <b>Discount </b>  <input type="text" value="100" class="form-control"><br>
                <b>After Discount</b> <input type="text" value="700" class="form-control" readonly><br>
                <b>Tax (16%)</b> <input type="text" value="160" class="form-control" readonly><br>

                <center><button type="button" class="btn btn-lg btn-primary" style="width: 100%">Sell</button></center>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
