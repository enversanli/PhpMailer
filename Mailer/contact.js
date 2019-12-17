$("#mail-sender").click(function () {
    var name=$("#sender-name").val();
    var mail=$("#sender-mail").val();
    var subject=$("#sender-subject").val();
    var content=$("#sender-message").val();
    if (name ){

    }
    alert(mail);
    $.ajax({
        url:"mail.php",
        type:"POST",
        data:{name:name,senderMail: mail, subject:subject, content:content},
        dataType:"json",

        success:function (response) {
                alert(response);
        }

    });

});