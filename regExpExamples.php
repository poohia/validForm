	<html>
    <head>
        <title>Exemples valid forms</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/style.css">
        <script src="js/jquery.min.js"></script>
        <script src="validForm.min.js"></script>
    </head>
    <style>
        .display-none{display: none;}
        .border-red{
            border: 1px solid red;
            -webkit-transition : border 1500ms ease-out;
            -moz-transition : border 1500ms ease-out;
            -o-transition : border 1500ms ease-out;
        }
    </style>
    <?php include "header.php" ?>
    <?php include "backtop.php" ?>
    <body class="container " style="margin-bottom: 2%;">
        <?php include "alertMessage.php" ?>
        <h1 > Regex examples </h1>
        <div class="col-lg-12">
            <h3 id="noEmpty"> No empty value  </h3>
            &nbsp;&nbsp;&nbsp;<label> Value : <code> .*\S.* </code></label><br> <label> Working with validForm : <code> .*\\S.* </code></label>
            <form rule-form="validForm">
                <input type="text" rules-input="{active:true, regExp:'.*\\S.*', addClass:'border-red'}" />
                <input type="submit" class="btn btn-default" value="submit" /><br><br>
                <code>&lt;input type="text" rules-input="{active:true, regExp:'.*\\S.*', addClass:'border-red'}" /></code>
            </form>
            <hr class="col-lg-11 "/> <br><br>
            <h3 id="minmax"> Min and Max characters  </h3>
            &nbsp;&nbsp;&nbsp;<label> Value : <code> /^[a-z]{1,10}$/ </code> &nbsp;with nMin = 1 and nMax = 10</label><br>
            <label> Working with validForm : <code> ^[a-z]{1,10}$ </code></label>
            <form rule-form="validForm">
                <input type="text" rules-input="{active:true, regExp:'^[a-z]{1,10}$', addClass:'border-red'}" />
                <input type="submit" class="btn btn-default" value="submit" /><br><br>
                <code>&lt;input type="text" rules-input="{active:true, regExp:'^[a-z]{1,10}$', addClass:'border-red'}" /></code>
            </form>
            <hr class="col-lg-11 "/> <br><br>
            <h3 id="email">  Email  </h3>
            &nbsp;&nbsp;&nbsp;<label> Value : <code> \b[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b </code> </label><br>
            <label> Working with validForm : <code> \\b[A-Z0-9._%+-]+@[A-Z0-9.-]+\\.[A-Z]{2,4}\\b </code></label>
            <form rule-form="validForm">
                <input type="text" rules-input="{active:true, regExp:'\\b[A-Z0-9._%+-]+@[A-Z0-9.-]+\\.[A-Z]{2,4}\\b', addClass:'border-red'}" />
                <input type="submit" class="btn btn-default" value="submit" /><br><br>
                <code>&lt;input type="text" rules-input="{active:true, regExp:'\\b[A-Z0-9._%+-]+@[A-Z0-9.-]+\\.[A-Z]{2,4}\\b', addClass:'border-red'}" /></code>
            </form>
            <hr class="col-lg-11 "/> <br><br>
            <h3 id="ipv4">  IP V4  </h3>
            &nbsp;&nbsp;&nbsp;<label> Value : <code> ([0-9]{1,3}\.){3}[0-9]{1,3} </code> </label><br>
            <label> Working with validForm : <code> ([0-9]{1,3}\\.){3}[0-9]{1,3} </code></label>
            <form rule-form="validForm">
                <input type="text" rules-input="{active:true, regExp:'([0-9]{1,3}\\.){3}[0-9]{1,3}', addClass:'border-red'}" />
                <input type="submit" class="btn btn-default" value="submit" /><br><br>
                <code>&lt;input type="text" rules-input="{active:true, regExp:'([0-9]{1,3}\\.){3}[0-9]{1,3}', addClass:'border-red'}" /></code>
            </form>
            <hr class="col-lg-11 "/> <br><br>
            <h3 id='macaddress'>  MAC Address </h3>
            &nbsp;&nbsp;&nbsp;<label> Value : <code> ^([0-9a-fA-F][0-9a-fA-F]:){5}([0-9a-fA-F][0-9a-fA-F])$ </code> </label><br>
            <label> Working with validForm : <code> ^([0-9a-fA-F][0-9a-fA-F]:){5}([0-9a-fA-F][0-9a-fA-F])$ </code></label>
            <form rule-form="validForm">
                <input type="text" rules-input="{active:true, regExp:'^([0-9a-fA-F][0-9a-fA-F]:){5}([0-9a-fA-F][0-9a-fA-F])$', addClass:'border-red'}" placeholder="3D:F2:C9:A6:B3:4F" />
                <input type="submit" class="btn btn-default" value="submit" /><br><br>
                <code>&lt;input type="text" rules-input="{active:true, regExp:'^([0-9a-fA-F][0-9a-fA-F]:){5}([0-9a-fA-F][0-9a-fA-F])$', addClass:'border-red'}" /></code>
            </form>
            <hr class="col-lg-11 "/> <br><br>
            <h3 id="phonenumber">   International phone number</h3>
            &nbsp;&nbsp;&nbsp;<label> Value : <code> \+(9[976]\d|8[987530]\d|6[987]\d|5[90]\d|42\d|3[875]\d|2[98654321]\d|9[8543210]|8[6421]|6[6543210]|5[87654321]|4[987654310]|3[9643210]|2[70]|7|1)\d{1,14}$ </code> </label><br>
            <label> Working with validForm : <code> \\+(9[976]\\d|8[987530]\\d|6[987]\\d|5[90]\\d|42\\d|3[875]\\d|2[98654321]\\d|9[8543210]|8[6421]|6[6543210]|5[87654321]|4[987654310]|3[9643210]|2[70]|7|1)\\d{1,14}$ </code></label>
            <form rule-form="validForm">
                <input type="text" rules-input="{active:true, regExp:'\\+(9[976]\\d|8[987530]\\d|6[987]\\d|5[90]\\d|42\\d|3[875]\\d|2[98654321]\\d|9[8543210]|8[6421]|6[6543210]|5[87654321]|4[987654310]|3[9643210]|2[70]|7|1)\\d{1,14}$', addClass:'border-red'}" placeholder="+33102030405" />
                <input type="submit" class="btn btn-default" value="submit" /><br><br>
                <code>&lt;input type="text" rules-input="{active:true, regExp:'\\+(9[976]\\d|8[987530]\\d|6[987]\\d|5[90]\\d|42\\d|3[875]\\d|2[98654321]\\d|9[8543210]|8[6421]|6[6543210]|5[87654321]|4[987654310]|3[9643210]|2[70]|7|1)\\d{1,14}$', addClass:'border-red'}" /></code>
            </form>
            <hr class="col-lg-11 "/> <br><br>
            <h3 id="date">   Date in format yyyy-MM-dd</h3>
            &nbsp;&nbsp;&nbsp;<label> Value : <code> (19|20)\d\d([- /.])(0[1-9]|1[012])\2(0[1-9]|[12][0-9]|3[01]) </code> </label><br>
            <label> Working with validForm : <code> (19|20)\\d\\d([- /.])(0[1-9]|1[012])\\2(0[1-9]|[12][0-9]|3[01]) </code></label>
            <form rule-form="validForm">
                <input type="text" rules-input="{active:true, regExp:'(19|20)\\d\\d([- /.])(0[1-9]|1[012])\\2(0[1-9]|[12][0-9]|3[01])', addClass:'border-red'}"  />
                <input type="submit" class="btn btn-default" value="submit" /><br><br>
                <code>&lt;input type="text" rules-input="{active:true, regExp:'(19|20)\\d\\d([- /.])(0[1-9]|1[012])\\2(0[1-9]|[12][0-9]|3[01])', addClass:'border-red'}" /></code>
            </form>
        </div>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/style.js"></script>
    </body>
</html>