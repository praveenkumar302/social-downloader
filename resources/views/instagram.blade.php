<div class="container">
    <div class="row">
        @foreach($imageList as $image)
            @if($image['media_type'] == 'video')
            <div class="col-12 col-md-4 download-item mt-3">
                <div class="download-content">
                    <div class="download-top">
                        <div class="left">
                        <img src="{{$image['thumbnail']}}" alt="avatar">thenottoriousmme
                        </div>
                    </div>
                    <div class="media-box">
                        <img src="{{$image['thumbnail']}}" alt="Preview">
                        <span class="icon icon-downlabel icon-downvid"></span>
                        <div class="download-bottom">
                            <a href="{{$image['url']}}" class="btn download-media flex-center" data-ad="true" data-event="click_download_btn">Download Video</a>
                        </div>
                    </div>
                </div>
            </div>
            @elseif($image['media_type'] == 'image')

            <div class="col-12 col-md-4 download-item mt-3">
                <div class="download-content">
                    <div class="download-top">
                        <div class="left">
                        <img src="{{$image['url']}}" alt="avatar">thenottoriousmme
                        </div>
                    </div>
                    <div class="media-box">
                        <img src="{{$image['url']}}" alt="Preview">
                        <span class="icon icon-downlabel icon-downvid"></span>
                        <div class="download-bottom">
                            <a href="{{$image['url']}}" class="btn download-media flex-center" data-ad="true" data-event="click_download_btn">Download Image</a>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        @endforeach
    </div>
</div>