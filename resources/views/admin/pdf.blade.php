<html>
<head>
    <title>Order PDF</title>

</head>
<body>
    <h1>Order Details</h1>

    <h3>Customer Name : {{$order->name}}</h3>
    <h3>Customer Email : {{$order->email}}</h3>
    <h3>Customer Phone : {{$order->phone}}</h3>
    <h3>Customer Address : {{$order->address}}</h3>
    <h3>Customer Id : {{$order->user_id}}</h3>

    <h3>Product Name : {{$order->product_title}}</h3>
    <h3>Product Price : {{$order->price}}</h3>
    <h3>Product Quantity : {{$order->quantity}}</h3>
    <h3>Payment Status : {{$order->payment_status}}</h3>
    <h3>Product Id : {{$order->product_id}}</h3>
<br></br>
    <img height="250" width="450" src="product/{{$order->image}}">

</body>
</html>