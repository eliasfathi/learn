<!DOCTYPE html>
<html>

<head>
    <title>سایت تست</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href='css/style.css' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
</head>

<body>

    <div class="container">
        <div id="myapp">
            <p> {{message}} </p>
            <input v-model='message'>
        </div>
    </div>
    <script>
        var app6 = new Vue({
            el: '#myapp',
            data: {
                message: 'Hello Vue!'
            }
        })
    </script>
<p> test </p> 
</body>

</html>