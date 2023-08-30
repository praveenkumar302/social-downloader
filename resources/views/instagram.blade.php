<div class="container">
    <div class="row">
        @foreach($imageList as $image)
            @if($image['media_type'] == 'video')
            <div class="col-12 col-md-4 download-item mt-3">
                <div class="download-content">
                    <div class="download-top">
                        <div class="left">
                        <img src="https://d.rapidcdn.app/snapinsta?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1cmwiOiJodHRwczovL3Njb250ZW50LmNkbmluc3RhZ3JhbS5jb20vdi90NTEuMjg4NS0xOS8zNDg5NTQ5MzNfOTM3MTY4NTEwODM2NzM4Xzc3Njk5NTgyMTM2NTQyMDA3NDdfbi5qcGc_c3RwPWRzdC1qcGdfczE1MHgxNTAmX25jX2h0PXNjb250ZW50LmNkbmluc3RhZ3JhbS5jb20mX25jX2NhdD0xJl9uY19vaGM9OTFjN1pqUmY5R2tBWDhxRUFJNSZlZG09QVBzMTdDVUJBQUFBJmNjYj03LTUmb2g9MDBfQWZEWFNTN3Rmb2tkQjU3aXQ1M2EzOFBIdE1FbDFiQkpFbWpwZE1qLVphc1ZaZyZvZT02NEY0RkUyQSZfbmNfc2lkPTEwZDEzYiIsImZpbGVuYW1lIjoiU25hcGluc3RhLmFwcF8zNDg5NTQ5MzNfOTM3MTY4NTEwODM2NzM4Xzc3Njk5NTgyMTM2NTQyMDA3NDdfbi5qcGcifQ.M1o5KCQpxIEiroCRUwPeJLxyTuV2deChWxXsgjCSsFY" alt="avatar">thenottoriousmme
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
                        <img src="https://d.rapidcdn.app/snapinsta?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1cmwiOiJodHRwczovL3Njb250ZW50LmNkbmluc3RhZ3JhbS5jb20vdi90NTEuMjg4NS0xOS8zNDg5NTQ5MzNfOTM3MTY4NTEwODM2NzM4Xzc3Njk5NTgyMTM2NTQyMDA3NDdfbi5qcGc_c3RwPWRzdC1qcGdfczE1MHgxNTAmX25jX2h0PXNjb250ZW50LmNkbmluc3RhZ3JhbS5jb20mX25jX2NhdD0xJl9uY19vaGM9OTFjN1pqUmY5R2tBWDhxRUFJNSZlZG09QVBzMTdDVUJBQUFBJmNjYj03LTUmb2g9MDBfQWZEWFNTN3Rmb2tkQjU3aXQ1M2EzOFBIdE1FbDFiQkpFbWpwZE1qLVphc1ZaZyZvZT02NEY0RkUyQSZfbmNfc2lkPTEwZDEzYiIsImZpbGVuYW1lIjoiU25hcGluc3RhLmFwcF8zNDg5NTQ5MzNfOTM3MTY4NTEwODM2NzM4Xzc3Njk5NTgyMTM2NTQyMDA3NDdfbi5qcGcifQ.M1o5KCQpxIEiroCRUwPeJLxyTuV2deChWxXsgjCSsFY" alt="avatar">thenottoriousmme
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