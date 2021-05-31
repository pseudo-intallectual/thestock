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
        font-family: sans-serif
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
        color: #fff;
        font-weight: 100
        
    }


	</style>

	<title>HOME | Stock</title>
	<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>CSS/login.css">
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
                <div class="col-12">
                    <div class="card tcard p-2">
                            <div class="card-hrader d-flex" style=" padding: 1rem;" >
                                <h4 class="card-title">Trading record</h4>
                                <a href="<?php echo base_url() ?>dashboard/add" class="btn ml-auto" style="color:#fff" role="button"><i class="fas fa-plus fa-2x "></i></a>
                            </div>
                            <div class="card-body">
                            <table class="table tablesorter " id="">
                    <thead class=" text-primary">
                      <tr>
                        <th>
                          Company
                        </th>
                        <th>
                          Buy price
                        </th>
                        <th>
                          Sell price
                        </th>
                        <th class="text-center">
                          Shares
                        </th>
                        <th class="text-center">
                          Returns
                        </th>
                        <th class="text-center">
                          Activity
                        </th>
                      </tr>
                    </thead>

                    <tbody>
                    <?php
                      foreach($data as $s){
                        ?>
                      <tr>
                        <td>
                          <?php echo $s['Company'] ?>
                        </td>
                        <td>
                          $<?php echo $s['buy'] ?>
                        </td>
                        <td>
                          $<?php echo $s['sell'] ?>
                        </td>
                        <td class="text-center">
                          <?php echo $s['shares'] ?>
                        </td>
                        <td class="text-center">
                          <?php echo $s['shares']*($s['sell']-$s['buy']) ?>
                        </td>
                        <td class="text-center">
                          <div>
                          <a href="<?= base_url() ?>dashboard/update?id=<?php echo $s['shareid'] ?>" class="btn" style="color:#fff" role="button"><i class="fas fa-pen-square "></i></a>
                          <a href="<?= base_url() ?>dashboard/delete?id=<?php echo $s['shareid'] ?>" class="btn" style="color:#fff" role="button" ><i class="fas fa-trash"></i></a>
                          </div>
                        </td>
                      </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                            <div class="table-responsive ps">
                     </div>


                            

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    
    
	</body>
</html>