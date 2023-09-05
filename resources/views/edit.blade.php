<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">




    <title>info crud</title>
</head>

<body>
    <div class="text-center">
        <h1>Hello, Crud!</h1>
        <p>This is a simple CRUD application.</p>
    </div>

    <div class="container">
        
        <form method="POST" action="{{route ('editstore') }}">

            @csrf
    
            

             <input type="text" name="team_id" hidden value="{{ $team->id }}">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">first Name</label>
                <input type="text" name="firstName" class="form-control" required value="{{ $team->firstName }}">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Last Name</label>
                <input type="text" name="lastName" class="form-control" required value="{{ $team->lastName }}">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">E-mail</label>
                <input type="email" name="email" class="form-control" required value="{{ $team->email }}">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>
