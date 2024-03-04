<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chameleon F&B</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <h1>Chameleon F&B</h1>
    </header>
    <main>
        <section class="hero">
            <img src="{{ asset('images/hero.jpg') }}" alt="Hero Image">
            <div class="container">
                <h1>Nikmati Cita Rasa Terbaik</h1>
                <p>Kami menawarkan berbagai hidangan lezat dan berkualitas tinggi dengan harga terjangkau.</p>
                <a href="{{ route('menu') }}">Lihat Menu</a>
            </div>
        </section>
        <section class="about">
            <div class="container">
                <h2>Tentang Kami</h2>
                <p>Kami adalah restoran yang berkomitmen untuk memberikan pengalaman kuliner terbaik bagi para pelanggan kami. Kami menggunakan bahan-bahan segar dan berkualitas tinggi untuk menciptakan hidangan yang lezat dan autentik.</p>
                <p>Kami juga menawarkan layanan yang ramah dan profesional untuk memastikan bahwa Anda memiliki pengalaman yang menyenangkan di restoran kami.</p>
            </div>
        </section>
        <section class="menu">
            <div class="container">
                <h2>Menu Kami</h2>
                <ul>
                    <li>
                        <img src="{{ asset('images/menu1.jpg') }}" alt="Menu 1">
                        <h3>Nasi Goreng Spesial</h3>
                        <p>Nasi goreng dengan berbagai topping seperti ayam, bakso, dan udang.</p>
                    </li>
                    <li>
                        <img src="{{ asset('images/menu2.jpg') }}" alt="Menu 2">
                        <h3>Mie Goreng Jawa</h3>
                        <mie goreng dengan bumbu khas Jawa yang lezat.</p>
                    </li>
                    <li>
                        <img src="{{ asset('images/menu3.jpg') }}" alt="Menu 3">
                        <h3>Steak Ayam Panggang</h3>
                        <Steak ayam panggang dengan saus barbeque yang lezat.</p>
                    </li>
                </ul>
                <a href="{{ route('menu') }}">Lihat Menu Lengkap</a>
            </div>
        </section>
        <section class="testimoni">
            <div class="container">
                <h2>Testimoni Pelanggan</h2>
                <ul>
                    <li>
                        <blockquote>
                            "Makanan di sini sangat lezat dan harganya terjangkau. Layanannya juga sangat ramah."
                        </blockquote>
                        <p>- John Doe</p>
                    </li>
                    <li>
                        <blockquote>
                            "Restoran ini sangat recommended! Makanannya lezat dan suasananya juga nyaman."
                        </blockquote>
                        <p>- Jane Doe</p>
                    </li>
                </ul>
            </div>
        </section>
        <section class="contact">
            <div class="container">
                <h2>Hubungi Kami</h2>
                <p>Jika Anda memiliki pertanyaan atau ingin melakukan reservasi, silakan hubungi kami melalui:</p>
                <ul>
                    <li>Telepon: +62 21 12345678</li>
                    <li>Email: info@fnb.com</li>
                    <li>Alamat: Jl. Merdeka No. 12, Bekasi, Jawa Barat</li>
                </ul>
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; 2023 F&B. All rights reserved.</p>
    </footer>
</body>
</html>
