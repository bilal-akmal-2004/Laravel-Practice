@extends('layout')

@section('content')
    <div class="container mt-5">
        <div class="text-center mb-4">
            <h2 class="display-5 fw-bold text-primary">📝 Blog Page</h2>
            <p class="lead text-muted">Welcome to the blog! Here's a glimpse of my Laravel journey.</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="alert alert-info shadow-sm">
                    <strong>Heads up!</strong> This mini project is a quick demo to showcase my ability to learn fast 🚀
                </div>
                <div class="text-center mt-4">
                    <button class="btn btn-outline-primary btn-lg">
                        <i class="bi bi-lightning-fill"></i> Stay Tuned for More!
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
