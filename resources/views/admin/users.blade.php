<!DOCTYPE html>
<html lang="en">
  <head>
   @include("admin.css")
  </head>
  <body>
    <div class="container-scroller">
    @include("admin.navbar")


    <div  style="position:relative; top: 60px; right:-150px;  align=center; ">
         <table bgcolor='gray' border="30px" width="1000px">

               <tr align="center">

                <th style ="padding:30px">Name</th>
                <th style ="padding:30px">Email</th>
                <th style ="padding:30px">Action</th>


               </tr>

        @foreach ($data as $data)




               <tr align="center">

                   <td style ="padding:30px">{{$data->name}}</td>
                   <td style ="padding:30px">{{$data->email}}</td>


                   @if($data->usertype =="0")
                   <td style ="padding:30px"><a href="{{url('/deleteuser' , $data->id)}}">Delet</a></td>
                    @else
                    <td style ="padding:30px"><p> NOT ALLOWEDE</p></td>
                    @endif
               </tr>
               @endforeach
         </table>




    </div>




    </div>

    @include("admin.script")


  </body>
</html>
