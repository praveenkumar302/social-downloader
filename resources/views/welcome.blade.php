<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <title>Social Download</title>

        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('js/index.js') }}" defer></script>
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
     
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
    <header class="header">
        <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">Social Downloader</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-md-auto gap-2">
                <li class="nav-item rounded">
                <a class="nav-link active" aria-current="page" href="#"><i class="bi bi-house-fill me-2"></i>Home</a>
                </li>
                <li class="nav-item rounded">
                <a class="nav-link" href="#"><i class="bi bi-people-fill me-2"></i>About</a>
                </li>
                <li class="nav-item rounded">
                <a class="nav-link" href="#"><i class="bi bi-telephone-fill me-2"></i>Contact</a>
                </li>
                <li class="nav-item dropdown rounded">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-person-fill me-2"></i>Language</a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">English</a></li>
                        <li><a class="dropdown-item" href="#">German</a></li>
                    </ul>
                </li>
            </ul>
            </div>
        </div>
        
        </nav>
    </header>

    <div class="container-main" style="height: auto !important;">
        <div class="container-color">
            <div class="container">
            <div class="ig-downloader">
                <div class="row">
                    <div class="tab-list">
                    <button class="tool-item" >
                        <img src="{{ asset('assets/images/video.svg') }}"  class="svgIcon24" alt="logo"  />
                        <span class="d-none d-md-block">Video</span>
                    </button>
                    <button class="tool-item" >
                    <img src="{{ asset('assets/images/photo.svg') }}"  class="svgIcon24" alt="logo"  />
                        <span class="d-none d-md-block">Photo</span>
                    </button>  
                    <button class="tool-item" ><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9 22H15C20 22 22 20 22 15V9C22 4 20 2 15 2H9C4 2 2 4 2 9V15C2 20 4 22 9 22Z" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M9.1001 12V10.52C9.1001 8.60999 10.4501 7.83999 12.1001 8.78999L13.3801 9.52999L14.6601 10.27C16.3101 11.22 16.3101 12.78 14.6601 13.73L13.3801 14.47L12.1001 15.21C10.4501 16.16 9.1001 15.38 9.1001 13.48V12Z" stroke="#ffffff" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path></svg><span class="d-none d-md-block">Reels</span></button>
                    <button class="tool-item" ><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9 22H15C20 22 22 20 22 15V9C22 4 20 2 15 2H9C4 2 2 4 2 9V15C2 20 4 22 9 22Z" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M9.1001 12V10.52C9.1001 8.60999 10.4501 7.83999 12.1001 8.78999L13.3801 9.52999L14.6601 10.27C16.3101 11.22 16.3101 12.78 14.6601 13.73L13.3801 14.47L12.1001 15.21C10.4501 16.16 9.1001 15.38 9.1001 13.48V12Z" stroke="#ffffff" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path></svg><span class="d-none d-md-block">Stories</span></button>
                    <button class="tool-item" ><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9 22H15C20 22 22 20 22 15V9C22 4 20 2 15 2H9C4 2 2 4 2 9V15C2 20 4 22 9 22Z" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M9.1001 12V10.52C9.1001 8.60999 10.4501 7.83999 12.1001 8.78999L13.3801 9.52999L14.6601 10.27C16.3101 11.22 16.3101 12.78 14.6601 13.73L13.3801 14.47L12.1001 15.21C10.4501 16.16 9.1001 15.38 9.1001 13.48V12Z" stroke="#ffffff" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path></svg><span class="d-none d-md-block">IGTV</span></button>
                    </div>
                </div>
                <div class="tab-heading mt-3">
                        <div class="heading-item tab-heading">
                            <h3 class="title">Instagram Video Download</h3>
                            <p class="subtitle">Download Video Instagram, Photo, Reels, Stories, IGTV online</p>
                        </div>
                    </div>
                </div>

               

                <form class="igSubmitForm mx-auto pb-3" >
                    <div class="relative mt-2 p-1 inputContainer">
                        <input name="content-url" type="text" placeholder="Paste Url Instagram" required class="form-ig-control pl-14 pr-2" required value="">
                        <button type="button" class="pasteBtn cursor-pointer appearance-none transition group inline-grid grid-flow-col  rounded-lg home:nav:rounded-full py-2 px-5 gap-2flex items-center justify-center py-3 text-sm">
                        <img src="{{ asset('assets/images/paste.svg') }}"  class="svgIcon24" alt="logo"  />
                        Paste</button>
                    </div>
                    <button type="submit" class="downloadBtn cursor-pointer appearance-none transition group  relative my-3 flex items-center " onclick="searchVideoDwnld()">Download</button>
                </form>

                <div class="container">
                    <div class="download" id="download-element"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- <div id="download-element"></div> -->


    </body>
</html>
