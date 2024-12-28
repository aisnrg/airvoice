<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $command = $_POST['command'];

    // Kiểm tra lệnh "Hey AIrVoice!"
    if (strpos($command, 'Hey AIrVoice!') !== false) {
        $parsedCommand = trim(str_replace('Hey AIrVoice!', '', $command));

        // Gửi lệnh đến AI để phân tích
        $responseMessage = analyzeCommandWithAI($parsedCommand);

        // Tạo giọng nói từ văn bản phản hồi
        $audioUrl = generateSpeech($responseMessage);

        // Trả phản hồi
        echo "<h3>Kết quả:</h3><p>$responseMessage</p>";
        echo "<audio controls autoplay>
                <source src='$audioUrl' type='audio/mpeg'>
                Trình duyệt của bạn không hỗ trợ phát âm thanh.
              </audio>";
    } else {
        echo "<p>Lệnh không hợp lệ. Vui lòng bắt đầu bằng 'Hey AIrVoice!'</p>";
    }
}

// Phân tích câu lệnh với AI
function analyzeCommandWithAI($text) {
    // Thay bằng tích hợp Deep Learning (dịch vụ REST API trong Python)
    // Ví dụ hiện tại: giả lập phản hồi
    return "Phân tích lệnh: " . $text;
}

// Tạo giọng nói với TTS
function generateSpeech($text) {
    $apiKey = "8294e6c017mshb1552c564535bc7p1586bdjsna978d4673529"; // API key của VoiceRSS
    $url = "https://voicerss-text-to-speech.p.rapidapi.com/";

    $queryParams = http_build_query([
        "key" => $apiKey,
        "src" => $text,
        "hl" => "vi-vn", // Tiếng Việt
        "c" => "MP3",
        "f" => "16khz_16bit_mono"
    ]);

    return "$url?$queryParams";
}
?>
