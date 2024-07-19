<x-mail::message>
# Order placed succefuly!
Thank you for your order .You order number is:{{$order->id}}
The body of your message.

<x-mail::button :url="$url">
View Order
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
