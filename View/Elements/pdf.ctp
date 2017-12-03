<?php ?>
<style type="text/css">
html, body
{
    margin:0;
    padding: 0;
    font-size: 95%;
}
body
{
  background: url(<?php echo getcwd(); ?>/img/default.png) no-repeat center fixed; 
  -webkit-background-size: cover; /* pour Chrome et Safari */
  -moz-background-size: cover; /* pour Firefox */
  -o-background-size: cover; /* pour Opera */
  background-size: cover; /* version standardisée */
}
.arrond {
    -moz-border-radius: 20px;
    -webkit-border-radius: 10px;
    border-radius:10px;
    border:#000000 solid 1px;
}
.padding{
    padding:5px;
}
.header
{
    color:#808080; font-size:13px; line-height: 20px; text-align: justify;
}
h2 
{
    text-align: center;
    color: #000;
    font-size: 100%;
}
h3
{
    text-align: right;
    color: #ff0000;
    margin-right: 30px;
}
footer {
   position:absolute;
   bottom:0;
   width:100%;
   height:35px;   /* Height of the footer */
   color:#808080; font-size:13px; line-height: 20px; text-align: justify;
}
#page2 p, #page3 p
{
    text-align: justify;
    font-family: "Times New Roman", Georgia, Serif;
    line-height: 23px;
}
</style>