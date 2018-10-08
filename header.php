<div class="container">
    <div class="banner">
        <div class="banner_header">
            JSR
        </div>
        <div class="banner_sub_header">
            John Salter Rooms
        </div>
        <div class="banner_navbar">
            <!-- <button onclick="location.href='/'" class="banner_navbar_button"> HOME </button> -->
            <a href="/" class="banner_navbar_button"> HOME </a>
            <div class="banner_navbar_dropdown">
                <!-- <button class="banner_navbar_button"> ROOMS &#x25BC; </button> -->
                <a class="banner_navbar_button"> ROOMS &#x25BC; </a>
                <div class="banner_navbar_dropdown_items">
                    <?php
                    foreach ($global_rooms as $header_room) {
                       echo '<a href=\'/routes/rooms.php?room_id=' . $header_room->id . '\'>' . $header_room->name . '</a>';
                    }
                    ?>
                </div>
            </div>
            <!-- <button onclick="location.href='/routes/contact.php'" class="banner_navbar_button"> CONTACT </button> -->
            <a href="/routes/contact.php" class="banner_navbar_button"> CONTACT </a>
<!--             <button onclick="location.href='https://github.com/Kove-W-O-Salter/jsr-website#readme'" class="banner_navbar_button"> WEBSITE </button> -->
            <a href="https://github.com/Kove-W-O-Salter/jsr-website#readme" class="banner_navbar_button"> WEBSITE </a>
        </div>
    </div>
</div>