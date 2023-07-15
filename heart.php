<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My heart</title>
</head>
<body>
    <section>
        <div class = "loader">
            <span style = "--i:1;"></span>
            <span style = "--i:2;"></span>
            <span style = "--i:3;"></span>
            <span style = "--i:4;"></span>
            <span style = "--i:5;"></span>
            <span style = "--i:6;"></span>
            <span style = "--i:7;"></span>
            <span style = "--i:8;"></span>
            <span style = "--i:9;"></span>
            <span style = "--i:10;"></span>
            <span style = "--i:11;"></span>
            <span style = "--i:12;"></span>
            <span style = "--i:13;"></span>
            <span style = "--i:14;"></span>
            <span style = "--i:15;"></span>
            <span style = "--i:16;"></span>
            <span style = "--i:17;"></span>
            <span style = "--i:18;"></span>
            <span style = "--i:19;"></span>
            <span style = "--i:20;"></span>
        </div>
    </section>
</body>
</html>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    section{
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background: #000;
        animation: animateBg 10s linear infinite;
    }
    @keyframes animateBg{
        0%{
            filter: hue-rotate(0deg);
        }
        100%{
            filter: hue-rotate(360deg);
        }
    }
    .loader{
        position: relative;
    }
    .loader span{
        position: absolute;
        top: 0;
        left: -200px;
        width: 200px;
        transform-origin: right;
        transform: rotate(calc(18deg * var(--i)));
    }
    .loader span::before{
        content: '';
        position: absolute;
        left: 0;
        width: 15px;
        height: 15px;
        background: #E7168E;
        border-radius: 50%;
        animation: animate 2s linear infinite;
        animation-delay: calc(-0.1s * var(--i));
        box-shadow: 0 0 10px #FF33BB, 0 0 20px #FF33BB, 
                    0 0 40px #FF33BB, 0 0 60px #FF33BB,
                    0 0 80px #FF33BB, 0 0 100px #FF33BB;
    }
    @keyframes animate{
        0%{
            transform: translateX(0) scale(0.5);
        }
        50%{
            transform: translateX(200px) scale(1);
        }
        100%{
            transform: translateX(0) scale(0.5);
        }
    }
</style>