<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>YouTube</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="shortcut icon" href="{{asset('images/logo.png')}}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet"/>
</head>
<body>
    <div class="header">
        <div class="logo-container">
            <i class="ri-menu-line"></i>
            <div class="logo">
                <div class="logo-img">
                    <img src="{{asset('images/logo.png')}}" alt="">
                </div>
                <h1 id="logo-txt">YouTube</h1>
            </div>
        </div>
        <div class="search-container">
            <form action="">
                <input type="text" placeholder="Search">
            </form>
            <button class="search">
                <i class="ri-search-line"></i>
            </button>
            <button class="mic">
                    <i class="ri-mic-fill"></i>
            </button>
        </div>
        <div class="profile-container"></div>
    </div>
    <div class="body-container"></div>
</body>
</html>