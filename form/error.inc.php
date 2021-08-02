<style type="text/css">
* {
  margin: 0;
  padding: 0;
  border: 0;
  font-family: sans-serif;
}

.contact-form {
  background: #ebb3f0;
  padding: 20px;
  max-width: 500px;
  border-radius: 4px;
  font-family: sans-serif;
  color: white;
  margin: 20px auto;
  text-align: left;
}

header {
  text-align: center;
  background: #69366e;
  padding: 20px 0;
}


nav ul li  {
  display: inline;
}

nav a {
  text-decoration: none;
  color: white;
  padding: 5px;

}

.label_input_wrap {
  display: block;
}

.reset input,
.submit input {
  background: #69366e;
  color: white;
  padding: 5px 20px;
  border-radius: 4px;
}

submit:hover {
background: orange;
}


.input-section {
  margin-bottom: 10px;
}

input {
  padding: 5px 10px;
  border-radius: 3px;
}

textarea {
  font-family: sans-serif;
  padding: 9px 10px;
  border-radius: 3px;
}

select {
  width: 185px;
  padding: 8px 0;
  border-radius: 3px;
}

label {
  font-weight: bold;
}

.container {
  max-width: 900px;
  margin: 50px auto 180px;
  text-align: center;
}

body {
  background: #f3e7f3;
}

footer{
  background: #69366e;
  color: white;
  text-align: center;
  padding: 20px 0;
}

.checks {
  display: inline;
  margin: 0 auto;
  text-align: center;
}

img {
  max-width: 200px;
  justify-content: center;
  text-align: center;
}

.logo {
  margin: 0 auto;
  align-items: center;
  justify-content: center;
  text-align: center;
}
</style>

<header>
  <nav>
    <ul>
      <li><a href="index.html">Home</a></li>
      <li><a href="about.html">About Us</a></li>
      <li><a href="contact.html">Contact Us</a></li>
    </ul>
  </nav>
</header>

<div class="container">
	<h1>Missing fields</h1>
	<p>Sorry, you have not completed all of the required fields.</p>
	<p>Please hit <a href="#" onClick="history.go(-1)">back</a> and complete the following required fields.</p>

	<ul>
	<?php
		for($i=0; $i<count($this->missing_required_fields); $i++){
			echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
		}
	?>
	</ul>

	<p><strong><a href="#" onClick="history.go(-1)">Back to form</a></strong></p>
</div>

<footer>
	<img src="images/logo.png" alt="logo">
  <p>This page designed by Warner</p>
</footer>
