<!DOCTYPE html>
<html>
    <head>
        <title> Random Player!</title>
    </head>
    <body>
        <iframe style="border: none" width="420" height="315"
            src="https://www.youtube.com/embed/XGSy3_Czz8k">
        </iframe>
        <p></p>
        <button onclick="idanis();">Click ME!!!</button>
        <script>
        
        function idanis() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    var videoId = JSON.parse(xhttp.responseText);
                    console.log(videoId);
                    var httpURL = "https://www.youtube.com/embed/";
                    document.querySelector("iframe").src = httpURL + videoId.video;
                }
            };
            xhttp.open("GET", "api.php", true);
            xhttp.send();
        }
        </script>
    </body>
</html>