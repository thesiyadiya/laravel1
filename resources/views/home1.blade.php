<!--@include('common.header')-->

<x-message-banner msg="User Login Successsfully" class="success" />
<x-message-banner msg="User signup Successfully" class="success"/>

<br>
<br>
<br>


<x-message-banner msg="Password not correct please try again" class="error" />
<x-message-banner msg="Password not correct please try again" class="warning" />

<h1>home page </h1>
<style>
    .success{
        background:lightgreen;
        color:green;
        padding:3px 10px;
        border-radius:2px;
        display:inline-block;
        margin:10px;
    }

    .error{
        background:#ff000069;
        color:red;
        padding:3px 10px;
        border-radius:2px;
        display:inline-block;
        margin:10px;
    }
    .warning{
        background:#ffa50073;
        color:orange;
        padding:3px 10px;
        border-radius:2px;
        display:inline-block;
        margin:10px;
    }

</style>
<!--@include('common.inner',['page'=>"this is home page"])-->
<!--<!--@includeIf('common.common',['page'=>"this is home page"]) -->-->