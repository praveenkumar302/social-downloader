import $ from "jquery";


    function searchVideoDwnld(){
        $.ajax({
            url: 'http://127.0.0.1:8000/api/search',
            method: 'POST', // or 'POST', 'PUT', etc.
            data: { 
                url: 'https://www.instagram.com/reel/CwhBoshqU23/?igshid=MzRlODBiNWFlZA==',
                // token:  $("input[name='_token']").val()
            }, // Data to send to the server
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},

            dataType: 'json', // Expected data type of the response
            success: function(response) {
                // Code to handle the successful response
            },
            error: function(xhr, status, error) {
                // Code to handle errors
            }
        });
    }


    searchVideoDwnld();


    function disableInspect(){
        $(document).bind("contextmenu",function(e) {
            e.preventDefault();
        });
        document.onkeydown = (e) => {
            if (e.key == 123) {
                e.preventDefault();
            }
            if (e.ctrlKey && e.shiftKey && e.key == 'I') {
                e.preventDefault();
            }
            if (e.ctrlKey && e.shiftKey && e.key == 'C') {
                e.preventDefault();
            }
            if (e.ctrlKey && e.shiftKey && e.key == 'J') {
                e.preventDefault();
            }
            if (e.ctrlKey && e.key == 'U') {
                e.preventDefault();
            }
        };
    }

    // disableInspect();