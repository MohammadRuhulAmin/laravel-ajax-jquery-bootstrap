$.ajaxSetup({
    headers:{
        'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
    }
});

$(document).ready(function(){
   $('#student_btn').click(function(e){
       e.preventDefault();
        let student_name = $('#student_name').val();
        let student_email = $('#student_email').val();
        let student_address = $('#student_address').val();
        let student_contact = $('#student_contact').val();
        var student_information = {
            student_name:student_name,
            student_email:student_email,
            student_contact:student_contact,
            student_address:student_address
        };
        console.log(student_information);
      
        $.ajax({
            type:'POST',
            url:"/index/student/insert/",
            data:student_information,
            success:function(data){
                console.log(data);
                $('#msg').html(`<h1>${data}</h1>`);
            }
            // error:function(error){
            //     console.log(error);
            // }
        });



   });
});