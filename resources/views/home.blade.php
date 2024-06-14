<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Website</title>
    <link rel="stylesheet" href="tampilan.css">
</head>
<style>/* Reset default styles */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    
    /* Styling untuk header */
    header {
        background-color: #333;
        color: white;
        padding: 1em 0;
    }
    
    .header {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    
    nav ul {
        list-style: none;
        display: flex;
        gap: 2em;
    }
    
    nav ul li a {
        color: white;
        text-decoration: none;
        font-size: 1.2em;
    }
    
    nav ul li a:hover {
        text-decoration: underline;
    }
    
    /* Styling untuk container dan box */
    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-color: #b3aaaa;
    }
    
    .box {
        background-color: white;
        padding: 2em;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        text-align: center;
    }
    
    .section-1 h1 {
        font-size: 2.5em;
        margin-bottom: 0.5em;
    }
    
    .section-1 h3 {
        font-size: 1.5em;
        margin-bottom: 1em;
    }
    
    .section-1 p {
        font-size: 1.2em;
        margin-bottom: 1.5em;
    }
    
    .section-1 .btn {
        display: inline-block;
        background-color: #333;
        color: white;
        padding: 0.5em 1em;
        text-decoration: none;
        border-radius: 5px;
    }
    
    .section-1 .btn:hover {
        background-color: #555;
    }
    
    /* Styling untuk bagian 'About me' */
    .content-2 {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 2em;
        background-color: #f5f5f5;
    }
    
    .kenalan {
        display: flex;
        flex-direction: column;
        align-items: center;
        background-color: white;
        padding: 2em;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        text-align: center;
    }
    
    .kenalan img.foto {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        margin-bottom: 1em;
    }
    
    .kenalan h3 {
        margin-top: 1em;
    }
    
    .kenalan p {
        font-size: 1.2em;
        margin-bottom: 1em;
    }
    
    /* Styling untuk bagian 'Contact' */
    .content-3 {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 2em;
        background-color: #f5f5f5;
    }
    
    .content-3 img {
        width: 50px;
        height: 50px;
        margin: 0.5em 0;
    }
    
    .content-3 p {
        font-size: 1.2em;
        margin-bottom: 1em;
    }
    
    /* Styling untuk footer */
    footer {
        text-align: center;
    }
    </style>
<body>
    <header>
        <div class="header">
            <nav>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about_me">About me</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="container">
        <div class="box">                
            <div class="content">
                <div class="section-1">
                    <article id="home">
                        <h1>Hi, I'm Windha Kusuma Dewi</h1>
                        <h3>I study at Wikrama Vocational High School with majors <br> Software Development (PPLG)</h3>
                        <p>I'm learning HTML,  CSS,  JAVASCRIPT,  PHP</p>
                    </article>
                </div>                    
            </div>
        </div>
    </div>
        
    <!-- membuat tampilan about me -->
    <main>
        <div class="content-2">
            <article id="about_me" class="kenalan">
                <img src="img/me.jpg" alt="me" class="foto">
                <div class="nama">
                    <h3>Name</h3>
                    <p>Windha Kusuma Dewi</p>
                    <h3>Date Of Birth</h3>
                    <p>2 August 2007 In Yogyakarta</p>
                    <h3>School</h3>
                    <h4>Elementary School</h4>
                    <p>SDN 1 Cisarua</p>
                    <h4>Junior High School</h4>
                    <p>SMP Negeri 2 Cisarua</p>
                    <h4>Vocational School</h4>
                    <p>Wikrama</p>
                </div>
            </article>

            <!-- tampilan Contact -->
            <div class="content-3">
                <article id="contact">
                    <p>Instagram: @windhakusumadewi</p>
                    <p>Phone number: +6282114831338</p>
                    <p>Github: Windha-Kusuma-Dewi</p>
                </article>
            </div>
        </div>
    </main>

    <!-- membuat footer -->
    <footer>Terimakasih</footer>
</body>
</html>
