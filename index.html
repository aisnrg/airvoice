<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AIrVoice - Voice Command</title>
</head>
<body>
    <h1>AIrVoice</h1>
    <p>Nói lệnh bắt đầu với <b>"Hey AIrVoice!"</b></p>
    <button id="startButton">Bắt đầu nói</button>
    <p id="status">Nhấn nút để bắt đầu...</p>
    <p><b>Câu lệnh của bạn:</b> <span id="commandText">---</span></p>

    <div id="response"></div>

    <script>
        const startButton = document.getElementById("startButton");
        const status = document.getElementById("status");
        const commandText = document.getElementById("commandText");
        const responseDiv = document.getElementById("response");

        let recognition;

        // Kiểm tra trình duyệt hỗ trợ Web Speech API
        if ("webkitSpeechRecognition" in window || "SpeechRecognition" in window) {
            recognition = new (window.webkitSpeechRecognition || window.SpeechRecognition)();
            recognition.lang = "en-US"; // Cài đặt ngôn ngữ, thay đổi nếu cần
            recognition.continuous = false;
            recognition.interimResults = false;

            // Xử lý khi nhận diện xong
            recognition.onresult = function(event) {
                const transcript = event.results[0][0].transcript;
                commandText.innerText = transcript;

                // Gửi lệnh đến PHP qua AJAX
                sendCommandToServer(transcript);
            };

            recognition.onerror = function(event) {
                status.innerText = "Lỗi nhận diện giọng nói: " + event.error;
            };

            recognition.onstart = function() {
                status.innerText = "Đang nghe...";
            };

            recognition.onend = function() {
                status.innerText = "Kết thúc, đang xử lý...";
            };

            // Khi nhấn nút, bật microphone
            startButton.addEventListener("click", () => {
                recognition.start();
            });
        } else {
            alert("Trình duyệt của bạn không hỗ trợ Web Speech API!");
        }

        // Hàm gửi dữ liệu đến PHP
        function sendCommandToServer(command) {
            const xhr = new XMLHttpRequest();
            xhr.open("POST", "process.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

            xhr.onload = function() {
                if (xhr.status === 200) {
                    responseDiv.innerHTML = xhr.responseText;
                } else {
                    responseDiv.innerHTML = "<p>Lỗi gửi lệnh đến server!</p>";
                }
            };

            xhr.onerror = function() {
                responseDiv.innerHTML = "<p>Kết nối đến server thất bại!</p>";
            };

            xhr.send("command=" + encodeURIComponent(command));
        }
    </script>
</body>
</html>
