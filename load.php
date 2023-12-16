<?php

require_once "connection.php";

$sql = "SELECT * FROM images WHERE imageID > '" . $_POST['id'] . "' LIMIT 20";
$data = $conn->query($sql);

$output = "";

while ($row = mysqli_fetch_assoc($data)) {

    $output .= '
    <div class="item-img '.$row["imageSize"].'" data-name="i-'.$row["imageID"].'" onclick="clickMe();">
        <div class="link-img">
            <img src="'.$row["imageSource"].'" alt="">
        </div>
    </div>
    ';

    $id = $row["imageID"];
}

$output .= '
    <div id="images__more">
        <button id="load_more" data-id="'.$id.'">Load more...</button>
    </div>
    ';

echo $output;

?>