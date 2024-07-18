@extends('layouts.app')

@section('title', 'Loading')

@section('content')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            showLoading();
            setTimeout(function() {
                window.location.href = '/consent';
            }, 2000); // Simulate loading time
        });
    </script>
@endsection
 