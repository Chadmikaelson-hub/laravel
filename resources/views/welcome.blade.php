<!DOCTYPE html>
<html>
<head>
    <title>Calculator JS</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('src/style.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:600,700" rel="stylesheet">
</head>
<body>
    <h1>A simple Calculator</h1>
    <div id="container">
        <div id="calculator">
            <div id="results">
                <div id="history">
                    <p id="history-value"></p>
                </div>
                <div id="output">
                    <p id="output-value"></p>
                </div>
            </div>
            <div id="keyboard">
                <button class="operator" id="clear">C</button>
                <button class="operator" id="backspace">CE</button>
                <button class="operator" id="%">%</button>
                <button class="operator" id="/">&#247</button>
                <button class="number" id="7">7</button>
                <button class="number" id="8">8</button>
                <button class="number" id="9">9</button>
                <button class="operator" id="*">&times</button>
                <button class="number" id="4">4</button>
                <button class="number" id="5">5</button>
                <button class="number" id="6">6</button>
                <button class="operator" id="-">-</button>
                <button class="number" id="1">1</button>
                <button class="number" id="2">2</button>
                <button class="number" id="3">3</button>
                <button class="operator" id="+">+</button>
                <button class="empty" id="empty"></button>
                <button class="number" id="0">0</button>
                <button class="empty" id="empty"></button>
                <button class="operator" id="=">=</button>


            </div>
            
        </div>
    </div>

    <script src="{{ asset('src/script.js') }}"></script>
</body>
</html>