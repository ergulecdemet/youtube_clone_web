<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>YouTube</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="shortcut icon" href="{{asset('images/logo.png')}}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
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
            <button class="mic"><i class="ri-mic-fill"></i></button>
        </div>
        <div class="profile-container">
            <i class="ri-video-add-line"></i> <!-- remixicon -->
            <i class="ri-grid-fill"></i> <!-- remixicon -->
            <i class="ri-notification-4-line"></i> <!-- remixicon -->
            <div class="profile-box">
                <img src="{{asset('images/profile.jpg')}}" alt="" srcset="">
            </div>
        </div>
    </div>
    <div class="body-container">
        <div class="sidebar"> <!-- drawer -->
            <div class="sidebar-items">
                <a href="#" class="sidebar-item"><i class="ri-home-5-line"></i>Home</a>
                <a href="#" class="sidebar-item"><i class="ri-history-line"></i>History</a>
                <a href="#" class="sidebar-item"><i class="ri-video-line"></i>Video</a>
                <a href="#" class="sidebar-item"><i class="ri-time-line"></i>Time</a>
                <hr>
                <a href="#" class="sidebar-item"><i class="ri-play-list-2-line"></i>Play List</a>
                <a href="#" class="sidebar-item"><i class="ri-keyboard-box-line"></i>Keyboard</a>
                <a href="#" class="sidebar-item"><i class="ri-live-line"></i>Live</a>
                <a href="#" class="sidebar-item"><i class="ri-arrow-down-s-line"></i>Show More</a>
                <hr><a href="#" class="sidebar-item"><i class="ri-play-list-2-line"></i>Play List</a>
                <a href="#" class="sidebar-item"><i class="ri-keyboard-box-line"></i>Keyboard</a>
                <a href="#" class="sidebar-item"><i class="ri-live-line"></i>Live</a>
                <a href="#" class="sidebar-item"><i class="ri-arrow-down-s-line"></i>Show More</a>
                <hr><a href="#" class="sidebar-item"><i class="ri-play-list-2-line"></i>Play List</a>
                <a href="#" class="sidebar-item"><i class="ri-keyboard-box-line"></i>Keyboard</a>
                <a href="#" class="sidebar-item"><i class="ri-live-line"></i>Live</a>
                <a href="#" class="sidebar-item"><i class="ri-arrow-down-s-line"></i>Show More</a>
                <hr>
                <h4 class="more">More from youtube</h4>
                <a href="#" class="sidebar-item"><i class="ri-award-line"></i>Award</a>
                <a href="#" class="sidebar-item"><i class="ri-settings-5-line"></i>Settings</a>
                <a href="#" class="sidebar-item"><i class="ri-flag-line"></i>Flag</a>
                <a href="#" class="sidebar-item"><i class="ri-question-line"></i>Question</a>

            </div>
        </div>
        <div class="content">
            <div class="chips-wrapper">
                <div class="chip">
                    <p>ALL</p>
                </div>
                <div class="chip">
                    <p>HTML</p>
                </div>
                <div class="chip">
                    <p>CSS</p>
                </div>
                <div class="chip">
                    <p>BOOTSTRAP</p>
                </div>
                <div class="chip">
                    <p>JAVA</p>
                </div>
                <div class="chip">
                    <p>JQUERY</p>
                </div>
                <div class="chip">
                    <p>PYHTON</p>
                </div>
                <div class="chip">
                    <p>BOOTSTRAP</p>
                </div>
                <div class="chip">
                    <p>JAVA</p>
                </div>
                <div class="chip">
                    <p>JQUERY</p>
                </div>
                <div class="chip">
                    <p>PYHTON</p>
                </div>
                <div class="chip">
                    <p>BOOTSTRAP</p>
                </div>
                <div class="chip">
                    <p>JAVA</p>
                </div>
                <div class="chip">
                    <p>JQUERY</p>
                </div>
                <div class="chip">
                    <p>PYHTON</p>
                </div>
            </div>
            <div class="video-container">
                <div class="video-content-cover">
                    <div class="video-content">
                        <a href="#" class="video-box">
                            <img src="{{asset('images/logo.png')}}" alt="">
                        </a>
                        <div class="video-details">
                            <div class="channel-logo">
                                <img src="{{asset('images/profile.jpg')}}" alt="">
                            </div>
                            <div class="detail">
                                <h3 class="title">Complete responsive website design</h3>
                                <div class="channel-name">Demet Ergüleç</div>
                                <div class="views-upload">
                                    <div class="views">28K views</div>
                                    <div class="upload">1 year ago</div>
                                </div>
                            </div>
                        </div>
                        <div class="hidden-content">
                            <div class="btn"><i class="ri-time-line"></i>Watch later</div>
                            <div class="btn"><i class="ri-play-list-2-line"></i>Add to queue</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>

</html>