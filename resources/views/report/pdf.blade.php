<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style>
      table {
        border-collapse: collapse;
        width: 100%;
      }
      td, th {
        border: solid 2px;
        padding: 10px 5px;
      }
      tr {
        text-align: center;
      }
      .container {
        width: 100%;
        text-align: center;
      }
    </style>
  </head>
  <body>
    <div class="container">
        <div><h2>Employee Details from {{$searchingVals['from']}} to {{$searchingVals['to']}}</h2></div>
       <table id="example2" role="grid">
            <thead>
              <tr role="row">
                <th width="20%">First Name</th>
                <th width="20%">Last Name</th>
                <th width="10%">NIC</th>
                <th width="25%">Email</th>
                <th width="10%">Mobile</th>
                <th width="10%">Gender</th>
                <th width="15%">Birthdate</th>
                <th width="15%">Department</th>
                <th width="10%">Salary</th>
                <th width="10%">Experiance</th>  
                <th width="10%">Position</th>            
              </tr>
            </thead>
            <tbody>
            @foreach ($doctor as $doctor)
                <tr role="row" class="odd">
                  <td>{{ $doctor['firstname'] }} {{$doctor['lastname']}}</td>
                  <td>{{ $doctor['nic'] }}</td>
                  <td>{{ $doctor['email'] }}</td>
                  <td>{{ $doctor['mobile'] }}</td>
                  <td>{{ $doctor['gender'] }}</td>
                  <td>{{ $doctor['birthdate'] }}</td>
                  <td>{{ $doctor['deprtment'] }}</td>
                  <td>{{ $doctor['salary'] }}</td>
                  <td>{{ $doctor['experiance'] }}</td>
                  <td>{{ $doctor['position'] }}</td>
                
              </tr>
            @endforeach
            </tbody>
          </table>
    </div>
  </body>
</html>