@if (Session::get('status'))
    <p class="alert alert-info">
        {{Session::get('status')}}
    </p>
@endif
@if (Session::get('error'))
    <p class="alert alert-danger">
        {{Session::get('error')}}
    </p>
@endif