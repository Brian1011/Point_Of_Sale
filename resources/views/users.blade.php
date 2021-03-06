<?php
/**
 * Created by PhpStorm.
 * User: Brian Mutinda
 * Date: 08/08/2018
 * Time: 10:38 PM
 */
?>

@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-lg-8">
                <center><h1>All Users</h1></center>

                <div class="col-md-2 col-md-offset-9">
                  <a href="/addUser" class="btn btn-lg btn-primary">Add User</a>
                </div>

                <table class="table">
                    <tr>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Category</th>
                        <th>Edit</th>
                    </tr>

                    @foreach($users as $user)
                    <tr class="user{{$user->id}} table-hover">
                        <td>{{$user->name}}</td>
                        <td>{{$user->phone}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->category}}</td>
                        <td>
                            <a href="#"
                                class="edit_user_link btn btn-success"
                                id="edit_user_link"
                                data-id="{{$user->id}}"
                                data-phone="{{$user->phone}}"
                                data-email="{{$user->email}}"
                                data-category="{{$user->category}}"
                            >Edit</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>

            <div class="col-lg-4">
                <!--Edit User Profile-->
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h1>Edit User Profile</h1>
                    </div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{$errors->has('phone')? 'has-error':''}}">
                                <label for="phone" class="col-md-4 control-label">Phone Number</label>

                                <div class="col-md-6">
                                    <input id="phone" type="tel" class="form-control" name="phone" value="{{old('phone')}}" required>

                                    @if($errors->has('phone'))
                                        <span class="help-block">
                                        <strong>{{$errors->first('phone')}}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Password</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Submit Changes
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>


@endsection

