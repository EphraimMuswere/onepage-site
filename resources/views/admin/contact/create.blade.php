@extends('adminlte::page')

@section('title', 'Add Contact Info')

@section('content_header')
    <h1>Add Contact Information</h1>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('contact.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label>Description</label>
                    <textarea name="description" class="form-control" required></textarea>
                </div>

                <div class="form-group">
                    <label>Address</label>
                    <input type="text" name="address" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Phone Number</label>
                    <input type="text" name="phone_number" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Phone Number (Secondary)</label>
                    <input type="text" name="phone_secondary" class="form-control">
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Email (Secondary)</label>
                    <input type="email" name="email_secondary" class="form-control">
                </div>

                <button type="submit" class="btn btn-success">Save</button>
            </form>
        </div>
    </div>
@endsection
