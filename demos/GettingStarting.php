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
    <body class="container" style="margin-bottom: 2%;">

        <div class="row">&nbsp;</div>
        <?php include "alertMessage.php" ?>
        <div class="col-lg-11   ">
            <div class="alert alert-danger display-none " role="alert" id="messageDanger">
                Error size or extension file
            </div>

            <form id="myFormText"> <h3>Text no empty with regEx ".{2,10}" :   </h3>
                <div class="form-group">

                    <label for="">Type Text </label>
                    <input type="text" class="form-control" id="" placeholder=""
                           rules-input="{active:true, regExp:'.{2,10}', addClass:'border-red'}" />
                    <code >
                        &lt;input type="text" class="form-control"  id="" placeholder="" rules-input="{active:true, regExp:'.{2,10}', addClass:'border-red'}" /&gt;
                    </code>
                    <br><label for="">Type password </label>
                    <input type="password" class="form-control" id="" placeholder=""
                           rules-input="{active:true, regExp:'.{2,10}', addClass:'border-red'}">
                    <code>&lt;input type="password" class="form-control" id="" placeholder=""  rules-input="{active:true, regExp:'.{2,10}', addClass:'border-red'}" /&gt;</code>
                    <br><label for="">Type mail with regEx "\\b[A-Z0-9._%+-]+@[A-Z0-9.-]+\\.[A-Z]{2,4}\\b" </label>
                    <input type="mail" class="form-control" id="" placeholder=""
                           rules-input="{active:true, regExp:'\\b[A-Z0-9._%+-]+@[A-Z0-9.-]+\\.[A-Z]{2,4}\\b', addClass:'border-red'}">
                    <code> &lt;input type="mail" class="form-control" id="" placeholder=""
                        rules-input="{active:true, regExp:'\\b[A-Z0-9._%+-]+@[A-Z0-9.-]+\\.[A-Z]{2,4}\\b', addClass:'border-red'}" /&gt;</code>
                    <br><label for="">Type date </label>
                    <input type="date" class="form-control" id="" placeholder=""
                           rules-input="{active:true, regExp:'.{2,10}', addClass:'border-red'}">
                    <code>&lt;input type="date" class="form-control" id="" placeholder=""
                        rules-input="{active:true, regExp:'.{2,10}', addClass:'border-red'}"/&gt;</code>
                    <br><label for="">Type time </label>
                    <input type="time" class="form-control" id="" placeholder=""
                           rules-input="{active:true, regExp:'.{2,10}', addClass:'border-red'}">
                    <code>&lt;input type="time" class="form-control" id="" placeholder=""
                        rules-input="{active:true, regExp:'.{2,10}', addClass:'border-red'}"&gt;</code>

                </div>

                <input type="submit" class="btn btn-default" value="Submit"></input>
            </form>


            <div class="row">&nbsp;</div> <div class="row">&nbsp;</div>

            <h3>Input File :   </h3>
            <div class="alert alert-danger display-none " role="alert" id="messageDangerInput">
                #messageDangerInput :  Error size or extension file
            </div>
            <form id="myFormInput">

                <div class="form-group">
                    <label for="">Insert your curriculum vitae ( .pdf, .doc, .docx ), max size 200 Ko  </label>
                    <input type="file" class="form-control" id="" placeholder="Email"
                           rules-input="{active:true, extensions:'.doc|.docx|.pdf', size:'200000',errorSelector:'#messageDangerInput'}">
                    <code> &lt;input type="file" class="form-control" id="" <br>
                        rules-input="{active:true, extensions:'.doc|.docx|.pdf', size:'200000',errorSelector:'#messageDangerInput'}" /&gt;</code>
                </div>

                <input type="submit" class="btn btn-default" value="Submit"></input>
            </form>

            <div class="row">&nbsp;</div> <div class="row">&nbsp;</div>

            <h3>Input checkbox</h3>
            <form id="myFormCheckbox">
                <div id='checkbox'>
                    <input type="checkbox" rules-input="{active:true, errorSelector:'#checkbox > span',errorMsg:'Is not check.'}"> Check me out<br>
                    <code>&lt;input type="checkbox" rules-input="{active:true, errorSelector:'#checkbox > span',errorMsg:'Is not check.'}" /&gt;</code><br>
                    <span class='error display-none' >&nbsp;</span><br>
                    <input type="submit" class="btn btn-default" value="Submit" />
                </div>
            </form>

            <div class="row">&nbsp;</div> <div class="row">&nbsp;</div>

            <h3>Input radio button</h3>
            <form id="myFormRadio">
                <input type="radio" name="test"  /> Radio1
                <input type="radio" name="test"  /> Radio2
                <input type="radio" name="test"  /> Radio3
                <input type="radio" name="test" rules-input="{active:true,name:'test', errorSelector:'#myFormRadio > span',errorMsg:'Is not check.'}" /> Radio4<br>
                <code>
                    &lt;input type="radio" name="test"  /&gt; Radio1<br>
                    &lt;input type="radio" name="test"  /&gt Radio2<br>
                    &lt;input type="radio" name="test"  /&gt Radio3<br>
                    &lt;input type="radio" name="test" rules-input="{active:true,name:'test', errorSelector:'#myFormRadio > span',errorMsg:'Is not check.'}" /&gt; Radio4

                </code>
                <br><span class='error display-none' >&nbsp;</span><br>
                <input type="submit" class="btn btn-default" value="Submit" />
            </form>

            <h3>Select </h3>
            <form id="myFormSelect">
                <select name="profil" rules-input="{active:true, errorValue:'choose', errorSelector:'#myFormSelect > .error'}">
                    <option value="choose" selected="selected">Choose</option>
                    <option value="option1">option1</option>
                    <option value="option2" >option2</option>
                </select>
                <br><code>
                    &lt;select name="profil" rules-input="{active:true, errorValue:'choose', errorSelector:'#myFormSelect > .error'}">
                    <br>  &lt;option value="choose" selected="selected">Choose&lt;/option>
                    <br>  &lt;option value="option1">option1&lt;/option>
                    <br>  &lt;option value="option2" >option2&lt;/option>
                    <br>&lt;/select>
                </code>
                <br><span class='error display-none' >"Choose" is'nt good</span><br />
                <input type="submit" class="btn btn-default" value="Submit" />
            </form>
            <h3>Textarea </h3>
            <form id="myFormTextarea">
                <span id="message"> Message:</span><br />
                <textarea name="" rows="6" cols="40" rules-input="{active:true, regExp:'.{2,10}', addClass:'border-red'}" ></textarea>
                <br><code>
                    &lt;textarea rows="6" cols="40" rules-input="{ active:true, regExp:'.{2,10}', addClass:'border-red' }" >&lt;/textarea>
                </code><br>
                <input type="submit" class="btn btn-default" value="Submit" />
            </form>
        </div>
    </div>


    <script src="js/bootstrap.min.js"></script>
    <script src="js/style.js"></script>
    <script>
	$("#myFormInput").validForm();
	$("#myFormText").validForm();
	$("#myFormCheckbox").validForm();
	$("#myFormRadio").validForm();
	$("#myFormSelect").validForm();
	$("#myFormTextarea").validForm();
    </script>
</body>