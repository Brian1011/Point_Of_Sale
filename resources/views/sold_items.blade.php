<?php
/**
 * Created by PhpStorm.
 * User: Brian Mutinda
 * Date: 08/08/2018
 * Time: 02:18 PM
 */
?>

@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-8">

                <center><h1>All Sold Items</h1></center>
                <form method="get" class="form">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <input type="text" name="student_search" id="search_query" class="form-control" placeholder="Search Receipt Number or Date">
                            </div>

                            <div class="col-md-3">
                                <button type="submit" name="search_student" id="search-btn" class="btn btn-primary">Search</button>
                            </div>
                        </div>
                    </div>
                </form>

                <table class="table">
                    <tr>
                        <th>Receipt No</th>
                        <th>Date</th>
                        <th>Served By</th>
                        <th>Total</th>
                        <th>Amount Paid</th>
                        <th>Balance</th>
                        <th>Action</th>
                    </tr>

                    <tr>
                        <td> 1</td>
                        <td>8/08/2018 i.e Today</td>
                        <td>Jane</td>
                        <td>9000</td>
                        <td>9500</td>
                        <td>500</td>
                        <td>
                            <button class="btn btn-success">Edit</button>
                        </td>
                    </tr>


                    <tr>
                        <td> 1</td>
                        <td>8/08/2018 i.e Today</td>
                        <td>John</td>
                        <td>9000</td>
                        <td>9500</td>
                        <td>500</td>
                        <td>
                            <button class="btn btn-success" disabled="true">Edit</button>
                        </td>
                    </tr>
                </table>
            </div>

            <div class="col-lg-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h1>Receipt No. #1</h1>
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

                    <center><button type="button" class="btn btn-lg btn-primary" style="width: 100%">Submit Changes</button></center>
                </div>
            </div>
        </div>
    </div>
@endsection
