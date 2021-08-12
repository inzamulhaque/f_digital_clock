<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Clock - MD IH Alif</title>
    <link rel="icon" href="download.png">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wrapper">
        <div class="display">
            <div id="time"></div>
        </div>
        <span></span>
        <span></span>
    </div>

    <script>
        setInterval(()=>{
            const time = document.querySelector("#time");
            let date = new Date();
            let hours = date.getHours();
            let minutes = date.getMinutes();
            let seconds = date.getSeconds();
            let status = "AM";
            if (hours > 12) {
                hours = hours - 12;
                status = "PM";
            }
            if (minutes < 10) {
                minutes = "0"+minutes;
            }
            if (seconds < 10) {
                seconds = "0"+seconds;
            }
            time.textContent = hours +":"+ minutes +":"+ seconds +" "+ status;
        }, 1000);
    </script>
</body>
</html>