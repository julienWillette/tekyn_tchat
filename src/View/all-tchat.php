<div class="tchat">
        <span class="top-tchat">
            <img src="../../public/images/Florence%20Hale.jpg" alt="Florence_Hale" class="img-top-bar">
            <div>
                <h4>Chat with Florence Hale</h4>
                <p class="nr-messages">157 messages</p>
            </div>
        </span>
    <span class="midle-tchat">
            <div>
                <span class="line-tchat">
                    <img src="../../public/images/Florence%20Hale.jpg" alt="Florence_Hale" class="img-tchat-1">
                    <div class="color-send-message-1">
                        <p>Hi how are you ? </p>
                    </div>
                </span>
                <div class="date-send-1">
                    <p>11:11am Today</p>
                </div>
            </div>
            <div class="receive-msg">
                <span class="line-tchat-2">
                    <div class="color-send-message-2">
                        <p>Good thanks </p>
                    </div>
                    <img src="../../public/images/Florence%20Hale.jpg" alt="Florence_Hale" class="img-tchat-2">
                </span>
                <div class="date-send-2">
                    <p>11:20am Today</p>
                </div>
                <span class="line-tchat">
                    <img src="../../public/images/Florence%20Hale.jpg" alt="Florence_Hale" class="img-tchat-1">
                    <div class="color-send-message-1">
                        <p>Hi how are you ? </p>
                    </div>
                </span>
                <div class="date-send-1">
                    <p>11:11am Today</p>
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
    submit.addEventListener("click",sendmessage)

    function sendmessage()
    {
        data=text.value.trim()
        if(data!="")
            chatbox.innerHTML+='<span class="line-tchat-2"><div class="color-send-message-2"><p>'+data+'</p></div><img src="../../public/images/Florence_Hale.jpg" alt="Florence_Hale" class="img-tchat-2"></span>'
        text.value=""
        chatbox.scrollTop=chatbox.scrollHeight
    }
</script>