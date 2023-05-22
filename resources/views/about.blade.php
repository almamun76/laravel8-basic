<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>
</head>
<body>
    <a href="{{route('hm')}}">Home</a>
    <a href="{{route('s')}}">Skills</a>
    <a href="<?php echo URL::to('/edu-rt')?>">Education</a>
    <a href="<?php echo URL::to('/pf-rt')?>">Portfolio</a>
    <a href="{{route('ord-rt')}}">Order</a>
    <a href="<?php echo URL::to('/con-rt')?>">Contact</a>

    <h1>About Me</h1>
    <h3>(Without using controller)</h3>
    <!-- <img src="{{URL('images/l.jpg')}}" alt="image"/> -->
    <img src="{{asset('images/2.jpg')}}" alt="image"/>
</body>
</html>