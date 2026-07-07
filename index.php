<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMS Dashboard Sketch</title>
    <style>
        body {
            font-family: 'Courier New', Courier, monospace;
            background-color: #ffffff;
            padding: 30px;
        }
        .bms-card {
            border: 2px solid #000000;
            padding: 15px;
            width: 320px;
            background: #ffffff;
            margin-bottom: 5px;
        }
        .bms-card h3 {
            margin: 0 0 10px 0;
            font-size: 18px;
            letter-spacing: 1px;
        }
        .info-text {
            margin: 5px 0;
            font-size: 15px;
        }
        .top-btns {
            margin: 10px 0;
        }
        .small-btn {
            border: 1px solid #000;
            background: none;
            padding: 2px 8px;
            margin-right: 5px;
            font-size: 12px;
        }
        .btn-section {
            margin: 15px 0;
        }
        .row {
            margin-bottom: 8px;
            display: flex;
            align-items: center;
        }
        .clickable-btn {
            border: 2px solid #000000;
            background: #ffffff;
            padding: 5px 15px;
            margin-right: 8px;
            cursor: pointer;
            font-weight: bold;
            font-family: inherit;
        }
        .clickable-btn:hover {
            background: #f0f0f0;
        }
        .arrow-label {
            font-size: 14px;
        }
        .arrow-down {
            font-size: 24px;
            margin-left: 20px;
            margin-top: -5px;
            margin-bottom: 5px;
        }
        .details-box {
            border: 2px solid #000000;
            padding: 12px;
            width: 200px;
            background: #ffffff;
            margin-left: 10px;
        }
        .details-box p {
            margin: 4px 0;
            font-size: 14px;
        }
    </style>
</head>
<body>

    <div class="bms-card">
        <h3>BMS UI</h3>
        <div class="info-text">Total Volt: 0.8V</div>
        <div class="info-text">Connection: 2S (3.2V - 4.4V)</div>
        
        <div class="top-btns">
            <button class="small-btn">C1</button>
            <button class="small-btn">C2</button>
        </div>

        <div class="info-text">No. of Cells: 2</div>

        <div class="btn-section">
            <div class="row">
                <button class="clickable-btn">C1</button>
                <button class="clickable-btn">C2</button>
                <span class="arrow-label">&rarr; clickable button</span>
            </div>
            <div class="row">
                <button class="clickable-btn">C3</button>
                <button class="clickable-btn">C4</button>
                <button class="clickable-btn">C5</button>
<button class="clickable-btn">C6</button>
            </div>
        </div>
    </div>

    <div class="arrow-down">&ShortDownArrow;</div>

    <div class="details-box">
        <p><b id="display-name">C1</b></p>
        <p>Battery Volt: <span id="display-volt">---</span></p>
        <p>Temp: <span id="display-temp">---</span></p>
        <p>Current State: <span id="display-state">---</span></p>
    </div>

    <script>
        const dataMap = {
            'C1': { volt: '3.6V', temp: '26°C', state: 'Normal' },
            'C2': { volt: '3.4V', temp: '28°C', state: 'Normal' },
            'C3': { volt: '1.1V', temp: '45°C', state: 'Hot' },
            'C4': { volt: '0.0V', temp: '24°C', state: 'Offline' },
            'C5': { volt: '3.5V', temp: '27°C', state: 'Normal' },
            'C6': { volt: '3.3V', temp: '26°C', state: 'Normal' }
        };



        document.querySelectorAll('.clickable-btn').forEach(btn => {
    btn.addEventListener('click', function() {
        const name = this.innerText.trim();
        const info = dataMap[name];

        if (info) {
            document.getElementById('display-name').innerText = name;
            document.getElementById('display-volt').innerText = info.volt;
            document.getElementById('display-temp').innerText = info.temp;
            document.getElementById('display-state').innerText = info.state;
        }
    });
});
</script>