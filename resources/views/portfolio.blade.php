<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pf</title>
</head>
<body>
    <a href="{{route('hm')}}">Home</a>
    <a href="{{route('a')}}">About</a>
    <a href="{{route('s')}}">Skills</a>
    <a href="<?php echo URL::to('/edu-rt')?>">Education</a>
    <a href="{{route('ord-rt')}}">Order</a>
    <a href="<?php echo URL::to('/con-rt')?>">Contact</a>

    <h1>My Portfolio</h1>
    <h3>(Using controller)</h3>
</body>
</html>