@extends('adminlte::page')

@section('title', 'Edit Contact Info')

@section('content_header')
    <h1>Edit Contact Information</h1>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.contact.update', $contact->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label>Description</label>
                    <textarea name="description" class="form-control" required>{{ $contact->description }}</textarea>
                </div>

                <div class="form-group">
                    <label>Address</label>
                    <input type="text" name="address" class="form-control" value="{{ $contact->address }}" required>
                </div>

                <div class="form-group">
                    <label>Phone Number</label>
                    <input type="text" name="phone_number" class="form-control" value="{{ $contact->phone_number }}" required>
                </div>

                <div class="form-group">
                    <label>Phone Number (Secondary)</label>
                    <input type="text" name="phone_secondary" class="form-control" value="{{ $contact->phone_secondary }}">
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" value="{{ $contact->email }}" required>
                </div>

                <div class="form-group">
                    <label>Email (Secondary)</label>
                    <input type="email" name="email_secondary" class="form-control" value="{{ $contact->email_secondary }}">
                </div>

                <button type="submit" class="btn btn-warning">Update</button>
            </form>
        </div>
    </div>
@endsection
