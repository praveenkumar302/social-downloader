import $ from "jquery";


    window.searchVideoDwnld = () =>{
      
        $.ajax({
            url: 'http://127.0.0.1:8000/api/search',
            method: 'POST', // or 'POST', 'PUT', etc.
            data: { 
                url: $('.form-ig-control').value?$('.form-ig-control').value:'https://www.instagram.com/p/CvtqZ1pMX-o/?img_index=1',
                // token:  $("input[name='_token']").val()
            }, // Data to send to the server
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},

            dataType: 'json', // Expected data type of the response
            success: function(response) {
                // Code to handle the successful response
                console.log(response.succeess.data)
                $('#download-element').html(response.succeess.data);
            },
            error: function(xhr, status, error) {
                // Code to handle errors
            }

        });
    }


    // window.searchVideoDwnld();

    window.pasteUrl = async () =>{
        const text = await navigator.clipboard.readText();
        console.log(text);
        $('#PasteBtn').css("display","none");
        $('#clearBtn').css("display","flex");
        $(".form-ig-control").val(text);
        // $('.form-ig-control').value(text);
    }

    window.ClearUrl = () =>{
        $(".form-ig-control").val('');
        $('#PasteBtn').css("display","flex")
        $('#clearBtn').css("display","none")
    }

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