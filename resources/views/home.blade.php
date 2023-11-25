<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BI Analytics</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        .center{
            margin:2em;
            display:flex;
            justify-content:center;
            align-items:center;
        }
        .content{
            margin:2em;
            flex-direction:row;
            justify-content:space-around;

        }
    </style>
</head>
<body>
 <div class="center">
  <div>
<div class="content">
<h1>Check out the two dashboards below</h1>
<a href="{{URL('businessanalytics')}}" class="btn btn-success">Business Analytics</a>
<a href="{{URL('customeranalytics')}}" class="btn btn-info">Customer Facing Analytics</a>
<a href="{{URL('adddata')}}" class="btn btn-primary">Add data</a>
</div>
</div>
 </div>   
</body>
</html>