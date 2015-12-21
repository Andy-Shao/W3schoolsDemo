<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
<link rel="stylesheet" href="../../resources/css/note.css"/>
</head>
<body>
<h1>PHP 5 File Handling</h1>
<p>File handling is an important part of any web application. You often need to open and process a file for different tasks.</p>
<h2>PHP Manipulating Files</h2>
<p>PHP has several functions for creating, reading, uploading, and editing files.</p>
<div class="form">
<b>Be careful when manipulating files!</b><br/>
<br/>
When you are manipulating files you must be very careful. You can do a lot of damage if you do something wrong. Common errors are: editing the wrong file, filling a hard-drive with garbage data, and deleting the content of a file by accident.
</div>
<hr/>

<h2>PHP readfile() Function</h2>
<p>The readfile() function reads a file and writes it to the output buffer.</p>
<p>Assume we have a text file called "webdictionary.txt", stored on the server, that looks like this:</p>
<code><pre>
AJAX = Asynchronous JavaScript and XML
CSS = Cascading Style Sheets
HTML = Hyper Text Markup Language
PHP = PHP Hypertext Preprocessor
SQL = Structured Query Language
SVG = Scalable Vector Graphics
XML = EXtensible Markup Language
</pre></code>
<p>The PHP code to read the file and write it to the output buffer is as follows (the readfile() function returns the number of bytes read on success):</p>
<code><pre>
&lt;?php
echo readfile("webdictionary.txt");
?&gt;
</pre></code>
<a href="demo_file_readfile.php">Example</a>
<p>The readfile() function is useful if all you want to do is open up a file and read its contents.</p>
</body>
</html>
