$.ajaxSetup({
    headers:{
        'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
    }
});


$(document).ready(function(){
     // show all the data inside table
     $('#viewAllData').click(function(){
        $.get("/index/student/list/",function(data){
            console.log(data);
        });
     });
     function getData(){
         var result="";
        $.get("/index/student/list/",function(data){
            console.log(data[3].student_name);
            for(let x = 0;x<data.length;++x){
                result += `<tr>
                <td>${data[x].id}</td>
                <td>${data[x].student_name}</td>
                <td>${data[x].student_email}</td>
                <td>${data[x].student_contact}</td>
                <td>${data[x].student_address}</td>  
              </tr>`
            }
            $('#tbody').html(result);
          
        });
     }
     getData();
     

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