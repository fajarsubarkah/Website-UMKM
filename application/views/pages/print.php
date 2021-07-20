<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <title>Invoice D'THRIFT.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="<?= base_url(); ?>/assets/modern-normalize.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/web-base.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/invoice.css">
    <script type="text/javascript" src="<?= base_url(); ?>/assets/scripts.js"></script>
</head>

<body>

    <div class="web-container">


        <!-- <table border="1">
            <tr>
                <th>ID</th>
            </tr>
            <?php
            $id = $_GET['id'];
            $dataprint = $this->ordermodel->printdata($id);
            foreach ($dataprint as $x) {
            ?>
            <tr>
                <td><?= $x['product_id']; ?></td>
                <td><?= $x['product_price']; ?></td>
            </tr>
            <?php
            }
            ?> -->


        <div class="page-container">
            Page
            <span class="page"></span>
            of
            <span class="pages"></span>
        </div>

        <div class="logo-container">
            <img style="height: 35px" src="/project-bpwl/img/dthrift.jpg">
        </div>

        <table class="invoice-info-container">
            <tr>
                <td rowspan="2" class="client-name">
                    <?php
                    $fullname = $this->db->get('billing_details')->result();
                    foreach ($fullname as $fullname_invoice) {
                        echo $fullname_invoice->name;
                    }
                    ?>
                </td>

                <td>
                    D'THRIFT.
                </td>
            </tr>
            <tr>
                <td>
                    Jl. Soekarno - Hatta No.114
                </td>
            </tr>
            <tr>
                <td>
                    Invoice Date: <?php
                                    $orderdate = $this->db->get('orders')->result();
                                    foreach ($orderdate as $order) {
                                        echo $order->order_date;
                                    } ?>
                </td>
                <td>
                    Pekanbaru, Riau
                </td>
            </tr>
            <tr>
                <td>
                    Invoice No: <?php
                                $orderdate = $this->db->get('orders')->result();
                                foreach ($orderdate as $order) {
                                    echo $order->order_id;
                                } ?>
                </td>
                <td>
                    d.thrift@gmail.com
                </td>
            </tr>
        </table>


        <table class="line-items-container">
            <thead>
                <tr>
                    <th class="heading-quantity">Qty</th>
                    <th class="heading-description">Item</th>
                    <th class="heading-price">Price</th>
                    <th class="heading-shipping">Shipping</th>
                    <th class="heading-subtotal">Subtotal</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php
                        $qty = $this->db->get('order_details')->result();
                        foreach ($qty as $quantity) {
                            echo $quantity->product_quantity;
                        }
                        ?></td>

                    <td>
                        <?php
                        $product_name = $this->db->get('order_details')->result();
                        foreach ($product_name as $pname) {
                            foreach ($this->ordermodel->printname($pname->product_id) as $product_name) {

                                echo $product_name['pname'];
                            }
                        }
                        ?>

                    </td>
                    <td class="right">Rp&nbsp;<?php
                                                $product_price = $this->db->get('order_details')->result();
                                                foreach ($product_price as $pprice) {
                                                    echo number_format($pprice->product_price, 0, ',', '.');
                                                }
                                                ?></td>
                    <td class="right">Rp 50.000</td>
                    <td class="bold">Rp&nbsp;<?php
                                                $ordertotal = $this->db->get('orders')->result();
                                                foreach ($ordertotal as $order) {
                                                    echo number_format($order->order_total, 0, ',', '.');
                                                } ?></td>
                </tr>

            </tbody>
        </table>


        <table class="line-items-container has-bottom-border">
            <thead>
                <tr>
                    <th>Payment Status</th>
                    <!-- <th>Due By</th> -->
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="payment-info">
                        <div>
                            <strong>CONFIRM</strong>
                        </div>

                    </td>
                    <!-- <td class="large">May 30th, 2024</td> -->
                    <td class="large total">Rp&nbsp;<?php
                                                    $ordertotal = $this->db->get('orders')->result();
                                                    foreach ($ordertotal as $order) {
                                                        echo number_format($order->order_total, 0, ',', '.');
                                                    } ?></td>
                </tr>
            </tbody>
        </table>

        <div class="footer">
            <div class="footer-info">
                <span>hello@d.thrift.com</span> |
                <span>555 444 6666</span> |
                <span>d.thrift.com</span>
            </div>
            <div class="footer-thanks">
                <img src="https://github.com/anvilco/html-pdf-invoice-template/raw/main/img/heart.png" alt="heart">
                <span>Thank you!</span>
            </div>
        </div>
    </div>
    <script>
    window.print();
    </script>
</body>

</html>