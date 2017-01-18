{{--<!DOCTYPE html>--}}
{{--<html>--}}
{{--<head>--}}
    {{--<title>Добавить товар</title>--}}
    {{--<script src="{{asset('js/bootstrap.min.js')}}"></script>--}}

    {{--<!-- Fonts -->--}}
    {{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">--}}
    {{--<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">--}}

    {{--<!-- Styles -->--}}
    {{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">--}}
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    {{--<script src="{{asset("js/jquery-2.1.4.min.js")}}"></script>--}}
    {{--<script src="{{asset("js/functions.js")}}"></script>--}}
    {{--<meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}">--}}
{{--</head>--}}
{{--<body>--}}


<div class="container">
    <h1>Add Item</h1>
    <hr>

    <div class="row">
        <div class="col-md-4">
            <input type="file" name="preview"/><br>
        </div>
        <div class="col-md-8">
            <i class="glyphicon glyphicon-arrow-left"></i> Select an item image<p class="help-block">Img size 150x150px, max 200KB</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <label class="control-label" for="name">Product name</label>
            <input class="form-control" type="text" name="title"/>
            <label for="description" class="control-label">Description</label>
            <textarea class="form-control" rows="4"></textarea>
            <label class="control-label" for="price">Price</label>
            <input class="form-control" type="text" name="price"/>
        </div>
    </div>
    <h2>Parameters</h2>
    <hr>
    <button class="btn btn-primary btn-lg add_button" type="button">Add</button>
    <div class="form-inline" role="form">
        <div class="form-group">
            <label for="parameter" class="sr-only">Parameter</label>
            <div class="input-group">
<span class="input-group-btn">
<button class="btn btn-default" type="button"><i class="glyphicon glyphicon-plus"></i></button>
</span>
                <select class="form-control" name="parameter">
                    <option value=1>Parameter 1</option>
                    <option value=2>Parameter 2</option>
                    <option value=3>Parameter 3</option>
                </select>
            </div>
            <div class="form-group">
                <label for="value" class="sr-only">Значение параметра</label>
                <input class="form-control" name="value" placeholder="Значение параметра"/>
            </div>
            <div class="form-group">
                <label for="value" class="sr-only">Единица измерения</label>
                <input class="form-control" name="unit" placeholder="Единица измерения"/>
            </div>
        </div>
    </div>
{{--</body>--}}
{{--</html>--}}
