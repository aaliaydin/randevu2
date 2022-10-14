@extends('admin.layouts.app')
@section('content')
<span id="user1"></span>
@endsection


@section('scripts')
    <script>
        $.ajax({
            url: "{{route('api.users')}}",
            type: "post",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (response) {
              $('#user1').text(response.users[0]);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
            }
        });

    </script>
@endsection


@section('styles')

@endsection

@section('title')
    {{$title}}
@endsection
