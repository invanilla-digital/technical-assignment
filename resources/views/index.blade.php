<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
          crossorigin="anonymous">
    <title>Assignment</title>
</head>
<body>
<div style="margin: 128px auto;" class="container">
    @foreach($orders as $order)
        <h2>Order ID # {{$order->id}}</h2>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>
                            Product id
                        </th>
                        <th>
                            Quantity
                        </th>
                        <th>
                            Amount
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($order->items as $orderItem)
                        <tr>
                            <td>
                                {{$orderItem->product->title}}
                            </td>
                            <td>
                                {{$orderItem->quantity}}
                            </td>
                            <td>
                                {{number_format($orderItem->product->price * $orderItem->quantity, 2)}}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endforeach
</div>
</body>
</html>
