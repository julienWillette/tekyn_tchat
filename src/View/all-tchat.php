<div class="tchat">


        <span class="top-tchat">
            <img src="../../public/images/<?= $user['picture']?>" alt="Florence_Hale" class="img-top-bar">
            <div>
                <h4><?= $user['firstname'] . ' ' . $user['lastname']?></h4>
                <p class="nr-messages">157 messages</p>
            </div>
        </span>
        <span class="midle-tchat">
            <div>
                <span class="line-tchat">
                    <img src="../../public/images/<?= $user['picture']?>" alt="Florence_Hale" class="img-tchat-1">
                    <div class="color-send-message-1">
                        <p>Hi how are you ? </p>
                    </div>
                </span>
                <div class="date-send-1">
                    <p>Tue Jul 13 2021 11:23:44 GMT+0200 (heure d’été d’Europe centrale)</p>
                </div>
            </div>
        </span>
        <span class="sendbox">
            <input type="text" placeholder="Type your messages ..." class="type-message">
            <input type="submit" name="message" autocomplete="off" value="validé" class="submit">
        </span>

</div>
<script>
    submit=document.querySelector(".submit");
    text=document.querySelector(".sendbox input");
    chatbox=document.querySelector(".midle-tchat");
    submit.addEventListener("click",sendmessage);

    function sendmessage()
    {
        data=text.value.trim()
        var timestamp = Date.now();
        var date = new Date(timestamp);
        if(data=="")
            submit.addEventListener(hiden)
        else
            chatbox.innerHTML+='<span class="line-tchat-2"><div class="color-send-message-2"><p>'+data+'</p></div><img src="../../public/images/Owen_Lambert.jpg" alt="Florence_Hale" class="img-tchat-2"></span>'
        chatbox.innerHTML+='<div class="date-send-2"><p>'+date+'</p></div>'
        text.value=""
        chatbox.scrollTop=chatbox.scrollHeight
    }
</script>

