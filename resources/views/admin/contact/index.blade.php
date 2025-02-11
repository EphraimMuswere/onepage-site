@extends('adminlte::page')

@section('title', 'Manage Contact Details')

@section('content_header')
    <h1>Manage Contact Details</h1>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Contact Information</h3>
            <a href="{{ route('contact.create') }}" class="btn btn-primary float-right">Add Contact Info</a>
        </div>

        <div class="card-body">
            @if($contact)
                <table class="table">
                    <tr>
                        <th>Description:</th>
                        <td>{{ $contact->description }}</td>
                    </tr>
                    <tr>
                        <th>Address:</th>
                        <td>{{ $contact->address }}</td>
                    </tr>
                    <tr>
                        <th>Phone:</th>
                        <td>{{ $contact->phone_number }}</td>
                    </tr>
                    <tr>
                        <th>Phone (Secondary):</th>
                        <td>{{ $contact->phone_secondary ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <th>Email:</th>
                        <td>{{ $contact->email }}</td>
                    </tr>
                    <tr>
                        <th>Email (Secondary):</th>
                        <td>{{ $contact->email_secondary ?? 'N/A' }}</td>
                    </tr>
                </table>

                <a href="{{ route('contact.edit', $contact->id) }}" class="btn btn-warning">Edit</a>
            @else
                <p>No contact details found. <a href="{{ route('contact.create') }}">Add Contact Info</a></p>
            @endif
        </div>
    </div>
@endsection
