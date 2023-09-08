<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        body{
            min-height: 100vh;
            background-image: linear-gradient(rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.75)), url('images/bg2.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }
        input{
            height: 48px;
        }
    </style>
</head>
<body>


    <div class="container">
        
        <div class="row">
            
            <div class="col-lg-12">
                <div class="d-flex justify-content-center" >
                    <form method="post" style="z-index: 999;" class="bg-white mt-5 shadow-lg p-5 rounded w-50" action="{{ route('social.userlog') }}">
                        @csrf
                        @method('post')
                        <h2 class="text-center">Sign In</h2>
                        <div class="form-group mt-4">
                            <input type="text" class="form-control" name="email" placeholder="Email" required >
                        </div>

                        <div class="form-group mt-4">
                            <input type="password" class="form-control" name="password" placeholder="Password" required >
                        </div>

                        <div class="form-group mt-4">
                            <button type="submit" class="btn btn-dark w-100" style="height: 52px;">Sign In </button>
                            <input type="hidden" name="_token" value="{{ Session::token() }}">
                        </div>
                        <div class="form-group mt-4 d-flex justify-content-center">
                            <a href="{{ route('social.userreg') }}" class="text-secondary text-decoration-none" >Don't have an account? Register here</a>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>

    </div>
    

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>

</body>
</html>