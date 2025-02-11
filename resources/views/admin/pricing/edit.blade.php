@extends('adminlte::page')

@section('title', 'Edit Pricing Plan')

@section('content_header')
    <h1>Edit Pricing Plan</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.pricing.update', $plan->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="plan_name" class="form-label">Plan Name</label>
                    <input type="text" name="plan_name" class="form-control" value="{{ $plan->plan_name }}">
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" name="price" class="form-control" value="{{ $plan->price }}">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" class="form-control">{{ $plan->description }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="features" class="form-label">Features</label>
                    <div id="features-container">
                        @foreach (json_decode($plan->features) as $feature)
                            <input type="text" name="features[]" class="form-control mb-2" value="{{ $feature }}">
                        @endforeach
                    </div>
                    <button type="button" id="add-feature" class="btn btn-primary btn-sm">Add Feature</button>
                </div>

                <button type="submit" class="btn btn-primary">Update Pricing Plan</button>
            </form>
        </div>
    </div>
@stop

@section('js')
    <script>
        document.getElementById('add-feature').addEventListener('click', function() {
            const featureInput = document.createElement('input');
            featureInput.type = 'text';
            featureInput.name = 'features[]';
            featureInput.classList.add('form-control', 'mb-2');
            featureInput.placeholder = 'Feature ' + (document.querySelectorAll('#features-container input').length + 1);
            document.getElementById('features-container').appendChild(featureInput);
        });
    </script>
@stop
