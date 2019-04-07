$(document).ready(function(){
$('#trialForm').submit(function(e){

        $('#sendTrial').html($('<div/>')
            .text('SENDING').attr('class','text-center'));
        
    e.preventDefault();
    var data = new FormData(this);
    $.ajax({
        url:'/trialOrderSend',
        data:data,
        cache: false,
        contentType: false,
        processData: false,
        type: 'POST', 
        success:function(msge){
            //alert(msge);
            $('#sendTrial').html($('<button/>')
            .text('SEND')
            .attr('class','submit-btn btn-rounded btn-center'));
        }
    });
});
});