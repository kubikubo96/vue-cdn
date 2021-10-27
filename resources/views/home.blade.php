<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="https://unpkg.com/vue-router@2.0.0/dist/vue-router.js"></script>
    <title>Vuejs</title>
</head>
<body>
    <header><h1>Learn Vuejs</h1></header>
    <div id="app">
        <p> @{{ message }} </p>
    </div>
    <script src="{{ asset('js/vue/home.js') }}"></script>
</body>
</html>
