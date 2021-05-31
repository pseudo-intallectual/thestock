<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--     Fonts and icons     -->
<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet">
<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
	
    <style>
    body{
        
        background-color: #0f1319;
        padding: 0;
        margin: 0;
        font-family: sans-serif;
    }
    .nav-inc{
        margin: 0 15px;
        color:wheat
    }
    .sidebar{
        background: linear-gradient(
0deg
,#ba54f5,#e14eca);
    height: calc(90vh - 90px);
    width: 230px;
    position: fixed;
    top: 0;
    left: 0;
    z-index: 1;
    background-size: cover;
    background-position: 50%;
    display: block;
    box-shadow: 0 0 45px 0 rgb(0 0 0 / 60%);
    margin-top: 105px;
    margin-left: 20px;
    border-radius: 5px;


    }
    .main{
        padding: 50px 30px 30px 280px;
    min-height: calc(90vh - 70px);
        width: 100%;
    }
    .tcard{
        background-color:#27293d;
    }
    .card,.card-header,.card-title,.table{
        font-weight: 100
        padding: 15px 15px 0 15px;
        border: 0;
        color: hsla(0,0%,100%,.8);
    }
    .form-control{
        border-color: #4b5d94;
    border-radius: .4285rem;
    font-size: .75rem;
    transition: color .3s ease-in-out,border-color .3s ease-in-out,background-color .3s ease-in-out;
    background-color: #27293d;
    color: hsla(0,0%,100%,.8)
    }
    .btn-primary{
        background: #e14eca;
    background-image: linear-gradient(to bottom left,#e14eca,#ba54f5,#e14eca);
    background-size: 210% 210%;
    background-position: 100% 0;
    background-color: #e14eca;
    transition: all .15s ease;
    box-shadow: none;
    color: #fff
    }


	</style>

	<title>HOME | Add</title>
	<!-- <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>CSS/login.css"> -->
	<script type = 'text/javascript' src = "<?php echo base_url(); ?>JS/login.js"></script>


</head>
	<body>
    <nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent m-4">
        <div class="container-fluid">
            <a href="<?= base_url() ?>dashboard/home" class="navbar-brand">DASHBOARD</a>
        </div>
        <div>
            <ul class="navbar-nav ml-auto" style="">
                <li>
                    <i class="fas fa-search fa-2x nav-inc"></i>
                </li>
                <li>
                    <i class="fas fa-cog fa-2x nav-inc"></i>
                </li>
                <li>
                    <i class="fas fa-user fa-2x nav-inc"></i>
                </li>
            </ul>
        </div>
    </nav>
    <div class=" container-fluid row">
        <!-- siderbar -->
        <div class="sidebar ps ps--active-y">
                <h4> </h4>
        </div>
        <!-- sidebar end -->
        
        <!-- main -->
        <div class="main">
            <div class=row>
                <div class="col-8">
                    <div class="card tcard p-2">
                        <div class="card-header">
                            <h5 class="title">Add trade record</h5>
                        </div>

                        <form method="POST" action="<?php echo base_url() ?>dashboard/add">
                            <div class="card-body">
                            
                                
                                    <div class="form-group pl-0 col-6">
                                        <label>Company </label>
                                        <input name="Company" type="text" class="form-control" placeholder="Company" >
                                    </div>
                                
                                <div class="row">
                                    <div class="form-group col-4">
                                        <label>Buy price</label>
                                        <input name="Buy" type="number" class="form-control" placeholder="Buy price" >
                                    </div>
                                    <div class="form-group col-4">
                                        <label>Sell price</label>
                                        <input name="Sell" type="number" class="form-control" placeholder="sell pricr" >
                                    </div>
                                    <div class="form-group col-4">
                                        <label>Shares</label>
                                        <input name="Shares" type="number" class="form-control" placeholder="No. of Shares" >
                                    </div>
                                </div>
                            
                            </div>

                            <div class="card-footer">
                                <button type="submit" name="save" value="Save Data" class="btn btn-fill btn-primary">Save</button>
                            </div>
                        </form>    
                            
                    </div>
                </div>
            </div>
        </div>
    </div>



    
    
	</body>
</html>