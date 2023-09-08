<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>
<body style="background: #F5F0BB  ; ">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="z-index: 1000; position: fixed; width: 100%; margin-top: -8px;">
 
 <a class="navbar-brand mx-4" href="{{ route('social.global') }}">Luminous</a>

 <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
   <span class="navbar-toggler-icon"></span>
 </button>




 <div class="collapse navbar-collapse" id="navbarSupportedContent">
   <ul class="navbar-nav ms-auto mx-5">
     
     <li class="nav-item">
       <a class="nav-link px-3 mx-3 rounded" href="{{ route('social.logout') }}">Logout</a>
     </li>


   </ul>
   
 </div>
</nav>


    <div class="p-5"></div>

    <div class="col-lg-12 col-md-12 col-sm-12" >
      <div class="bg-light d-flex justify-content-center rounded" style="width: 650px; margin-top:">
        <form method="post" action=" {{ route('social.update', ['yourpost' => $yourpost]) }} ">
            @csrf
            @method('put')
          <input type="text" name="title" class="form-control my-3 w-50" value="{{ $yourpost->title }}" placeholder="Title...">
          <textarea class="form-control" placeholder="Write a Story..."  name="post" class="rounded" style="width: 600px; height: 100px; "> {{ $yourpost->post }} </textarea>
          <button class="btn btn-dark my-2 px-4" type="submit"><b>UPDATE</b></button>
        </form>
      </div>
    </div>

 


    

<div class="p-5"></div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>

</body>
</html>