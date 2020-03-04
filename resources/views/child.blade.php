@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <p class="bg-gray-300">Hello, {{ $name }}</p>
    <p>This is my body content.</p>
    <p>The current UNIX timestamp is {{ time() }}</p>

    <x-alert class="mt-4" hi="hihi" type="error" message="Error Alert Test" />

    <x-inputs.button />

    <x-inputs.option :options="$options" selected="Laravel7"/>
@endsection

<script>
    const app = @json($array, JSON_PRETTY_PRINT);

    console.log(app);
</script>
