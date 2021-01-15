@if($errors->any())
    <div class="alert alert-danger" id="error_div">
        @foreach($errors->all() as $error)
            <p>{{ $error  }}</p>
        @endforeach
    </div>
@endif


