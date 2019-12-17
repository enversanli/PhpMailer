<?php
include "header PAGE";
?>



        <form class="mail-form">
            <input type="text" id="sender-name" placeholder="Adınız" required><br>
            <input type="text" id="sender-mail" placeholder="Mail Adresiniz" required><br>
            <input type="text" id="sender-subject" placeholder="Konu Belirtiniz" required><br>
             <input type="text" id="sender-message" style="height: 30%;" placeholder="Mesajınız" required><br>
            <button id="mail-sender">Gönder</button>
        </form>

<div class="clear"></div>

<script src="contact.js"></script>

<?php
include "footer PaGE";
?>
