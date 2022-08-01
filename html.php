<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-1.11.3.js"></script>
    <title>Document</title>
    <style>
        nav{
            background-color: grey;
        }
        nav ul{
            margin: 0;
            padding: 0;
            
        }
        nav ul li{
            float: left;
            list-style: none;
            padding: 0 5px;
            cursor: pointer;
        }
        nav ul li ul{
            margin: 0;
            padding: 0;
            margin-top:5px;
            position: absolute;
            display: none;
        }    
        nav ul li ul li{
            float: unset;
            padding: 0;
            margin-top:6px;
            
        }    
    </style>
</head>
<body>
    <nav>
        <ul>
            <li>Home</li>
            <li>About</li>
            <li>Gallery
                <ul>
                    <li>Gallery 1</li>
                    <li>Gallery 2</li>
                    <li>Gallery 3</li>
                </ul>

            </li>
            <li>Contact Us</li>
        </ul>

    </nav>

<script>
$(document).ready(function(){
    $('nav li').hover(function(){
        $('ul', this).stop().slideDown(200);
    },function(){
        $('ul', this).stop().slideUp(200);
    })
})
</script>

</body>
</html>