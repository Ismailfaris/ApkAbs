<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log Out</title>
</head>
<body>
    <script>
        function logout(){
            var openedWindow;
            openedWindow = window.open('https://www.linkedin.com/m/logout/');
            if(openedWindow != undefined){
                setTimeout( ()=>{
                    window.focus();
                    openedWindow.close();
                    window.location.replace("{{ url('/dashboard/social-media/linkedin') }}");  
                }, 15000);
            } else {
                logout();
            }
        }        
        window.onload = function(){   
            logout();
        }
    </script>
</body>
</html>