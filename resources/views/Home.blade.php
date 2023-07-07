<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Consume API</title>
{{--  Axios  --}}
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
{{--  jQuery  --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
{{--  Bootstrap  --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

    <div class="table-responsive">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Company</th>
                </tr>
            </thead>
            <tbody id="dataBody"></tbody>
        </table>
    </div>

</body>

<script>

    $(document).ready(function () {

        getUsers()

    })

    const getUsers = () => {

        axios.get(`https://jsonplaceholder.typicode.com/users`)
            .then((res) => {

                appendData(res.data)

            })

    }

    const appendData = (data) => {

        const dataBody = document.getElementById('dataBody')

        data.map((data) => {
            $(dataBody).append(`

                    <tr>
                        <td>${data.id}</td>
                        <td>${data.name}</td>
                        <td>${data.email}</td>
                        <td>${data.company.name}</td>
                    </tr>

            `)
        })

    }

</script>

</html>
