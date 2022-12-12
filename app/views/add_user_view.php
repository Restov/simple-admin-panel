<?php
// echo "<form action='./post' method='post'>";
// echo "<input type='text' name='login' placeholder='Login'>";
// echo "<input type='text' name='password' placeholder='Password'>";
// echo "<input type='text' name='role' placeholder='role'>";
// echo "<input type='submit' value='Add'>";
// echo "</form>";

// bootstrap add user form 
echo "<form action='./post' method='post'>";
echo "<div class='form-group'>";
echo "<label for='login'>Login</label>";
echo "<input type='text' class='form-control' id='login' name='login' placeholder='Login'>";
echo "</div>";
echo "<div class='form-group'>";
echo "<label for='password'>Password</label>";
echo "<input type='password' class='form-control' id='password' name='password' placeholder='Password'>";
echo "</div>";
echo "<div class='form-group'>";
echo "<label for='role'>Role</label>";
echo "<input type='text' class='form-control' id='role' name='role' placeholder='Role'>";
echo "</div>";
echo "<button type='submit' class='btn btn-primary'>Add</button>";
echo "</form>";
