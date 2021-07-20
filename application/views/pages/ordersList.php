<?php

// print_r($orderList);

?>

<section class="mt-8 mb-5">
    <div class="container">
        <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
            <li class="breadcrumb-item active">Checkout</li>
        </ol>
    </div>

    <div class="text-center">
        <h1 class="display-4 letter-spacing-5 text-uppercase font-weight-bold">Your Orders</h1>

    </div>
    </div>
</section>

<div class="row">
    <div class="col-xl-8 offset-xl-2 text-center mb-5">
        <p class="lead text-muted">Your Orders in one place.</p>
    </div>
</div>


<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-xl-9 mx-auto">
                <table class="table table-borderless table-hover table-responsive-md">
                    <thead class="bg-light">
                        <tr>
                            <th class="py-4 text-uppercase text-sm">Order #</th>
                            <th class="py-4 text-uppercase text-sm">Date</th>
                            <th class="py-4 text-uppercase text-sm">Total</th>
                            <th class="py-4 text-uppercase text-sm">Status</th>
                            <th class="py-4 text-uppercase text-sm">Action</th>
                            <!-- <th class="py-4 text-uppercase text-sm">Action</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($orderList)) {
                            foreach ($orderList as $order) { ?>
                        <tr>
                            <th class="py-4 align-middle"><?php echo '#2021/' . $order['order_id']; ?></th>
                            <td class="py-4 align-middle"><?php echo $order['order_date']; ?></td>
                            <td class="py-4 align-middle">
                                Rp&nbsp;
                                </i><?php echo number_format($order['order_total'], 0, ',', '.'); ?></td>
                            <td class="py-4 align-middle"><span
                                    class="badge text-uppercase badge-info p-2"><?php echo $order['order_status']; ?></span>
                            </td>
                            <td class="py-4 align-middle">
                                <a href="print?id=<?php echo $order['order_id']; ?>"><span
                                        class="badge text-uppercase badge-success p-2">Print</span></a>
                            </td>
                            <!-- <td class="py-4 align-middle"><a href="#" class="btn btn-outline-dark btn-sm">View</a></td> -->
                        </tr>

                        <?php }
                        } ?>

                    </tbody>
                </table>
            </div>
            <!-- Customer Sidebar -->
            <!-- <div class="col-xl-3 col-lg-4 mb-5">
            <div class="customer-sidebar card border-0"> 
              <div class="customer-profile"><a href="#" class="d-inline-block"><img src="../../../d19m59y37dris4.cloudfront.net/sell/1-2-3/img/photo/kyle-loftus-589739-unsplash-avatar.jpg" class="img-fluid rounded-circle customer-image"></a>
                <h5>Julie Svestkova</h5>
                <p class="text-muted text-sm mb-0">Ostrava, Czech republic</p>
              </div>
              <nav class="list-group customer-nav"><a href="customer-orders.html" class="active list-group-item d-flex justify-content-between align-items-center"><span>
                    <svg class="svg-icon svg-icon-heavy mr-2">
                      <use xlink:href="#paper-bag-1"> </use>
                    </svg>Orders</span>
                  <div class="badge badge-pill badge-light font-weight-normal px-3">5</div></a><a href="customer-account.html" class="list-group-item d-flex justify-content-between align-items-center"><span>
                    <svg class="svg-icon svg-icon-heavy mr-2">
                      <use xlink:href="#male-user-1"> </use>
                    </svg>Profile</span></a><a href="customer-addresses.html" class="list-group-item d-flex justify-content-between align-items-center"><span>
                    <svg class="svg-icon svg-icon-heavy mr-2">
                      <use xlink:href="#navigation-map-1"> </use>
                    </svg>Addresses</span></a><a href="customer-login.html" class="list-group-item d-flex justify-content-between align-items-center"><span>
                    <svg class="svg-icon svg-icon-heavy mr-2">
                      <use xlink:href="#exit-1"> </use>
                    </svg>Log out</span></a>
              </nav>
            </div>
          </div> -->
            <!-- /Customer Sidebar
        </div> -->

        </div>
        <div class=" mb-5 d-flex justify-content-between flex-column flex-lg-row">
            <a href="<?php echo base_url('shopping/cart');  ?>" class="btn btn-link text-muted">
                <i class="fas fa-arrow-left"></i>&nbsp;Back
            </a>
            <!-- <a href="<?php echo base_url('assets/generate-pdf');  ?>" class="btn btn-outline-dark">Print
                Invoice&nbsp;<i class="fas fa-arrow-right"></i></a> -->
            <!-- <button type="submit" class="btn btn-outline-dark">Choose
                                                            delivery method&nbsp;<i class="fas fa-arrow-right"></i
                                                                name="deliveryButton"></button> -->
        </div>
    </div>

</section>