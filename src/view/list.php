<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>
</head>
<body >
<div class="container">
    <h1>LIST PRODUCT</h1>
<a href="index.php?page=add" class="btn btn-success">ADD</a>
<form method="post"  action="index.php?page=search">
<div class="container">
    <br/>
    <div class="row justify-content-center">
        <div class="col-12 col-md-10 col-lg-8">
            <form class="card card-sm">
                <div class="card-body row no-gutters align-items-center">
                    <div class="col-auto">
                        <i class="fas fa-search h4 text-body"></i>
                    </div>
                    <!--end of col-->
                    <div class="col">
                        <input class="form-control form-control-lg form-control-borderless" name="name" type="search" placeholder="Search topics or keywords">
                    </div>
                    <!--end of col-->
                    <div class="col-auto">
                        <button class="btn btn-lg btn-success" type="submit">Search</button>
                    </div>
                    <!--end of col-->
                </div>
            </form>
        </div>
        <!--end of col-->
    </div>
</div>
</form>
<table id="1" class="table table-bordered" >
    <thead >
    <tr>
        <th scope="col">STT</th>
        <th scope="col">Name</th>
        <th scope="col">Type</th>
        <th scope="col">Price</th>
        <th scope="col">Amount</th>
        <th scope="col">Date</th>
        <th scope="col">Desc</th>
        <th scope="col" colspan="2">Action</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($products as $key=>$product):?>
    <tr>
        <th scope="row"><?php echo $key+1?></th>
        <td><?php echo $product['name']?></td>
        <td><?php echo $product['type']?></td>
        <td><?php echo $product['price']?></td>
        <td><?php echo $product['amount']?></td>
        <td><?php echo $product['date']?></td>
        <td><?php echo $product['desc']?></td>
        <td><a href="index.php?page=edit&id=<?php echo $product['id']?>" class="btn btn-warning">Edit</a></td>
        <td><a class="btn btn-danger" onclick="return confirm('Bạn có thật sự muốn xóa')" href="index.php?page=delete&id=<?php echo $product['id']?>" >Delete</a></td>
    </tr>
    <?php endforeach?>
    </tbody>
</table>
</div>
</body>
</html>