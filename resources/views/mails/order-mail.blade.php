<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation de Commande</title>
</head>
<body>
    <p>Bonjour, {{$order->firstname}} {{$order->lastname}}</p>
    <p>Votre Commande a été acceptée!</p><br/>
    <table style="width: 600px; text-align:right">
        <thead>
            <tr>
                <th>Image</th>
                <th>Nom</th>
                <th>Quantité</th>
                <th>Prix</th>
            </tr>
        </thead>
        <tbody>
            @foreach($order->Items $item)
                <tr>
                    <td>{{<img src="{{asset('assets/images/products')}}/{{$item->product->image}}" width="100" /></td>
                    <td>{{$item->product->name}}</td>
                    <td>{{$item->quantity}}</td>
                    <td>{{$item->price * $item->quantity}} FCFA</td>
                </tr>
            @endforeach
            <tr>
                <td colspan="3" class="border-top:1px solid #ccc;"></td>
                <td style="font-size: 15px;font-weight:bold;border-top:1px solid #ccc;">Sous Total : {{$order->subtotal}} FCFA</td>
            </tr>
            <tr>
                <td colspan="3"></td>
                <td style="font-size: 15px;font-weight:bold;">Taxe : {{$order->tax}} FCFA</td>
            </tr>
            <tr>
                <td colspan="3"></td>
                <td style="font-size: 15px;font-weight:bold;">Livraison : Livraison Gratuite</td>
            </tr>
            <tr>
                <td colspan="3"></td>
                <td style="font-size: 22px;font-weight:bold;">Total : {{$order->total}} FCFA</td>
            </tr>
        </tbody>
    </table>
</body>
</html>