<div class="home">
    <div class="home_container d-flex flex-column align-items-center justify-content-end">
        <div class="home_content text-center">
            <div class="home_title">Checkout</div>
            <div class="breadcrumbs d-flex flex-column align-items-center justify-content-center">
                <ul class="d-flex flex-row align-items-start justify-content-start text-center">
                    <li><a href="<?= base_url() ?>">Home</a></li>
                    <li>Checkout</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Checkout -->

<div class="checkout">
    <div class="container">
        <div class="row">

            <!-- Billing -->
            <div class="col-lg-6">
                <div class="billing">
                    <div class="checkout_title">Alamat pengiriman</div>
                    <div class="checkout_form_container">
                        <form action="#" id="checkout_form" class="checkout_form">
                            <div class="row">
                                <div class="col-lg-6">
                                    <!-- Name -->
                                    <input type="text" id="checkout_name" class="checkout_input" placeholder="First Name" required="required">
                                </div>
                                <div class="col-lg-6">
                                    <!-- Last Name -->
                                    <input type="text" id="checkout_last_name" class="checkout_input" placeholder="Last Name" required="required">
                                </div>
                            </div>
                            <div>
                                <!-- Country -->
                                <select name="checkout_country" id="checkout_country" class="dropdown_item_select checkout_input" required="required">
                                    <option>Grosir</option>
                                    <option>toko Parfum</option>
                                    <option>pribadi</option>
                                </select>
                            </div>
                            <div>
                                <!-- Address -->
                                <input type="text" id="checkout_address_2" class="checkout_input checkout_address_2" placeholder="Alamat lengkap.." required="required">
                            </div>
                            <div>
                                <!-- Zipcode -->
                                <input type="text" id="checkout_zipcode" class="checkout_input" placeholder="Kode pos" required="required">
                            </div>
                            <div>
                                <!-- City / Town -->
                                <select name="checkout_city" id="checkout_city" class="dropdown_item_select checkout_input" required="required">
                                    <option>Provinsi</option>
                                    <option>dimna</option>
                                    <option>dimana</option>
                                    <option>dimana</option>
                                    <option>dimana</option>
                                </select>
                            </div>
                            <div>
                                <!-- Province -->
                                <select name="checkout_province" id="checkout_province" class="dropdown_item_select checkout_input" required="required">
                                    <option>kota</option>
                                    <option>kota</option>
                                    <option>kota</option>
                                    <option>kota</option>
                                    <option>kota</option>
                                </select>
                            </div>
                            <div>
                                <!-- Phone no -->
                                <input type="phone" id="checkout_phone" class="checkout_input" placeholder="No.hanphone / wa aktif" required="required">
                            </div>
                            <div>
                                <!-- Email -->
                                <input type="phone" id="checkout_email" class="checkout_input" placeholder="Email" required="required">
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1">Terms and conditions</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck2">
                                <label class="custom-control-label" for="customCheck2">how to order</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck3">
                                <label class="custom-control-label" for="customCheck3">Subscribe to our newsletter</label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Cart Total -->
            <div class="col-lg-6 cart_col">
                <div class="cart_total">
                    <div class="cart_extra_content cart_extra_total">
                        <div class="checkout_title">Cart Total</div>
                        <ul class="cart_extra_total_list">
                            <li class="d-flex flex-row align-items-center justify-content-start">
                                <div class="cart_extra_total_title">Subtotal</div>
                                <div class="cart_extra_total_value ml-auto">$29.90</div>
                            </li>
                            <li class="d-flex flex-row align-items-center justify-content-start">
                                <div class="cart_extra_total_title">Shipping</div>
                                <div class="cart_extra_total_value ml-auto">JNE</div>
                            </li>
                            <li class="d-flex flex-row align-items-center justify-content-start">
                                <div class="cart_extra_total_title">Delivery</div>
                                <div class="cart_extra_total_value ml-auto">Free</div>
                            </li>
                            <li class="d-flex flex-row align-items-center justify-content-start">
                                <div class="cart_extra_total_title">Total</div>
                                <div class="cart_extra_total_value ml-auto">$29.90</div>
                            </li>
                        </ul>
                        <div class="payment_options">
                            <div class="checkout_title">Pembayaran</div>
                            <ul>
                                <li class="shipping_option d-flex flex-row align-items-center justify-content-start">
                                    <label class="radio_container">
                                        <input type="radio" id="radio_1" name="payment_radio" class="payment_radio">
                                        <span class="radio_mark"></span>
                                        <span class="radio_text">Paypal</span>
                                    </label>
                                </li>
                                <li class="shipping_option d-flex flex-row align-items-center justify-content-start">
                                    <label class="radio_container">
                                        <input type="radio" id="radio_2" name="payment_radio" class="payment_radio">
                                        <span class="radio_mark"></span>
                                        <span class="radio_text">Cash on Delivery</span>
                                    </label>
                                </li>
                                <li class="shipping_option d-flex flex-row align-items-center justify-content-start">
                                    <label class="radio_container">
                                        <input type="radio" id="radio_3" name="payment_radio" class="payment_radio" checked>
                                        <span class="radio_mark"></span>
                                        <span class="radio_text">Credit Card</span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                        <div class="cart_text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra tempor so dales. Phasellus sagittis auctor gravida. Integ er bibendum sodales arcu id te mpus. Ut consectetur lacus.</p>
                        </div>
                        <div class="checkout_button trans_200"><a href="checkout.html">continue payment</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>