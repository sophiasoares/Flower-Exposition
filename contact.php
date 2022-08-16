<?php 
// Submit contact form that has name, email and message
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $human = intval($_POST['human']);
    $from = 'Demo Contact Form'; 
    $to = '
    <?php echo $email; ?>';
    $subject = 'Message from Contact Demo';
}

?>
