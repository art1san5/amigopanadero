@extends('layouts.app')

@section('content')

    <create-recipe></create-recipe>

@endsection

@section('bottom-script')
    <script>
        $(".select2-categories").select2({
            placeholder: "Select categories"
        });
    </script>
    <script>
       window.Laravel = <?php echo json_encode([
           'csrfToken' => csrf_token(),
        ]); ?>
    </script>
@endsection
