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
 
 <a class="navbar-brand mx-4" href="{{ route('social.index') }}">Luminous</a>

 <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
   <span class="navbar-toggler-icon"></span>
 </button>




 <div class="collapse navbar-collapse" id="navbarSupportedContent">
   <ul class="navbar-nav ms-auto mx-5">
     
     <li class="nav-item">
       <a class="nav-link px-3 mx-3 rounded text-white" href="{{ route('social.logout') }}">Logout</a>
     </li>


   </ul>
   
 </div>
</nav>

   <div class="p-5"></div>
    @foreach($stories as $story)
    <div class="container ">
        <form method="post">
        <div class="row">  
            <div class="col-lg-6 d-flex" style="width: 850px;">

                <div class="container rounded shadow-lg p-2 bg-white mt-4"  >
                
                                <div class="p-2 bg-white d-flex" style="border-bottom: 1px solid gray; position: relative;">
                                    <h4>Title: {{ $story->title }} </h4>


                                </div>

                                
                                <div class="py-4 px-2 bg-white">

                                <p>{{ $story->post }}</p>


                                </div>
                                

                                <div class="p-2 bg-white" style="border-top: 1px solid gray;">

                                <h5 >Author: {{ $story->user->name }} </h5>

                                </div>


                </div>
            </div>
        </div>
    </form>
</div>
@endforeach
<div class="p-5"></div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>

</body>
</html>