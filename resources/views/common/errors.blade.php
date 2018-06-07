@if($errors)
    <span class="help-block">
        @foreach($errors as $error)
            <strong>{{ $error }}</strong>
        @endforeach
    </span>
@endif