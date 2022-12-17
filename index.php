<?php
    $pageTitle ='Product List';
    require_once 'header.php';
?>
<body>
    <div class="container">
        <div class="d-flex bd-highlight">
            <div class="p-2 flex-grow-1 bd-highlight"><h2>Product list</h2></div>
            <div class="p-2 bd-highlight">
                <a href="add_product.php"><button class="btn btn-dark btn-lg">ADD</button></a>
            </div>
            <div class="p-2 bd-highlight">
                <button type="submit" id="delete-product-btn" class="btn btn-dark btn-lg" name="product_delete_btn" form="delete_data">MASS DELETE</button>
            </div>
        </div>
        <hr>
        <!--Success or error message. Dies after 3 secs-->
        <?php if (isset( $_SESSION['error'])) {
            echo '<div class="alert alert-danger">'.urldecode($_SESSION['error']).'</div>';
            unset($_SESSION['error']);
        } elseif (isset( $_SESSION['success'])) {
            echo '<div class="alert alert-success" id="message">Success!</div>';
            unset($_SESSION['success']);
        }
        ?>
        <script>
            setTimeout(function() {
                document.getElementById("message").style.display = 'none';
            }, 1000);
        </script>
        <form action="includes/delete.inc.php" id="delete_data" method="post">
            <div class="row"></div>
        </form>
</body>
</html>