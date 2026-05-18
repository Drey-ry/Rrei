<?php
$choice = isset($_GET['friend']) ? $_GET['friend'] : '';

if ($choice == "karlo") {
    ?>
    <h2>Gerald Arago</h2>
    <img src="picture1.jpg" alt="Karlo">
    <p>Gerald Arago is an awesome friend who has a strong passion for technology and learning new things. He is always curious and motivated to improve his skills, especially when it comes to coding and always ready to assist his classmates with their coding projects and challenges. He explains things clearly and makes sure everyone understands, creating a supportive and positive environment.</p>
    <?php
} elseif ($choice == "dreyred") {
    ?>
    <h2>Karl Deleon</h2>
    <img src="picture2.jpg" alt="Dreyred">
    <p>Karl Deleom is a creative and focused individual who enjoys spending his time exploring interesting hobbies and learning new things. He has a calm and thoughtful personality, which makes him a great friend when you need advice or someone to listen. His ability to stay focused helps him do well in what he is passionate about, and his friendly nature makes others feel comfortable around him.</p>
    <?php
} elseif ($choice == "jose") {
    ?>
    <h2>Jose Ong</h2>
    <img src="picture3.jpg" alt="Jose">
    <p>Jose Ong is a cheerful and supportive friend who always brings positive energy wherever he goes. He has a friendly personality that makes people feel comfortable and included, especially during study sessions. He works hard to create a fun and welcoming environment. Overall, he is a kind and dependable friend who values teamwork and makes everyone feel appreciated.</p>
    <?php
} elseif ($choice == "jairus") {
    ?>
    <h2>Jairus Galicia</h2>
    <img src="picture4.jpg" alt="Jairus">
    <p>Jairus Galicia is a hardworking and dedicated student who consistently puts effort into everything he does. He is highly organized, which helps him manage his tasks efficiently and stay on top of his responsibilities. He has a practical approach to problem solving. In addition to his individual strengths, he values teamwork and works well with others, contributing positively to group activities and making sure everyone collaborates effectively.</p>
    <?php
} elseif ($choice == "paramveer") {
    ?>
    <h2>Paramveer Bolla</h2>
    <img src="picture5.jpg" alt="Paramveer">
    <p>Paramveer Bolla is an easygoing and dependable friend who is always pleasant to be around. He enjoys discovering new things and has a natural curiosity that keeps him engaged and open to different experiences. He is a valuable member of any group he is in. Along with that, he is also a wonderful teammate who works well with others, contributing positively and making collaboration enjoyable and productive for everyone.</p>
    <?php
} else {
    ?>
    <h2>Welcome!</h2>
    <p>Please click on a friend above to read their biography.</p>
    <?php
}
?>