<?php
$title = "tchat";
require_once 'index.php';
require_once '../Controller/auth.php';
user_not_connect();
?>

<span id="tchat-page">
    <div class="sidbar">
        <form class="search-form" method="POST" action="tchat.php">
            <input type="search" placeholder="Search.." class="search">
        </form>
        <div class="all-cards">
            <a href="#" class="card">
                <article>
                    <span class="picture">
                        <img class="img-sidebar" src="../../public/images/Florence%20Hale.jpg" alt="Florence_Hale">
                    </span>
                    <span class="name">
                        <h3>Florence Hale</h3>
                    </span>
                </article>
            </a>
            <a href="#" class="card">
                <article>
                    <span class="picture">
                        <img class="img-sidebar" src="../../public/images/Florence%20Hale.jpg" alt="Florence_Hale">
                    </span>
                    <span class="name">
                        <h3>Florence Hale</h3>
                    </span>
                </article>
            </a>
            <a href="#" class="card">
                <article>
                    <span class="picture">
                        <img class="img-sidebar" src="../../public/images/Florence%20Hale.jpg" alt="Florence_Hale">
                    </span>
                    <span class="name">
                        <h3>Florence Hale</h3>
                    </span>
                </article>
            </a>
            <a href="#" class="card">
                <article>
                    <span class="picture">
                        <img class="img-sidebar" src="../../public/images/Florence%20Hale.jpg" alt="Florence_Hale">
                    </span>
                    <span class="name">
                        <h3>Florence Hale</h3>
                    </span>
                </article>
            </a>
            <a href="#" class="card">
                <article>
                    <span class="picture">
                        <img class="img-sidebar" src="../../public/images/Florence%20Hale.jpg" alt="Florence_Hale">
                    </span>
                    <span class="name">
                        <h3>Florence Hale</h3>
                    </span>
                </article>
            </a>
        </div>
    </div>
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
            </div>
        </span>
         <span>
            <form>
                <input type="text" placeholder="Type your messages ..." class="type-message">
                <input type="submit" name="message" autocomplete="off" value="validé" class="btn-message">
            </form>
        </span>
    </div>
</span>

