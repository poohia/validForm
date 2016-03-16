<!DOCTYPE html>
<html>
    <head>
        <title>Exemples valid forms</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/pygments-manni.css">
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
    <body class="container ">
        <div class="col-lg-2">&nbsp;</div>
        <div class="col-lg-6">
            <h1>Valid Form </h1>
            <!--strong>ValidForm.js est un plugin jquery qui permet de valider un formulaire à l'aide d'écriture JSON dans les balises html </strong-->
            <strong>ValidForm.js is a jQuery plugin that allows form validation with help from JSON inner HTML tags</strong>
            <br /><br /><div class="jumbotron">
                <h2>Download</h2>
                <a href="#" class="btn btn-success">Github </a>
                <a href="#" class="btn btn-success">Poohia </a>

            </div>
            <div class="row">
                Include validForm.js :
                <pre>&nbsp;
<span class="nt">&lt;script</span> <span class="na">src=</span><span class="s">"jquery.js" </span><span class="nt">>&lt;/script>
&lt;script</span> <span class="na">src=</span><span class="s">"validForm.js"</span><span class="nt"> >&lt;/script></span>
               </pre>
                Declare in html :
                <pre><code>
<span class="nt">&lt;form</span><span class="rules"> <span class="na">rule-form=</span><span class="s">"validForm"</span></span><span class="nt">&gt;</span>
    ......
<span class="nt">&lt;form /></span>
               </code></pre>
                Or in javascript :
                <pre><code> <br> <span class="nt">&lt;script&gt; $(</span><span class="s">"#MyForm"</span><span class="nt">).validForm(); &lt;/script&gt;</span>
               </code></pre>
                Declare "rules-input" into input :
                <pre><code><br> <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="rules"><span class="na">rules-input=</span><span class="s">"{active:true, regExp:'.{2,10}'}"</span></span><span class="nt"> /&gt;</span>
                </code></pre>
            </div>
            <a href="GettingStarting.php">See more ... </a>
        </div>
        <script src="js/bootstrap.min.js"></script>
    </body>