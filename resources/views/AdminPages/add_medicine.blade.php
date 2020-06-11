@extends('layouts.app')

@section('content')

<head><head>
    <link href="delete.css" rel="stylesheet">

</head>
  </head>

<title>Add New Medicine</title>

  
<style type="text/css">
    body{
    	
        
        background-size: cover;
        background-position: center center;
        background-attachment: fixed;
    }
    
    #ui label,h1{
        color: #fff;
    }
    

  header{background-image: linear-gradient(rgba(250, 221, 221, 0.5),rgba(0,0,0,0.5)) , url(background.jpg);
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
	
	
	.btn1:hover{
	background-color:#000;
    color:#55ff;
	}

  .btn:hover{
  	background-color:#000;
    color:#fff;
	}

  }


  .column{
	/*background:#000;*/
	display:table-cell;
	padding:7px;
	width:33.3%;
	/*color:#fff;*/
	text-align:center;
	vertical-align:middle;
	border-right:10px solid #fff;
	border-left:10px solid #fff;
	}

    .row{
	margin:20px 0;
	}

    .container{
	width:800px;
	margin:50px auto 0;
	display:table;
	box-sizing:border-box;	
	}


    table.blueTable {
  border: 1px solid #1C6EA4;
  background-color: #EEEEEE;
  width: 100%;
  text-align: left;
  border-collapse: collapse;
}
table.blueTable td, table.blueTable th {
  border: 1px solid #AAAAAA;
  padding: 3px 2px;
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

.btn2:hover{
	background-color:#000;
    color:#fff;
	}

.btn2{
	border:1px solid #fff;
	color:#000;
	padding:10px 30px;
	text-decoration:none;
	transition:0.6s ease;
    position:absolute;	
	left:58%;
	transform:translate(-50%,-50%);
	}

.btn3{
	border:1px solid #fff;
	color:#000;
	padding:3px 10px;
	text-decoration:none;
	transition:0.6s ease;
	}
	
.btn3:hover{
	background-color:#ff1a1a;
    color:#fff;
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
     <h1>ADD MEDICINE</h1>
    </div>
    <div class='button1'>
     <a href='#add' class='btn1' >Add New Medicine</a>
     <a href='#all' class='btn1' >Show All Medicines</a>
    </div>
    
    
   </header>


    <section id=add>
      <div class='container' >
        <h3>ADD MEDICINE</h3>
        <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <div id="ui">
    <form action="/AdminPages.delete" method="Post" enctype="multipart/form-data">
        {{csrf_field()}}
        
        <div class="row">
            <div class="col-lg-6">
            <div class="form-group">
                    <label for="title">Product Name</label>
                    <input type="text" class="form-control" id="Product_name" name="Product_name">
        </div>
        </div>
    </div>
        <div class="row">
            <div class="col-lg-6">
                    <div class="form-group">
                        <label for="title">Product Price</label>
                            <input type="number" class="form-control" id="price" name="price">
        </div>
        </div>
    </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="title">Product image</label>
                    <input type="file" class="form-control" id="image" name="image">
        </div>
        </div>
    </div>
        <button type="submit" class="btn btn-primary">submit</button>
    </form>
</div>
</section>

<section id=all>
	  <div class='container'>
      <h3>Name Of All Medicines</h3>
        <table class="blueTable">
            <thead>
            <tr>
            
            <th>Product name</th>
            <th>price</th>
            <th>image</th>
            
            
            </tr>
            </thead>
            
            <tbody>
                @foreach($products as $prod)
                <tr>
                <th>{{$prod->Product_name}}</th>
                <th>{{$prod->price}}</th>
                <th>{{$prod->image}}</th>               
            
               </tr>
               @endforeach
            </tbody>
            </table>

    </div>	
</section>


    
@endsection
@endsection
