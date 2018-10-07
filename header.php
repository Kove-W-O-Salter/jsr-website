<div class="container">
    <div class="banner">
        <div class="banner_header">
            JSR
        </div>
        <div class="banner_sub_header">
            John Salter Rooms
        </div>
        <div class="banner_navbar">
            <a class="banner_navbar_button" href="/"> HOME </a>
            <div class="banner_navbar_dropdown">
                <div class="banner_navbar_dropdown_button"> ROOMS </div>
                <div class="banner_navbar_dropdown_items">
                    <?php
                    foreach ($global_rooms as $header_room) {
                       echo '<a href=\'./rooms.php?room_id=' . $header_room->id . '\'>' . $header_room->name . '</a>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>