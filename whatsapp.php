

    <div class="whatsapp-chat">
        <a href="javascript:void(0);" id="chatOpen"> <i class="fa-brands fa-whatsapp"></i> Chat Now <span></span></a>
    </div>

    <div class="whatsapp-chat-details" id="chatBox">
        <div class="top-bar">
            <div class="logo">
                <img src="assets/images/favicon.jpg" alt="">
                <span></span>
            </div>
            <div class="header-title">
                <h5>
                    JPS Bangalore
                </h5>
                <p>
                    Typically replies instantly
                </p>
            </div>
            <div class="close-btn" id="chatClose">
                <i class="fa-regular fa-circle-xmark"></i>
            </div>
        </div>

        <div class="chat-section">

            <p class="time"></p>



            <div class="chat-details">
                <div class="chat-content">
                    <p>
                        Hi there  <img src="assets/images/hi-icon.webp" width="30px" alt="">
                        <br>
                        How can we help you?
                    </p>
                </div>
            </div>

          

            <div class="chat-btn">
   <a href="https://api.whatsapp.com/send/?phone=919019542521&text." target="_blank">
                    <i class="fa-brands fa-whatsapp"></i> Start Chat
                </a>
            </div>

 <div class="powered-by">
                <p><i class="fa-solid fa-bolt fa-fw fa-2x"></i> Powered By <a href="https://www.nextwavecreators.com"
                        class="website-link" target="_blank">Nextwave Creators</a></p>


            </div>
        </div>
    </div>

    <script>
        function updateTime() {
            const timeElement = document.querySelector(".time");
            const now = new Date();

            const options = {
                weekday: "long",
                hour: "2-digit",
                minute: "2-digit"
            };
            const formattedTime = now.toLocaleTimeString("en-US", options);

            timeElement.textContent = formattedTime;
        }

        updateTime(); // Initial call
        setInterval(updateTime, 1000); // Update every second
    </script>

    <script>
        document.getElementById("chatOpen").addEventListener("click", function() {
            const chatBox = document.getElementById("chatBox");
            chatBox.style.display = "block";

            // Hide chat elements initially
            document.querySelectorAll(".chat-details, .chat-btn").forEach(el => {
                el.style.opacity = "0";
                el.style.transform = "translateY(20px)";
            });

            // Show first chat message after 1s
            setTimeout(() => {
                document.querySelectorAll(".chat-details")[0].style.opacity = "1";
                document.querySelectorAll(".chat-details")[0].style.transform = "translateY(0)";
            }, 1000);

            // Show second chat message after 2s
            // setTimeout(() => {
            //     document.querySelectorAll(".chat-details")[1].style.opacity = "1";
            //     document.querySelectorAll(".chat-details")[1].style.transform = "translateY(0)";
            // }, 2000);

            // Show start chat button after 3s
            setTimeout(() => {
                document.querySelector(".chat-btn").style.opacity = "1";
                document.querySelector(".chat-btn").style.transform = "translateY(0)";
            }, 2000);
        });

        document.getElementById("chatClose").addEventListener("click", function() {
            document.getElementById("chatBox").style.display = "none";
        });
    </script>
