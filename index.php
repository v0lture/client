<!DOCTYPE html>
<html>

    <head>
        <?php require_once "layout/head.php"; ?>
    </head>

    <body>

        <div class="container">
            <div class="row">

                <div class="col s3">                    
                    <?php 
                        require_once "layout/nav.php"; 
                    ?>
                </div>

                <div class="col s9">

                    <div class="sidebaritem">
                        <i class="material-icons left">local_atm</i>
                        Balance
                    </div>

                    <div class="content z-depth-2">

                        <p>UPCOMING INVOICE</p>

                        <table>
                            <thead>
                                <tr>
                                    <th>Service</th>
                                    <th>Rate</th>
                                    <th>Price</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td><a href="services.php?id=base-hosting-fee">Base Hosting Fee</a></td>
                                    <td>Reoccurring &mdash; monthly</td>
                                    <td>$20.00</td>
                                </tr>
                                <tr>
                                    <td><a href="services.php?id=web-design-flat">Website Design</a></td>
                                    <td>One-time</td>
                                    <td>$40.00</td>
                                </tr>
                                <tr><td></td><td></td><td></td></tr>
                                <tr>
                                    <td></td>
                                    <td>Total</td>
                                    <td>$60.00</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>

                </div>

            </div>
        </div>

    </body>

</html>
