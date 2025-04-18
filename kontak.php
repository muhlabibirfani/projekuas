<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak - Rental iPhone</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        
        body {
            background-color: #f5f5f5;
        }
        
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 50px;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        
        .logo {
            font-size: 24px;
            font-weight: bold;
            color: #333;
        }
        
        .nav-links {
            display: flex;
            gap: 30px;
        }
        
        .nav-links a {
            text-decoration: none;
            color: #333;
            font-weight: 500;
            transition: color 0.3s;
        }
        
        .nav-links a:hover {
            color: #0071e3;
        }
        
        .contact {
            padding: 80px 50px;
            max-width: 1000px;
            margin: 0 auto;
        }
        
        .contact h2 {
            font-size: 36px;
            margin-bottom: 30px;
            color: #333;
            text-align: center;
        }
        
        .contact-info {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
            margin-bottom: 50px;
        }
        
        .contact-card {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        }
        
        .contact-card h3 {
            font-size: 20px;
            margin-bottom: 15px;
            color: #0071e3;
        }
        
        .contact-card p {
            color: #666;
            line-height: 1.6;
        }
        
        .contact-form {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: #333;
            font-weight: 500;
        }
        
        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }
        
        .form-group textarea {
            height: 150px;
        }
        
        .btn {
            padding: 12px 30px;
            background-color: #0071e3;
            color: white;
            border: none;
            border-radius: 30px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        
        .btn:hover {
            background-color: #005bb5;
        }
        
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 30px;
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="logo">Fanzzervice</div>
        <div class="nav-links">
            <a href="index.php">PRODUK</a>
            <a href="kontak.php">KONTAK</a>
        </div>
    </nav>
    
    <section class="contact">
        <h2>Hubungi Kami</h2>
        
        <div class="contact-info">
            <div class="contact-card">
                <h3>Alamat</h3>
                <p>Jl. Cendana No. 28<br>Kota Surabaya<br>Indonesia</p>
            </div>
            
            <div class="contact-card">
                <h3>Kontak</h3>
                <p>Email: fanzzervice@gmail.com<br>Telepon: 0812-3456-7890<br>WhatsApp: 0812-3456-7890</p>
            </div>
        </div>
        
        <div class="contact-form">
            <h3>Kirim Pesan</h3>
            <form action="proses_kontak.php" method="POST">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" id="nama" name="nama" required>
                </div>
                
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                
                <div class="form-group">
                    <label for="pesan">Pesan</label>
                    <textarea id="pesan" name="pesan" required></textarea>
                </div>
                
                <button type="submit" class="btn">Kirim Pesan</button>
            </form>
        </div>
    </section>
    
    <footer>
        <p>&copy; 2023 Fanzzervice. All Rights Reserved.</p>
    </footer>
</body>
</html>