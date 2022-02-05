<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login</title>

    </head>
    <body class="">
        
    <h1>This will show a list of registered teachers.</h1>
    
           <table>
         <thead>
            <tr>
                   <tr><th>First Name</th><tr>
                   <tr><th>Last Name</th><tr>
                   <tr><th>Age</th><tr>
                   <tr><th>Address</th><tr>
                   <tr><th>Phone Number</th><tr>
                   <tr><th>DATE OF BIRTH</th><tr>
            </tr>
         </thead>
        
         
         <tbody>
                   @foreach($animals as $teacher)
            <tr>
                       <td>{{ $teacher->first_name }}</td>
                       <td>{{ $teacher->last_name }}</td>
                       <td>{{ $teacher->age }}</td>
                       <td>{{ $teacher->address }}</td>
                       <td>{{ $teacher->phone_number }}</td>
                       <td>{{ $teacher->dob }}</td>
            </tr>
                   @endforeach
         </tbody>
         
      </table>














    </body>
</html>
