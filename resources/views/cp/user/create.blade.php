@extends('layouts.cp')


@section('content')
    <form v-on:submit.prevent="submit" action="" id="create-user" novalidate>
        <div class="form-group">
            <label for="name">Name</label>
            <input v-model="name" v-validate="'required'" type="text"
                   :class="{'form-control': true, 'is-invalid': errors.has('name')}" id="name" name="name"
                   aria-describedby="name" placeholder="Enter name">
            <div class="invalid-feedback">@{{ errors.first('name') }}</div>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" v-model="email" v-validate="'required|email'"
                   :class="{'form-control': true, 'is-invalid': errors.has('email')}" id="email" name="email"
                   placeholder="Enter email">
            <div class="invalid-feedback">@{{ errors.first('email') }}</div>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" v-model="password" v-validate="'required'"
                   :class="{'form-control': true, 'is-invalid': errors.has('password')}" id="password" name="password"
                   placeholder="Enter password">
            <div class="invalid-feedback">@{{ errors.first('password') }}</div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@endsection