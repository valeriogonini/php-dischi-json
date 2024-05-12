<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div id="app">
        <div class="container">
            <div class="row">
                <div class="col" v-for="disc in discs">
                    <div class="card">
                        <img src="disc.poster" class="card-img-top" alt="">
                        <div class="card-body">
                            <h1>{{ disc.title }}</h1>
                            <h2>{{ disc.author }}</h2>
                            <h3>{{ disc.year }}</h3>
                        </div>

                    </div>
                </div>

            </div>
        </div>






    </div>




    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="./app.js"></script>
</body>

</html>