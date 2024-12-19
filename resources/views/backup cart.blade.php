<x-app-layout>
    @section('content')
    
<body class="main-layout">
    <div class="wrapper">

        <!-- loader  -->
        <div class="loader_bg">
            <!-- <div class="loader"><img src="images/loading.gif" alt="#" /></div> -->
            <div class="loader"><img src="images/Logo Gif 4.gif" alt="#" /></div>
        </div>
         <!-- end loader -->
    

        <div class="sidebar">
            <!-- Sidebar  -->
            <nav id="sidebar">
   
                <div id="dismiss">
                    <i class="fa fa-arrow-left"></i>
                </div>
    
                <ul class="list-unstyled components">
                    
                    <li> <a href="index.html">Home</a></li>
                    <li> <a href="about.html">About</a></li>
                    <li> <a href="product.html">Pricelist</a></li>
                    <li> <a href="order_list.html">Order</a></li>
    
                </ul>
    
            </nav>
        </div>

        <div id="content">
            <div class="title">
                <h2>Your <strong class="white_bold">Cart</strong></h2>
            </div>
            <div class="layout_padding-2">
                <div class="container">
                    <div class="row">
                        <div class="cart-container">
                            <div id="cart-items"></div>
        
                            <div class="order-details">
                                <h2>Order Details</h2>
                                <form id="order-form">
                                    <label for="customer-name">Nama Pemesan:</label>
                                    <input type="text" id="customer-name" name="customer-name" placeholder="Masukkan Nama Anda" required>
        
                                    <label for="customer-address">Alamat Rumah:</label>
                                    <textarea id="customer-address" name="customer-address" placeholder="Masukkan Alamat Anda" required></textarea>
        
                                    <button type="button" onclick="proceedToCheckout()">Proceed to Checkout</button>
                                </form>
        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div id="cart-items"></div>

<script>
function renderCartItems() {
    const cartContainer = document.getElementById('cart-items');
    cartContainer.innerHTML = ''; // Clear existing items
    const cart = JSON.parse(localStorage.getItem('cart')) || [];

    cart.forEach((item, index) => {
        const productDiv = document.createElement('div');
        productDiv.className = 'cart-item';
        productDiv.innerHTML = `
            <div class="cart-item-content">
                <div class="cart-item-details">
                    <img src="${item.image}" alt="${item.name}" width="50">
                    <div>
                        <span><strong>${item.name}</strong></span><br>
                        <span>Qty: ${item.quantity}</span><br>
                        <span>Price: Rp. ${item.price * item.quantity}</span>
                    </div>
                </div>
                <button class="delete-btn" onclick="deleteCartItem(${index})">Delete</button>
            </div>
        `;
        cartContainer.appendChild(productDiv);
    });
}

function deleteCartItem(index) {
    const cart = JSON.parse(localStorage.getItem('cart')) || [];
    cart.splice(index, 1); // Remove item at the given index
    localStorage.setItem('cart', JSON.stringify(cart)); // Update localStorage
    renderCartItems(); // Re-render cart items
}

renderCartItems(); // Initial render
</script>

   
<!-- Javascript files-->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery-3.0.0.min.js"></script>
<script src="js/plugin.js"></script>
<!-- sidebar -->
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/custom.js"></script>
<script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
$("#sidebar").mCustomScrollbar({
    theme: "minimal"
});

$('#dismiss, .overlay').on('click', function() {
    $('#sidebar').removeClass('active');
    $('.overlay').removeClass('active');
});

$('#sidebarCollapse').on('click', function() {
    $('#sidebar').addClass('active');
    $('.overlay').addClass('active');
    $('.collapse.in').toggleClass('in');
    $('a[aria-expanded=true]').attr('aria-expanded', 'false');
});
});
</script>

<script>
$(document).ready(function() {
$(".fancybox").fancybox({
    openEffect: "none",
    closeEffect: "none"
});

$(".zoom").hover(function() {

    $(this).addClass('transition');
}, function() {

    $(this).removeClass('transition');
});
});
</script>

</body>

@endsection
</x-app-layout>