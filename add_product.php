<?php
    $pageTitle = 'Product Add';
    require_once 'includes/header.inc.php';
?>
<body>
    <div class="container">
        <div class="d-flex bd-highlight">
            <div class="p-2 flex-grow-1 bd-highlight">
                <h2>Product Add</h2>
            </div>
            <div class="p-2 bd-highlight">
                <button class="btn btn-dark btn-lg" type="submit"
                    form="product_form" id="save-btn" title="Save the product">Save</button>
            </div>
            <div class="p-2 bd-highlight">
                <a href="index.php">
                    <button class="btn btn-dark btn-lg" id="cancel-btn" title="Delete selected products">
                        Cancel
                    </button>
                </a>
            </div>
        </div>
        <hr>

        <form action="includes/form.inc.php" id="product_form" method="POST">
            <div class="main-content" style="display: inline-block;">
                <div class="wrap-grid">
                    <h3>SKU</h3>
                    <input class="form-control" type="text" id="sku"
                        name="sku" placeholder="#sku" required
                        oninvalid="this.setCustomValidity('Please, submit required data')"
                        oninput="setCustomValidity('')"/>
                    <span id="sku_check"></span>
                </div>
                <div class="wrap-grid">
                    <h3>Name</h3>
                    <input class="form-control" type="text" id="name"
                        name="name" placeholder="#name" required
                        oninvalid="this.setCustomValidity('Please, submit required data')"
                        oninput="setCustomValidity('')"/>
                </div>
                <div class="wrap-grid">
                    <h3>Price ($)</h3>
                    <input class="form-control" type="number" id="price"
                        name="price" placeholder="#price"  min="0" required
                        oninvalid="this.setCustomValidity('Please, submit required data')"
                        oninput="setCustomValidity('')"/>
                </div>
                <div class="wrap-grid" style="padding-bottom: 20px;">
                    <h3>Type Switcher</h3>
                    <select class="form-control" name="type" id="productType" onchange="changed(this)" required>
                        <option value="" disabled selected>Type Switcher</option>
                        <option value="dvd">DVD</option>
                        <option value="furniture">Furniture</option>
                        <option value="book">Book</option>
                    </select>
                </div>
                <div class="wrap-grid" id="grid">
                    <div class="option" id="dvd" style="display: none;">
                        <h3>Size (MB)</h3>
                        <input class="form-control" id="size" type="text"
                            placeholder="#size" name="size"  min="0" 
                            oninvalid="this.setCustomValidity('Please, provide size')"
                            oninput="setCustomValidity('')"/>
                    </div>
                </div>
                <div class="wrap-grid" id="grid">
                    <div class="option" id="furniture" style="display: none;">
                        <h3>Height (CM)</h3>
                        <input class="form-control" id="height"
                            type="number" name="height" placeholder="#height"  min="0"
                            oninvalid="this.setCustomValidity('Please, provide height')"
                            oninput="setCustomValidity('')"/><br>
                        <h3>Width (CM)</h3>
                        <input class="form-control" id="width" 
                            type="number" name="width" placeholder="#width" min="0"
                            oninvalid="this.setCustomValidity('Please, provide width')"
                            oninput="setCustomValidity('')"/><br>
                        <h3>Length (CM)</h3>
                        <input class="form-control" id="length" 
                            type="number" name="length" placeholder="#length" min="0"
                            oninvalid="this.setCustomValidity('Please, provide width')"
                            oninput="setCustomValidity('')"/>
                    </div>
                </div>
                <div class="wrap-grid" id="grid">
                    <div class="option" id="book" style="display: none;">
                        <h3>Weight (KG)</h3>
                        <input class="form-control" id="weight"
                            type="number" placeholder="#weight" name="weight" step="0.01" min="0"
                            oninvalid="this.setCustomValidity('Please, provide weight')"
                            oninput="setCustomValidity('')"/>
                    </div>
                </div>
            </div>
        </form>
    </div><!--Container-->
</body>
</html>