$(document).ready( function(){
    users();
    getUser();
})

function users(){
    let action = "users";
    $.ajax({
        url: '../config/event.php',
        method: 'post',
        data: {action},
        success: function(data){
            $('.User').html(data)
        }
    })
}

function getUser(){
    let action = "getUser"
    let id = $('#GetMe').val()

    $.ajax({
        url: '../config/event.php',
        method: 'post',
        data: {action, id},
        success: function(data){
            $('#getUser').html(data)
        }
    })
}