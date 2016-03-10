<!DOCTYPE html>
<html>
    <head>
        <title>Examples valid forms</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/pygments-manni.css">
        <script src="js/jquery.min.js"></script>
        <script src="validForm.min.js"></script>
        <style>
            .border-red{
                border: 2px solid red;
                -webkit-transition : border 1500ms ease-out;
                -moz-transition : border 1500ms ease-out;
                -o-transition : border 1500ms ease-out;
            }
            .color-red{
                color: red;
            }
            .display-none{
                display:none;
            }
        </style>
    </head>
    <?php include "header.php" ?>
    <?php include "backtop.php" ?>
    <body class="container" style="margin-bottom: 2%;" id="home">
        <?php include "alertMessage.php" ?>
        <div class="col-lg-12" id="simpleExample" >
            <h1> Simple form  <span class="badge">callFunction</span> <span class="badge">input file</span></h1>
            <div class="col-lg-5">
                <form id="simpleForm">

                    <p>
                        First Name :<br />
                        <input type="text" name="firstName" value=""
                               rules-input="{active:true, regExp:'.{2,10}', addClass:'border-red'}"/>
                    </p>
                    <p>
                        Last Name :<br />
                        <input type="text" name="Lastname" value=""
                               rules-input="{active:true, regExp:'.{2,10}', addClass:'border-red'}"/>
                    </p>
                    <p>
                        Password :<br />
                        <input type="password" name="password" value=""
                               rules-input="{active:true, regExp:'.{2,10}', addClass:'border-red'}"/>
                    </p>
                    <div id="radioExample">
                        <p>
                            <input type="radio" name="civi" value="Mrs" /> Mrs.
                            &nbsp;<input type="radio" name="civi" value="Mr"
                                         rules-input="{active: true, name:'civi', errorSelector:'#radioExample > .error', errorMsg: 'Need radio button checked'}"/> Mr.
                        </p>
                        <p class="error display-none color-red ">  </p>
                    </div>
                    <div id="selectExample">
                        <p>
                            Choose your country<br />
                            <select name="profil" rules-input="{active:true, errorValue:'choose', errorSelector:'#selectExample > .error'}">
                                <option value="choose" selected="selected">Choose</option>
                                <option value="france">France</option>
                                <option value="unitedstates" >United States</option>
                                <option value="canada">Canada</option>
                                <option value="uk">UK</option>
                            </select>
                        </p>
                        <p class="error display-none color-red">Choose your country</p>
                    </div>
                    <div id="fileExemple">
                        <p>Insert file ( .pdf, .doc, .docx ), max size 200 Ko</p>
                        <input type="file" class="form-control" id="" 
                               rules-input="{active:true, extensions:'.doc|.docx|.pdf', size:'200000',errorSelector:'#fileExemple > .error'}" />
                        <p class="error display-none color-red">File error</p>
                    </div>
                    <p>
                        <span id="message"> Message:</span><br />
                        <textarea name="message" rows="6" cols="40" rules-input="{active:true, regExp:'.{2,10}', callFunction:'messageEmpty'}" ></textarea>
                    </p>
                    <div id="checkboxExample">
                        <input type="checkbox" rules-input="{active:true, errorSelector:'#checkboxExample > span'}" />
                        Check me .
                        <span class="error display-none color-red"> Check me ! </span>
                    </div>
                    <p>
                        <input type="submit" value="Submit" />
                        <input type="reset" value="Cancel" />
                    </p>


                </form>
            </div>
            <div class="col-lg-7" >
                <button class="btn btn-success btn-view-source" data-toogle-source="false"><i class="glyphicon glyphicon-eye-open"></i> View code</button>
                <div class="div-source display-none ">
                    <!-- Nav tabs -->

                    <div class="row">&nbsp;</div>
                    <ul class="nav nav-tabs " role="tablist">
                        <li role="presentation" class="active"><a href="#simpleFormHtml" aria-controls="html" role="tab" data-toggle="tab">Html</a></li>
                        <li role="presentation"><a href="#simpleFormJavascript" aria-controls="javascript" role="tab" data-toggle="tab">Javascript</a></li>
                        <li role="presentation"><a href="#simpleFormCss" aria-controls="css" role="tab" data-toggle="tab">Css</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="simpleFormHtml">
                            <br />
                            <pre>
<span class="nt">&lt;form </span><span class="na">id=</span><span class="s">"simpleForm"</span><span class="nt">>

    &lt;p></span>
         First Name :<span class="nt">&lt;br />
             &lt;input </span><span class="na">type=</span><span class="s">"text"</span> <span class="na">name=</span><span class="s">"firstName"</span> <span class="na">value=</span><span class="s">""</span>
             <span class="rules"><span class="na">rules-input=</span><span class="s">"{active:true, regExp:'.{2,10}', addClass:'border-red'}"</span></span><span class="nt">/>
     &lt;/p>
     &lt;p></span>
         Last Name :<span class="nt">&lt;br />
             &lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">name=</span><span class="s">"Lastname"</span> <span class="na">value=</span><span class="s">""</span>
             <span class="rules"><span class="na">rules-input=</span><span class="s">"{active:true, regExp:'.{2,10}', addClass:'border-red'}"</span></span><span class="nt">/>
     &lt;/p>
     &lt;p></span>
         Password :<span class="nt">&lt;br />
             &lt;input</span><span class="na"> type=</span><span class="s">"password"</span> <span class="na">name=</span><span class="s">"password"</span> <span class="na">value=</span><span class="s">""</span>
             <span class="rules"> <span class="na">rules-input=</span><span class="s">"{active:true, regExp:'.{2,10}', addClass:'border-red'}"</span></span><span class="nt">/>
     &lt;/p>
     &lt;div </span><span class="na">id=</span><span class="s">"radioExample"</span><span class="nt">>
         &lt;p>
         &lt;input</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"civi"</span>  <span class="na">value=</span><span class="s">"Mrs"</span> <span class="nt">/></span> Mrs.
         &nbsp;<span class="nt">&lt;input </span><span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"civi"</span> <span class="na">value=</span><span class="s">"Mr"</span>
         <span class="rules"><span class="na">rules-input=</span><span class="s">"{active: true, name:'civi', errorSelector:'#radioExample > .error', errorMsg: '&nbsp;Need radio button checked'}"</span></span><span class="nt">/></span> Mr.
         <span class="nt">&lt;/p>
             &lt;p </span> <span class="na">class=</span><span class="s">"error display-none color-red"</span><span class="nt">>  &lt;/p>
     &lt;/div>
     &lt;div </span><span class="na">id=</span><span class="s">"selectExample"</span><span class="nt">>
         &lt;p></span>
             Choose your country<span class="nt">&lt;br />
                 &lt;select </span><span class="na">name=</span><span class="s">"profil"</span> <span class="rules"><span class="na">rules-input=</span><span class="s">"{active:true, errorValue:'choose', errorSelector:'#selectExample > .error'}"</span></span><span class="nt">>
                     &lt;option </span><span class="na">value=</span><span class="s">"choose"</span> <span class="na">selected=</span><span class="s">"selected"</span><span class="nt">></span>Choose<span class="nt">&lt;/option>
                         &lt;option</span> <span class="na">value=</span><span class="s">"france"</span><span class="nt">></span>France<span class="nt">&lt;/option>
                             &lt;option </span><span class="na">value=</span><span class="s">"unitedstates"</span> <span class="nt">></span>United States<span class="nt">&lt;/option>
                                 &lt;option </span><span class="na">value=</span><span class="s">"canada"</span><span class="nt">></span>Canada<span class="nt">&lt;/option>
                                     &lt;option </span><span class="na">value=</span><span class="s">"uk"</span><span class="nt">></span>UK<span class="nt">&lt;/option>
             &lt;/select>
         &lt;/p>
         &lt;p</span> <span class="na">class=</span><span class="s">"error display-none color-red"</span><span class="nt">></span>Choose your country<span class="nt">&lt;/p>
     &lt;/div>
     &lt;div</span> <span class="na">id=</span><span class="s">"fileExemple"</span><span class="nt">>
        &lt;p></span>Insert file ( .pdf, .doc, .docx ), max size 200 Ko<span class="nt">&lt;/p>
            &lt;input </span><span class="na">type=</span><span class="s">"file"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">""</span>
            <span class="rules"><span class="na">rules-input=</span><span class="s">"{active:true, extensions:'.doc|.docx|.pdf', size:'200000',errorSelector:'#fileExemple > .error'}"</span></span><span class="nt"> />
                &lt;p</span> <span class="na">class=</span><span class="s">"error display-none color-red"</span><span class="nt">></span>File error<span class="nt">&lt;/p>
    &lt;/div>
     &lt;p>
     &lt;span</span> <span class="na">id=</span><span class="s">"message"</span><span class="nt">></span> Message:<span class="nt">&lt;/span>&lt;br />
         &lt;textarea </span> <span class="na">name=</span><span class="s">""</span> <span class="na">rows=</span><span class="s">"6"</span> <span class="na">cols=</span><span class="s">"40"</span> <span class="rules"><span class="na">rules-input=</span><span class="s">"{active:true, regExp:'.{2,10}', callFunction:'messageEmpty'}"</span></span><span class="nt"> >&lt;/textarea>
     &lt;/p>
     &lt;div </span><span class="na"> id=</span><span class="s">"checkboxExample"</span><span class="nt">>
         &lt;input </span><span class="na">type=</span><span class="s">"checkbox"</span> <span class="rules"><span class="na">rules-input=</span><span class="s">"{active:true, errorSelector:'#checkboxExample > span'}"</span></span><span class="nt"> /></span>
      Check me .
      <span class="nt">  &lt;span</span> <span class="na">class=</span><span class="s">"error display-none color-red"</span><span class="nt">></span> Check me ! <span class="nt">&lt;/span>
     &lt;/div>
     &lt;p>
     &lt;input</span> <span class="na">type=</span><span class="s">"submit"</span> <span class="na">value=</span><span class="s">"Submit"</span><span class="nt"> />
     &lt;input </span><span class="na">type=</span><span class="s">"reset"</span> <span class="na">value=</span><span class="s">"Cancel"</span><span class="nt"> />
     &lt;/p>


     &lt;/form></span>
                            </pre>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="simpleFormJavascript"><br />
                            <pre><span class="nt">$(</span><span class="s">"#simpleForm"</span><span class="nt">).validForm();
function messageEmpty(</span>value<span class="nt">) {
      if (!</span>value<span class="nt">)
               $(</span><span class="s">"#message"</span><span class="nt">).addClass(</span><span class="s">"color-red"</span><span class="nt">);
      else
               $(</span><span class="s">"#message"</span><span class="nt">).removeClass(</span><span class="s">"color-red"</span><span class="nt">);
                             }
</span></pre></div>
                        <div role="tabpanel" class="tab-pane" id="simpleFormCss"><br />
                            <pre>
<span class="nt">.border-red{</span>
   <span class="na"> border:</span><span class="s"> 2px solid red;</span>
    <span class="na">-webkit-transition :</span><span class="s"> border 1500ms ease-out;</span>
  <span class="na">  -moz-transition : </span><span class="s">border 1500ms ease-out;</span>
 <span class="na">   -o-transition : </span><span class="s"> border 1500ms ease-out;</span>
<span class="nt">}</span>
<span class="nt">.color-red{</span>
<span class="na">    color:</span><span class="s"> red;</span>
<span class="nt">}</span>
<span class="nt">.display-none{</span>
<span class="na">    display:</span><span class="s">none;</span>
<span class="nt">}</span>
                            </pre></div>
                    </div>

                </div>
            </div>
        </div>
        <hr class="col-lg-12" />
        <div class="col-lg-12" id="callbackExample">
            <h1> Callback example <span class="badge">email example</span></h1>
            <div class="col-lg-5">
                <div class="alert alert-danger display-none " role="alert" id="messageDanger">
                    #messageDanger : Some required information is missing or incomplete. Please correct your entries and try again.
                </div>
                <form id="callbackForm">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address* </label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email"
                               rules-input="{active:true, regExp:'\\b[A-Z0-9._%+-]+@[A-Z0-9.-]+\\.[A-Z]{2,4}\\b'}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password* </label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"
                               rules-input="{active:true, regExp:'.{2,10}'}">
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> Save session
                        </label>
                    </div>
                    <input type="submit" class="btn btn-default" value="Submit" />
                </form>
            </div>
            <div class="col-lg-7">
                <button class="btn btn-success btn-view-source" data-toogle-source="false"><i class="glyphicon glyphicon-eye-open"></i> View code</button>
                <div class="div-source display-none ">
                    <!-- Nav tabs -->
                    <div class="row">&nbsp;</div>
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#callbackFormHtml" aria-controls="html" role="tab" data-toggle="tab">Html</a></li>
                        <li role="presentation"><a href="#callbackJavascript" aria-controls="javascript" role="tab" data-toggle="tab">Javascript</a></li>
                        <li role="presentation"><a href="#callbackCss" aria-controls="css" role="tab" data-toggle="tab">Css</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="callbackFormHtml"><br>
                            <pre>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-danger display-none"</span> <span class="na">role=</span><span class="s">"alert"</span> <span class="na">id=</span><span class="s">"messageDanger"</span><span class="nt">></span>
    Some required information is missing or incomplete. Please correct your entries and try again.
<span class="nt">&lt;/div>
&lt;form </span><span class="na">id=</span><span class="s">"callbackForm"</span><span class="nt">>
    &lt;div </span><span class="na">class=</span><span class="s">"form-group"</span><span class="nt">>
        &lt;label </span><span class="na">for=</span><span class="s">"exampleInputEmail1"</span><span class="nt">></span>Email address*<span class="nt">&lt;/label>
        &lt;input </span><span class="na">type=</span><span class="s">"email"</span> <span class="na">class=</span><span class="s">"form-control"</span><span class="na"> id=</span><span class="s">"exampleInputEmail1"</span> <span class="na">placeholder=</span><span class="s">"Email"</span>
    <span class="rules"><span class="na">rules-input=</span><span class="s">"{active:true, regExp:'\\b[A-Z0-9._%+-]+@[A-Z0-9.-]+\\.[A-Z]{2,4}\\b'}"</span></span><span class="nt">>
    &lt;/div>
    &lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">>
        &lt;label </span><span class="na">for=</span><span class="s">"exampleInputPassword1"</span><span class="nt">></span>Password*<span class="nt">&lt;/label>
        &lt;input </span><span class="na">type=</span><span class="s">"password"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"exampleInputPassword1"</span> <span class="na">placeholder=</span><span class="s">"Password"</span><br> <span class="rules"><span class="na">rules-input=</span><span class="s">"{active:true, regExp:'.{2,10}'}"</span></span><span class="nt">>
    &lt;/div>
    &lt;div </span><span class="na">class=</span><span class="s">"checkbox"</span><span class="nt">>
        &lt;label>
            &lt;input </span><span class="na">type=</span><span class="s">"checkbox"</span><span class="nt">></span> Save session
        <span class="nt">&lt;/label>
    &lt;/div>
    &lt;input </span><span class="na">type=</span><span class="s">"submit"</span> <span class="na">class=</span><span class="s">"btn btn-default"</span> <span class="na">value=</span><span class="s">"Submit"</span> <span class="nt">/>
&lt;/form></span>
                            </pre>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="callbackJavascript"><br />
                            <pre>
<span class="nt">$("#callbackForm").validForm(</span><span class="rules"><span class="na">{}</span></span>,<span class="nt"> function (</span>valid<span class="nt">) {
    if (!</span>valid<span class="nt">)
    {
        $(</span><span class="s">"#messageDanger"</span><span class="nt">).fadeIn(</span><span class="s">"slow"</span><span class="nt">);
    }
    else
    {
        return </span><span class="na">true;</span><span class="nt">
    }
});</span>
                            </pre>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="callbackCss"><br />
                            <pre>
<span class="nt">.border-red{</span>
   <span class="na"> border:</span><span class="s"> 2px solid red;</span>
    <span class="na">-webkit-transition :</span><span class="s"> border 1500ms ease-out;</span>
  <span class="na">  -moz-transition : </span><span class="s">border 1500ms ease-out;</span>
 <span class="na">   -o-transition : </span><span class="s"> border 1500ms ease-out;</span>
<span class="nt">}</span>
<span class="nt">.color-red{</span>
<span class="na">    color:</span><span class="s"> red;</span>
<span class="nt">}</span>
<span class="nt">.display-none{</span>
<span class="na">    display:</span><span class="s">none;</span>
<span class="nt">}</span>
                            </pre>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="col-lg-12" />
        <div class="col-lg-12" id="modalExample">
            <h1> Modal bootstrap example  <span class="badge">bootstrap example</span> <span class="badge">email example</span></h1>
            <div class="col-lg-5">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Show modal</button>

                <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                            </div>
                            <form id="formModal">
                                <div class="modal-body">
                                    <div class="alert alert-danger display-none " role="alert" id="messageDanger2">
                                        Some required information is missing or incomplete. Please correct your entries and try again.
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email"
                                               rules-input="{active:true, regExp:'\\b[A-Z0-9._%+-]+@[A-Z0-9.-]+\\.[A-Z]{2,4}\\b', errorSelector:'#messageDanger2'}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"
                                               rules-input="{active:false, regExp:'.{2,10}', errorSelector:'#messageDanger2'}">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <input type="submit" class="btn btn-primary" value="Submit"></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <button class="btn btn-success btn-view-source" data-toogle-source="false"><i class="glyphicon glyphicon-eye-open"></i> View code</button>
                <div class="div-source display-none ">
                    <!-- Nav tabs -->
                    <div class="row">&nbsp;</div>
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#modalFormHtml" aria-controls="html" role="tab" data-toggle="tab">Html</a></li>
                        <li role="presentation"><a href="#modalJavascript" aria-controls="javascript" role="tab" data-toggle="tab">Javascript</a></li>
                        <li role="presentation"><a href="#modalCss" aria-controls="css" role="tab" data-toggle="tab">Css</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="modalFormHtml"><br>
                            <pre>
<span class="nt">&lt;button</span><span class="na"> type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span> <span class="na">data-toggle=</span><span class="s">"modal"</span> <span class="na">data-target=</span><span class="s">".bs-example-modal-lg"</span><span class="nt">></span>Show modal<span class="nt">&lt/button>

&ltdiv</span> <span class="na">class=</span><span class="s">"modal fade bs-example-modal-lg"</span> <span class="na">tabindex=</span><span class="s">"-1"</span> <span class="na">role=</span><span class="s">"dialog"</span> <span class="na">aria-labelledby=</span><span class="s">"myLargeModalLabel"</span><span class="nt">>
    &lt;div</span> <span class="na">class=</span><span class="s">"modal-dialog modal-lg"</span><span class="nt">>
        &lt;div</span> <span class="na">class=</span><span class="s">"modal-content"</span><span class="nt">>
            &lt;div </span> <span class="na">class=</span><span class="s">"modal-header"</span><span class="nt">>
                &lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"close"</span> <span class="na">data-dismiss=</span><span class="s">"modal"</span> <span class="na">aria-label=</span><span class="s">"Close"</span><span class="nt">>&lt;span</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">>&times;&lt;/span>&lt;/button>
                &lt;h4</span> <span class="na">class=</span><span class="s">"modal-title"</span> <span class="na">id=</span><span class="s">"myModalLabel"</span><span class="nt">></span>Modal title<span class="nt">&lt;/h4>
            &lt;/div>
            &lt;form</span> <span class="na">id=</span><span class="s">"formModal"</span><span class="nt">>
                &lt;div </span><span class="na">class=</span><span class="s">"modal-body"</span><span class="nt">>
                    &lt;div </span><span class="na">class=</span><span class="s">"alert alert-danger display-none "</span> <span class="na">role=</span><span class="s">"alert"</span> <span class="na">id=</span><span class="s">"messageDanger2"</span><span class="nt">></span>
                        Some required information is missing or incomplete. Please correct your entries and try again.
                    <span class="nt">&lt;/div>
                    &lt;div </span><span class="na">class=</span><span class="s">"form-group"</span><span class="nt">>
                        &lt;label </span><span class="na">for=</span><span class="s">"exampleInputEmail1"</span><span class="nt">></span>Email address<span class="nt">&lt;/label>
                        &lt;input </span><span class="na">type=</span><span class="s">"email"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"exampleInputEmail1"</span> <span class="na">placeholder=</span><span class="s">"Email"</Span>
                    <span class="rules"><span class="na">rules-input=</span><span class="s">"{active:true, regExp:'\\b[A-Z0-9._%+-]+@[A-Z0-9.-]+\\.[A-Z]{2,4}\\b', errorSelector:'#messageDanger2'}"</span></span><span class="nt">>
                    &lt;/div>
                    &lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">>
                        &lt;label </span><span class="na">for=</span><span class="s">"exampleInputPassword1"</span><span class="nt">></span>Password<span class="nt">&lt;/label>
                        &lt;input </span><span class="na">type=</span><span class="s">"password"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"exampleInputPassword1"</span> <span class="na">placeholder=</span><span class="s">"Password"</span>
                  <span class="rules"><span class="na">rules-input=</span><span class="s">"{active:false, regExp:'.{2,10}', errorSelector:'#messageDanger2'}"</span></span><span class="nt">>
                    &lt;/div>
                &lt;/div>
                &lt;div </span><span class="na">class=</span><span class="s">"modal-footer"</span><span class="nt">>
                &lt;button </span><span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default"</span> <span class="na">data-dismiss=</span><span class="s">"modal"</span><span class="nt">></span>Close<span class="nt">&lt;/button>
                &lt;input </span><span class="na">type=</span><span class="s">"submit"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span> <span class="na">value=</span><span class="s">"Submit"</span><span class="nt">></button>
                &lt;/div>
            &lt;/form>
        &lt;/div>
    &lt;/div>
&lt;/div></span>
                            </pre>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="modalJavascript"><br />
                            <pre>
<span class="nt">$(</span><span class="s">"#formModal"</span><span class="nt">).validForm();</span>
                            </pre>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="modalCss"><br />
                            <pre>
<span class="nt">.border-red{</span>
   <span class="na"> border:</span><span class="s"> 2px solid red;</span>
    <span class="na">-webkit-transition :</span><span class="s"> border 1500ms ease-out;</span>
  <span class="na">  -moz-transition : </span><span class="s">border 1500ms ease-out;</span>
 <span class="na">   -o-transition : </span><span class="s"> border 1500ms ease-out;</span>
<span class="nt">}</span>
<span class="nt">.color-red{</span>
<span class="na">    color:</span><span class="s"> red;</span>
<span class="nt">}</span>
<span class="nt">.display-none{</span>
<span class="na">    display:</span><span class="s">none;</span>
<span class="nt">}</span>
                            </pre>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="col-lg-12" />
        <div class="col-lg-12" id="popoverExample">
            <h1> Popover bootstrap example <span class="badge">bootstrap example</span> <span class="badge">callFunction </span></h1>
            <div class="col-lg-5">
                <form  id="formPopover">
                    <div class="form-group ">

                        <label for="exampleInputEmail">Email address</label>
                        <input type="text" class="form-control" id="exampleInputEmail" placeholder="Email"
                               data-toggle="popover" title="Email error" data-content="you wrote a bad email." data-placement="left"
                               rules-input="{active:true, regExp:'\\b[A-Z0-9._%+-]+@[A-Z0-9.-]+\\.[A-Z]{2,4}\\b', callFunction: 'emailErrorPopover'}">

                    </div>
                    <div class="form-group ">

                        <label for="exampleInputPassword">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword" placeholder="Password"
                               data-toggle="popover" title="Password error" data-content="the password can't do empty." data-placement="left"
                               rules-input="{active:true, regExp:'.{2,10}', callFunction:'passWordPopover'}"
                               >
                    </div>
                    <div class="form-group">

                        <label for="exampleInputFile">File input</label>
                        <input type="file" id="exampleInputFile"
                               data-toggle="popover" title="File error" data-content="no file." data-placement="left"
                               rules-input="{active:true, regExp:'.{2,10}', callFunction:'fileErrorPopover'}">

                    </div>
                    <div class="checkbox ">

                        <label>
                            <input type="checkbox"> Check me out
                        </label>

                    </div>
                    <input type="submit" class="btn btn-default" value="Submit" />
                </form>
            </div>
            <div class="col-lg-7">
                <button class="btn btn-success btn-view-source" data-toogle-source="false"><i class="glyphicon glyphicon-eye-open"></i> View code</button>
                <div class="div-source display-none ">
                    <!-- Nav tabs -->
                    <div class="row">&nbsp;</div>
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#popoverFormHtml" aria-controls="html" role="tab" data-toggle="tab">Html</a></li>
                        <li role="presentation"><a href="#popoverJavascript" aria-controls="javascript" role="tab" data-toggle="tab">Javascript</a></li>
                        <li role="presentation"><a href="#popoverCss" aria-controls="css" role="tab" data-toggle="tab">Css</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="popoverFormHtml"><br>
                            <pre>
<span class="nt">&lt;form</span> <span class="na">id=</span><span class="s">"formPopover"</span><span class="nt">></span>
   <span class="nt"> &lt;div</span> <span class="na">class=</span><span class="s">"form-group "</span><span class="nt">></span>

        <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"exampleInputEmail"</span><span class="nt">></span>Email address<span class="nt">&lt;/label></span>
        <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"exampleInputEmail"</span> <span class="na">placeholder=</span><span class="s">"Email"</span>
               <span class="na">data-toggle=</span><span class="s">"popover"</span> <span class="na">title=</span><span class="s">"Email error"</span> <span class="na">data-content=</span><span class="s">"you wrote a bad email."</span> <span class="na">data-placement=</span><span class="s">"left"</span>
    <span class="rules"><span class="na">rules-input=</span><span class="s">"{active:true, regExp:'\\b[A-Z0-9._%+-]+@[A-Z0-9.-]+\\.[A-Z]{2,4}\\b', callFunction: 'emailErrorPopover'}"</span></span><span class="nt">></span>
    <span class="nt">&lt;/div></span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group "</span><span class="nt">></span>

        <span class="nt">&lt;label </span> <span class="na">for=</span><span class="s">"exampleInputPassword"</span><span class="nt">></span>Password<span class="nt">&lt;/label></span>
        <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"password"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"exampleInputPassword"</span> <span class="na">placeholder=</span><span class="s">"Password"</span>
               <span class="na">data-toggle=</span><span class="s">"popover"</span> <span class="na">title=</span><span class="s">"Password error"</span> <span class="na">data-content=</span><span class="s">"the password can't do empty."</span> <span class="na">data-placement=</span><span class="s">"left"</span>
       <span class="rules"><span class="na">rules-input=</span><span class="s">"{active:true, regExp:'.{2,10}', callFunction:'passWordPopover'}"</span></span><span class="nt"> /></span>
    <span class="nt">&lt;/div></span>
    <span class="nt">&lt;div <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">></span>

        <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"exampleInputFile"</span><span class="nt">></span>File input<span class="nt">&lt;/label></span>
        <span class="ny">&lt;input</span> <span class="na">type=</span><span class="s">"file"</span> <span class="na">id=</span><span class="s">"exampleInputFile"</span>
        <span class="na">data-toggle=</span><span class="a">"popover"</span> <span class="na">title=</span><span class="s">"File error"</span> <span class="na">data-content=</span><span class="s">"no file."</span> <span class="na">data-placement=</span><span class="s">"left"</span>
        <span class="rules"><span class="na">rules-input=</span><span class="s">"{active:true, regExp:'.{2,10}', callFunction:'fileErrorPopover'}"</span></span><span class="nt">></span>

    <span class="nt">&lt;/div><span class="nt">
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"checkbox "</span><span class="nt">></span>

        <span class="nt">&lt;label></span>
        <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="rules"><span class="na">rules-input=</span><span class="s">"{active : false}"</span></span><span class="nt"> /></span> Check me out
        <span class="nt">&lt;/label></span>

        <span class="nt">&lt;/div></span>
        <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"submit"</span> <span class="na">class=</span><span class="s">"btn btn-default"</span> <span class="na">value=</span><span class="s">"Submit"</span> <span class="nt">/></span>
<span class="nt">&lt;/form></span>
                                            </pre>
                                            </div>
                                            <div role="tabpanel" class="tab-pane" id="popoverJavascript"><br />
                                                <pre>
<span class="nt">$(</span><span class="s">"#formPopover"</span><span class="nt">).validForm();
function emailErrorPopover(</span>test<span class="nt">) {
    (!</span>test<span class="nt">)</span> <span class="na">?</span><span class="nt"> $(</span><span class="s">"#exampleInputEmail"</span><span class="nt">).popover(</span><span class="s">"show"</span><span class="nt">)</span> <span class="na"> : </span> <span class="nt">$(</span><span class="s">"#exampleInputEmail"</span><span class="nt">).popover(</span><span class="s">"hide"</span><span class="nt">);
}
function passWordPopover(</span>test<span class="nt">)
{
    (!</span>test<span class="nt">) </span><span class="na">?</span> <span class="nt">$(</span><span class="s">"#exampleInputPassword"</span><span class="nt">).popover(</span><span class="s">"show"</span><span class="nt">)</span><span class="na"> :</span><span class="nt"> $(</span><span class="s">"exampleInputPassword"</span><span class="nt">).popover(</span><span class="s">"hide"</span><span class="nt">);
}
function fileErrorPopover(</span>test<span class="nt">) {
    (!</span>test<span class="nt">)</span><span class="na"> ? </span><span class="nt">$(</span><span class="s">"#exampleInputFile"</span><span class="nt">).popover(</span><span class="s">"show"</span><span class="nt">)</span><span class="na"> :</span><span class="nt"> $(</span><span class="s">"exampleInputFile"</span><span class="nt">).popover(</span><span class="s">"hide"</span><span class="nt">);
}</span>
                                                </pre>
                                            </div>
                                            <div role="tabpanel" class="tab-pane" id="popoverCss"><br />
                                                <pre>
<span class="nt">.border-red{</span>
   <span class="na"> border:</span><span class="s"> 2px solid red;</span>
    <span class="na">-webkit-transition :</span><span class="s"> border 1500ms ease-out;</span>
  <span class="na">  -moz-transition : </span><span class="s">border 1500ms ease-out;</span>
 <span class="na">   -o-transition : </span><span class="s"> border 1500ms ease-out;</span>
<span class="nt">}</span>
<span class="nt">.color-red{</span>
<span class="na">    color:</span><span class="s"> red;</span>
<span class="nt">}</span>
<span class="nt">.display-none{</span>
<span class="na">    display:</span><span class="s">none;</span>
<span class="nt">}</span>
                                                </pre>

                                            </div>
                                            </div>
                                            </div>
                                            </div>
                                            </div>
                                            <hr class="col-lg-12" />
                                            <div class="col-lg-12" id="animationExample">
                                                <h1> Animations example <span class="badge">global options </span> <span class="badge">jquery animate  / show / hide</span> </h1>
                                                <div class="col-lg-5">
                                                    <form  id="animationForm">
                                                        <div class="form-group " id="globalAnimation">
                                                            <div class="error  alert alert-danger  opacity-0"> #globalAnimation > .error : Global animation plugin </div>
                                                            <label for="">Global Animation plugin</label>
                                                            <input type="text" class="form-control"
                                                                   rules-input="{active:true, regExp:'.{2,10}', errorSelector : '#globalAnimation > .error'}">

                                                        </div>
                                                        <div class="form-group " id="inputAnimation">
                                                            <div class="error  alert alert-danger  display-none"> #inputAnimation > .error : input Animation </div>
                                                            <label for="">Input Animation</label>
                                                            <input type="text" class="form-control"
                                                                   rules-input="{active:true, regExp:'.{2,10}', animationShow : 'show', animationOptionShow : 'fast',
                                                                   animationHide : 'hide', animationOptionHide : 'fast'
                                                                   ,errorSelector : '#inputAnimation > .error'}">

                                                        </div>
                                                        <input type="submit" class="btn btn-default" value="Submit" />
                                                    </form>
                                                </div>
                                                <div class="col-lg-7">
                                                    <button class="btn btn-success btn-view-source" data-toogle-source="false"><i class="glyphicon glyphicon-eye-open"></i> View code</button>
                                                    <div class="div-source display-none">
                                                        <!-- Nav tabs -->
                                                        <div class="row">&nbsp;</div>
                                                        <ul class="nav nav-tabs" role="tablist">
                                                            <li role="presentation" class="active"><a href="#animateFormHtml" aria-controls="html" role="tab" data-toggle="tab">Html</a></li>
                                                            <li role="presentation"><a href="#animateJavascript" aria-controls="javascript" role="tab" data-toggle="tab">Javascript</a></li>
                                                            <li role="presentation"><a href="#animateCss" aria-controls="css" role="tab" data-toggle="tab">Css</a></li>
                                                        </ul>

                                                        <!-- Tab panes -->
                                                        <div class="tab-content">
                                                            <div role="tabpanel" class="tab-pane active" id="animateFormHtml"><br>
                                                                <pre>
<span class="nt">&lt;form</span>  <span class="na">id=</span><span class="s">"animationForm"</span><span class="nt">></span>
  <span class="nt">  &lt;div </span> <span class="na">class=</span><span class="s">"form-group "</span> <span class="na">id=</span><span class="s">"globalAnimation"</span><span class="nt">></span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"error  alert alert-danger  opacity-0"</span><span class="nt">></span> #globalAnimation > .error : Global animation plugin <span class="nt">&lt;/div></span>
        <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">""</span><span class="nt">></span>Global Animation plugin<span class="nt">&lt;/label></span>
        <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span>
    <span class="rules"><span class="na">rules-input=</span><span class="s">"{active:true, regExp:'.{2,10}', errorSelector : '#globalAnimation > .error'}"</span></span> <span class="nt"> /></span>
    <span class="nt">&lt;/div></span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group "</span> <span class="na">id=</span><span class="s">"inputAnimation"</span><span class="nt">></span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"error  alert alert-danger  display-none"</span><span class="nt">></span> #inputAnimation > .error : input Animation <span class="nt">&lt;/div></span>
        <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">""</span><span class="nt">></span>Input Animation<span class="nt">&lt;/label></span>
        <span class="nt">&lt;input </span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span>
  <span class="rules"><span class="na">rules-input=</span><span class="s">"{active:true, regExp:'.{2,10}', animationShow : 'show', 
animationOptionShow : 'fast', animationHide : 'hide', animationOptionHide : 'fast' ,errorSelector : '#inputAnimation > .error'}"</span></span><span class="nt"> /></span>

    <span class="nt">&lt;/div></span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"submit"</span> <span class="na">class=</span><span class="s">"btn btn-default"</span> <span class="na">value=</span><span class="s">"Submit"</span> <span class="nt">/></span>
<span class="nt">&lt;/form></span>
                                                                </pre>
                                                            </div>
                                                            <div role="tabpanel" class="tab-pane" id="animateJavascript"><br />
                                                                <pre>
<span class="nt">$(</span><span class="s">"#animationForm"</span><span class="nt">).validForm({</span>
    <span class="s">'animationShow'</span><span class="na">:</span>  <span class="s">'animate'</span>,
     <span class="s">'animationHide'</span> <span class="na">:</span> <span class="s"> 'animate'</span>,
     <span class="s">'animationOptionShow'</span> <span class="na">:</span> <span class="s"> {'width': '70%', 'opacity': '1', 'borderWidth': '10px'}</span>,
     <span class="s">'animationOptionHide'</span> <span class="na">:</span> <span class="s"> {'opacity': '0', 'borderWidth': '0px'}</span>
 <span class="nt">});
};</span>
                                                                </pre>
                                                            </div>
                                                            <div role="tabpanel" class="tab-pane" id="animateCss"><br />
                                                                <pre>
<span class="nt">.border-red{</span>
   <span class="na"> border:</span><span class="s"> 2px solid red;</span>
    <span class="na">-webkit-transition :</span><span class="s"> border 1500ms ease-out;</span>
  <span class="na">  -moz-transition : </span><span class="s">border 1500ms ease-out;</span>
 <span class="na">   -o-transition : </span><span class="s"> border 1500ms ease-out;</span>
<span class="nt">}</span>
<span class="nt">.color-red{</span>
<span class="na">    color:</span><span class="s"> red;</span>
<span class="nt">}</span>
<span class="nt">.display-none{</span>
<span class="na">    display:</span><span class="s">none;</span>
<span class="nt">}</span>
<span class="nt">.opacity-0
{</span>
   <span class="na"> opacity:</span><span class="s"> 0;</span>
<span class="nt">}</span>
                                                                </pre>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr class="col-lg-12" />
                                            <div class="col-lg-12" id="javascriptlessExample">
                                                <h1> No javascript example <span class="badge">less javascript</span>  </h1>
                                                <div class="col-lg-5">
                                                    <p><span class="error">* required field.</span></p>
                                                    <form rule-form="validForm">
                                                        Name* : <input type="text" name="name" rules-input="{active : true, regExp: '.{2,10}', addClass:'border-red'}">
                                                        <span class="error"></span>
                                                        <br><br>
                                                        E-mail* : <input type="text" name="email" rules-input="{active:true, regExp:'\\b[A-Z0-9._%+-]+@[A-Z0-9.-]+\\.[A-Z]{2,4}\\b', addClass:'border-red'}">
                                                        <br><br>
                                                        Website* : <input type="text" name="website" rules-input="{active : true, regExp: '.{2,10}', addClass:'border-red'}">
                                                        <br><br>
                                                        Gender* :
                                                        <div id='radioButton'>
                                                            <input type="radio" name="gender"   value="female">Female
                                                            <input type="radio" name="gender"   value="male" rules-input="{active: true, name:'gender', errorSelector:'#radioButton > .error'}">Male
                                                            <span class="error color-red display-none">Select one</span>
                                                        </div>
                                                        <br><br>
                                                        <div id="textArea">
                                                            Comment: <textarea name="comment" rows="5" cols="40" rules-input="{active : true, regExp: '.{2,10}', errorSelector:'#textArea > .error',errorMsg:'Comment empty'}"><?php echo $comment; ?></textarea>
                                                            <span class="error color-red display-none"></span>
                                                        </div>
                                                        <br><br>
                                                        <input type="submit" name="submit" value="Submit">
                                                    </form>
                                                </div>
                                                <div class="col-lg-7">
                                                    <button class="btn btn-success btn-view-source" data-toogle-source="false"><i class="glyphicon glyphicon-eye-open"></i> View code</button>
                                                    <div class="div-source display-none">
                                                        <!-- Nav tabs -->
                                                        <div class="row">&nbsp;</div>
                                                        <ul class="nav nav-tabs" role="tablist">
                                                            <li role="presentation" class="active"><a href="#nojavascriptFormHtml" aria-controls="html" role="tab" data-toggle="tab">Html</a></li>
                                                            <li role="presentation"><a href="#nojavascriptCss" aria-controls="css" role="tab" data-toggle="tab">Css</a></li>
                                                        </ul>

                                                        <!-- Tab panes -->
                                                        <div class="tab-content">
                                                            <div role="tabpanel" class="tab-pane active" id="nojavascriptFormHtml"><br>
                                                                <pre>
<span class="nt">&lt;form</span> <span class="rules"><span class="na">rule-form=</span><span class="s">"validForm"</span></span><span class="nt">></span>
    Name* : <span class="nt">&lt;input</span>  <span class="na">type=</span><span class="s">"text"</span> <span class="na"><span class="s">name=</span>"name"</span>
<span class="rules"><span class="na">rules-input=</span><span class="s">"{active : true, regExp: '.{2,10}', addClass:'border-red'}"</span></span><span class="nt"> /></span>
    <span class="nt">&lt;span</span>  <span class="na">class=</span><span class="s">"error"</span><span class="nt">></span><span class="nt">&lt;/span></span>
    <span class="nt">&lt;br></span><span class="nt">&lt;br></span>
    E-mail* : <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">name=</span><span class="s">"email"</span>
  <span class="rules"><span class="na">rules-input=</span><span class="s">"{active:true, regExp:'\\b[A-Z0-9._%+-]+@[A-Z0-9.-]+\\.[A-Z]{2,4}\\b', addClass:'border-red'}"</span></span><span class="na"> /></span>
    <span class="nt">&lt;br></span><span class="nt">&lt;br></span>
    Website* : <span class="nt">&lt;input</span> <span class="na">type=</span<span class="s">"text"</span> <span class="na">name=</span><span class="s">"website"</span>
  <span class="rules"><span class="na">rules-input=</span><span class="s">"{active : true, regExp: '.{2,10}', addClass:'border-red'}"</span></span><span class="na">></span>
    <span class="nt">&lt;br></span><span class="nt">&lt;br></span>
    Gender* :
    <span class="nt">&lt;div </span> <span class="na">id=</span><span class="s">'radioButton'</span><span class="nt">></span>
        <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"gender"</span> <span class="na">value=</span><span class="s">"female"</span><span class="nt"> /></span>Female
        <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"gender"</span>   <span class="na">value=</span><span class="s">"male"</span>
  <span class="rules"><span class="na"> rules-input=</span><span class="s">"{active: true, name:'gender', errorSelector:'#radioButton > .error'}"</span></span><span class="nt"> /></span>Male
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"error color-red display-none"</span><span class="nt">></span>Select one<span class="nt">&lt;/span></span>
    <span class="nt">&lt;/div></span>
    <span class="nt">&lt;br></span><span class="nt">&lt;br></span>
    <span class="nt">&lt;div</span> <span class="na">id=</span><span class="s">"textArea"</span><span class="nt">></span>
        Comment: <span class="nt">&lt;textarea</span> <span class="na">name=</span><span class="s">"comment"</span> <span class="na">rows=</span><span class="s">"5"</span> <span class="na">cols=</span><span class="s">"40"</span>
<span class="rules"><span class="na">rules-input=</span><span class="s">"{active : true, regExp: '.{2,10}', errorSelector:'#textArea > .error',errorMsg:'Comment empty'}"</span></span><span class="nt">></span><span class="nt">&lt;/textarea></span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"error color-red display-none"</span> <span class="nt">></span><span class="nt">&lt;/span></span>
    <span class="nt">&lt;/div></span>
    <span class="nt">&lt;br></span><span class="nt">&lt;br></span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"submit"</span> <span class="na">name=</span><span class="s">"submit"</span> <span class="na">value=</span><span class="s">"Submit"</span><span class="nt"> /></span>
<span class="nt">&lt;/form></span>
                                                                </pre>
                                                            </div>
                                                            <div role="tabpanel" class="tab-pane" id="nojavascriptCss"><br />
                                                                <pre>
<span class="nt">.border-red{</span>
   <span class="na"> border:</span><span class="s"> 2px solid red;</span>
    <span class="na">-webkit-transition :</span><span class="s"> border 1500ms ease-out;</span>
  <span class="na">  -moz-transition : </span><span class="s">border 1500ms ease-out;</span>
 <span class="na">   -o-transition : </span><span class="s"> border 1500ms ease-out;</span>
<span class="nt">}</span>
<span class="nt">.color-red{</span>
<span class="na">    color:</span><span class="s"> red;</span>
<span class="nt">}</span>
<span class="nt">.display-none{</span>
<span class="na">    display:</span><span class="s">none;</span>
<span class="nt">}</span>
                                                                </pre>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <script src="js/bootstrap.min.js"></script>
                                            <script>
						$("#simpleForm").validForm();
						$("#formModal").validForm();
						$("#formPopover").validForm();
						$("#animationForm").validForm({
						    'animationShow': 'animate',
						    'animationHide': 'animate',
						    'animationOptionShow': {'width': '70%', 'opacity': '1', 'borderWidth': '10px'},
						    'animationOptionHide': {'opacity': '0', 'borderWidth': '0px'}
						});
						$("#callbackForm").validForm({}, function (valid) {
						    if (!valid)
						    {
							$("#messageDanger").fadeIn("slow");
						    }
						    else
						    {
							$("#messageDanger").fadeOut("slow");
						    }
						});
						function messageEmpty(value) {
						    if (!value)
							$("#message").addClass("color-red");
						    else
							$("#message").removeClass("color-red");
						}
						function emailErrorPopover(test) {
						    (!test) ? $("#exampleInputEmail").popover("show") : $("#exampleInputEmail").popover("hide");
						}
						function passWordPopover(test)
						{
						    (!test) ? $("#exampleInputPassword").popover("show") : $("exampleInputPassword").popover("hide");
						}
						function fileErrorPopover(test) {
						    (!test) ? $("#exampleInputFile").popover("show") : $("exampleInputFile").popover("hide");
						}
                                            </script>
                                            <script src="js/style.js"></script>
                                            </body>
                                            </html>
