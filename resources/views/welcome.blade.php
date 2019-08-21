<!doctype html>
<html lang="@{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="@{{ csrf_token() }}">
    <title>Crud</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">

</head>

<body>
    <div id="app2">
        <example-component></example-component>
    </div>
    <div class="container">
        <div id="app">
            <h4>字串</h4>
            @{{ text }}
            <input type="text" class="form-control" v-model="text">
            <hr>
            <p>@{{ textarea }}</p>
            <textarea cols="30" rows="3" class="form-control" v-model="textarea"></textarea>
            <hr>
            <h4>Checkbox 與 Radio</h4>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="check1" v-model="checkbox1">
                <label class="form-check-label" for="check1"> 你要不要看電影 </label>
            </div>
            <hr>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="check2" value="雞" v-model="checkboxArray">
                <label class="form-check-label" for="check2">雞</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="check3" value="豬" v-model="checkboxArray">
                <label class="form-check-label" for="check3">豬</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="check4" value="牛" v-model="checkboxArray">
                <label class="form-check-label" for="check4">牛</label>
            </div>
            <p>晚餐火鍋裡有 <span v-for="item in checkboxArray">@{{item}}</span>。</p>
            <hr>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="radio2" value="雞" v-model="singleRadio">
                <label class="form-check-label" for="radio2">雞</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="radio3" value="豬" v-model="singleRadio">
                <label class="form-check-label" for="radio3">豬</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="radio4" value="牛" v-model="singleRadio">
                <label class="form-check-label" for="radio4">牛</label>
            </div>
            <p>晚餐火鍋裡有 @{{singleRadio}}。</p>
            <hr>
            <h4>Select</h4>
            <select name="" id="" class="form-control" v-model="selected">
                <option value="" disabled>-- 請選擇 --</option>
                <option value="小明">小明</option>
                <option value="小美">性感der小美</option>
            </select>
        </div>

    </div>

</body>
<script src="{{ url('/js/app.js', []) }}"></script>

</html>