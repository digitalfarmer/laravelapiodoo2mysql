
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">No Delivery</th>
      <th scope="col">Destination Location</th>
    </tr>
  </thead>
  <tbody>
    
@foreach($stock_picking as $stock)
<tr>
 
      <th scope="row">{{$stock['id']}}</th>
      <td>{{$stock['name']}}</td>
      <td>{{$stock['origin']}}</td>
      <td>
        @foreach($stock['location_dest_id'] as $location)
            {{$location}}
        @endforeach
      </td>
     
   
      </tr>
@endforeach

  </tbody>
</table>