@if(session('success'))
    <div class="alert alert-success">
        <a href="{{ url('/') }}"/>
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        <a href="{{ url('/') }}"/>
        {{ session('error') }}
    </div>
@endif