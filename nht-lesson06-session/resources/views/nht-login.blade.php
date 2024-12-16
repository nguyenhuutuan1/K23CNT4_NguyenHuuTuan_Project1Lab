<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NHT - Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <section class="container my-3">
        <form action="{{route('nhtaccount.nhtloginsubmit')}}" method="post">
            @csrf
            <div class="card-header">
                <h1>NHT - Login</h1>
            </div>
                        
            <div class="card-body">
                <div class="mb-3">
                    <label for="nhtEmail" class="form-label">Email</label>
                    <input type="email" class="form-control" 
                        id="nhtEmail" name="nhtEmail"
                        placeholder="nhtEmail@example.com"/>
                    @error('nhtEmail')
                        <span class="text-danger">{{$message}}</span>
                    @enderror   
                </div>
                        
                <div class="mb-3">
                    <label for="nhtPass" class="form-label">Password</label>
                    <input type="password" class="form-control" 
                        id="nhtPass" name="nhtPass"
                        placeholder="xxxx"/>
                    @error('nhtPass')
                        <span class="text-danger">{{$message}}</span>
                    @enderror     
                </div>
            </div>
        
            <div class="card-footer">
                <button class="btn btn-primary">Submit</button>
                @if (Session::has('nht-error'))
                    <div class="alert alert-danger">
                        {{ Session::get('nht-error') }}
                    </div>
                @endif
            </div>
        </form>        
    </section>
</body>
</html>
