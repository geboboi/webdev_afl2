@extends('layouts.template')

@section('main_content')
    <section class="section-ptb">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="order-area">
                        <div class="order-delivery">
                            <ul class="delivery-payment">
                                <li class="delivery">
                                    <h5>Delivery address</h5>
                                    <br>
                                    <p>{{ $order->first_name . " " . $order->last_name}}</p>
                                    <span class="order-span">{{$order->address}}</span>
                                    <span class="order-span">{{$order->post_code}}</span>
                                    <span class="order-span">Indonesia</span>
                                    <span class="order-span">Mobile No : {{$order->phone}}</span>
                                </li>
                                <li class="pay">
                                    <h5>Payment summary</h5>
                                    <p class="transition">Order No : {{$order->order_id}}</p>
                                    <span class="order-span p-label">
                                        <span class="n-price">Price</span>
                                        <span class="o-price">{{ 'Rp ' . number_format($order->total_amount, 0, ',', '.') }}</span>
                                    </span>
                                    <span class="order-span p-label">
                                        <span class="n-price">Shipping charge</span>
                                        <span class="o-price">Free</span>
                                    </span>
                                    <span class="order-span p-label">
                                        <span class="n-price">Order Total</span>
                                        <span class="o-price">{{ 'Rp ' . number_format($order->total_amount, 0, ',', '.') }}</span>
                                    </span>
                                </li>
                            </ul>
                        </div>
                        <div class="order-details">
                            <button class="btn btn-style" id="pay-button">Pay Now</button>
                        </div>
                        <!-- order-delivery start -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script type="text/javascript">
        // For example trigger on button clicked, or any time you need
        var payButton = document.getElementById('pay-button');
        payButton.addEventListener('click', function() {
            // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
            window.snap.pay('{{ $snapToken }}', {
                onSuccess: function(result) {
                    /* You may add your own implementation here */
                    window.location.href = '{{ env('REDIRECT_URL') }}/status/{{$order->order_id}}';
                },
                onPending: function(result) {
                    /* You may add your own implementation here */
                    window.location.href = '{{ env('REDIRECT_URL') }}/status/{{$order->order_id}}';

                },
                onError: function(result) {
                    /* You may add your own implementation here */
                    // window.location.href = '{{ env('REDIRECT_URL') }}/status/{{$order->order_id}}';

                },
                onClose: function() {
                    /* You may add your own implementation here */
                    window.location.href = '{{ env('REDIRECT_URL') }}/status/{{$order->order_id}}';
                }
            })
        });
    </script>
@endsection
