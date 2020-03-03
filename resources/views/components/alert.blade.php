{{ dd($attributes)}}
<div {{ $attributes->merge(['class' => 'alert alert-' . $type]) }}>

    <!-- Be present above all else. - Naval Ravikant -->
    This is component Alert.

    This is Alert Message: {{ $message }}
</div>
