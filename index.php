<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PeerConnect - Connect & Collaborate</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="icon.jpeg" type="image/jpeg">
    <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script>
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en',
                includedLanguages: 'en,pt',
                layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
                autoDisplay: false
            }, 'google_translate_element');
        }
    </script> 
</head>
<body>
    <header>
        <div class="navbar">
            <div class="logo"><img src="header.png" height="150" width="500"></div>
            <ul class="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About us</a></li>
                <li><a href="#features">Features</a></li>
                <li><a href="documentation.php">Documentation</a></li>
                <li><a href="#contact">Contact us</a></li>
                <li><a href="login.html" class="btn-primary">Login</a></li>
            </ul>
        </div>
        <div id="google_translate_element"></div>
    </header>

    <div class="main-content">
        <div class="content-container">
            <section id="home" class="hero">
                <div class="hero-content">
                    <h1>Connect with Mentors & Peers Effortlessly</h1>
                    <p>Peer Connect allows you to connect with your mentors and peers to impropve your skills.</p>
                    <p></p>
                    <a href="login.html" class="btn-primary">Get Started</a>
                </div>
            </section>

            <aside class="sidebar">
                <h2>Communities</h2>
                <div id="feed">

                </div>
                <button onclick="document.location='login.html'" class="btn-primary">View Full Feed</button>
            </aside>
        </div>

        <section id="about" class="about">
    <h2>About PeerConnect</h2>
    <div class="about-container">
        <div class="about-box" onclick="focusBox(this)">
            <h3>The Problem We Solve</h3>
            <p>iywqegbfi23yrbcf</p>
            <p>ihqwbc3yuweircb</p>
        </div>
        <div class="about-box" onclick="focusBox(this)">
            <h3>What We Do</h3>
            <p>lawjhvgyuiweqbcvwquiyecv<p>
            <p><b>For Mentors:</b> </p>   
            <p><b>For Students:</b> </p>
            <p>We're more than just a job board — we’re a community where trust, collaboration, and opportunity meet.</p>
        </div>
        <div class="about-box" onclick="focusBox(this)">
            <h3>Our Mission</h3>
            <p>wqkjhfbcv3iq</p>
            <p>wadkljvhbwq</p>
        </div>
    </div>
</section>


        <section id="features" class="features">
            <h2>Features</h2>
            <div class="feature-card">
                <h3>Multiple communities to connect with your peers or mentors.</h3>
                <p>Stay updated with the latest job postings and showcases from skilled professionals.</p>
            </div>
            <div class="feature-card">
                <h3 id="h3">Secure Message</h3>
                <p> Use our secure messaging platform to engage with your customer or employer, to set your perfect deal.</p>
                <p>Communicate with confidence using our encrypted messaging platform, ensuring that every conversation between service providers and clients remains private and secure. Discuss project details, share updates, and negotiate terms without worry. Our platform guarantees safe, direct communication, so you can focus on delivering quality work while maintaining trust and confidentiality on both sides.</p>
            <div class="feature-image">
                <img id="messaging" src="messaging.gif" alt="Secure Messaging Example">
         </div>
            </div>
            <div class="feature-card">
        <div class="feature-text">
            <h3><b>Personalized Profiles</b></h3>
            <p>Create a professional profile to display your skills, recent work, and reviews.</p>
            <p>Create a standout profile tailored to showcase your unique skills, portfolio, and achievements. W</p>
        </div>
        <div class="feature-image">
            <img id="prof" src="profiles.png" alt="Profile example">
        </div>
    </div>
        </section>

        <footer id="contact">
            <h2>Contact Us</h2>
            <p>Have questions or need support? Reach out to our team at <a href="mailto:support@peerconnect.com">support@peerconnect.com</a></p>
            <p><a href="tel:+000000000">(+27) 0000000</a></p>
            <p>&copy; 2024 PeerConnect. All Rights Reserved.</p>
        </footer>
    </div>

    <script src="scripts.js"></script>
    <script>
  
        async function fetchSidebarPosts() {
            const response = await fetch('fetch_posts.php');
            const posts = await response.json();
            const feedDiv = document.getElementById('feed');
            feedDiv.innerHTML = '';

            posts.forEach(post => {
                feedDiv.innerHTML += `
                    <div class="post">
                        <div class="post-header">
                            <img src="${post.profile_pic}" alt="${post.username}" class="profile-pic">
                            <span>${post.username}</span>
                            <span>${new Date(post.created_at).toLocaleString()}</span>
                        </div>
                        <p>${post.content}</p>
                    </div>
                `;
            });
        }

        fetchSidebarPosts(); 
    </script>
</body>
</html>