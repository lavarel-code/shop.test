@extends('layouts.cp')


@section('content')
    <form v-on:submit.prevent="submit" action="" id="create-user" novalidate>
        <div class="form-group">
            <label for="name">Name</label>
            <input v-model="name" v-validate="'required'" type="text"
                   :class="{'form-control': true, 'is-invalid': errors.has('name')}" id="name" name="name"
                   aria-describedby="name" placeholder="Enter name">
            <div class="text-muted">@{{ name }}</div>
            <div class="invalid-feedback">fsdf</div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@endsection