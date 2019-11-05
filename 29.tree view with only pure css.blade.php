1.tree view light weight with only css
====================================================================
*****

https://www.cssscript.com/minimalist-tree-view-pure-css/

oR use from here 
------------------------------------------------------
1.   tree.css
------------------------------------------------------
body {
    margin:50px;
    font-family:'Arial', sans-serif;
}
*{margin:0;padding: 0;}

h1 {
    color:#FA9A39;
}

p { padding-bottom:50px;}

.content {
    width:500px;
    margin:auto;
}
.tree ul {
    margin-left: 20px;
}

.tree li {
    list-style-type: none;
    margin:10px;
    position: relative;
}

.tree li::before {
    content: "";
    position: absolute;
    top:-7px;
    left:-20px;
    border-left: 1px solid #ccc;
    border-bottom:1px solid #ccc;
    border-radius:0 0 0 0px;
    width:20px;
    height:15px;
}

.tree li::after {
    position:absolute;
    content:"";
    top:8px;
    left:-20px;
    border-left: 1px solid #ccc;
    border-top:1px solid #ccc;
    border-radius:0px 0 0 0;
    width:20px;
    height:100%;
}

.tree li:last-child::after  {
    display:none;
}

.tree li:last-child:before{
    border-radius: 0 0 0 5px;
}

ul.tree>li:first-child::before {
    display:none;
}

ul.tree>li:first-child::after {
    border-radius:5px 0 0 0;
}

.tree li a {
    border: 1px #ccc solid;
    border-radius: 5px;
    padding:2px 5px;
}

.tree li a:hover, .tree li a:hover+ul li a,
.tree li a:focus, .tree li a:focus+ul li a {
    background: #ccc; color: #000; border: 1px solid #000;
}

.tree li a:hover+ul li::after, .tree li a:focus+ul li::after,
.tree li a:hover+ul li::before, .tree li a:focus+ul li::before 
.tree li a:hover+ul::before, .tree li a:focus+ul::before 
.tree li a:hover+ul ul::before, .tree li a:focus+ul ul::before{
    border-color:  #000; /*connector color on hover*/
}

----------------------------------------------
2.
use ul class tree
----------------------------------------------
<ul class="tree">
	<li><a>Parent 1</a></li>
	<li><a>Parent 2</a></li>
	<li>
		<a>Parent 3</a>
		<ul>
			<li>
				<a>1st Child of 3</a>
				<ul>
					<li><a>1st grandchild</a></li>
					<li><a>2nd grandchild</a></li>
				</ul>
			</li>
			<li><a>2nd Child of 3</a></li>
			<li><a>3rd Child of 3</a></li>
		</ul>
	</li>
	<li>
		<a>Parent 4</a>
		<ul><li><a>Parent 4's only child</a></li></ul>
	</li>
</ul>



============================================================================================================
	More tree view list 
============================================================================================================

https://www.jqueryscript.net/blog/Best-Tree-View-Plugins-jQuery.html


