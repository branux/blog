@extends('admin::layout')

@section('content')
    <div class="container">
        <div class="row">

            <h5>Visualizar Artigo</h5>


            <div class="col l12">

            </div>

            <div class="col l12">
                <script src="{{asset('js/marked.min.js')}}"></script>

                <div id="content"></div>
                <script>

                    document.getElementById('content').innerHTML =
                            marked('');
                </script>
            </div>
        </div>

@endsection