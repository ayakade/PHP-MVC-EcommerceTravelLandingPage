<div class="customer col-12 col-lg-12">

    <div class="info">
        <?php	
        foreach ($this->oCustomers as $customer)
        { 
        ?>
        <img src="assets/<?=$customer->strImage?>" alt="<?=$customer->Name?>">
        <table class="col-12 col-lg-12">
            <tr class="col-6 col-lg-5">
                <th>Customer ID</th>
                <th>First name</th>
                <th>Last name</th>
                <th>Email</th>
                <th>Phone number</th>
                <th>Country</th>
                <th>Age</th>
            </tr>

            <tr class="col-6 col-lg-7">
                <td><?=$customer->id?></td>
                <td><?=$customer->strFirstName?></td>
                <td><?=$customer->strLastName?></td>
                <td><?=$customer->strEmail?></td>
                <td><?=$customer->strPhoneNumber?></td>
                <td><?=$customer->strCountry?></td>
                <td><?=$customer->strAge?></td>
            </tr>
        </table>
        <?php
        }
        ?>
    </div>

    <a class="cta" href="index.php?controller=admin&action=adminMain">Go back customer list</a>
</div><!-- .customer / customer.php -->