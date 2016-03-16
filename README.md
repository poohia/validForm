ValidForm.js
==
[More documentations](http://validForm.poohia.com)


####ValidForm.js is a jQuery plugin that allows form validation with help from JSON inner HTML tags
<br />
Include validForm.js :

    ```javascript
    <script src="jquery.js" ></script>
    <script src="validForm.js" ></script>

Declare in html :

    ```javascript
    <form rule-form="validForm">
        ......
    <form />
    
Or in javascript :

    ```javascript
    <script> $("#MyForm").validForm(); </script>
               
Declare "rules-input" into input :

    ```javascript
    <input type="text" rules-input="{active:true, regExp:'.{2,10}'}" />
    
<br />
Basic example : 
     
    ```html
    <form rule-form="validForm">
        Name* : <input  type="text" name="name"
    rules-input="{active : true, regExp: '.{2,10}', addClass:'border-red'}" />
        <span  class="error"></span>
        <br><br>
        E-mail* : <input type="text" name="email"
      rules-input="{active:true, regExp:'\\b[A-Z0-9._%+-]+@[A-Z0-9.-]+\\.[A-Z]{2,4}\\b', addClass:'border-red'}" />
        <br><br>
        Website* : <input type="text" name="website"
      rules-input="{active : true, regExp: '.{2,10}', addClass:'border-red'}">
        <br><br>
        Gender* :
        <div  id='radioButton'>
            <input type="radio" name="gender" value="female" />Female
            <input type="radio" name="gender"   value="male"
       rules-input="{active: true, name:'gender', errorSelector:'#radioButton > .error'}" />Male
            <span class="error color-red display-none">Select one</span>
        </div>
        <br><br>
        <div id="textArea">
            Comment: <textarea name="comment" rows="5" cols="40"
    rules-input="{active : true, regExp: '.{2,10}', errorSelector:'#textArea > .error',errorMsg:'Comment empty'}"></textarea>
            <span class="error color-red display-none" ></span>
        </div>
        <br><br>
        <input type="submit" name="submit" value="Submit" />
    </form>
            