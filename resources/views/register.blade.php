<!doctype html>
<html lang="en">
<head>
    <title>Registration</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body>
    <div class="container mt-5">
        <form action="{{url('register')}}" method="POST">
            {{csrf_field()}}
            <div class="row">
                <div class="m-auto col-xl-6">
                    <div class="shadow card">
                        <div classs="card-header">
                           <center> <h4 class="card-title">Registration Form</h4></center>
                        </div><hr>
                     @if(Session::has('success'))
                         <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                <span class="sr-only">Close</span>
                                {{Session::get('success')}}
                            </button> 
                          <strong>Hello User!</strong> 
                         </div>
                     @elseif(Session::has('failed'))
                         <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                <span class="sr-only">Close</span>
                                {{Session::get('failed')}}
                            </button>
                                <strong>Hello User!</strong> 
                         </div>
                    </div>
                    @endif
                        <div class="card-body">
                            <div class="form-group">
                                <div class="col-sm-1-12">
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter full name"
                                        value="{{ old('name') }}"/>
                                     @if($errors->has('name'))
                                        <span class='text-danger'>{{$errors->first('name')}} </span>
                                     @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-1-12">
                                    <input type="email" class="form-control" name="email" id="email"
                                        value="{{ old('email') }}"  placeholder="Enter valid email">
                                    @if($errors->has('email'))
                                        <span class='alert text-danger'>{{$errors->first('email')}} </span>
                                     @endif                                                        
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-1-12">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <input type="phone" class="form-control" name="phone" id="phone"
                                        value="{{ old('phone') }}" placeholder="Enter your contact number" maxlength="10">
                                    @if($errors->has('phone'))
                                        <span class='text-danger'>{{$errors->first('phone')}} </span>
                                     @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-1-12">
                                    <input type="text" class="form-control" name="address" id="address" placeholder="Enter Address" />
                                    @if($errors->has('address'))
                                        <span class='text-danger'>{{$errors->first('address')}} </span>
                                     @endif
                                </div>

                            </div>
                            <div class="form-group">
                                <div class="col-sm-1-12">
                                    <input type="text" class="form-control" name="city" id="city" placeholder="Enter city"/>
                                    @if($errors->has('city'))
                                        <span class='text-danger'>{{$errors->first('city')}} </span>
                                     @endif
                                </div>

                            </div>
                            <div class="form-group">
                                <div class="col-sm-1-12">
                                    <input type="text" class="form-control" name="state" id="state" placeholder="Enter state"/>
                                    @if($errors->has('state'))
                                        <span class='text-danger'>{{$errors->first('state')}} </span>
                                     @endif
                                </div>

                            </div>

                            <div class="form-group">
                                  <div class="col-sm-1-12">
                                    <input type="text" class="form-control" name="zip" id="zip" placeholder="Enter zipcode"/>
                                    @if($errors->has('zip'))
                                        <span class='text-danger'>{{$errors->first('zip')}} </span>
                                     @endif
                                </div>

                            </div>
                            <div class="form-group">
                                   <div class="col-sm-1-12">
                                    <input type="password" class="form-control" name="password" id="password"
                                        value="{{ old('password') }}" placeholder="Enter your password" />
                                     @if($errors->has('password'))
                                        <span class='text-danger'>{{$errors->first('password')}} </span>
                                     @endif
                                </div>
                            </div>

                            <div class="card-footer">
                                <div class="offset-sm-2 col-sm-10">
                                    <button type="submit" name="submit" class="btn btn-primary">Register</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
