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
    .title{
	position:absolute;
	top:50%;
	left:50%;
	transform:translate(-50%,-50%);
	}
    .button1{
	position:absolute;
	top:65%;
	left:50%;
	transform:translate(-50%,-50%);
	}
    .btn1{
	border:1px solid #fff;
	color:#fff;
	padding:10px 30px;
	text-decoration:none;
	transition:0.6s ease;
	}
    .btn1:hover{
	background-color:#000;
    color:#55ff;
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
    header{background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)) , url(people.jpg);
	background-size:cover;
	background-position:center;
    height:100vh;	
   	}

    footer.footer {
    text-align: center;
    padding: 3px;
    background-color: #191970;
    color: white;
    }

    .logo h2{
	float:left;
	width:150px;
	height:auto;
	color:#fff;
	}







    </style>

</head>

<title>Edit Information</title> 



<body>
    <header class="header">

        <div class='main'>
            <div class='logo'>
                <h2>PHARMACY<h2>
            </div>
            <ul>
             <li><a href='/views/home'>HOME</a></li>
             <li><a href='/index'>SERVICES</a></li>
             <li><a href='/views/about'>ABOUT</a></li>
             <li><a href='/views/about'>CONTACT</a></li>
            </ul>
        </div>
        <div class='title'>
          <h1>Edit Your Information </h1>
         </div>
        <div class='button1'>
            <a href='/addUser' class='btn1' >Add New User</a>
            <a href='/retrieve' class='btn1' >Show information</a>          
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