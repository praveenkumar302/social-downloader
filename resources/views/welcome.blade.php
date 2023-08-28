<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Social Download</title>

        <script src="{{ asset('js/app.js') }}" defer></script>
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
                    <button class="tool-item" ><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9 22H15C20 22 22 20 22 15V9C22 4 20 2 15 2H9C4 2 2 4 2 9V15C2 20 4 22 9 22Z" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M9.1001 12V10.52C9.1001 8.60999 10.4501 7.83999 12.1001 8.78999L13.3801 9.52999L14.6601 10.27C16.3101 11.22 16.3101 12.78 14.6601 13.73L13.3801 14.47L12.1001 15.21C10.4501 16.16 9.1001 15.38 9.1001 13.48V12Z" stroke="#ffffff" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path></svg><span class="d-none d-md-block">Video</span></button>

                    <button class="tool-item" ><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9 22H15C20 22 22 20 22 15V9C22 4 20 2 15 2H9C4 2 2 4 2 9V15C2 20 4 22 9 22Z" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M9.1001 12V10.52C9.1001 8.60999 10.4501 7.83999 12.1001 8.78999L13.3801 9.52999L14.6601 10.27C16.3101 11.22 16.3101 12.78 14.6601 13.73L13.3801 14.47L12.1001 15.21C10.4501 16.16 9.1001 15.38 9.1001 13.48V12Z" stroke="#ffffff" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path></svg><span class="d-none d-md-block">Photo</span></button>

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

                <form class="igSubmitForm mx-auto pb-3">
                        <div class="relative mt-2 p-1 inputContainer">
                            
                        <!-- <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="absolute top-1/2 ml-4 h-8 w-8 -translate-y-1/2 text-neutral-500" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M8.465 11.293c1.133-1.133 3.109-1.133 4.242 0l.707.707 1.414-1.414-.707-.707c-.943-.944-2.199-1.465-3.535-1.465s-2.592.521-3.535 1.465L4.929 12a5.008 5.008 0 0 0 0 7.071 4.983 4.983 0 0 0 3.535 1.462A4.982 4.982 0 0 0 12 19.071l.707-.707-1.414-1.414-.707.707a3.007 3.007 0 0 1-4.243 0 3.005 3.005 0 0 1 0-4.243l2.122-2.121z"></path><path d="m12 4.929-.707.707 1.414 1.414.707-.707a3.007 3.007 0 0 1 4.243 0 3.005 3.005 0 0 1 0 4.243l-2.122 2.121c-1.133 1.133-3.109 1.133-4.242 0L10.586 12l-1.414 1.414.707.707c.943.944 2.199 1.465 3.535 1.465s2.592-.521 3.535-1.465L19.071 12a5.008 5.008 0 0 0 0-7.071 5.006 5.006 0 0 0-7.071 0z"></path></svg>
                         -->
                        <input name="content-url" type="url" placeholder="Paste an Instagram video URL here" required="" class="form-ig-control pl-14 pr-2" value="">

                        <button type="button" class="pasteBtn cursor-pointer appearance-none transition group inline-grid grid-flow-col  rounded-lg home:nav:rounded-full py-2 px-5 gap-2flex items-center justify-center py-3 text-sm">
                            
                        <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10.5951 2.00008H11.9284C12.282 2.00008 12.6211 2.14056 12.8712 2.39061C13.1212 2.64065 13.2617 2.97979 13.2617 3.33341V14.0001C13.2617 14.3537 13.1212 14.6928 12.8712 14.9429C12.6211 15.1929 12.282 15.3334 11.9284 15.3334H2.59505C2.24143 15.3334 1.90229 15.1929 1.65224 14.9429C1.40219 14.6928 1.26172 14.3537 1.26172 14.0001V3.33341C1.26172 2.97979 1.40219 2.64065 1.65224 2.39061C1.90229 2.14056 2.24143 2.00008 2.59505 2.00008H3.92839M10.5951 2.00008C10.5951 2.73646 9.9981 3.33341 9.26172 3.33341H5.26172C4.52534 3.33341 3.92839 2.73646 3.92839 2.00008M10.5951 2.00008C10.5951 1.2637 9.9981 0.666748 9.26172 0.666748H5.26172C4.52534 0.666748 3.92839 1.2637 3.92839 2.00008M4.59505 7.33341H9.92839M4.59505 10.6667H9.92839" stroke="#696F84" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                        Paste
                    
                       </button>

                      
                        </div>
                        <button type="submit" class="downloadBtn cursor-pointer appearance-none transition group  relative my-3 flex items-center ">Download</button>

                    
                </form>
            </div>
          
        </div>
    </div>

    
    </body>
</html>
