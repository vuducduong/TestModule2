<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>main{
            padding: 40px 0;
        }
        .main input,
        .main input::-webkit-input-placeholder {
            font-size: 11px;
            padding-top: 3px;
        }
        .main-center{
            margin-top: 30px;
            margin: 0 auto;
            max-width: 400px;
            padding: 10px 40px;
            background:#009edf;
            color: #FFF;
            text-shadow: none;
            -webkit-box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.31);
            -moz-box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.31);
            box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.31);

        }
        span.input-group-addon i {
            color: #009edf;
            font-size: 17px;
        }
    </style>
</head>
<body>
<form method="post" enctype="multipart/form-data">
<div class="container">
    <div class="main" style="align-content: center">
        <div class="main-center">
            <h3>ADD PRODUCT</h3>
            <form class="" method="post" action="#">

                <div class="form-group">
                    <label for="name">Name</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" name="name" id="name"  placeholder="Enter Product Name"/>
                    </div>
                </div>

                <div class="form-group">
                    <label >Type Product</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" name="type" placeholder="Enter Type"/>
                    </div>
                </div>

                <div class="form-group">
                    <label >Price</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" name="price" placeholder="Enter Price"/>
                    </div>
                </div>

                <div class="form-group">
                    <label >Amount</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" name="amount" placeholder="Enter Amount"/>
                    </div>
                </div>

                <div class="form-group">
                    <label >Date</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                        <input type="date" class="form-control" name="date" placeholder="Confirm Date"/>
                    </div>
                </div>
                <div class="form-group">
                    <label >Desc</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" name="desc" placeholder="Confirm Desc"/>
                    </div>
                </div>

                <button type="submit" class="btn btn-success">SUBMIT</button>
                <a href="index.php" type="button" class="btn btn-success">EXIT</a>
            </form>
        </form>
        </div><!--main-center"-->
    </div><!--main-->
</div><!--container-->
</body>
</html>