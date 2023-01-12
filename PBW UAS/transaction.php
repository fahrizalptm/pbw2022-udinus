<?php 
  include "./components/header.php";
?>
<main>
  <div class="transaction">
    <h2>Payment</h2>
    <div class="wrapper">
        <button>Bank Transfer</button>
        <button>E-Wallet</button>
        <button>Virtual Account</button>
    </div>
    <form action="#" class="wrapper">
        <div class="form-item">
            <label for="user">User ID</label>
            <input type="text" name="user">
        </div>
        <div class="form-item">
            <label for="server">Server</label>
            <input type="text" name="server">
        </div>
        
    </form>
    <button type="submit" class="submit-button">Lanjutkan Pembayaran</button>
  </div>
</main>
<?php 
  include "./components/footer.php";
?>