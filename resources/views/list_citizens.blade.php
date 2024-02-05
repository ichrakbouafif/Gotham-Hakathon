@section('content')
<div class="section-heading">
    <h2>List of All Citizens</h2>
</div>

    @foreach ($citizens as $citizen)
        <p>{{ $citizen->name }}, {{ $citizen->email }}, {{ $citizen->location }}, {{ $citizen->phone }}, {{ $citizen->emergency }}, {{ $citizen->contact_category }}</p>
        <!-- Include update and delete options -->
    @endforeach
@endsection
