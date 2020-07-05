$(document).ready(function(){
    $(".cover-heading").css("display", "none");
});

$('#fortune_modal').on('shown.bs.modal', function () {
    // $('#myInput').trigger('focus')
})

$('#fortune_modal').on('hide.bs.modal', function () {
    // $('#myInput').trigger('focus')
    $('#custom_cookie').removeClass('is-invalid');
    $('#custom_cookie').val("");
})



$(".reveal_btn").on("click", function(){
    
    var base_actions = 
            "<p class='lead'>" +
                "<a href='javascript:;' class='btn btn-lg btn-secondary'>Crack Again!</a>" +
            "</p>" +
            "<p class='lead'>" +
                "<a href='javascript:;' class='reveal_btn'>Make My Fortune</a>" +
            "</P>";

    $.ajax({
		url: 'app/index.php/fortune/get_rand_fortune',
		type:'GET',
		success: function(data){
            var myFortune = data;
            console.log(myFortune);
		},
		error:function(data){
			alertify.error("error occured");
		},
		dataType: 'JSON'
    });
    

})


$(".crack_it").on('click', function(){
    crack();

    var base_actions = 
            "<p class='lead'>" +
                "<a href='javascript:;' onclick='crack_again()' class='btn btn-lg btn-secondary'>Crack Again!</a>" +
            "</p>" +
            "<p class='lead replace_div'>" +
                "<a href='javascript:;' onclick='reveal()'>Replace this Fortune</a>" +
            "</P>";

    $(".cover-heading").css("display", "block");

    $(".desc.lead").css("display", "none");

    $("#actions").html(base_actions);
});

$(".replace").on('click', function(){
    var cookie = $('#custom_cookie').val();
    if(cookie == ""){
        $('#custom_cookie').addClass('is-invalid');
    }else{
        $.ajax({
            url: 'app/index.php/fortune/replace_fortune',
            type:'POST',
            data: {
                id : $("#id").val(),
                fortune : cookie
            },
            success: function(data){
                if(typeof data['fortune'] != 'undefined'){
                    $(".cover-heading").html(data['fortune']['fortune']);
                    $("#id").val(data['fortune']['id']);

                    alert("Success");
                    $('.replace_div').remove();
                    $('#fortune_modal').modal('hide');
                }else{
                    alert(data);
                }
            },
            error:function(data){
                alert("error occured");
            },
            dataType: 'JSON'
        });
    }
});

function reveal(){
    $('#fortune_modal').modal('show');
}

function crack(){
    $.ajax({
		url: 'app/index.php/fortune/get_rand_fortune',
		type:'GET',
		success: function(data){
            if(typeof data['fortune'] != 'undefined'){
                $(".cover-heading").html(data['fortune']['fortune']);
                $("#id").val(data['fortune']['id']);
            }
		},
		error:function(data){
			alertify.error("error occured");
		},
		dataType: 'JSON'
    });
}

function crack_again(){
    crack();

    var base_actions = 
            "<p class='lead'>" +
                "<a href='javascript:;' onclick='crack_again()' class='btn btn-lg btn-secondary'>Crack Again!</a>" +
            "</p>" +
            "<p class='lead replace_div'>" +
                "<a href='javascript:;' onclick='reveal()'>Replace this Fortune</a>" +
            "</P>";

    $(".cover-heading").css("display", "block");

    $(".desc.lead").css("display", "none");

    $("#actions").html(base_actions);
}
