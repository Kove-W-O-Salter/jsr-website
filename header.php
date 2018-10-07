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
                    foreach ($rooms as $room) {
                       echo '<a href=\'./rooms.php?room_id=' . $room->id . '\'>' . $room->name . '</a>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>