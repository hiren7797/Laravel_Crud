<html>
<head>
<title>Cars Application</title>
<link rel="stylesheet" type="text/css" href="{{ url('/css/mycss.css') }}" />
</head>
<body>
<form action="{{route('cars.create')}}" method="post">
   @csrf
   <div id="insert">
  Make:
  <input type="text" name="make"><br><br><br>
  Model:
  <input type="text" name="model"><br><br>
  Produced_on:
  <input type="date" name="p_o"><br><br>
  <button type="submit">Create</button>
  </div>
</form>
<div id="show">
<table>
<tr>
<th>MAKE</th>
<th>MODEL</th>
<th>PRODUCED ON</th>
</tr>
@foreach($cars as $car)
  <tr>
        <td>{{$car->name}}</td>
        <td>{{$car->model}}</td>
        <td>{{$car->produed_on}}</td>
    </tr>
@endforeach
</table>
</div>
<br><br><br><br>
<form action="{{route('cars.edit')}}" method="post">
  @csrf
  Enter the model number to edit:<br>
  <input type="text" name="model"><br><br>
  Update following field:
  <input type="date" name="p_o">
  <br><br>MAKE:<input type="text" name="make"><br><br>
  <button type="submit">Edit</button>
</form>
<form action="{{route('cars.delete')}}" method="post">
@csrf
Enter model number to delete:<br>
<input type="text" name="model"><br><br>
<br>
<button type="submit">Delete</button>
</form>

</body>
</html> 