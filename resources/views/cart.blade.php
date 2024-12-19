<x-app-layout>
    @section('content')
    <body class="main-layout">
        <div class="sidebar">
            <!-- Sidebar -->
            <nav id="sidebar">
                <div id="dismiss">
                    <i class="fa fa-arrow-left"></i>
                </div>
                <ul class="list-unstyled components">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="product.html">Pricelist</a></li>
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
                            <br>
                            <!-- Button Tambah Pesanan -->
                            <div class="add-button-container">
                                <a href="{{ route('product') }}" class="btn btn-custom">Tambah Pesanan</a>
                            </div> 
                            <br>
                            <div class="order-details">
                                <h2 class="black_bold">Order Details</h2>  
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

            function proceedToCheckout() {
                const name = document.getElementById('customer-name').value;
                const address = document.getElementById('customer-address').value;

                if (!name || !address) {
                    alert('Harap isi nama dan alamat!');
                    return;
                }

                const cart = JSON.parse(localStorage.getItem('cart')) || [];
                if (cart.length === 0) {
                    alert('Keranjang belanja Anda kosong!');
                    return;
                }

                // Format pesan untuk WhatsApp
                let message = `Halo, saya ingin memesan:\n\n`;
                cart.forEach((item, index) => {
                    message += `${index + 1}. ${item.name} - Qty: ${item.quantity} - Rp. ${item.price * item.quantity}\n`;
                });
                message += `\nNama: ${name}\nAlamat: ${address}\n\nTerima kasih!`;

                // Nomor WhatsApp tujuan (ganti dengan nomor WhatsApp admin)
                const phoneNumber = '6282257151994'; // Format: kode negara tanpa "+" di depan
                const whatsappURL = `https://wa.me/${phoneNumber}?text=${encodeURIComponent(message)}`;

                // Buka jendela baru untuk WhatsApp
                window.open(whatsappURL, '_blank');
            }

            renderCartItems(); // Initial render
            </script>
        </div>
    </body>
    @endsection
</x-app-layout>
