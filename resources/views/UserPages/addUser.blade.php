@extends('layouts.app')

@section('content')

<head><head>

</head>
  </head>

<title>Add User</title>

  
<style type="text/css">
    body{
    	
        
        background-size: cover;
        background-position: center center;
        background-attachment: fixed;
    }
    
    #ui label,h1{
        color: #fff;
    }
    

  header{background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)) , url(background.jpg);
	background-size:cover;
	background-position:center;
    height:100vh;	
   	}
	
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

     body{
	margin:0;
	padding:0;
	font-family:sans-serif;
	}
			
	.logo h2{
	float:left;
	width:150px;
	height:auto;
	color:#fff;
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
	
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
} 

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

    div {
  border-radius: 5px;
  padding: 20px;
     
}


    </style>

<body>
<header>
    <div class='main'>
       <div class='logo'>
         <h2>PHARMACY<h2>
       </div>
      <ul>
        <li><a href='#'>HOME</a></li>
        <li><a href='#'>SERVICES</a></li>
        <li><a href='#'>ABOUT</a></li>
        <li><a href='#'>CONTACT</a></li>
      </ul>
    </div>
    <div class='title'>
     <h1>ADD USER</h1>
    </div>
    <div class='button1'>
     <a href='#add' class='btn1' >Add New User</a>
   
    </div>
    
    
   </header>

<h3>Add User</h3>

<div>
<form action="/userData" method="post"> 

<label for="fname">User Name</label>
    <input type="text" id="User_name" name="User_name" placeholder="Your name.." class="form-control" >

    <label for="lname">Address</label>
    <input type="text" id="Address" name="Address" placeholder="Your Address.."  class="form-control" >

    <label for="country">Mobile</label>
    <input type="text" id="Mobile" name="Mobile" placeholder="Your number.."  class="form-control" >
  
    <input type="submit" class="btn btn-primary" value="Submit"  >
  </form>
</div>


    

@endsection
