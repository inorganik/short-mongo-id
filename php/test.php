<?php

include 'ShortMongoId.php';

$id = new MongoId();
echo "id: ";
echo (string) $id;
$shortId = ShortMongoId::ObjectIdToShortId($id);
echo "<br>\nshort Id: ";
echo $shortId;
echo "<br><br>\n";

$id = new MongoId();
echo "id: ";
echo (string) $id;
$shortId = ShortMongoId::ObjectIdToShortId($id);
echo "<br>\nshort Id: ";
echo $shortId;
echo "<br><br>\n";

$id = new MongoId();
echo "id: ";
echo (string) $id;
$shortId = ShortMongoId::ObjectIdToShortId($id);
echo "<br>\nshort Id: ";
echo $shortId;
echo "<br><br>\n";
