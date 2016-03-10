<!DOCTYPE html>
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
        <div class="col-lg-11">
            <h2>.validForm({plugin options},callback);</h2>
            <h3>Plugin options:</h3>
            <div class="col-lg-10">
                <table class="table table-striped">
                    <tr>
                        <th>Option</th><th>Default value</th><th>Description</th>
                    </tr>
                    <tr>
                        <td>animationShow</td><td>fadeIn</td><td>jQuery show() method for selector error. Values : fadeIn, show, animate</td>
                    </tr>
                    <tr>
                        <td>animationOptionShow</td><td>slow</td><td>jQuery show() method duration. Values : slow, fast or number</td>
                    </tr>
                    <tr>
                        <td>animationHide</td><td>fadeOut</td><td>jQuery hide() method for selector error. Values : fadeIn, show, animate</td>
                    </tr>
                    <tr>
                        <td>animationOptionHide</td><td>slow</td><td>jQuery hide() method duration. Values : slow, fast or number</td>
                    </tr>

                </table>
                <p><strong>Example: </strong> <code> &lt;script&gt; $("#MyForm").validForm({'animationShow':'show,'animationOptionShow':'fast'}); &lt;/script&gt;</code>
            </div>
        </div>
        <div class="col-lg-11">
            <h3>Input tag general options:</h3>
            <h4><code> &lt;input type="type" rules-input="{options}" /&gt;</code></h4>
            <div class="col-lg-10">
                <table class="table table-striped">
                    <tr>
                        <th>Option</th><th>Default value</th><th>Description</th>
                    </tr>
                    <tr>
                        <td>active</td><td>false</td><td>Activate current input validation. Values : true, false</td>
                    </tr>
                    <tr>
                        <td>errorSelector</td><td>false</td><td>CSS selector for div, span, p, label, .... error. <br>Example: &lt;span class="error"&gt The value is not correct &lt;/span&gt;</td>
                    </tr>
                    <tr>
                        <td>errorMsg</td><td>false</td><td>errorSelector message</td>
                    </tr>
                    <tr>
                        <td>addClass</td><td>false</td><td>If current input has error, validForm plugin adds this class</td>
                    </tr>
                    <tr>
                        <td>callFunction</td><td>false</td><td>validForm calls your function with true or false parameters for current input validation </td>
                    </tr>

                </table>

            </div>
        </div>
        <div class="col-lg-11">
            <h3>Input tag (type text, password, date, time) options:</h3>

            <div class="col-lg-10">
                <table class="table table-striped">
                    <tr>
                        <th>Option</th><th>Default value</th><th>Description</th>
                    </tr>
                    <tr>
                        <td>regExp</td><td>.*</td><td>ValidForm plugin tests current input value with regExp value</td>
                    </tr>

                </table>
                <p><strong>Example: </strong> <code>&lt;input type="password" rules-input="{ active: true, regExp: '.{2,10}' }"/&gt;</code>
            </div>
        </div>
        <div class="col-lg-11">
            <h3>Input tag (type file) options:</h3>

            <div class="col-lg-10">
                <table class="table table-striped">
                    <tr>
                        <th>Option</th><th>Default value</th><th>Description</th>
                    </tr>
                    <tr>
                        <td>regExp</td><td>.*</td><td>ValidForm plugin tests current input value with regExp value</td>
                    </tr>
                    <tr>
                        <td>extensions</td><td>false</td><td>ValidForm plugin compares extension value to extension file in input. <br> Value example: .pdf|.doc|.jpg</td>
                    </tr>
                    <tr>
                        <td>size</td><td>false</td><td>ValidForm plugin compares size value (octects) to size file in input.</td>
                    </tr>

                </table>
               <strong>Example: </strong> <code> &lt;input type="file"  rules-input="{ active:true, extensions:'.doc|.docx|.pdf', size:'200000' }" /&gt;</code>
            </div>
        </div>
        <div class="col-lg-11">
            <h3>Input tag (type checkbox) options:</h3>

            <div class="col-lg-10">
                <table class="table table-striped">
                    <tr>
                        <th>Option</th><th>Default value</th><th>Description</th>
                    </tr>
                    <tr>
                        <td>active</td><td>false</td><td>If active is set to true, validForm plugin tests if current checkbox is checked</td>
                    </tr>

                </table>
                <strong>Example: </strong><code>&lt;input type="checkbox" rules-input="{ active:true }" /&gt;</code><br>
            </div>
        </div>
        <div class="col-lg-11">
            <h3>Input tag (type radio) options:</h3>

            <div class="col-lg-10">
                <table class="table table-striped">
                    <tr>
                        <th>Option</th><th>Default value</th><th>Description</th>
                    </tr>
                    <tr>
                        <td>name</td><td>false</td><td>Name of radio input. Checks if a radio button is checked compared to name attribute</td>
                    </tr>

                </table>
                <strong>Example: </strong><code>&lt;input type="radio" name="test" rules-input="{active:true, name:'test' }" /&gt;</code>
            </div>
        </div>
        <div class="col-lg-11">
            <h3>Select tag options:</h3>

            <div class="col-lg-10">
                <table class="table table-striped">
                    <tr>
                        <th>Option</th><th>Default value</th><th>Description</th>
                    </tr>
                    <tr>
                        <td>errorValue</td><td>false</td><td>Defines option value not to take into account</td>
                    </tr>

                </table>
               <strong>Example: </strong> <code> &lt;select  rules-input="{active:true, errorValue:'optionValue1'}"></code>
            </div>
        </div>
        <div class="col-lg-11">
            <h3>Textarea tag options:</h3>

            <div class="col-lg-10">
                <table class="table table-striped">
                    <tr>
                        <th>Option</th><th>Default value</th><th>Description</th>
                    </tr>
                    <tr>
                        <td>regExp</td><td>.*</td><td>ValidForm plugin tests current textarea value with regExp value</td>
                    </tr>

                </table>
              <strong>Example: </strong>  <code>&lt;textarea rules-input="{active:true, regExp:'.{2,10}'}" >&lt;/textarea></code>
            </div>
        </div>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/style.js"></script>
    </body>
</html>