<html>
    <head>
    
    </head>
    <body>
       <form action="{{url('usercontoller')}}" method="get">
           <table>
               
                  <!-- <div>
                     @foreach($errors ->all() as $e)
                        <div>{{$e}}</div>
                     @endforeach
                  </div> -->
                  <tr>  
                  <td>
                 @csrf
                 <input type="text" name="username">
                 @error('username')
                 <div>{{ $e }}</div>
                 @enderror
                 <br><br>
                 <input type="password" name="password"><br><br>
                   <button type="submit">submit</button>
                  </td>
               </tr>
           </table>
       </form>
    </body>
</html>