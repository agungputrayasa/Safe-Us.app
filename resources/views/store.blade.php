<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data-Report</title>

    {{-- Fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    {{-- Added Style --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/Style/style.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="{{ asset('assets/Dist/Icon/logo.png')}}">

</head>
<body>

<h2 class="d-flex justify-content-center mt-4 mb-5">Data Reporting</h2>

<div class="container">
  <div class="row">
    <div class="col-lg-6">
      <a href="/Home/Form" class="btn btn-primary mb-4">Tambah Data</a>
    </div>
  </div>
    <div class="row">
      <div class="col-lg">
        <table class="table table-hover">
          <thead class="thead bg-success">
            <tr>
              <th scope="col">#</th>
              <th>NAMA</th>
              <th>NIK</th>
              <th>PHONE</th>
              <th>AGE</th>
              <th>JOB</th>
              <th>INFECTED</th>
              <th>INFECTED NIK</th>
              <th>DATE</th>
              <th>AGE</th>
              <th>ADDRESS</th>
              <th>ACTION</th>
            </tr>
          </thead>
          <tbody>
          @foreach($data_report as $data)
            <tr>
              <td scope="row">{{$data->id}}</td>
              <td>{{$data->username}}</td>
              <td>{{$data->mynik}}</td>
              <td>{{$data->myphone}}</td>
              <td>{{$data->age}}</td>
              <td>{{$data->job}}</td>
              <td>{{$data->user_infec}}</td>
              <td>{{$data->user_nik}}</td>
              <td>{{$data->date}}</td>
              <td>{{$data->user_age}}</td>
              <td>{{$data->address}}</td>
              <td><a href="/Home/{{$data->id}}/edit" class="btn btn-warning">edit</a></td>
              <td><a href="/Home/{{$data->id}}/delete" class="btn btn-danger">delete</a></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
</div>









{{-- Added Script --}}

    <script src="https://kit.fontawesome.com/0ef25f29a7.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>

