<?php include('layouts/header.php');?>
<?php


if(!empty($_SESSION['cart'])){

  //let user in

  //send user to home page
}else{
  header('location: index.php');
}


?>

<!--Checkout-->
<section class="my-5 py-5">
    <div class="container text-center mt-3 pt-5">
        <h2 class="form-weight-bold">Check It</h2>
        <hr class="mx-auto"/>
    </div>
    <div class="mx-auto container">
        <form id="checkout-form" method="POST" action="server/place_ord.php">
          <p class="text-center" style="color: red;">
                <?php if(isset($_GET['message'])){echo $_GET['message'];} ?></p>
                <?php if(isset($_GET['message'])){?>
                  <a href="login.php" class="btn btn-primary">Login</a>
                <?php } ?>
            <div class="form-group checkout-small-element">
                <label>Name</label>
                <input type="text" class="form-control" id="checkout-name" name="name" placeholder="Name" required/>
            </div>
            <div class="form-group checkout-small-element">
                <label>Email</label>
                <input type="text" class="form-control" id="Checkout-email" name="email" placeholder="Email" required/>
            </div>
            <div class="form-group checkout-small-element">
                <label>Phone</label>
                <input type="tel" class="form-control" id="checkout-phone" name="phone" placeholder="Phone" required/>
            </div>
            <div class="form-group checkout-small-element">
                <label>City</label>
                <input type="text" class="form-control" id="checkout-city" name="city" placeholder="City" required/>
            </div>
            <div class="form-group checkout-large-element">
                <label>Adress</label>
                <input type="text" class="form-control" id="checkout-adress" name="address" placeholder="Adress" required/>
            </div>
            <div class="form-group checkout-btn-container">
                <p>Total amount: $ <?php echo $_SESSION['total']; ?></p>
                <input type="submit" class="btn" id="checkout-btn" name="place_order" value="Place Order"/>
            </div>
        </form>

    </div>
</section>


<?php include('layouts/footer.php');?>
