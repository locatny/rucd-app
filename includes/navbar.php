<style>
    /* Reset margin dan padding */
    body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
    }
    /* Styling navbar */
    nav {
        background: linear-gradient(to bottom, #ffffff, rgba(255, 255, 255, 0)); /* Gradasi putih ke transparan */
        overflow: hidden;
        text-align: center;
        padding: 10px 0;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2); 
    }
    nav a {
        display: inline-block;
        color: grey; 
        text-decoration: none;
        padding: 14px 20px; 
        font-size: 16px;
        transition: background-color 0.3s ease, color 0.3s ease, text-shadow 0.3s ease;
        border-radius: 4px; 
    }
    nav a:hover {
        background-color: rgba(255, 255, 255, 0.2);
        color:  #8B4513;
        text-shadow: 0 0 8px rgba( #8B4513;); /* Glowing cokelat effect */
    }
    nav a.active {
        background-color: rgba(255, 255, 255, 0.4); 
        color: #FFFFFF; 
        font-weight: bold;
        text-shadow: 0 0 10px rgba( #000000); /* Glowing black effect */
    }
</style>
<nav>
    <a href="?page=home">Home</a>
    <a href="?page=makanan">Makanan</a>
    <a href="?page=minuman">Minuman</a>
    <a href="?page=about">About</a>
    <a href="?page=contact">Contact</a>
</nav>
