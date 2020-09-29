<html>
   <head>
   
   </head>
   <body>
      <form action="userinfo" method="GET">
      @csrf;
      <table>
      <?php
      $sess = Session::get('data');
      if(!empty($sess))
      {
         echo Session::get('data');
      }
      ?>
     
      @foreach( $errors->all() as $e)
      {{$e}}
      @endforeach
          <tr>
             <td><input type="text" name="userName" placeholder="UserName"></td>
          </tr>
          <tr>
             <td><input type="text" name="password" placeholder="Password"></td>
          </tr>
          <tr>
             <td><input type="submit" name="b1" value="Submit"></td>
          </tr>
      </table>
      </form> 
       </h1>
   </body>
</html>