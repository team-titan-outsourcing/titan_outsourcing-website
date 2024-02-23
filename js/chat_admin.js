$(document).ready(()=>{
    $("#nav").load('admin_nav.php');
    const urlParams = new URL(document.location).searchParams;
    const get_id = urlParams.get('id'); 
    
    $("#btn_submit_icon").on('click', ()=>{
        $("#btn_submit").click();
    });
    
    $("#input_form").on('submit', e=>{
        e.preventDefault();
        const get_id = urlParams.get('id'); 
        var message = $("#message").val();
        var admin = 1;
        $.ajax({
            url: '../includes/send_message_inc.php',
            type: 'POST',
            data: {
                get_id : get_id,
                message : message,
                admin : admin
            },
            cache: false,
            success: (res)=>{
                if(res=='success'){
                    $("#message").val("");
                }
            }
        })
    })
    getUserInfo(get_id);
    getmessageContent(get_id);
    getActiveUser();
    setInterval(()=>{
        getmessageContent(get_id); 
        getActiveUser();
        countMessage();
    },500);
    $('#message_container').scrollTop($('#message_container')[0].scrollHeight);
})


function getmessageContent(get_id){
    $.ajax({
        url: '../includes/getMessage_class_inc.php',
        type: 'POST',
        data: {
            get_id : get_id,
        },
        cache: false,
        success : res =>{
            $("#message_container").html(res);
            $('#message_container').scrollTop($('#message_container')[0].scrollHeight);
        }
    });
}

function getActiveUser(){
    $.ajax({
        url: '../includes/getActiveclass_inc.php',
        type: 'POST',
        data: {
            admin : 1,
        },
        cache: false,
        success : res =>{
            $("#list_active").html(res);
        
        }
    });
}

function countMessage(){
    $.ajax({
        url: '../includes/getCountMessageclass_inc.php',
        type: 'POST',
        data: {
            admin : 1,
        },
        cache: false,
        success : res =>{
            console.log(res);
        }
    });
}

function getUserInfo(get_id){
    $.ajax({
        url: '../includes/getUserInfo_inc.php',
        type: 'POST',
        data: {
            get_id : get_id,
        },
        cache: false,
        success : res =>{
            var result = JSON.parse(res);
            $("#name_sender").text(`${result['fname']} ${result['fname']}`)
        }
    });
}