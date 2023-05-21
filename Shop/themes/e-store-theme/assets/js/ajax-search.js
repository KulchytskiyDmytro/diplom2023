jQuery(function ($) {
    $('.search_form input[name="s"]').on('keyup', function () { // get value in input with a name s,  add event pressing key buttons
        var search = $('.search_form input[name="s"]').val(); // get value of search
        if (search.length < 1) { // enable script if there is more than 1 chars 
            return false;
        }
        var data = {    // collect values which are needed to be trasmited 
            s:search,
            action: 'search_action', // event is trigered
            nonce : search_form.nonce // anti spam check
        };
        $.ajax({  // call ajax 
            url: search_form.url, // url data
            data :data, // get data's data
            type:'POST', //type of transmition
            dataType:'json', // type of data 
            beforeSend:function(xhr){ //  
            }, 
            success:function(data){ // successful sending case 
                $('.search_form .search__result').html(data.out); // search value
                // var heightResilt = $('.search_form .search__result').height(); // chage height
                // $('.search_form .search__result').css('height', heightResilt);
                //.log($('.search_form .search-result').height());
            }
        });
        // console.log(search);
    });
});