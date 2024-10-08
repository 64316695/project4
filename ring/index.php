<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เสียงเรียกเข้า</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div id="selection" class="selection">
        <h1>เลือกรูปแบบการโทร </h1>
        <button onclick="startCall('line')">Line</button>
        <button onclick="startCall('instagram')">Instagram</button>
        <button onclick="startCall('messenger')">Messenger</button>
        <button onclick="startCall('ios')">IOS</button>
    </div>

    <div id="call-screen" class="call-screen hidden">
        <div class="call-content">
            <img id="profile-pic" src="" alt="Profile Picture">
            <h2 id="caller-name"></h2>
            <div class="call-buttons">
                <button onclick="endCall()" class="end-call" data-label="ปฏิเสธ">
                    <img src="http://localhost/travel/ring/images/26.png" alt="ปฏิเสธ" class="call-icon">
                    <span>ปฏิเสธ</span>
                </button>
                <button onclick="videoCall()" class="video-call" data-label="รับสาย">
                    <img src="http://localhost/travel/ring/images/22.png" alt="รับสาย" class="call-icon">
                    <span>รับสาย</span>
                </button>
            </div>

        </div>
    </div>








    <audio id="call-sound" src="" preload="auto"></audio>

    <script src="script.js"></script>
</body>

</html>