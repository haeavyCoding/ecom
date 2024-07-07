@extends('master')
@section('content')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <form>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn btn-primary py-1 px-3">Submit</button>
                  </form>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function(){
        })
    </script>
@endsection
