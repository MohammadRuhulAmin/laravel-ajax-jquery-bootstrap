<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
</head>
<body>
    
    <div class="container mt-5">
        <h1 class="alert-info text-center mb-5 p-3">Ajax Jquery Laravel Crud Tutorial</h1>
    </div>
    <div class="row">
        <form class="col-sm-5" id="myform">
            @csrf 
            <h3 class="alert-warning text-center p-2">Add/Update Student Information</h3>
            <div>
                <label for="student_name" class="form-label">Student Name</label>
                <input type="text"class="form-control" name="student_name" id="student_name"  />
            </div>
            <div>
                <label for="student_email" class="form-label">Student Email</label>
                <input type="email"class="form-control" name="student_email" id="student_email"  />
            </div>
            <div>
                <label for="student_contact" class="form-label">Student Contact</label>
                <input type="text"class="form-control" name="student_contact" id="student_contact"  />
            </div>
            <div>
                <label for="student_address" class="form-label">Student Address</label>
                <input type="text"class="form-control" name="student_address" id="student_address"  />
            </div>
            <div>
                <button class="btn btn-success" id="student_btn">Save Information</button>
            </div>
        </form>
    </div>
    <div class="alert alert-danger" id="msg"></div>



  



    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="{{asset('js/pooper.js')}}"></script>
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/jqueryAjax.js')}}"></script>
</body>
</html>