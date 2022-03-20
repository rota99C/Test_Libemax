<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
        <link rel="stylesheet" href="/css/app.css">

    </head>
    <body>
        <div id="app">
        <!-- prova con componente Vue.js e DataTables.net-->
        <table-component></table-component>

        <!-- prova solo con Laravel -->
        <table id="table">
          <thead  style="border: 1px solid black">
            <tr>
              <th>Employee</th>
              <th>Direction</th>
              <th>Date and Time</th>
              <th>Duration</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($clockings as $clocking)
            <tr>
              <td>
                {{ $clocking->employee->name }},  {{ $clocking->employee->surname }}
              </td>
              <td>
                {{$clocking->direction}}
              </td>
              <td>
                {{$clocking->created_at->format('H:i:s')}}
              </td>
              @if ($loop->odd)
                <td rowspan="2">
                      <!-- calcolo della durata del turno di lavoro -->
                </td>
              @endif
              
            </tr>
            @endforeach
          </tbody>
        </table>
  
        </div>

        <script src="../js/app.js"></script>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>

    </body>
</html>
