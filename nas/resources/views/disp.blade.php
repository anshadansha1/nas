<x-layout>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Book Name</th>
            <th scope="col">Author Name</th>
            <th scope="col">Price</th>
          </tr>
        </thead>
        <tbody>
            @foreach($data as $datas)
          <tr>
            <td>{{$datas->id}}</td>
            <td>{{$datas->bname}}</td>
            <td>{{$datas->uname}}</td>
            <td>{{$datas->price}}</td>
            <td> <a href="{{url('libs/'. $datas->id . '/delete')}}">delete</a>
                <a href="{{url('libs/'. $datas->id . '/update')}}">update</a>
            </td>
          </tr>
          @endforeach

        </tbody>
      </table>
</x-layout>