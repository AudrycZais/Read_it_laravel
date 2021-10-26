/* 

    public/assets/js/app.js

*/

$(function(){


    let offset=10;

    const baseURL = $('body').attr('data-baseURL');

    $('#older-posts').click(function(e){
        e.preventDefault();

        $.ajax({
            url : baseURL + '/ajax/older-posts',
            data: {
                offset: offset
            },
            method: 'get',

            success: function(responsePHP){
                $('#liste-posts')   .append(responsePHP)
                                    .find('.col-md-6:nth-last-of-type(-n+10)')
                                    .addClass('fadeInUp').addClass('ftco-animated');
                offset+= 10;

                

            },

            error: function(){
                alert("Problem while transacting");
            }
        });
    });

    $('#formComments').submit(function(e){
        e.preventDefault();

        $.get($(this).attr('action'), {
            pseudo: $('#pseudo').val(),
            pseudo: $('#text').val(),
            pseudo: $('#postID').val()
        })
         .done(function (response){
            $('.comment-list').append(responsePHP)
                              .find('li:last-of-type')
                              .hide()
                              .slideDown();
         });
        
        $.ajax({
            url: baseURL +'/ajax/insert',
            
            data:{
                pseudo: $('#pseudo').val(),
                text  : $('#text').val()

            },

            method: 'get',
            success: function(responsePHP){
                alert(responsePHP);
            },

            error: function(){
                alert("Problem while adding your comment");
            }
        });
    });

});
