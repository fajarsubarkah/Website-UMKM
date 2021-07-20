<div class="row">
    <div class="col-xl-8 offset-xl-2 text-center mb-5">
        <p class="lead text-muted">Choose your payment method.</p>
    </div>
</div>


<section>
    <div class="container">
        <div class="row mb-5">
            <!-- Closed at the end -->

            <div class="col-lg-8">

                <ul class="custom-nav nav nav-pills mb-5">
                    <li class="nav-item w-25"><a href="<?php echo base_url('shopping/address'); ?>"
                            class="nav-link text-sm">Address</a></li>
                    <li class="nav-item w-25"><a href="<?php echo base_url('shopping/deliveryMethod'); ?>"
                            class="nav-link text-sm">Delivery Method</a></li>
                    <li class="nav-item w-25"><a href<?php echo base_url('shopping/paymentmethod'); ?>"
                            class="nav-link text-sm active">Payment Method </a></li>
                    <li class="nav-item w-25"><a href<?php echo base_url('shopping/orderReview'); ?>"
                            class="nav-link text-sm disabled">Order Review</a></li>
                </ul>

                <div class="mb-5">
                    <div id="accordion" role="tablist">
                        <div class="block mb-3">
                            <form action="<?php echo base_url('shopping/paymentMethodInput');  ?>" method="post">
                        </div>
                        <div class="block mb-3">
                            <div id="headingTwo" role="tab" class="block-header"><strong><a data-toggle="collapse"
                                        href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"
                                        class="accordion-link text-uppercase">Direct Bank Transfer</a></strong></div>
                            <div id="collapseTwo" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion"
                                class="collapse">
                                <div class="block-body align-items-center">
                                    <input type="radio" name="paymentMethod" id="payment-method-1" value="bca">
                                    <label for="payment-method-1" class="ml-3"><strong
                                            class="d-block text-uppercase mb-2">Transfer Bank BCA</strong><span
                                            class="text-muted text-sm">Lakukan pembayaran langsung ke rekening bank BCA
                                            kami, dengan nominal lengkap sampai ke akhir digit agar pesanan Anda
                                            diproses secara otomatis oleh sistem. Pesanan Anda tidak akan dikirim sampai
                                            dana telah Kami terima.

                                            Harap segera lakukan proses transaksi. Apabila dalam jangka waktu 1 X 24 jam
                                            tidak melakukan proses transaksi maka pesanan akan kami batalkan.

                                            Jika pembayaran tidak terdeteksi otomatis silahkan melakukan konfirmasi
                                            pembayaran di https://d-thrift.my.id/payment-confirmation/ atau ke no
                                            Whatsapp +62 852-6311-0381</span></label>
                                </div>

                            </div>
                        </div>
                        <div class="block mb-3">
                            <div id="headingThree" role="tab" class="block-header"><strong><a data-toggle="collapse"
                                        href="#collapseThree" aria-expanded="false" aria-controls="collapseThree"
                                        class="accordion-link collapsed text-uppercase">Pay on delivery</a></strong>
                            </div>
                            <div id="collapseThree" role="tabpanel" aria-labelledby="headingThree"
                                data-parent="#accordion" class="collapse show">
                                <div class="block-body py-5 d-flex align-items-center">
                                    <input type="radio" name="paymentMethod" id="payment-method-2" value="cod">
                                    <label for="payment-method-2" class="ml-3"><strong
                                            class="d-block text-uppercase mb-2"> Pay on delivery</strong><span
                                            class="text-muted text-sm">Select to pay Cash on Delivery </span></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>




                <div class=" mb-5 d-flex justify-content-between flex-column flex-lg-row">
                    <a href="<?php echo base_url('shopping/deliveryMethod');  ?>"
                        class="btn btn-link text-muted text-capitalize">
                        <i class="fas fa-arrow-left"></i>&nbsp;Back to Delivery Method
                    </a>
                    <!-- <a href="" class="btn btn-outline-dark text-capitalize">Continue to order review&nbsp;<i class="fas fa-arrow-right"></i></a> -->

                    <button type="submit" class="btn btn-outline-dark">Continue to order Review&nbsp;<i
                            class="fas fa-arrow-right"></i name="orderReviewButton"></button>


                </div>

                </form>

            </div>