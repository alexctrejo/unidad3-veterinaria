<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css\bootstrap.min.css') }}">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h4>Panel</h4><hr>
                <table class="table table-hover">
                    <thead>
                        <th>Nombre  </th>
                        <th>Correo  </th>
                        <th></th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $LoggedUserInfo['name'] }}</td>
                            <td>{{ $LoggedUserInfo['email'] }}</td>
                            <td><a href="{{ route('auth.logout') }}">Logout</a></td>
                        </tr>
                    </tbody>
                </table>

                <ul>
                    <li><a href="/admin/dashboard">Panel</a></li>
                    <li><a href="/admin/profile">Perfil</a></li>
                    <li><a href="/admin/settings">Ajustes</a></li>
                    <li><a href="/admin/staff">Personal</a></li>
                </ul>

            </div>
        </div>
    </div>

</body>
</html>
