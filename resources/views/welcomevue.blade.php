<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>VUEjs V2 y Laravel</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    </head>
    <body>
        <div id="main" class="container">
            <div class="row">
                <div class="row">
                    <div class="col-sm-4">
                        <h1>Lista VUEjs AJAX</h1>
                        <ul class="list-group">
                            <li v-for="item in list" class="list-group-item">
                                 @{{ item.name }} <strong>@{{ item.email }}</strong>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-8">
                        <h1>JSON</h1>
                        <pre>@{{ $data | json }}</pre>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.13/vue.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.17.1/axios.min.js"></script>
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/1.3.4/vue-resource.min.js"></script> -->
        <script type="text/javascript" src="{{ asset('js/ajaxvue.js') }}"></script>
    </body>
</html>
