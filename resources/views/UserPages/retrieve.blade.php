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
    .title h1{
	color:#fff;
	font-size:70px;
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
    .btn2{
	border:1px solid #fff;
	color:#000;
	padding:10px 30px;
	text-decoration:none;
	transition:0.6s ease;
	}
    .btn2:hover{
	background-color:#000;
    color:#fff;
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

    .logo h2{
	float:left;
	width:150px;
	height:auto;
	color:#fff;
	}







    </style>

</head>

<title>Your Information</title> 



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
          <h1>Your Information </h1>
         </div>
         <div class='button1'>
            <a href='/addUser' class='btn1' >Add New User</a>          
        </div>
    </header>
    


    <div class='container'>
        <h3 >Your Information</h3>
        <br/>
        @if($message = session::get('success'))
        <div class="alert alert-success">
            <p>{{$message}}</p>
        </div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th> Name </th>
                    <th> Address</th>
                    <th> Mobile</th>
                    <th> EDIT</th>
                    <th> DELETE</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach ($UserData as $row)         
                <tr>
                    <td>{{$row['User_name']}}</td>
                    <td>{{$row['Address']}}</td>
                    <td>{{$row['Mobile']}}</td>
                    <td><a href="{{action('UserDataController@edit',$row['id'])}}">
                        <button class="btn2">  EDIT</button>
                        </a>
                    </td>
                    <td>
                        <form method="post" class="delete_form" action="{{action('UserDataController@destroy',$row['id'])}}">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="DELETE" />
                            <button type="submit" class="btn btn-danger"> DELETE</button>
                        </form>    
                    </td>
                </tr>
                @endforeach
            </tbody>  
          </table>
        <div>
            <a href="{{route('UserPages.addUser')}}" class="btn btn-primary">
            Add New User</a>
        </div> 
        
    <script>
        $(document).ready(function(){
            $('.delete_form').on('submit',function(){
                if(confirm("Are you sure yo want to delete your information?"))
                {
                    return true;
                }
                else
                {
                    return false;
                }                  
            });
        });
    </script>    



    <footer class="footer">
       <p>hoping that we can help you</p>
    </footer>


</body>    

@endsection