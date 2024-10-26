<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PeerConnect</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #000;
            color: #fff;
            display: flex; 
            flex-direction: column;
            height: 100vh; 
        }
        .wrapper {
            display: flex; 
            flex-grow: 1; 
        }
        .nav {
            width: 200px; 
            background-color: #1e1e1e;
            padding: 20px;
            box-shadow: 2px 0 10px rgba(0, 0, 0, 0.5);
        }
        .nav h2 {
            color: #007bff;
            margin-bottom: 20px;
        }
        .nav ul {
            list-style-type: none;
            padding: 0;
        }
        .nav ul li {
            margin: 10px 0;
        }
        .nav ul li a {
            color: #fff;
            text-decoration: none;
            display: flex; 
            align-items: center; 
        }
        .nav ul li a i {
            margin-right: 10px; 
        }
        .nav ul li a:hover {
            text-decoration: underline;
        }
        .container {
            flex-grow: 1; 
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center; 
        }
        .search-container {
            display: flex;
            justify-content: flex-end; 
            margin-bottom: 20px;
            width: 100%; 
        }
        .search-container input {
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #555;
            width: 200px; 
            background-color: #222;
            color: #fff;
        }
        .communities {
            display: grid;
            grid-template-columns: repeat(4, 1fr); 
            gap: 20px;
            width: 100%; 
            max-width: 1200px; 
            margin-top: 20px; 
            padding: 0 20px; 
        }
        .community-tile {
            background-color: #1e1e1e;
            border-radius: 5px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
            width: calc(100% - 40px); 
            transition: transform 0.2s; 
        }
        .community-tile:hover {
            transform: scale(1.05);
        }
        .community-tile img {
            width: 100%; 
            height: 150px; 
            object-fit: cover; 
        }
        .community-info {
            padding: 15px;
        }
        .community-info h3 {
            margin: 0 0 10px;
            cursor: text; 
        }
        .community-info p {
            margin: 0 0 10px;
            font-size: 14px;
        }
        .join-button {
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: white;
            cursor: pointer;
            width: 100%;
            text-align: center;
        }
        .join-button:hover {
            background-color: #0056b3;
        }
        .post-form {
            background-color: #1e1e1e;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
            width: 100%; 
            max-width: 600px; 
        }
        .post-form textarea {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #555;
            background-color: #222;
            color: #fff;
            resize: none; /
        }
        .post-form button {
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: white;
            cursor: pointer;
            margin-top: 10px;
        }
        .post {
            background-color: #1e1e1e;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 15px;
            transition: background-color 0.3s;
            width: 100%; 
            max-width: 600px; 
        }
        .post:hover {
            background-color: #2c2c2c;
        }
        .post-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .post-content {
            margin-top: 10px;
            font-size: 16px;
        }
        .post-actions {
            margin-top: 10px;
            display: flex;
            justify-content: space-between;
        }
        .post-actions button {
            background: none;
            color: #007bff;
            border: none;
            cursor: pointer;
        }
        .post-actions button:hover {
            text-decoration: underline;
        }
        .comment-section {
            margin-top: 10px;
            padding-left: 15px;
        }
        .comment {
            background-color: #222;
            padding: 5px;
            border-radius: 3px;
            margin-top: 5px;
        }
        .comment textarea {
            width: calc(100% - 22px);
            padding: 5px;
            margin-top: 5px;
            border-radius: 3px;
            border: 1px solid #555;
            background-color: #333;
            color: #fff;
            resize: none; 
        }
        .comment button {
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 3px;
            padding: 5px;
            cursor: pointer;
            margin-top: 5px;
        }
    </style>
</head>
<body>

    <div class="wrapper">
        <div class="nav">
            <h2>Menu</h2>
            <ul>
                <li><a href="feed.php"><i class="fas fa-home"></i>Home</a></li>
                <li><a href="#"><i class="fas fa-search"></i>Search</a></li>
                <li><a href="#"><i class="fas fa-bell"></i>Notifications</a></li>
                <li><a href="messages.php"><i class="fas fa-envelope"></i>Messages</a></li>
                <li><a href="#"><i class="fas fa-bookmark"></i>Bookmarks/Saved</a></li>
                <li><a href="profiles.html"><i class="fas fa-user"></i>Profile</a></li>
                <li><a href="settings.html"><i class="fas fa-cog"></i>Settings & Privacy</a></li>
            </ul>
        </div>

        <div class="container">
            <div class="search-container">
                <input type="text" placeholder="Search...">
            </div>

            <div class="post-form">
                <textarea id="postContent" rows="4" placeholder="What's on your mind?" maxlength="200"></textarea> 
                <button id="postButton">Post</button>
            </div>

            <div class="communities" id="communities">
            </div>
        </div>
    </div>

    <script>
        const postContent = document.getElementById('postContent');
        const postButton = document.getElementById('postButton');
        const communitiesContainer = document.getElementById('communities');

        const communities = [];
        for (let i = 1; i <= 20; i++) {
            communities.push({
                image: 'logo.png', 
                title: `Community ${i}`,
                description: `Description for Community ${i}`,
                creator: `User${i}`
            });
        }

        function displayCommunities() {
            communitiesContainer.innerHTML = ''; 
            communities.forEach((community, index) => {
                const tile = document.createElement('div');
                tile.className = 'community-tile';
                tile.innerHTML = `
                    <img src="${community.image}" alt="${community.title}">
                    <div class="community-info">
                        <h3 contenteditable="true" onblur="updateCommunity(${index}, this.textContent, 'title')">${community.title}</h3>
                        <p contenteditable="true" onblur="updateCommunity(${index}, this.textContent, 'description')">${community.description}</p>
                        <p><strong>Creator:</strong> ${community.creator}</p>
                        <button class="join-button" onclick="joinCommunity(${index})">Join</button>
                    </div>
                `;
                communitiesContainer.appendChild(tile);
            });
        }

        function joinCommunity(index) {
            alert(`You joined ${communities[index].title}!`);
        }

        function updateCommunity(index, newValue, field) {
            if (field === 'title') {
                communities[index].title = newValue;
            } else if (field === 'description') {
                communities[index].description = newValue;
            }
        }

        postButton.addEventListener('click', function() {
            const content = postContent.value.trim();
            if (content) {
                alert(`Posted: ${content}`); 
                postContent.value = ''; 
            }
        });

        displayCommunities(); 
    </script>

</body>
</html>
