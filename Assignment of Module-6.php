<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Assignment of module 6</title>
</head>
<body>

 <form method="post" action="">
     <label>Name:</label>
     <input type="text" name="name" />
     <br />
     <label>Email:</label>
     <input type="text" name="email" />
     <br />
     <label>Password:</label>
     <input type="password" name="password" />
     <br />
     <label>Profile Picture:</label>
     <input type="file" name="profile_picture" />
     <br />
     <input type="submit" value="Submit" />
   </form>
   <?php
  
   
   if (isset($_POST['name']) && isset($_POST['email']) && isset($_FILES['profile_picture'])) {
       $name = $_POST['name'];
       $email = $_POST['email'];
       $profile_picture = $_FILES['profile_picture'];
       
       
       if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
           echo 'Invalid email';
           exit;
       }
       
       
       $filename = time() . '_' . $profile_picture['name'];
       $filepath = 'uploads/' . $filename;
       move_uploaded_file($profile_picture['tmp_name'], $filepath);
       
       
       $data = [$name, $email, $filename];
       $fp = fopen('users.csv', 'a');
       fputcsv($fp, $data);
       fclose($fp);
       
       
       session_start();
       setcookie('name', $name);
   }
   ?>
   
   
   <table>
       <thead>
           <tr>
               <th>Name</th>
               <th>Email</th>
               <th>Profile Picture</th>
           </tr>
       </thead>
       <tbody>
           <?php
           $fp = fopen('users.csv', 'r');
           while ($data = fgetcsv($fp)) {
               echo '<tr>';
               echo '<td>' . $data[0] . '</td>';
               echo '<td>' . $data[1] . '</td>';
               echo '<td><img src="uploads/' . $data[2] . '" /></td>';
               echo '</tr>';
           }
           fclose($fp);
           ?>
       </tbody>
   </table>
 
</body>
</html>