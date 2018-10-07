<div class="container">
    <div class="banner">
        <div class="banner_header">
            JSR
        </div>
        <div class="banner_sub_header">
            John Salter Rooms
        </div>
        <div class="banner_navbar">
            <button onclick="location.href='/'" class="banner_navbar_button"> HOME </button>
            <div class="banner_navbar_dropdown">
                <div class="banner_navbar_dropdown_button"> ROOMS </div>
                <div class="banner_navbar_dropdown_items">
                    <?php
                    foreach ($global_rooms as $header_room) {
                       echo '<button onclick="location.href=\'' . $header_room->id . '\'">' . $header_room->name . '</button>';
                    }
                    ?>
                </div>
            </div>
            <button onclick="location.href='./contact.php'" class="banner_navbar_button"> CONTACT </button>
        </div>
    </div>
</div>