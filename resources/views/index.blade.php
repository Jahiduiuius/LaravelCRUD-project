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
    @if (session('massage'))
            <div class="alert alert-success">{{ session('massage') }}</div>
        @endif



    <div class="text-center">
        <h1>Face Of Art Info System</h1>
        <p>Employee information system project</p>
        <br>




        


        <a href="{{ route('create') }}">
            <button class="btn btn-md btn-success"> Create</button>
        </a>

        
    </div>

    {{-- {{ $teams }}  --}}
    <div class="container">
        <table class="table table-striped">
            <thead>


                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($teams as $team)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $team->firstName }}</td>
                        <td>{{ $team->lastName }}</td>
                        <td>{{ $team->email }}</td>
                        <td>
                            <div class="btn-group">

                                <a href="{{ route('edit', $team->id) }}">
                                    <button class="btn btn-md btn-success m-1 p-1">edit</button>
                                </a>


                                <form action="{{ route('delete') }}" method="POST">

                                    @method('DELETE')
                                    @csrf
                                    <input type="text" name="team_id" value="{{ $team->id }}" hidden>

                                    <button class="btn btn-md btn-danger p-1">delete</button>
                                </form>
                            </div>

                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>


</body>

</html>
