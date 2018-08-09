<?php
/**
 * Created by PhpStorm.
 * User: Brian Mutinda
 * Date: 08/08/2018
 * Time: 02:20 PM
 */
?>
@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <h1><center>Add New Items</center></h1>

                <form class="form-horizontal">

                    <div class="form-group">
                        <label for="itemName" class="col-md-4 control-label">Item Name</label>
                        <div class="col-md-6">
                            <input id="itemName" type="text" class="form-control" name="itemName" value="{{old('itemName')}}" required autofocus>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="itemPrice" class="col-md-4 control-label">Buying Price</label>
                        <div class="col-md-6">
                            <input id="itemPrice" type="number" class="form-control" name="itemPrice" value="{{old('itemPrice')}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="itemSelling" class="col-md-4 control-label">Selling Price</label>
                        <div class="col-md-6">
                            <input id="itemSelling" type="number" class="form-control" name="itemSelling" value="{{old('itemSelling')}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="itemQuantity" class="col-md-4 control-label">Quantity</label>
                        <div class="col-md-6">
                            <input id="itemQuantity" type="number" class="form-control" name="itemQuantity" value="{{old('itemQuantity')}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="itemDescription" class="col-md-4 control-label">Description</label>

                        <div class="col-md-6">
                            <textarea class="form-control" cols="8"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-lg btn-primary" style="width: 100%">Submit</button>
                        </div>
                    </div>


                </form>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
@endsection
