<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact </title>
    <link rel="stylesheet" href="mdj/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 mt-5">
                <h4>Contactez moi</h4><hr>
                <form action="{{route('send.email')}}" method="POST">
                    @CSRF
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Entrez votre name" value="{{old('name')}}">
                        @error('name')<span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" class="form-control" name="email" placeholder="Entrez votre email" value="{{old('email')}}">
                        @error('email')<span class="text-danger">{{$message}}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="">subject</label>
                        <input type="text" class="form-control" name="subject" placeholder="Entrez votre subject" value="{{old('subject')}}">
                        @error('subject')<span class="text-danger">{{$message}}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="">Message</label>
                        <textarea name="message" class="form-control" cols="4" rows="4" >{{old('message')}}</textarea>
                        @error('message')<span class="text-danger">{{$message}}</span>@enderror
                    </div>
                    <button class="btn btn-primary">envoyer</button>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>