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
    header{background-image: linear-gradient(rgba(199, 25, 25, 0.5),rgba(76, 21, 202, 0.5));
	background-size:cover;
	background-position:center;
    height:70vh;	
   	}
    table.table {
    border: 1px solid #000000;
    background-color: #fffafa;
    width: 90%;
    text-align: center;
    align: center;
    border-collapse: collapse;
    border-spacing: 15px;
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

    
    table.blueTable {
  border: 1px solid #1C6EA4;
  background-color: #EEEEEE;
  width: 70%;
  text-align: center;
  border-collapse: collapse;
  border-spacing: 20px;
  align:center;
}
table.blueTable td, table.blueTable th {
  border: 1px solid #AAAAAA;
  padding: 5px 2px;
}
table.blueTable tbody td {
  font-size: 13px;
}
table.blueTable tr:nth-child(even) {
  background: #D0E4F5;
}
table.blueTable thead {
  background: #1C6EA4;
  background: -moz-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
  background: -webkit-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
  background: linear-gradient(to bottom, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
  border-bottom: 2px solid #444444;
}
table.blueTable thead th {
  font-size: 15px;
  font-weight: bold;
  color: #FFFFFF;
  border-left: 2px solid #D0E4F5;
}
table.blueTable thead th:first-child {
  border-left: none;
}

table.blueTable tfoot {
  font-size: 14px;
  font-weight: bold;
  color: #FFFFFF;
  background: #D0E4F5;
  background: -moz-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
  background: -webkit-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
  background: linear-gradient(to bottom, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
  border-top: 2px solid #444444;
}
 table.blueTable tfoot td {
  font-size: 14px;
}
  table.blueTable tfoot .links {
  text-align: right;
}
  table.blueTable tfoot .links a{
  display: inline-block;
  background: #1C6EA4;
  color: #FFFFFF;
  padding: 2px 8px;
  border-radius: 5px;
}
.container{
	width:2000px;
	margin:50px auto 0;
	display:table;
	box-sizing:border-box;	
	}







    </style>

</head>

<title>Your Information</title> 




<body>
    <header class="header">
        <img src=“people.jpg” >
        <div class='main'>
            
         
         </div>
         <div class='title'>
          <h1>Your Information </h1>
         </div>
         <div class='button1'>
            <a href='/UserPages.addUser' class='btn1' >Add New User</a>                   
        </div>
        <span class="image featured"><img src="images/people.jpg" alt="" /></span>  
    </header>
    


    <div class='container'>
        <h3 >Your Information</h3>
        <br/>
       
        
        
        <table class="blueTable">
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
                    <td>{{$row['User_name'] }}</td>
                    <td>{{$row['Adress']}}</td>
                    <td>{{$row['Mobile']}}</td>
                <td><a href="/UserPages/editUser/{{$row['id']}}"  >
                        <button class="btn2">  EDIT</button>
                        </a>
                    </td>
                    <td>
                        <form method="get" class="delete_form" value="get" >
                            {{ csrf_field() }}
                            <a href="/UserPages/deleteUser/{{$row['id']}}"  > 
                                <button type="submit" class="btn btn-danger"> DELETE</button>
                            </a>
                            
                            
                        </form>    
                    </td>
                </tr>
                @endforeach
            </tbody>  
          </table>

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


<br>
<br>
    <footer class="footer">
       <p>hoping that we can help you</p>
    </footer>


</body>    

@endsection