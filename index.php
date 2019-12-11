<?php include "build.php" ?>

<!--
        TESTING
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">

    <link rel="stylesheet" href="iamk.css">

    <script src="iamk.js"></script>
    
</head>
<body>
    
    <a class="btn trnh red" href="/">Red</a>
    <a class="btn blue" href="/">Blue</a>
    <a class="btn green" href="/">Green</a>
    <a class="btn teal" href="/">Teal</a>
    <a class="btn cyan" href="/">Cyan</a>
    <a class="btn grey" href="/">Grey</a>
    <a class="btn disabled" href="/">Disabled</a>

    <a class="btn red" href="/"><i class="material-icons">person</i>Icon</a>

    <space30></space30>
    
    <a tooltip="Hiasdfasdfasfd" tooltip-pos="top" class="btn fab red" href="/"><i class="material-icons">person</i></a>

    <a class="btn fab red small" href="/"><i class="material-icons">person</i></a>

    <a class="btn fab red bottom-right" href="/"><i class="material-icons">person</i></a>
    <space30></space30>

    <div class="card">
        <div class="card-title">Hello world</div>
        <div class="card-text">
            Hello world
        </div>
        <div class="card-action-btn">
            <a class="btn clean" href="/">Teal</a>
            <a class="btn clean" href="/">Teal</a>
            <a class="btn clean" href="/">Teal</a>
            <a class="btn trn clean" href="/">Teal</a>
        </div>
    </div>

    <div rounder hewi="100px" style="background: #323232"></div>

    <div class="col_900px col_container">
        <div class="col_300px p10px">
            <div class="card">
            <div class="card-title">Hello world</div>
            <div class="card-text">
                Hello world
            </div>
            <div class="card-action-btn">
                <a class="btn clean" href="/">Teal</a>
                <a class="btn clean" href="/">Teal</a>
                <a class="btn clean" href="/">Teal</a>
                <a class="btn clean" href="/">Teal</a>
            </div>
        </div>
        
    </div>

        <div class="col_300px p10px">
            <div class="card">
            <div class="card-title">Hello world</div>
            <div class="card-text">
                Hello world
            </div>
            <div class="card-action-btn">
                <a class="btn clean" href="/">Teal</a>
                <a class="btn clean" href="/">Teal</a>
                <a class="btn clean" href="/">Teal</a>
                <a class="btn clean" href="/">Teal</a>
            </div>
        </div>
        </div>

        <div class="col_300px p10px">
            <div class="card">
            <div class="card-title">Hello world</div>
            <div class="card-text">
                Hello world
            </div>
            <div class="card-action-btn">
                <a class="btn clean" href="/">Teal</a>
                <a class="btn clean" href="/">Teal</a>
                <a class="btn clean" href="/">Teal</a>
                <a class="btn clean" href="/">Teal</a>
            </div>
        </div>
        </div>
        

    </div>

    <div class="col_list">
        <div class="col_33p">
            <a class="btn red" href="/">Red</a>
            <a class="btn blue" href="/">Blue</a>
            <a class="btn green" href="/">Green</a>
            <a class="btn teal" href="/">Teal</a>
            <a class="btn cyan" href="/">Cyan</a>
        </div>
        <div class="col_33p">
            <a class="btn red" href="/">Red</a>
            <a class="btn blue" href="/">Blue</a>
            <a class="btn green" href="/">Green</a>
            <a class="btn teal" href="/">Teal</a>
            <a class="btn cyan" href="/">Cyan</a>
        </div>
        <div class="col_33p">
            <a class="btn red" href="/">Red</a>
            <a class="btn blue" href="/">Blue</a>
            <a class="btn green" href="/">Green</a>
            <a class="btn teal" href="/">Teal</a>
            <a class="btn cyan" href="/">Cyan</a>
        </div>
    </div>

</body>
</html>

<style>
/* INITIAL */

* {
    font-family: sans-serif;
}

</style>