<?php
    mail('markemchugh@gmail.com', $_POST['name'], $_POST['email'], $_POST['message']);
?>
<script>
    alert("Thanks for reaching out! We got your message!")
    location.replace("http://www.thecommonroom360.com")
</script>
