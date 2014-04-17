<html>
<head>
    <title></title>
    <script src="../jquery/jquery-1.4.1.min.js"></script>
    <link rel="stylesheet" href="../css/menu_prd.css">
    <script>
        function menu(value){
            $("#menu-"+value).toggle();
        }
    </script>
</head>
<body>
    <div id="header">ประเภทสินค้า</div>
    <div id="detail">
        <ul>
            <li value="1" onclick="menu(this.value)">DVR
                <ul id="menu-1"  style="display: none">
                    <li>AVTECH</li>
                </ul>
                <ul id="menu-2"  style="display: none">
                    <li>SMC</li>
                </ul>
            </li>

<!--            <li value="2" onclick="menu(this.value)">2-->
<!--                <ul id="menu-2" style="display: none">-->
<!--                    <li>11</li>-->
<!--                </ul>-->
<!--            </li>-->
        </ul>
    </div>
</body>
</html>