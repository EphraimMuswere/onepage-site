@extends('adminlte::page')

@section('title', 'Pricing Plans')

@section('content_header')
    <h1>Pricing Plans</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{ route('pricing.create') }}" class="btn btn-primary">Add New Plan</a>
        </div>
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Plan Name</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Features</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($pricingPlans as $plan)
                    <tr>
                        <td>{{ $plan->plan_name }}</td>
                        <td>${{ number_format($plan->price, 2) }}</td>
                        <td>{{ $plan->description }}</td>
                        <td>
                            <ul>
                                @foreach (json_decode($plan->features) as $feature)
                                    <li>{{ $feature }}</li>
                                @endforeach
                            </ul>
                        </td>
                        <td>
                            <a href="{{ route('pricing.edit', $plan->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('pricing.update', $plan->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="btn btn-danger btn-sm">Update</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
