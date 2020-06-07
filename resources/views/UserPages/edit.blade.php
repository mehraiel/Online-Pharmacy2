@extends('layouts.app')

@section('content')



<head>
    

    <style type="text/css">

    ul{
    float:right;
    list-style-type:none;
    margin-top:25px;
    }
    li{
    display:inline-block;
    }
    li a {
    text-decoration:none;
    color:#fff;
    padding:5px 20px;
    border :1px solid #000 transparent;
    transition: 0.6s ease;
    }
    li a:hover {background-color:#000;
    color:#55ff;	}
    .title h1{
	color:#fff;
	font-size:70px;
	}
    .container{
	width:800px;
	margin:50px auto 0;
	display:table;
	box-sizing:border-box;	
	}
    body{
	margin:0;
	padding:0;
	font-family:serif;
	}
    header{background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)) , url(background.jpg);
	background-size:cover;
	background-position:center;
    height:100vh;	
   	}
    table.table {
    border: 1px solid #000000;
    background-color: #fffafa;
    width: 90%;
    text-align: center;
    border-collapse: collapse;
    }
    table.table td, table.table th {
    border: 1px solid #000000;
    padding: 3px 2px;
    }
    table.table tbody td {
    font-size: 20px;
    }
    table.table thead {
    background: #a9a9a9;  
    border-bottom: 2px solid #000000;
    }
    table.table thead th {
    font-size: 20px;
    font-weight: bold;
    color: #FFFFFF;
    border-left: 2px solid #000000;
    }
    footer.footer {
    text-align: center;
    padding: 3px;
    background-color: #191970;
    color: white;
    }







    </style>

</head>

<title>Edit Information</title> 



<body>
    <header class="header">

        <div class='main'>
           <ul>
             <li><a href='#'>HOME</a></li>
             <li><a href='#'>SERVICES</a></li>
             <li><a href='#'>ABOUT</a></li>
             <li><a href='#'>CONTACT</a></li>
           </ul>
         </div>
         <div class='title'>
          <h1>Edit Your Information </h1>
         </div>

    </header>


    <div class='container'>
        <h3>Edit</h3>
        @if(count($errors)>0)
        <div class='alert alert-danger'>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>                    
                @endforeach
            </ul>

        @endif
        <form method="post" action="{{action('UserDataController@update',$id)}}">
           {{csrf_field()}}

            <input type="hidden" name="_method" value="PATCH" />
            <div class="form-group">
                <input type="text" name="User_name" class="form-control" value="{{$UserData->User_name}}" placeholder="Enter Your Name"/>
            </div>   
            
            <div class="form-group">
                <input type="text" name="Address" class="form-control" value="{{$UserData->Address}}" placeholder="Enter Your Address"/>
            </div> 

            <div class="form-group">
                <input type="number" name="Mobile" class="form-control" value="{{$UserData->Mobile}}" placeholder="Enter Your Mobile"/>
            </div> 

            <div class="form-group">
                <input type="submit"  class="btn btn-primary" value="Edit"/>
            </div> 
            
        </form>  

    </div>



    <footer class="footer">
       <p>hoping that we can help you</p>
    </footer>

</body>    

@endsection