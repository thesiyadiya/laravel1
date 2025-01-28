@include('common.header')
<x-message-banner msg="about user msg"/>

<h1> About Page </h1>

<style>
    .success{
        background:lightgreen;
        color:green;
        padding:3px 10px;
        border-radius:2px;
        display:inline-block;
        margin:10px;
    }
</style>

@include('common.inner',['page'=>"this is about page"])